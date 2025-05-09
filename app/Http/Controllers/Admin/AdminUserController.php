<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\BankDetail;
use App\Models\KycDetail;
use App\Models\AdminNotification;
use Illuminate\Validation\Rule;
use App\Models\TeamLevel;
use Illuminate\Support\Facades\Storage;
use App\HasUniqueId;


class AdminUserController extends Controller
{
    use HasUniqueId;

    public function __construct()
    {
        
    }

    public function showUserList(Request $request) : View{
        $title = "User Details";
        
        $details = User::where("user_type", 2)->with('sponsor')->get();
        
        return view("admin.user.view", [
            "title"     =>  $title,
            "details"   =>  $details
        ]);
    }

    public function adminAddNotification(Request $request) : View{
        $title = "Admin Add Notification";
        
        $details = AdminNotification::where("id", 1)->first();
        
        return view("admin.notification.add ", [
            "title"     =>  $title,
            "details"   =>  $details
        ]);
    }

    public function addUser(Request $request){
        return $this->addEditUser("", $request);
    }

    public function editUser($id, Request $request){
        return $this->addEditUser($id, $request);
    }

    public function addEditUser($id="", Request $request) {
        if ($id=="") {
            $title = "Add User";
        
            // $details = User::where("user_type", 2)->get();
            
            return view("admin.user.add", [
                "title"     =>  $title,
                // "details"   =>  $details
            ]);
        }else {
            // Logic for editing an existing user
            $title = "Edit User";
            
            // Fetch the user by ID, for example:
            $user = User::find($id);
            if (!$user) {
                return redirect()->route('admin.user.list')->with('error', 'User not found.');
            }
    
            return view("admin.user.edit", [
                "title" => $title,
                "user" => $user
            ]);
        }
    }

    public function userActivation(Request $request) : View{
        $title = "User Activation";
        
        $details= User::where("user_type", '2')->get();

        return view("admin.user.activation", [
            "title"     =>  $title,
            "details"   =>  $details
        ]);
    }

    public function addUserTeamLevel(Request $request){
        $title = "Add User Team Level";
        $details = TeamLevel::all();
        return view("admin.user.team_level.add", [
            "title"     =>  $title,
            "details"   =>  $details
        ]);
    }

    public function addUserSaveTeamLevel(Request $request){
        $request->validate([
            "team_level"    =>  "required"
        ]);
        try {
            $isExist = TeamLevel::all();
            if($isExist){
                $update = TeamLevel::where("id", 1)->update([
                    "team_level"    =>  $request->input("team_level"),
                    "id_alpha"      =>  $request->input("id_alpha") ?? ''
                ]);
                if($update){
                    return back()->with("success", "Records updated Successfully!!!");
                }else{
                    return back()->with("error", "There is some issue on inserting!!!");
                }
            }else{
                $insert= TeamLevel::create([
                    "team_level"    =>  $request->input("team_level"),
                    "id_alpha"      =>  $request->input("id_alpha") ?? ''
                ]);
    
                if($insert){
                    return back()->with("success", "Records inserted successfully !!!");
                }else{
                    return back()->with("errors", "There is some issue on inserting!!!");
                }
            }
        }catch (\Exception $exception) {
            return back()->with("error", $exception->getMessage());
        }
    }

    public function adminShowUserKyc(Request $request) : View{
        $title = "User KYC Details";
        
        $details= KycDetail::with('user')->get();

        return view("admin.user.view_kyc", [
            "title"     =>  $title,
            "details"   =>  $details
        ]);
    }

    // public function downloadSelfie($encryptedSelfieFileName)
    // {
    //     $userId = Auth::id();
    //     echo $filePath = "documents/{$userId}/{$encryptedSelfieFileName}";
    //     // exit;

    //     if (Storage::exists($filePath)) {
    //         return Storage::download($filePath);
    //     }

    //     abort(404, 'File not found.');
    // }

    public function checkAdminLogin(Request $request): RedirectResponse
    {
        try {
            $request->validate([
                "email"     =>  "required",
                "password"  =>  "required",
            ]);

            if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
                $request->session()->regenerate();
                session(['admin' => Auth::user()]);
                return redirect()->route('admin.dashboard')->with('success', 'Login successful!');
            }
    
            return back()->with('error', 'Invalid email or password.');
            return back()->with("error", "There is some issue in inserted or updated");
        } catch (\Exception $exception) {
            return back()->with("error", $exception->getMessage());
        }
    }

    public function userStatusChange($id, $status, Request $request){
        // echo $request
        try {
            if (!filled($id)) {
                return back()->with("error", "User id field is required");
            }

            if (!filled($status)) {
                return back()->with("error", "User id field is required");
            }

            $update = User::where("id", $request->id)->update([
                "status" => $request->status
            ]);

            if($update){
                return back()->with("success", "Status Updated Successfully");
            }
            return back()->with("error", "There is some issue in inserted or updated");
        } catch (\Exception $exception) {
            return back()->with("error", $exception->getMessage());
        }
    }

    public function adminSaveNotification(Request $request){
        $request->validate([
            "notification"  =>  "required",
            "status"        =>  "required"    
        ]);

        try {

            $isExist = AdminNotification::where("id", 1)->first();
            if($isExist){
                $update = AdminNotification::where("id", 1)->update([
                    "notice"    =>  $request->input("notification"),
                    "status"    =>  $request->input("status")
                ]);

                if($update){
                    return back()->with("success", "Cheers Records has been successfully updated...");
                }else{
                    return back()->with("success", "There is some issue on updated...");
                }
            }else{
                $insert= AdminNotification::create([
                    "notice"    =>  $request->input("notification"),
                    "status"    =>  $request->input("status")
                ]);

                if($insert){
                    return back()->with("success", "Successfully Inserted...");
                }else{
                    return back()->with("error", "Therer is some issue on inserting...");
                }
            }
        } catch (\Throwable $exception) {
            return back()->with("error", $exception->getMessage());
        }
    }

    public function adminSaveUser(Request $request): RedirectResponse{
        try {
            $request->validate([
                "sponsor_id"    =>  "required",
                "name"          =>  "required",
                "phone"         =>  "required",
                "email"         =>  [
                    "required",
                    "email",
                    Rule::unique('users', 'email')->ignore($request->input("edit_id"))
                ],
                "password"      =>  $request->filled("password") || !$request->input("edit_id") 
                                    ? ["required", "min:8", "confirmed"]
                                    : ["nullable"], // Make password nullable when editing and not provided
            ]);            

            if ($request->has('edit_id') && $request->filled('edit_id')) {
                $update  = User::where("id", $request->input("edit_id"))->update([
                    "sponsor_id"    => $request->input("sponsor_id"),
                    "name"          => $request->input("name"),
                    "phone"         => $request->input("phone"),
                    "address"       => $request->input("address"),
                    "state"         => $request->input("state"),
                    "zipcode"       => $request->input("zipcode"),
                    "city"          => $request->input("city"),
                ]);

                if ($update) {
                    return back()->with('success', 'Successfully Updated...');    
                }
            }else{
                $insert = User::create([
                    "sponsor_id"    => $request->input("sponsor_id"),
                    "name"          => $request->input("name"),
                    "phone"         => $request->input("phone"),
                    "email"         => $request->input("email"),
                    "password"      => bcrypt($request->input("email")),
                    "user_type"     => '2'
                ]);

                if ($insert) {
                    return back()->with('success', 'Successfully Inserted...');    
                }
            }

            return back()->with("error", "There is some issue in inserted or updated");
        } catch (\Exception $exception) {
            return back()->with("error", $exception->getMessage());
        }
    }

    public function userKYCChange($userid, $status, Request $request){
        try {
            $update = User::where("id", $userid)->update([
                "kyc_status"    =>  $status
            ]);

            if($update){
                return back()->with('success', 'Successfully Updated...');
            }else{
                return back()->with("error", "There is some issue in inserted or updated");
            }
            
        }catch (\Exception $exception) {
            return back()->with("error", $exception->getMessage());
        }
    }
}

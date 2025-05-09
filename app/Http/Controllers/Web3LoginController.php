<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Models\TeamLevel;
use App\HasUniqueId;

class Web3LoginController extends Controller
{
    use HasUniqueId;
    public function handleLogin(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'address' => 'required|string',
            'signature' => 'required|string',
            'message' => 'required|string',
        ]);

        $address = $validated['address'];
        $signature = $validated['signature'];
        $message = $validated['message'];

        // Call Node.js script to verify the signature
        $command = "node " . base_path('node-scripts/verifySignature.js') . " " .
            escapeshellarg($address) . " " .
            escapeshellarg($message) . " " .
            escapeshellarg($signature);


        // Capture both stdout and stderr
        $output = shell_exec($command . " 2>&1");

        file_put_contents(storage_path('logs/web3_signature.log'), $output);

        // Attempt to decode the JSON output
        $result = json_decode($output, true);

        // Check if the output is valid JSON
        if (!$result) {
            return response()->json(['success' => false, 'error' => 'Error in signature verification script.'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        // Debugging: Check the result
        // echo "<pre>";
        // print_r($result);
        // exit;

        // Check if the signature is valid
        if ($result['success']) {
            // Check if the user exists
            $user = User::where('metamask_wallet', $address)->first();
            $id_alpha = TeamLevel::where("id", 1)->first();
            $alpha_num = $id_alpha->id_alpha ?? '';
            if (!$user) {
                // Create a new user if not found
                $user = User::create([
                    "sponsor_id"        =>  '1',
                    "unique_id"         =>  $alpha_num . self::generateUniqueAlphaNum(),
                    'name'              =>  "abhishek",
                    'metamask_wallet'   =>  $address,
                    'email'             =>  'user' . rand(1000, 9999) . '@example.com', // Generate email or leave it blank
                    'password'          =>  Hash::make('defaultpassword'), // Default password
                ]);
            }

            // Log the user in
            Auth::login($user);

            // Return a success response
            return response()->json(['success' => true]);
        } else {
            // Return an error if the signature is invalid
            return response()->json(['success' => false, 'error' => $result['error']], Response::HTTP_UNAUTHORIZED);
        }
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserPackagePurchase;
use App\Models\User;

class PayoutController extends Controller
{
    public function selfPayout(Request $request){
        $title  =   "Self Payout";
        return view("user.payout.self",[
            "title" =>  $title
        ]);
    }

    public function teamPayout(Request $request){
        $title  =   "Team Payout";
        return view("user.payout.team",[
            "title" =>  $title
        ]);
    }

    public function sendDistribution(Request $request){
        $start_date = date("Y-m-d 00:00:00");
        $end_date   = date("Y-m-d 23:59:59");
        $user_pckg_details = UserPackagePurchase::with(['investment', 'package_distributions'])->whereBetween("next_date",[$start_date, $end_date])->get();
        // echo "<pre>";
        // print_r($user_pckg_details);
        foreach ($user_pckg_details as $key => $detail) {
            $data= $this->distribution($detail->user_id, $detail->package_distributions, $detail->investment->amount);
            // echo "<pre>";
            // print_r($data);
            // exit;
        }
    }

    private function distribution($user_id, $level, $amnt){
        // echo count($level); exit;
        if (count($level) > 0) {
            // echo $user_id;
            // print_r($level);
            // echo $amnt;
            foreach ($level as $key => $value) {
                $u_details = User::where("id", $user_id)->first();
                if($u_details){
                    $old_wallet = $u_details->wallet;
                    $calc_amnt= ($amnt*$value->monthly)/100;
                    $new_wallet = $old_wallet+$calc_amnt;

                    $update = User::where("id", $user_id)->update([
                        "wallet"    =>  $new_wallet
                    ]);

                    if ($update) {
                        $user_id = $u_details->sponsor_id;
                    }
                }
            }
        }
    }
}

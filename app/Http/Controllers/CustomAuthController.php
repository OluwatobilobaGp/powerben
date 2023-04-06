<?php

namespace App\Http\Controllers;

use App\Models\inputoutagereading;
use App\Models\inputreading;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class CustomAuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    // public function reloadCaptcha()
    // {
    //     // return response()->json(['captcha'=> captcha_img()]);
    // }

    public function registration()
    {
        return view("auth.registration");
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:7|max:12'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'You have registered successfuly');
        } else {
            return back()->with('fail', 'Something wrong');
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail','Pasword not matches.');
            }
        }else{
            return back()->with('fail','This email is not registered.');
        }
    }

    public function logout(){
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');
        }
    }

    public function dashboard(){
        $data = array();
        if (Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }


    public function account_settings(){
        return view('account_settings');
    }

    public function otukpo(){
        return view('otukpo');
    }

    public function apir(){
        return view('apir');
    }

    // Apir input save Data
    public function ipsaveData($ip_apir_station, $ip_load_date, $ip_hour, $ip_feeder, $ip_load_reading, $ip_energy_reading){
        
        $save = new inputreading();
        $save->station = $ip_apir_station;
        $save->load_date = $ip_load_date;
        $save->hour = $ip_hour;
        $save->feeder = $ip_feeder;
        $save->load_reading = $ip_load_reading;
        $save->energy_reading = $ip_energy_reading;
        $save->save();
        return 'success';
    }

    // Apir Input Outage reading save  Data
    public function ipoutsaveData($ipout_apir_station, $ip_outage_type, $ip_out_feeder, $ip_out_date_out, $ip_out_date_in, $ip_out_time_out, $ip_out_time_in, $ip_out_load_loss){

        $save = new inputoutagereading();
        $save->station = $ipout_apir_station;
        $save->outage_type = $ip_outage_type;
        $save->out_feeder = $ip_out_feeder;
        $save->out_date_out = $ip_out_date_out;
        $save->out_date_in = $ip_out_date_in;
        $save->out_time_out = $ip_out_time_out;
        $save->out_time_in = $ip_out_time_in;
        $save->out_load_loss = $ip_out_load_loss;
        $save->save();
        return 'success';        
    }

    public function yandev(){
        return view('yandev');
    }

    public function VwIpReading(){

        if ($vw_ip_feeder_date = 0) {
            $list = inputreading::select('select * from iputreadings where station = $ip_apir_station && load_date = $vw_ip_feeder_date && feeder = $vw_ip_feeder')->get(); 
        }

        // Fetch Record
        $loadData['data'] = $list;

        echo json_encode($loadData);
        exit;

    }

}

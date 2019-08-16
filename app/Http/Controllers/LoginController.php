<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Credit;
use App\Models\Gateway;
use App\Models\Group;
use App\Models\SmsReport;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Session;

class LoginController extends Controller
{
    public function loginpage()
    {
        return view('login.user.index');
    }

    public function loginCheck(Request $request)
    {
        $request->validate(['email'=>'required|email','password'=>'required']);
        $email=$request->email;
        $password=$request->password;
        $user =User::where('email',$email)->first();
        if($user)
        {
            if(Auth::attempt(['email'=> $email, 'password' => $password]))
            {

//                return 'okk';
                return redirect(route('dashboard'));
                // return view('backend.dashboard.index');
            }


            else{
                Session::flash('password','Email and password donot match');
                return back();

            }

        }
        else
        {

            session::flash('email','Email not found');
            return back();
        }
    }

    public function dashboardpage()
    {
        return view('backend.dashboard.index');
//        if(Auth::user()->role_id != 1){
//            $company_id = Auth::user()->company_id;
//
//            $companyGateways = \App\Models\CompanyGateway::where('company_id', auth()->user()->company_id)->get();
//            foreach ($companyGateways as $companyGateway) {
//                $gatewayIds[] = $companyGateway->gateway_id;
//            }
//            foreach ($gatewayIds as $gatewayId) {
//                foreach (\App\Models\Gateway::where('id', $gatewayId)->get() as $type) {
//                    $gatewayType[] = $type->type;
//
//                }
//            }
//            if (in_array('ncell', $gatewayType)) {
//                $ncellCredits = Credit::where('company_id',$company_id)->get()->first()->ncell;
//            }
//            if (in_array('ntc', $gatewayType)) {
//                $ntcCredits = Credit::where('company_id',$company_id)->get()->first()->ntc;
//            }
//            if (in_array('smart', $gatewayType)) {
//                $smartCredits = Credit::where('company_id',$company_id)->get()->first()->smart;
//            }
//
//            $groups = count(Group::where('company_id',$company_id)->get());
//            $smsReports = count(SmsReport::where('company_id',$company_id)->get());
//
//            $apiToken = \auth()->user()->access_token;
//            return view('backend.dashboard.index',compact('ncellCredits','ntcCredits','smartCredits','groups','smsReports','apiToken'));
//        }
//        else{
//            $companies = count(Company::all());
//            $gateways = count(Gateway::all());
//            return view('backend.dashboard.index',compact('companies','gateways'));
//        }
//
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }


}

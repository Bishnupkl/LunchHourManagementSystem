<?php

namespace App\Http\Controllers;

use App\Food;
use App\KitchenStaff;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KitchenStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kitchen_staff = User::where(['is_kitchen_staff'=> 1])->get();
        return view('backend.pages.kitchen-staff.index',compact('kitchen_staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.kitchen-staff.add-kitchen-staff');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
            'confirmed_password' => 'required|same:password',
            'phone_number' => 'required|numeric|digits:10',
            'address'=>'required'
        ]);

        $input = $request->all();
        $input['is_kitchen_staff']=1;
        $input['is_verified']=1;
        $input['password']=bcrypt($request->password);
        $user = User::create($input);
        if ($user) {
            return redirect('kitchen_staff')->with('message', 'new staff details has beeen created');
        } else {
            return back()->with('message','sorry,new staff details could not be created');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KitchenStaff  $kitchenStaff
     * @return \Illuminate\Http\Response
     */
    public function show($kitchenStaff)
    {
        $staff_details = User::where('is_kitchen_staff', 1)->orWhere('id', $kitchenStaff)->get()->first();
        return view('backend.pages.kitchen-staff.details',compact('staff_details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KitchenStaff  $kitchenStaff
     * @return \Illuminate\Http\Response
     */
    public function edit(KitchenStaff $kitchenStaff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KitchenStaff  $kitchenStaff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$kitchenStaff)
    {
        $kitchenStaff = User::find($kitchenStaff)->update([$request]);
        if ($kitchenStaff) {
            return redirect('kitchen_staff')->with('message', 'Kitchen Staff Details has been upadted');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KitchenStaff  $kitchenStaff
     * @return \Illuminate\Http\Response
     */
    public function destroy($kitchenStaff)
    {
        $kitchenStaff = User::find($kitchenStaff)->delete();
        if ($kitchenStaff) {
            Session::flash('message','staff details deleted successfully');
            return 'true';
        }

    }

    public function manageOrder()
    {
        $orders = Order::all();
        return view('backend.pages.kitchen-staff.manage-order',compact('orders'));

    }

    public function completeOrder(Request $request)
    {
        $order = Order::find($request->id);
        if (!$order->is_completed) {
            $order->is_completed = true;
            $order->save();
            return 'completed';

        }
    }

    public function menuReport()
    {
        $reports = Food::where('is_today_item', true)->orderBy('created_at', 'DESC')->paginate(10);

        return view('backend.pages.report.menu-report', compact('reports'));


    }
}

<?php

namespace App\Http\Controllers;

use App\KitchenStaff;
use App\User;
use Illuminate\Http\Request;

class KitchenStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.kitchen-staff.index');
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
        $input['password']=bcrypt($request->password);
        $user = User::create($input);
        if ($user) {
            return view('backend.pages.kitchen-staff.index');
        } else {
            return back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KitchenStaff  $kitchenStaff
     * @return \Illuminate\Http\Response
     */
    public function show(KitchenStaff $kitchenStaff)
    {
        //
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
    public function update(Request $request, KitchenStaff $kitchenStaff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KitchenStaff  $kitchenStaff
     * @return \Illuminate\Http\Response
     */
    public function destroy(KitchenStaff $kitchenStaff)
    {
        //
    }
}

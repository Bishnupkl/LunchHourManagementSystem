<?php

namespace App\Http\Controllers;

use App\Food;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $total_food = Food::all();
        $orders = Order::where(['is_completed'=>true,'user_id'=>auth()->user()->id])->get();
        return view('backend.pages.order.advance',compact('total_food','orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foodName = Food::find($request->id)->first()->name;
        $userId = $request->user()->id;
        $order = Order::where(['food_name' => $foodName, 'user_id' => $userId])->first();
        if (!$order) {
            Order::create(['food_name' => $foodName, 'user_id' => $userId]);
            return 'ordered';
        }else{
            Order::where(['food_name' => $foodName, 'user_id' => $userId])->delete();
            return 'order canceled';
        }
    }

    public function storeAdvanceOrder(Request $request)
    {
//        dd($request->all());
        $foodName = Food::find($request->food_id)->name;

//        dd($foodName);

        $userId = $request->user()->id;
        $order = Order::where(['food_name' => $foodName, 'user_id' => $userId])->first();
        if (!$order) {

                $order_food=Order::create(['food_name' => $foodName, 'user_id' => $userId,'is_advance'=>true]);
                if ($order_food){
                    return back()->with('message', 'Order Succesfull');
                }else{
                    return back()->with('message', 'Order UnSuccesfull');

                }
        }else{
            return back()->with('message', 'Allready ordered');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}

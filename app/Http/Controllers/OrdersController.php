<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

use App\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class OrdersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $orders = Order::all();

        return view('backEnd.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Order::create($request->all());

        Session::flash('message', 'Order added!');
        Session::flash('status', 'success');

        return redirect('orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);

        return view('backEnd.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);

        return view('backEnd.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $order = Order::findOrFail($id);
        $order->update($request->all());

        Session::flash('message', 'Order updated!');
        Session::flash('status', 'success');

        return redirect('admin/orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);

        $order->delete();

        Session::flash('message', 'Order deleted!');
        Session::flash('status', 'success');

        return redirect('admin/orders');
    }

    public function makeOrder(){

        if(Auth::check()){

            if(isset($_GET['tx'])) {

                $amount = Input::get('amt');
                $currency = Input::get('cc');
                $transaction = Input::get('tx');
                $status = Input::get('st');
                $language = Input::get('lang');
                $product = Input::get('product');
                

Order::create(['name'=>Auth::user()->name,'product'=>$product,'delivery_address'=>Auth::user()->address,'language'=>$language,'order_transaction'=>$transaction,'order_currency'=>$currency,'order_status'=>$status]);

Session::flash('message', 'Thank you for buying ! Your order will be shipped soon !');

            return redirect('/');

            

            }
            
        } else {

            Session::flash('message', 'You have to be registered user to buy an item');

            return redirect('/');
            
            
        }
    }

}

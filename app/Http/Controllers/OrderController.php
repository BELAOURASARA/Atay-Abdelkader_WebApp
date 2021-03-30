<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show()
    {

        $orders = DB::table('orders')->orderbyDesc('created_at')->get();

        return view('pages.order', ['orders' => $orders]);
 
    }
    public function update($id)
    {
        $status=DB::table('orders')->whereId($id)->select('status')->get();
        $st= $status[0]->status;
        if($st=="En Attente") {
        	$newst="Prête";
        }
        else
        {
        	$newst="Facturée";
        }
        DB::table('orders')->whereId($id)->update(['status'=>$newst]);
        return redirect('/order');
    }
}

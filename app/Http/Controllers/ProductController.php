<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $products = DB::table('products')->get();

        return view('pages.product', ['products' => $products]);
    }

    public function create(Request $request)
    {
        DB::table('products')->insert([
            'name' => $request->input('nom'),
            'description' => $request->input('description'),
            'bar_code' => $request->input('code_barre'),
            'price' => $request->input('prix'),
            'quantity' => $request->input('quantity'),
            'seuil' => $request->input('seuil'),
        ]);
        
        
        return redirect('/product');

        
    }
    public function update(Request $request, $id)
    {
        DB::table('products')->where('id',$id)->update([
            'name' => $request->input('nom'),
            'description' => $request->input('description'),
            'bar_code' => $request->input('code_barre'),
            'price' => $request->input('prix'),
            'quantity' => $request->input('quantity'),
            'seuil' => $request->input('seuil'),
        ]);

        if($request->input('quantity') <= $request->input('seuil'))
        {
           DB::table('notifications')->insert([
            'description' => "Atteinte du seuil de rupture de stock pour le produit ".$request->input('nom'),
            'status' =>"1",
            'created_at' => now()
        ]); 
        }
        return redirect('/product');

        
    }
      public function delete($id)
    {
        DB::table('products')->where('id',$id)->delete();
        return redirect('/product');
    }
}
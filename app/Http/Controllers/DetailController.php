<?php

namespace App\Http\Controllers;

use App\Detail;
use App\Purchase;
use App\Product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($id){
    	$products= Product::all();
    	$purchase = Purchase::find($id);
    	return view('details.index',compact('purchase','products'));
    }

    public function store(Request $request){
    	$detail = new Detail();
        $detail->purchase_id=$request->input('purchase_id');
        $detail->product_id=$request->input('product_id');
        $detail->quantity=$request->input('quantity');
        $detail->cost=$request->input('cost');
        $detail->total_cost=$request->input('total_cost');
        $detail->save();

        $purchase = Purchase::find($request->input('purchase_id'));
        $purchase->status=$request->input('status');
        $purchase->save();

        return redirect()->route('purchases.index');
    }

    public function indexc(){        
        $purchases= Purchase::all()->where('status','CANCELLED')->sortByDesc('id');
        return view('purchases.cancelled',compact('purchases'));
    }
    public function indexr(){        
        $purchases= Purchase::all()->where('status','RECEIVED')->sortByDesc('id');
        return view('purchases.received',compact('purchases'));
    }
}

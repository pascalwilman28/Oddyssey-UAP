<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class TransactionAPIController extends Controller
{
    public function transaction(Request $request){
        return response()->json([
            'data' => Cart::
                    where('userId','=',$request->user()->id)
                    ->where('purchased_at','!=',NULL)
                    ->get(),
        ]);
    }
}

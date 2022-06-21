<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(){
        if(is_null(Auth::user())) return view('auth.login');
        $Cart = Cart::where('userId','=',Auth::user()->id)
                        ->where('purchased_at','=',NULL)
                        ->orderBy("created_at", "desc")
                        ->get();
        
        $CartCount = Cart::where('userId','=',Auth::user()->id)
                        ->where('purchased_at','=',NULL)
                        ->count();

        $totalPrice = Cart::select('games.price')
                        ->leftJoin('games', 'carts.gameId', '=', 'games.id')
                        ->where('carts.userId','=',Auth::user()->id)
                        ->where('carts.purchased_at','=',NULL)
                        ->sum('games.price');

        return view('cart', ["cartList"=>$Cart,
                            "cartCount" => $CartCount,
                            "totalPrice" => $totalPrice]);
    }

    public function addCart(Request $request){
        $gameId = $request->input('gameId');
        $findItem = Cart::where('userId','=',Auth::user()->id)
                    ->where('gameId','=',$gameId)
                    ->where('purchased_at','=',NULL)
                    ->count();

        if($findItem > 0){
            return redirect()->back()->with('message', 'This Game already add to cart');
        }else{
            $cart =Cart::create([
                'gameId' => $gameId,
                'userId' => Auth::user()->id,
            ]);

            $cart->save();

            return redirect('/cart')->with('message', 'Add Game to Cart Success');
        }
    }

    public function checkout(){
        Cart::where('userId','=',Auth::user()->id)
            ->where('purchased_at','=',NULL)
            ->update([
                'purchased_at' => Carbon::now(),
            ]);

        return redirect('/cart')->with('message', 'Checkout Success');
    }

    public function removeCart($id){
        Cart::where('id','=',decrypt($id))->delete();
        return redirect('/cart')->with('message', 'Remove Cart Success');
    }

}

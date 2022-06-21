<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{   
    public function addReview(Request $request){
        $request->validate([
            'review' => 'required',
            'descReview' => 'required|min:10',
        ],[
            'review.required' => 'Please Choose one option, Thank You.',
            'descReview.required' => 'Please fill the description review'
        ]);

        $gameId = $request->input('gameId');
        $findReview = Review::where('userId','=',Auth::user()->id)
                    ->where('gameId','=',$gameId)
                    ->count();

        if($findReview > 0){
            return redirect()->back()->with('message', 'You have given a review of this game');
        }else{
            $review =Review::create([
                'gameId' => $gameId,
                'userId' => Auth::user()->id,
                'review' => $request->input('review'),
                'descReview' => $request->input('descReview'),
            ]);

            $review->save();

            return redirect()->back()->with('reviewsuccess', 'Thank you for your review');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Games;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManageGameController extends Controller
{
    public function index(){
        $gameList = Games::orderBy('updated_at','desc')->paginate(10);
        return view('admin.managegame', ["Games"=>$gameList]);
    }

    public function addGame(){
        $category = Categories::all();
        return view('admin.addgame', ["Category"=>$category]);
    }

    public function updateGame($id){
        $gamefind = Games::find(decrypt($id));
        $category = Categories::where('id','!=',$gamefind->categoryId)->get();
        return view('admin.updategame', ["Games"=>$gamefind, "Category"=>$category]);
    }

    public function deleteGameProcess($id){
        $findGame = Games::find(decrypt($id));

        if($findGame){
            Storage::deleteDirectory('/public/game/'.$findGame->title);
            $findGame->delete();

            return redirect('/admin/managegame')->with('message', 'Delete Game Success');
        }

        return redirect('/admin/managegame')->with('message', 'Delete Game Failed');
        
    }

    public function addGameProcess(Request $request){
        $request->validate([
            //unique:table,coloumn
            'title' => 'required',
            'categoryId' => 'required',
            'price' => 'required|numeric',
            'thumbnail' => 'required|image|mimes:jpg,jpeg,svg,png|max:2048',
            'slide' => 'min:3', //validasi arraynya
            'slide.*' => 'required|image|mimes:jpg,jpeg,svg,png', //validasi elemennya
            'description' => 'required|min:10',
        ],[
            'slide.min' => 'Minimum 3 Slide Image to Upload'
        ]);

        $title = $request->input('title');
        $game_path = 'game/'.$title.'/';
        $thumbnail = $request->file('thumbnail');

        //Thumbnail
        $thumbnail_name = 'header.'.$thumbnail->extension();
        $thumbnail->storeAs('public/'.$game_path, $thumbnail_name);

        //Slider
        if($request->has('slide'))
        {
            $num = 1;
            foreach($request->file('slide') as $file)
            {   
                $name = 'img_'.$num.'.'.$file->extension();
                $file->storeAs('public/'.$game_path, $name); 
                $num += 1;
            }

            //Save Data
            Games::create([
                'title' => $title,
                'categoryId' => $request->input('categoryId'),
                'price' => $request->input('price'),
                'game_image' => $game_path,
                'description' => $request->input('description'),
            ])->save();

            
        }

        return redirect('/admin/managegame')->with('message', 'Add Game Success');
    }

    public function updateGameProcess(Request $request){
        $request->validate([
            //unique:table,coloumn
            'title' => 'required',
            'categoryId' => 'required',
            'price' => 'required|numeric',
            'thumbnail' => 'required|image|mimes:jpg,jpeg,svg,png|max:2048',
            'slide' => 'min:3', //validasi arraynya
            'slide.*' => 'required|image|mimes:jpg,jpeg,svg,png', //validasi elemennya
            'description' => 'required|min:10',
        ],[
            'slide.min' => 'Minimum 3 Slide Image to Upload'
        ]);

        $title = $request->title;
        $game_path = 'game/'.$title.'/';

        if($request->has('thumbnail')){
            $thumbnail = $request->file('thumbnail');
    
            //Thumbnail
            $thumbnail_name = 'header.'.$thumbnail->extension();
            $thumbnail->storeAs('public/'.$game_path, $thumbnail_name);
        }

        //Slider
        if($request->has('slide'))
        {
            $num = 1;
            foreach($request->file('slide') as $file)
            {   
                $name = 'img_'.$num.'.'.$file->extension();
                $file->storeAs('public/'.$game_path, $name); 
                $num += 1;
            }
        }

        $findGame = Games::find($request->gameId);

        //Delete folder yang tidak dipakai
        if($title !== $findGame->title){
            Storage::deleteDirectory('/public/game/'.$findGame->title);
        }

         //Update Data
         Games::where('id','=',$request->gameId)
         ->update([
             'title' => $title,
             'categoryId' => $request->categoryId,
             'price' => $request->price,
             'game_image' => $game_path,
             'description' => $request->description,
         ]);

        return redirect('/admin/managegame')->with('message', 'Update Game Success');
    }
}

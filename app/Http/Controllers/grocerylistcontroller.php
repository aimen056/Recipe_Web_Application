<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grocerylist;


class grocerylistcontroller extends Controller
{
    /*public function index(){
        return view('/');
    }*/
    public function grocery() {
        $groceryLists = grocerylist::where('is_complete', 0)->get();
        return view('welcome', ['groceryLists' => $groceryLists]);
    }

    public function markComplete($id){
        $groceryitem = grocerylist::find($id);
        $groceryitem->is_complete= 1;
        $groceryitem->save();
        \Log::info($id);
        return redirect('/');    
    }


    public function saveItem(Request $request){
        $request->validate([
            'groceryitem' => 'required|string|max:255',
        ]);

        $newgroceryitem = new grocerylist;
        $newgroceryitem->name = $request->groceryitem;
        $newgroceryitem->is_complete = 0;


        $newgroceryitem->save();

        return redirect('/');
    }
}
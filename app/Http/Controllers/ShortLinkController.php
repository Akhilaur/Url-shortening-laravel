<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ShortLink;

class ShortLinkController extends Controller
{
    public function index()   {
         $shortLinks = ShortLink::get();
         return view('shortenLink', compact('shortLinks'));

    }
    public function store(Request $request)  {
        $request->validate([
            'link' => 'required|url'
              ]);
        $input['link'] = $request->link;
        $input['code'] = Str::random(6);
         ShortLink::create($input);
          return redirect('generate')
        ->with('success', 'Shorten Link Generated Successfully!');
   }


    public function shortenLink($code){
        $find = ShortLink::where('code', $code)->first();
        
         return redirect($find->link);

    }
    public function edit(ShortLink $link){
        return view('shortenLinkEdit',['link' => $link]);
    }
    public function update(ShortLink $link,Request $request){
        $data = $request->validate([
            'link' => 'required|url'
              ]);
              $link->update($data);
              return redirect('generate')->with('success','Link Updated Successfully');


    }
    public function delete(ShortLink $link){
        $link ->delete();
        return redirect('generate')->with('success','Link Deleted Successfully');
    }


}
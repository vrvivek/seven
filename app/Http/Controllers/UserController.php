<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //

    public function index()
    {

        $data= ['name' => 'alone' ,'email' => 'alone@gmail.com' , 'password' => '123'];
        //User::create($data);

        // $user = new User();
        // $user->name = "vivekVR";
        // $user->email = "vivekVR@gmail.com";
        // $user->password = bcrypt( "123");
        // $user->save();

        //User::where('id',6)->delete();



        $users = User::all();
        return $users;

        # code...
        //DB::insert('insert into users (name,email,password) values (?,?,?)',['vivek','vivek@gmail.com','123']);

        // $users = DB::select('select * from users');
        // return $users;

        //$upd = DB::update('update users set name = ? where id = ?',["VivekVR",1]);

        //DB::delete('delete from users where id = 1')
        return view('home');
    }

    public function uploadImage(Request $request)
    {
        if($request->hasFile('image')){
            $filename=$request->image->getClientOriginalName();
            if(auth()->user()->image)
            {
                //Storage::disk('public')->delete('images/'.auth()->user()->image);
                Storage::delete('/public/images/'.auth()->user()->image);
            }
            $request->image->storeAs('images',$filename,'public');
            auth()->user()->update(['image'=>$filename]);
            //$request->session()->flash('message','Image Uploaded');
            return redirect()->back()->with('message','Image Uploaded');
        }
        else
        {
            //$request->session()->flash('error','Image Not Uploaded');
            return redirect()->back()->with('error','Image Not Uploaded');
        }

    }
}

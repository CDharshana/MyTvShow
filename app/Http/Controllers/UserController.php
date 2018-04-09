<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public function tvshow(){
        return view('tvshow');
    }

    public function tvshow1(){
        return view('tvshow1');
    }

    public function movie(){
        return view('movie');
    }

    public function movie1(){
        return view('movie1');
    }

    public function got(){
        return view('tvShows.GOT');
    }

    public function breakingBad(){
        return view('tvShows.BB');
    }

    public function prisonBreak(){
        return view('tvShows.PB');
    }

    public function welcome(){
        return view('welcome');
    }

    public function hundred(){
        return view('tvShows.hundred');
    }

    public function BadLands(){
        return view('tvShows.IntoTheBadLands');
    }

    public function walkingDead(){
        return view('tvShows.walkingDead');
    }
    public function sherLock(){
        return view('tvShows.sherLock');
    }
    public function homeLand(){
        return view('tvShows.homeLand');
    }

    public function lost(){
        return view('tvShows.lost');
    }

    public function shannara(){
        return view('tvShows.shannara');
    }

    public function narnia(){
        return view('movies.narnia');
    }

    public function hobbit(){
        return view('movies.hobbit');
    }

    public function harryPotter(){
        return view('movies.harryPotter');
    }

    public function twilight(){
        return view('movies.twilight');
    }

    public function Allegiant(){
        return view('movies.Allegiant');
    }

    public function jhonWick(){
        return view('movies.jhonWick');
    }

    public function ipMan(){
        return view('movies.ipMan');
    }

    public function RegisterUser(Request $request){


        $this->validate($request,[
            'full_name'=> 'required|max:50',
            'user_name'=> 'required|max:20',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5'
        ]);

        $table =new User();

       $table->full_name= $request->input('full_name');
       $table->user_name=$request->input('user_name');
       $table->email=$request->input('email');
       $table->password=bcrypt($request->input('password'));

       $table->save();
       return redirect()->back()->with('message','Account Created Successfully');
    }

        public function LoginUser(Request $request){

            $data = $request->only('user_name','password');
            if(Auth::attempt($data)){
                return redirect()->route('welcome');
            }
            return redirect()->back()->with('message','Login failed');
        }

        public function logout(){
            Auth::logout();
            Session::flush();
            return redirect('/')->with('message','Logged out');
        }



}

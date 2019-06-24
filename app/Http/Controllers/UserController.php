<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    


  
    public function store(Request $request)
    {
         
         if(!User::where("email",$request->email)->get()->isEmpty()){
            return json_encode(array("error"=>"Email is already registered"));
         }
        $user = new User;
        
        $user->id = $request->input('id');
        $user->email = $request->input('email');
        $user->password =$request->input('password');
        $user->name = $request->input('name');
        $user->company = "undefined";
        $user->city = "undefined";
        $user->phone = "undefined";
        $user->position ="undefined";
        $user->department ="undefined";

        

         if($user->save()){
            return new UserResource($user);

         }

        
    }

    public function edit(Request $request){
        $user = User::findOrFail($request->id);
        $user->id = $request->input('id');
        $user->email = $request->input('email');
        $user->name = $request->input('name');
        $user->company = $request->input('company');
        $user->city = $request->input('city');
        $user->phone = $request->input('phone');
        $user->position =$request->input('position');
        $user->department =$request->input('department');

        

         if($user->save()){
            return new UserResource($user);

         }
    }

    public function show(Request $request)
    {   
         $user = User::where("email",$request->email)->get();
         if(!$user->isEmpty()){
             $user=json_decode($user)[0];
            if($request->password === $user->password){
                return new UserResource($user);
            }
         }
        

         return json_encode(array("error"=>"No user found"));
        
        
    }

    



    public function destroy($id)
    {
        //
    }
}

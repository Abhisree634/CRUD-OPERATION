<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function home(){
        // $users = User::all();    //select * from users
        // $users = User::find(1); //select * from users where user_id = 1;
        $users = User::withTrashed()->active()->latest()->limit(20)->get();
        // return $users;
        return view('home', compact('users'));
    }
    
    public function create(){
        return view('users.create');
    }
       
    public function save(){
  
            user::create([
                'name' =>request ('name'),
                'email'=>request ('email'),   //field
                'date_of_birth'=>request ('date_of_birth'),    //muteated
                'status'=> request ('status'),
            ]);
    
            // $user =User::firstOrcreate([
            //     'email'=>request('email')
            // ], [
            //     'name' =>request ('name'),
            //     'date_of_birth'=> request ('date_of_birth'),
            //     'status'=> request ('status'),
            // ]);

            User::updateOrcreate([
                'email'=>request('email')
            ], [
                'name' =>request ('name'),
                'date_of_birth'=> request ('date_of_birth'),
                'status'=> request ('status'),
            ]);
            return redirect()->route('Home')
            ->with('message','User Created Successfully!!!');  //data flashing
    }

    public function edit($id){       
        $user = User::find(decrypt($id));
        // return $user;
        return view('users.edit',compact('user'));
    }
    public function update(){
        $id= decrypt(request('id'));
        $user = User::find($id);
        $user->update([
            'name' =>request ('name'),
            'email'=>request ('email'),
            'date_of_birth'=> request ('date_of_birth'),    //muteated
            'status'=> request ('status'),
        ]); 

                    
        return redirect()->route('Home')
                ->with('message','User Updated Successfully !!');
    }

    public function delete($id){
        User::find(decrypt($id))->delete();
        return redirect()->route('Home')->with('message','User Deleted Successfully !!');
    }
    public function forceDelete($id){
        User::find(decrypt($id))->forceDelete();
        return redirect()->route('Home')->with('message','User ForceDeleted Successfully !!');
    }

    public function activate($id){
       $user= User::withTrashed()->find(decrypt($id));
       $user->restore();
       return redirect()->route('Home')->with('message','User Activated Successfully !!');
        
    }
}
 


            
<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.users.userlist', [
            'users' => $users
        ]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view ('admin.users.edit', [
            'user' => $user
        ]);
    }

    public function update ($id, Request $request)
    {
       // $id = Auth::user()->id; 

        $validation = Validator::make($request->all(), [
            'name' => 'required|min:4|max:20',
            'email' => 'required|email|unique:users,email,'.$id.',id',
            'phone' => 'required|numeric|min:8',
            'diplome' => 'required',
            'experience' => 'required',
            'salary' => 'required|numeric',
            'age' => 'required|numeric',
            'jobTitle' => 'required|string',
            'description' => 'required|string'
            //'facebook' => 'url',
            //'twitter' => 'url',
            //'linkedin' => 'url',
            //'instagram' => 'url'
            //'image' => 'mimes:png,jpg,jpeg,svg|max:2000'
        ]);

        if($validation->passes())
        {

            $user = User::find($id);

            $user ->name = $request->name;
            $user ->email = $request->email;
            $user ->phone = $request->phone;
            //$user ->image = $request->image;
            $user ->diplome = $request->diplome;
            $user ->experience = $request->experience;
            $user ->salary = $request->salary;
            $user ->description = $request->description;
            $user ->age = $request->age;
            $user ->jobTitle = $request->jobTitle;
            //$user ->facebook = $request->facebook;
            //$user ->twitter = $request->twitter;
            //$user ->linkedin = $request->linkedin;
            //$user ->intragram = $request->instagram;
            
            $user->save();

            /*$image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = $id.'-'.time().'-'.$ext;
            $image->move(public_path('/profil_pic'), $imageName);
    
            User::where('id', $id)->update(['image' => $imageName]); */

            return redirect()->route('admin.users.userlist')->with('success', 'Users informations updated');

        } else {
            return back()->withErrors($validation);
        }
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        if ($user == null)
        {
            return back()->with('error', 'Impossible de supprimer cet utilisateur');
        }

        $user->delete();
        return redirect()->route('admin.users.userlist')->with('success', 'Luser a été supprimée avec succès'); 
    }
}

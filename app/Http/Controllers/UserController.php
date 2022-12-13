<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users=response()->json(User::all());
        return $users;
    }

    public function show($id)
    {
        $user=response()->json(User::find($id));
        return $user;
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('/user/list');
    }

    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->VIP=$request->VIP;
        $user->password=$this->updatePassword($request, $user->id);;
        $user->save();
        return redirect('/user/list');
    }

    public function store(Request $request)
    {
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->VIP=$request->VIP;
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect('/user/list');
    }

    public function newView()
    {
        $user=User::all();
        return view('user.new', ['user'=>$user]);
    }

    public function editView($id)
    {
        $user=User::find($id);
        return view('user.edit', ['user'=>$user]);
    }

    public function listView()
    {
        $user = User::all();
        return view('user.list', ['user' => $user]);
    }

    public function updatePassword(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "password" => 'string|min:5|max:20'
        ]);
        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()->all()], 400);
        }
        $user = User::where("id", $id)->update([
            "password" => Hash::make($request->password),
        ]);
        return response()->json(["user" => $user]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users =  User::all();
        return $users;
    }

    public function show($id)
    {
        $user = User::find($id);
        return $user;
    }

    public function destroy($id)
    {
        User::find($id)->delete();
    }
    /*public function store(Request $request) 
    { 
        $users = new User(); 
        $users ->name = $request->name;
        $users ->email = $request->email;
        $users ->password = $request->password;
        $users ->telefonszam = $request->telefonszam;
        $users ->varos = $request->varos;
        $users ->cim = $request->cim;
        $users ->hirlevel = $request->hirlevel;
        $users ->jogosultsag = $request->jogosultsag;
        $users ->email_verified_at = $request->email_verified_at;
        $users ->current_team_id = $request->current_team_id;
        $users ->profile_photo_path = $request->profile_photo_path;
        $users->save(); 
    } 

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users ->name = $request->name;
        $users ->email = $request->email;
        $users ->password = $request->password;
        $users ->telefonszam = $request->telefonszam;
        $users ->varos = $request->varos;
        $users ->cim = $request->cim;
        $users ->hirlevel = $request->hirlevel;
        $users ->jogosultsag = $request->jogosultsag;
        $users ->email_verified_at = $request->email_verified_at;
        $users ->current_team_id = $request->current_team_id;
        $users ->profile_photo_path = $request->profile_photo_path;
        $users ->save();
    }
    */
}

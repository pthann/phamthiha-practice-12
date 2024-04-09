<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    
    public function getAllUser(){
        $users=DB::table('users')->get();
        return $users;
    }
    public function addUser($data){
        $addUser=DB::table('users')->insert($data);
        return $addUser;
    }
    public function showUser($id){
        $getUser=DB::table('users')->where('id',$id)->get();
        return $getUser;
    }
    public function updateUser($id, $data){
        $updateUser=DB::table('users')->where('id', $id)->update($data);
        return $updateUser;
    }
    public function delele($id){
        $destroyUser= DB::table('users')->where('id', $id)->delete();
        return $destroyUser;
    }
}
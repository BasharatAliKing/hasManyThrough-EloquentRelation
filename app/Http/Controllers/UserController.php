<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users=User::with('posts')->with('country')->get();
       // return $user;
    //  return $users->posts;
    echo "<h1>Users Here: </h1>";
         foreach($users as $user){
            echo $user->name . "  |  " . $user->email . "<br>";
            foreach($user->posts as $post){
                echo "<h2>Posts Here: </h2>";
                echo $post->title . " | " . $post->description . '<br>';
                echo "<hr>";
            }
        }
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}

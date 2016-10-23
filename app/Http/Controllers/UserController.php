<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use \RandomUser;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usercreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['number' => 'bail|required|numeric|min:1|max:15']);

        $generator = new \RandomUser\Generator();

        $userCount = $request->input('number');
        $users = $generator->getUsers($userCount);
        #echo count($users);
        #echo '<pre>'; print_r($users); echo '</pre>';

        if ($userCount == 1) {
            $userCount .= ' Random User';
        } else {
            $userCount .= ' Random Users';
        }

        $userOutputArray = array();

        foreach($users as $user) {
            array_push($userOutputArray, '<ul class="useroutput">');
            array_push($userOutputArray, '<li>Name: '.$user->getFirstName().' '.$user->getLastName().'</li>');
            array_push($userOutputArray, '<li>Email: '.$user->getEmail().'</li>');
            array_push($userOutputArray, '<li>Username: '.$user->getUsername().'</li>');
            array_push($userOutputArray, '<li>Password: '.$user->getPassword().'</li>');
            array_push($userOutputArray, '</ul>');
        }

        $userOutput = implode("", $userOutputArray);

        \Session::flash('userCount', $userCount);
        \Session::flash('userOutput', $userOutput);

        return redirect('/user-generator');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

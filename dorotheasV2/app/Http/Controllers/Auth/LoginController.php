<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\SessionFlash;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CourseController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);

        $user = User::findUserByUsername($data['username']);

        if(! $user) {
            SessionFlash::createMessage(['Usuário não encontrado'], 'alert-danger');

            return redirect()->route('home', ['error' => 'user-not-found'])->withInput($request->all());
        }

        if (Crypt::decrypt($user->password) != $data['password']) {
            SessionFlash::createMessage(['Senha não coincide'], 'alert-danger');

            return redirect()->route('home', ['error' => 'password-does-not-match'])->withInput($request->all());
        }

        Session::put('login', [
            'id' => $user->id,
            'username' => $user->username,
        ]);

        return redirect()->action([CourseController::class, 'index']);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginStudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:student');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function LoginStudent(Request $rq)
    {
        $this->validate($rq,
        [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('student')->attempt(['email' => $rq->email, 'password' => $rq->password])) {
            return redirect()->intended(url('administrator'));
        }
        return redirect()->back()->withInput($rq->only('email', 'remember'));
    }
}

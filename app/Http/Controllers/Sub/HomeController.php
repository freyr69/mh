<?php

namespace Mistress\Http\Controllers\Sub;

use Auth;
use Mistress\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('sub_only');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('sub.home', ['dom' => $user->dom, 'mood' => $user->mood->mood]);
    }

}

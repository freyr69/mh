<?php

namespace Mistress\Http\Controllers\Dom;

use Auth;
use Mistress\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('dom_only');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('dom.home', ['sub' => $user->sub, 'mood' => $user->sub->mood->mood]);
    }

}

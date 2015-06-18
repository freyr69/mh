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
        $mood = $user->sub->mood->mood;
        $sub = $user->sub;
        $tasks = $user->sub->tasks;
        $punishments = $user->sub->punishments;
        $timers = $user->sub->timers;
        $counts = $user->sub->counts;
        $confessions = $user->sub->confessions;

        return view('dom.home', [
            'sub' => $sub,
            'mood' => $mood,
            'tasks' => $tasks,
            'punishments' => $punishments,
            'timers' => $timers,
            'counts' => $counts,
            'confessions' => $confessions,
        ]);
    }

}

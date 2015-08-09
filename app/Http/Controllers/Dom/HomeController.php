<?php

namespace Mistress\Http\Controllers\Dom;

use Auth;
use Mistress\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{

    /**
     *
     * @var Mistress\User
     */
    protected $sub;

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
        $sub                 = $this->getSub();
        $mood                = $this->getMood();
        $tasks               = $this->getTasks();
        $punishments         = $this->getPunishments();
        $assignedPunishments = $this->getAssignedPunishments();
        $timers              = $this->getTimers();
        $counts              = $this->getCounts();
        $confessions         = $this->getConfessions();

        return view('dom.home', [
            'sub'                 => $sub,
            'mood'                => $mood,
            'tasks'               => $tasks,
            'assignedPunishments' => $assignedPunishments,
            'punishments'         => $punishments,
            'timers'              => $timers,
            'counts'              => $counts,
            'confessions'         => $confessions,
        ]);
    }

    protected function getAssignedPunishments()
    {
        $punishments = $this->getSub()->punishments()->where('complete', false)->take(10)->get();
        return $punishments;
    }

    protected function getConfessions()
    {
        $confessions = $this->getSub()->confessions()->unconfirmed()->take(10)->get();
        return $confessions;
    }

    protected function getCounts()
    {
        $counts = $this->getSub()->counts()->take(10)->get();
        return $counts;
    }

    protected function getMood()
    {
        return $this->getSub()->mood->mood;
    }

    protected function getPunishments()
    {
        $punishments = $this->getSub()->punishmentList;
        return $punishments;
    }

    protected function getSub()
    {
        if (null === $this->sub) {
            $this->sub = Auth::user()->sub;
        }
        return $this->sub;
    }

    protected function getTasks()
    {
        $tasks = $this->getSub()->tasks()->take(10)->get();
        return $tasks;
    }

    protected function getTimers()
    {
        $timers = $this->getSub()->timers()->take(10)->get();
        return $timers;
    }

}

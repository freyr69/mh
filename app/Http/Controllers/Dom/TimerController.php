<?php

namespace Mistress\Http\Controllers\Dom;

use Auth;
use Carbon\Carbon;
use Flash;
use Input;
use Mistress\Http\Controllers\Controller;
use Mistress\Http\Requests;
use Mistress\Timer;
use Redirect;
use Response;

class TimerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('dom_only');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $timers = Auth::user()->sub->timers;
        return view('dom.timer.index', compact('timers'));
    }

    public function reset(Timer $timer)
    {
        $timer->duration = Carbon::now();
        $timer->save();
        return Redirect::route('dom.timer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dom.timer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $data = Input::all();
        $data['duration'] = Carbon::now();
        Auth::user()->sub->timers()->create($data);
        Flash::success('New Timer Created.');
        return Redirect::route('dom.timer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Timer $timer
     * @return Response
     */
    public function show(Timer $timer)
    {
        return Redirect::route('dom.timer.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Timer $timer
     * @return Response
     */
    public function edit(Timer $timer)
    {
        return view('dom.timer.edit', compact('timer'));
    }

    /**
     * @param Timer $timer
     * @return Response
     */
    public function update(Timer $timer)
    {
        $input = array_except(Input::all(), ['_method', '_token']);
        $timer->update($input);
        Flash::success('Timer Updated.');
        return Redirect::route('dom.timer.index');
    }

    /**
     * @param Timer $timer
     * @return Response
     */
    public function destroy(Timer $timer)
    {
        $timer->delete();
        Flash::success('Timer Deleted.');
        return Redirect::route('dom.timer.index');
    }

}

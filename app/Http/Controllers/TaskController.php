<?php

namespace Mistress\Http\Controllers;

use Mistress\Http\Requests;
use Mistress\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Mistress\User;
use Mistress\Task;
use Auth;
use Flash;

class TaskController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = Auth::user();
        $tasks = $user->tasks()->unverified()->orderBy('due_on', 'asc')->get();
        //$tasks = $user->tasks()->where('complete', false)->where('verified', false)->orderBy('due_on', 'asc')->get();
        return view('tasks.index')->withTasks($tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $task = Auth::user()->tasks()->findOrFail($id);
        //$task = Task::findOrFail($id);
        return view('tasks.show')->withTask($task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function complete($id)
    {
        
    }
    
    public function updateComplete($id)
    {
        
    }

    public function verify($id)
    {
        
    }
    
    public function updateVerify($id)
    {
        
    }

}

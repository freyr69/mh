<?php

namespace Mistress\Http\Controllers\Dom;

use Auth;
use Mistress\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Flash;

class PunishmentController extends Controller
{

    protected $user;

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('dom_only');
    }

    public function punish()
    {
        return view('dom.punishment.punish', ['punishments' => ['1' => 'Spanking', '2' => 'Extra Hard Spanking', '3' => 'Writing Assignment', '4' => 'Something Special']]);
    }
    
    public function storePunishment() 
    {
        $user = Auth::user();
        $name = $user->sub->name;
        \Flash::success('A punishment was assigned to ' . $name);
        
        return redirect('/dom');
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
}

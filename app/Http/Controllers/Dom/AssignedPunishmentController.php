<?php

namespace Mistress\Http\Controllers\Dom;

use Auth;
use Carbon\Carbon;
use Flash;
use Input;
use Mistress\AssignedPunishment;
use Mistress\Http\Controllers\Controller;
use Redirect;
use Response;

class AssignedPunishmentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $punishments = Auth::user()->sub->punishments;
        return view('dom.assigned_punishment.index', compact('punishments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $punishments = Auth::user()->punishmentList->lists('name', 'id');
        return view('dom.assigned_punishment.create', ['punishments' => $punishments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $user = Auth::user();

        $data = Input::all();

        $punishment = $user->punishmentList->find($data['punishment']);

        $data['name']        = $punishment->name;
        $data['description'] = $punishment->description;
        $data['assigned_on'] = Carbon::now();
        unset($data['punishment']);

        $user->sub->punishments()->create($data);

        $name = $user->sub->name;
        Flash::success('A punishment was assigned to ' . $name);

        return redirect('/dom');
    }

    /**
     * Display the specified resource.
     *
     * @param  AssignedPunishment $punishment
     * @return Response
     */
    public function show(AssignedPunishment $punishment)
    {
        return view('dom.assigned_punishment.show', compact('punishment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  AssignedPunishment $punishment
     * @return Response
     */
    public function edit(AssignedPunishment $punishment)
    {
        return view('dom.assigned_punishment.edit', compact('punishment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AssignedPunishment $punishment
     * @return Response
     */
    public function update(AssignedPunishment $punishment)
    {
        $input = array_except(Input::all(), ['_method', '_token']);
        $punishment->update($input);
        Flash::success('Punishment Updated.');
        return Redirect::route('dom.assigned_punishment.index');
    }

    /**
     * 
     * @param AssignedPunishment $punishment
     * @return Response
     */
    public function complete(AssignedPunishment $punishment)
    {
        $punishment->complete     = true;
        $punishment->completed_on = Carbon::now();
        $punishment->save();
        Flash::success('Punishment Completed.');
        return Redirect::route('dom.assigned_punishment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  AssignedPunishment $punishment
     * @return Response
     */
    public function destroy(AssignedPunishment $punishment)
    {
        $punishment->delete();
        Flash::success('Punishment Deleted.');
        return Redirect::route('dom.assigned_punishment.index');
    }

}

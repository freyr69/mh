<?php

namespace Mistress\Http\Controllers\Dom;

use Auth;
use Carbon\Carbon;
use Flash;
use Input;
use Mistress\Http\Controllers\Controller;
use Mistress\Punishment;
use Redirect;

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
        $punishments = Auth::user()->punishmentList->lists('name', 'id');
        return view('dom.punishment.punish', ['punishments' => $punishments]);
    }

    public function storePunishment()
    {
        $user = Auth::user();

        $data = Input::all();

        $punishment = $user->punishmentList->find($data['punishment']);

        $data['name'] = $punishment->name;
        $data['description'] = $punishment->description;
        $data['assigned_on'] = Carbon::now();
        unset($data['punishment']);

        $user->sub->punishments()->create($data);

        $name = $user->sub->name;
        Flash::success('A punishment was assigned to ' . $name);

        return redirect('/dom');
    }

    public function index()
    {
        $punishments = Auth::user()->punishmentList;
        return view('dom.punishment.index', compact('punishments'));
    }


    public function create()
    {
        return view('dom.punishment.create');
    }

    public function store()
    {
        Auth::user()->punishmentList()->create(Input::all());
        Flash::success('New Punishment Created.');
        return Redirect::route('dom.punishment.index');
    }

    /**
     * @param Punishment $punishment
     * @return \Illuminate\View\View
     */
    public function show(Punishment $punishment)
    {
        return view('dom.punishment.show', compact('punishment'));
    }

    public function edit(Punishment $punishment)
    {
        return view('dom.punishment.edit', compact('punishment'));
    }

    public function update(Punishment $punishment)
    {
        $input = array_except(Input::all(), ['_method', '_token']);
        $punishment->update($input);
        Flash::success('Punishment Updated.');
        return Redirect::route('dom.punishment.index');
    }

    public function destroy(Punishment $punishment)
    {
        $punishment->delete();
        Flash::success('Punishment Deleted.');
        return Redirect::route('dom.punishment.index');
    }
}

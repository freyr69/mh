<?php

namespace Mistress\Http\Controllers\Dom;

use Auth;
use Flash;
use Input;
use Mistress\Http\Controllers\Controller;
use Mistress\Rule;
use Redirect;
use Response;

class RuleController extends Controller
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
        $rules = Auth::user()->sub->rules;
        return view('dom.rule.index', compact('rules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dom.rule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        Auth::user()->sub->rules()->create($input);
        Flash::success('New Rule Created.');
        return Redirect::route('dom.rule.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Rule $rule
     * @return Response
     */
    public function show(Rule $rule)
    {
        return Redirect::route('dom.rule.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Rule $rule
     * @return Response
     */
    public function edit(Rule $rule)
    {
        return view('dom.rule.edit', compact('rule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Rule $rule
     * @return Response
     */
    public function update(Rule $rule)
    {
        $input = array_except(Input::all(), ['_method', '_token']);
        $rule->update($input);
        Flash::success('Rule Updated.');
        return Redirect::route('dom.rule.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Rule $rule)
    {
        $rule->delete();
        Flash::success('Rule Deleted.');
        return Redirect::route('dom.rule.index');
    }

}

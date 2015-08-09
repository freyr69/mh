<?php

namespace Mistress\Http\Controllers\Sub;

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
        $this->middleware('sub_only');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $rules = Auth::user()->rules;
        return view('sub.rule.index', compact('rules'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Rule $rule
     * @return Response
     */
    public function show(Rule $rule)
    {
        return view('sub.rule.show', compact('rule'));
    }
}

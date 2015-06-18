<?php namespace Mistress\Http\Controllers\Dom;

use Auth;
use Flash;
use Input;
use Mistress\Confession;
use Mistress\Http\Controllers\Controller;
use Mistress\Http\Requests;
use Redirect;


class ConfessionController extends Controller
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
        $confessions = Auth::user()->sub->confessions;
        return view('dom.confession.index', compact('confessions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return Redirect::route('dom.confession.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        return Redirect::route('dom.confession.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        return Redirect::route('dom.confession.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Confession $confession
     * @return Response
     */
    public function edit(Confession $confession)
    {
        return view('dom.confession.edit', compact('confession'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Confession $confession
     * @return Response
     */
    public function update(Confession $confession)
    {
        $input = array_except(Input::all(), ['_method', '_token']);
        $confession->update($input);
        Flash::success('Confession Updated.');
        return Redirect::route('dom.confession.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Confession $confession
     * @return Response
     */
    public function destroy(Confession $confession)
    {
        $confession->delete();
        Flash::success('Confession Deleted.');
        return Redirect::route('dom.confession.index');
    }

}

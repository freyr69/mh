<?php
namespace Mistress\Http\Controllers\Dom;

use Auth;
use Flash;
use Input;
use Mistress\Count;
use Mistress\Http\Controllers\Controller;
use Mistress\Http\Requests;
use Redirect;
use Response;

class CountController extends Controller
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
        $counts = Auth::user()->sub->counts;
        return view('dom.count.index', compact('counts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dom.count.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $data = Input::all();
        if (!$data['count']) {
            $data['count'] = 0;
        }
        Auth::user()->sub->counts()->create($data);
        Flash::success('New Counter Created.');
        return Redirect::route('dom.count.index');
    }

    public function reset(Count $count)
    {
        $count->count = 0;
        $count->save();
        return Redirect::route('dom.count.index');
    }

    public function increment(Count $count)
    {
        $count->count++;
        $count->save();
        return Redirect::route('dom.count.index');
    }

    public function decrement(Count $count)
    {
        $count->count--;
        $count->save();
        return Redirect::route('dom.count.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Count $count
     * @return Response
     */
    public function show(Count $count)
    {
        return Redirect::route('dom.count.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Count $count
     * @return Response
     */
    public function edit(Count $count)
    {
        return view('dom.count.edit', compact('count'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Count $count
     * @return Response
     */
    public function update(Count $count)
    {
        $input = array_except(Input::all(), ['_method', '_token']);
        $count->update($input);
        Flash::success('Count Updated.');
        return Redirect::route('dom.count.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Count $count
     * @return Response
     */
    public function destroy(Count $count)
    {
        $count->delete();
        Flash::success('Count Deleted.');
        return Redirect::route('dom.count.index');
    }

}

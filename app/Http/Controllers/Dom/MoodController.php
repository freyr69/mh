<?php

namespace Mistress\Http\Controllers\Dom;

use Auth;
use Mistress\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class MoodController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('dom_only');
    }

    public function up()
    {

        $user = Auth::user();
        $mood = $user->sub->mood;
        $mood->mood++;
        $mood->save();
        
        return redirect('dom/');
    }
    
    public function down()
    {
        $user = Auth::user();
        $mood = $user->sub->mood;
        $mood->mood--;
        $mood->save();
        
        if ($mood->mood <= 0) {
            return redirect('dom/punish/');
        }
        return redirect('dom/');
    }

}

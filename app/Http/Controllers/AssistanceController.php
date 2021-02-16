<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assistance;

class AssistanceController extends Controller
{
    public function store(Request $request)
    {
        $assistances = Assistance::create($request->all());
        // $assistances->user()->attach(auth()->user()->id);
   
        // href="{{route('modules.status',$module)}};
        return 'well done';
        // return view('suggestion.done',compact('assistances'));
    }

    
}

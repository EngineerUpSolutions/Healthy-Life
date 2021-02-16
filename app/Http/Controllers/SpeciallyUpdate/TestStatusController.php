<?php

namespace App\Http\Controllers\SpeciallyUpdate;

use App\Http\Controllers\Controller;
use App\Models\Assistance;
use App\Models\Provider;
use Illuminate\Http\Request;

class TestStatusController extends Controller
{
    public function teststatus(Request $request, Provider $provider,Assistance $assistance)
    {
        $assistance->update($request->all());
        return "hello";
    }
}

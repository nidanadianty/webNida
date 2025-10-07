<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakulikuler;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EkstrakulikulerController extends Controller
{
    
    public function index() : View{
        $ekstrakulikulers = Ekstrakulikuler::all();

        return view('ekstrakulikuler', compact('ekstrakulikulers'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakulikuler;
use Illuminate\Http\Request;

class EkstrakulikulerController extends Controller
{
    public function index() 
    {
        $ekstrakulikuler = Ekstrakulikuler::latest()->paginate(10);

        return view('ekstrakulikuler', compact('ekstrakulikuler'));
    }
}

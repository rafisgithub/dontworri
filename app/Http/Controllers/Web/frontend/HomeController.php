<?php

namespace App\Http\Controllers\Web\frontend;

use App\Http\Controllers\Controller;
use App\Models\UniversityList;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function getResult(Request $request) {
        $searchTerm = $request->input('name');
        $universities = UniversityList::where('name', 'like', '%' . $searchTerm . '%')->get();
        return response()->json([
            'universities' => $universities,
        ],201);
    }
}

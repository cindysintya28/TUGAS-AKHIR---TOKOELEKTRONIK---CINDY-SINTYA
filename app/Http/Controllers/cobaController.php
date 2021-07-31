<?php

namespace App\Http\Controllers;
use App\Models\friends;
use Illuminate\Http\Request;

class cobaController extends Controller
{
    public function index()
    {
        $friends =friends::paginate(3);
        return view ('index', compact('friends'));
    }
    public function create()
    {
        return view ('create');
    }
    public function store(Request $request)
    {
//Validate the request ...

$friends = new Friends;

$friends->nama = $request->nama;
$friends->notlp = $request->notlp;
$friends->alamat = $request->alamat;

$friends->save();
    }
}

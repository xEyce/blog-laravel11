<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eyce;
use App\Models\Village;

class EyceController extends Controller
{
    public function index(){
        // route --> /ninjas/
        // fetch all records & pass into the index view
        $eyces = Eyce::with('village')->orderBy('created_at', 'desc')->paginate(10);

        return view('eyce.index', ["eyces" => $eyces]);
    }

    public function show($id){
        // route --> /ninjas/{id}
        // fetch a single record & pass into show view 

        $eyce = Eyce::with('village')->findOrFail($id);
        return view('eyce.show', ["eyce" => $eyce]);
    }

    public function create(){
        // route --> /ninjas/create
        // render a create view (with web form) to users
        $villages = Village::all();

        return view('eyce.create', ["villages" => $villages]);
    }

    public function store(Request $request) {
        // --> /ninjas/ (POST)
        // hanlde POST request to store a new ninja record in table
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'village_id' => 'required|exists:villages,id',
        ]);

        Eyce::create($validated);

        return redirect()->route('eyce.index')->with('success', 'Person Added!');
    }

    public function destroy($id) {
        // --> /ninjas/{id} (DELETE)
        // handle delete request to delete a ninja record from table
        $eyce = Eyce::findOrFail($id);
        $eyce->delete();

        return redirect()->route('eyce.index')->with('success', 'Person Deleted!');
    }

    // edit() and update() for edit view and update requests
    // we won't be using these routes
}

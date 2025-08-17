<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eyce;

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
        return view('eyce.create');
    }

    public function store() {
        // --> /ninjas/ (POST)
        // hanlde POST request to store a new ninja record in table
    }

    public function destroy($id) {
        // --> /ninjas/{id} (DELETE)
        // handle delete request to delete a ninja record from table
    }

    // edit() and update() for edit view and update requests
    // we won't be using these routes
}

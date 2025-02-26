<?php

namespace App\Http\Controllers;

use App\Models\Bar;
use Illuminate\Http\Request;

class BarController extends Controller
{

    // index page for the bars
    public function index() {
        return view('bars.index',[
        'bars' => Bar::orderBy('created_at', 'desc')->get()
        ]);
    }

    // show page for a specific bar
    public function show(Bar $bar) {
        return view('bars.show', [
            'bar' => $bar
        ]);
    }

    // create page for a bar
    public function create() {
        return view('bars.create', );
    }

    // function which stores the bar as a Bar model into the database
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'waldo',
            'grault',
        ]);

        $bar = Bar::create($validated);

        return redirect()->route('bars.index', $bar);
    }

    // Edit a specific bar (able to access in the show page)
    public function edit(Bar $bar) {
        return view('bars.edit', [
            'bar' => $bar
        ]);
    }

    // checks if update is valid and if it is updates it in the database
    public function update(Request $request, Bar $bar) {
        $validated = $request->validate([
            'name' => 'required',
            'waldo' => 'required',
            'grault' => 'required',
        ]);

        $bar->update($validated);

        return redirect()->route('bars.show', $bar);
    }

    // delete function
    public function delete(Bar $bar) {
        return view('bars.delete', [
            'bar' => $bar
        ]);
    }

    // destroys the bar
    public function destroy(Bar $bar) {
        $bar->delete();

        return redirect()->route('bars.index')
            ->with('success', 'Bar succesfully deleted');
    }
}

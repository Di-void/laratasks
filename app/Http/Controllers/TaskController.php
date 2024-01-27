<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function create(): View
    {
        return view('tasks.index');
    }

    // TODO: validate date input
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        $id = $request->user()->id;
        $due_date = $request->date('due_date');
        $input = ['name' => $input['name'], 'due_date' => $due_date, 'user_id' => $id, 'description' => $input['desc'], 'created_at' => now(), 'updated_at' => now()];
        DB::table('tasks')->insert($input);
        return back();
    }
}

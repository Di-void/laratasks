<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function create(Request $request): View
    {
        $tasks = Auth::user()->tasks;
        $filter = $request->query('filter', 'all');

        return view('tasks.index', ['tasks' => $tasks, 'filter' => $filter, 'count' => $tasks->count()]);
    }

    public function store(Request $request): RedirectResponse
    {

        $current_date = now()->toDateString();

        $request->validate([
            'due_date' => ['after_or_equal:' . $current_date, 'date']
        ]);

        $input = $request->all();
        $id = $request->user()->id;
        $due_date = $request->date('due_date');
        $input = ['name' => $input['name'], 'due_date' => $due_date, 'user_id' => $id, 'description' => $input['desc'], 'created_at' => now(), 'updated_at' => now()];
        DB::table('tasks')->insert($input);
        return back();
    }
}

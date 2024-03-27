<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function create(Request $request): View
    {
        $allTasks = Auth::user()->tasks;

        $tasks = $allTasks;

        $filter = $request->query('filter', 'all');

        $counts = $allTasks->reduce(function ($carry, $task) {
            $carry[$task->status]++;

            return $carry;
        }, ['pending' => 0, 'in_progress' => 0, 'completed' => 0]);

        if ($filter !== 'all') {
            $tasks = DB::table('tasks')->where('status', '=', $filter)->get();
        }

        return view('tasks.index', ['tasks' => $tasks->reverse(), 'filter' => $filter, 'totalCount' => $allTasks->count(), 'counts' => $counts]);
    }

    public function store(Request $request): RedirectResponse
    {

        $date_input = $request->input('due_date');

        if ($date_input !== null) {
            $current_date = now()->toDateString();

            $request->validate([
                'due_date' => ['after_or_equal:' . $current_date, 'date']
            ]);
        }


        $input = $request->all();
        $id = $request->user()->id;
        $due_date = $request->date('due_date');
        $input = ['name' => $input['name'], 'due_date' => $due_date, 'user_id' => $id, 'description' => $input['desc'], 'created_at' => now(), 'updated_at' => now()];
        DB::table('tasks')->insert($input);
        return back();
    }

    public function show(string $id): View
    {

        $task = DB::table('tasks')->where('id', $id)->first();

        return view('tasks.task', ['task' => $task]);
    }

    public function updateStatus(string $id, Request $request)
    {
        $new_status = $request->input('status');

        DB::table('tasks')->where('id', $id)->update(['status' => $new_status]);

        return back();
    }
}
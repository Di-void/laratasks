<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // Get logged in user
    $user = Auth::user();
    // Get all tasks
    $tasks = $user->tasks;
    // Filter tasks by due_date
    $filteredTasks = $tasks->filter(function ($value, $key) {
        // only return tasks that are due *and* pending today
        // if tasks's due date is greater than or equal to the current date
        $due_date = $value->due_date;
        if (($due_date === null || Carbon::createFromFormat('Y-m-d H:i:s', $due_date)->greaterThanOrEqualTo(today())) && $value->status === "pending") {
            return true;
        }
    });

    return view('dashboard', ['user' => $user, 'tasksCount' => $tasks->count(), 'tasks' => $filteredTasks]);
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/tasks', [TaskController::class, 'create'])->name('tasks');
    Route::post('/tasks', [TaskController::class, 'store']);
    Route::get('/tasks/{id}', [TaskController::class, 'show']);
    Route::put('/tasks/{id}', [TaskController::class, 'updateStatus']);
});

require __DIR__ . '/auth.php';
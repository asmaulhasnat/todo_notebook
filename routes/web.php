<?php

    use App\Http\Controllers\ProfileController;
    use App\Http\Controllers\TodoMasterController;
    use App\Http\Controllers\TodoDetailController;
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
    Route::redirect('/', '/login', 301);
    Route::redirect('/dashboard', 'todo-topic', 301);


    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::resource('todo-topic', TodoMasterController::class);
        Route::resource('todo-details', TodoDetailController::class);
        Route::get('/todo-details/{id}/create-details', [TodoDetailController::class, 'createDetails'])->name('todo-details.createDetails');


    });

    require __DIR__ . '/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\StudentController;
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
    return view('welcome');
});

// Route::get('/test-hello', function () {
//     return view('testhello');
// });

// Route::get('/test-hello', [TestController::class, 'showTest']);
Route::get('/test-hello', [TestController::class, 'showViewTest']);

Route::get('/helloworld', function () {
        return '<h1 style="text-align: center;">Hello Thu</h1>';
});

Route::get('/PTB1/a/{x}/b/{y} ', function ($x, $y) {
	echo $x . 'x+' . $y . '=0' . '<br/>';
	$result = -$y / $x;
	echo "result = " . $result;

})->where(['a' => '[0-9]+', 'b' => '[0-9]+']);

Route::get('/student/display', [StudentController::class, 'showStudent']);

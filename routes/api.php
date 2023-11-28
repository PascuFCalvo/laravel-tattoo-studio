<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', function (Request $request) {
    return response()->json([
        'success' => true,
        'message' => 'Healthchek ok',
    ], Response::HTTP_OK); //ese response http ok es para que devuelva el codigo 200 pero tiene mejor lectura
});


//crud controler para users

Route::post('/users', [UserController::class , 'createUser']);

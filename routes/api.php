<?php

use App\Http\Controllers\AppointmentController;
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

Route::post('/users', [UserController::class, 'createUser']);
Route::get('/users', [UserController::class, 'getAllUsers']);
Route::delete('/users/{id}', [UserController::class, 'deleteAUserById']);
Route::get('/users/{id}', [UserController::class, 'getAUserById']);
Route::put('/users/{id}', [UserController::class, 'updateAUserById']);


//crud controler para appointments

Route::post('/appointments', [AppointmentController::class, 'createAppointments']);
Route::get('/appointments', [AppointmentController::class, 'getAllAppointments']);
Route::delete('/appointments/{id}', [AppointmentController::class, 'deleteAnAppointmentById']);
Route::get('/appointments/{id}', [AppointmentController::class, 'getAnAppointmentById']);
Route::put('/appointments/{id}', [AppointmentController::class, 'updateAnAppointmentById']);

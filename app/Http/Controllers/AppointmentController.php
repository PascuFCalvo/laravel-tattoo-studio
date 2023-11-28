<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class AppointmentController extends Controller
{
    public function createAppointments(Request $request)
    {
        Log::info("create Role - 1");
        try {
            $appointment = $request->all();
            dump($appointment);

            $appointment = Appointment::create([
                'title' => $appointment['title'],
                'description' => $appointment['description'],
                'tattoo_artist' => $appointment['tattoo_artist'],
                'user_id' => $appointment['user_id'],
                'type' => $appointment['type'],
                'appointment_date' => $appointment['appointment_date'],
                'appointment_turn' => $appointment['appointment_turn'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Appointment created',
                'data' => $appointment,
            ], Response::HTTP_OK);
        } catch (\Exception $errorMessage) {
            return response()->json([
                'success' => false,
                'message' => 'Appointment not created',
                'error' => $errorMessage->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

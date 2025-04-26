<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/ambil-rental', function () {
    $rental = DB::table('rentals')->orderBy('id', 'desc')->first();
    
    if ($rental) {
        $message = 
            "🚗 *Pesanan Baru!*\n" .
            "━━━━━━━━━━━━━━━\n" .
            "👤 *Nama:* {$rental->nama}\n" .
            "📞 *No WA:* {$rental->phone_number}\n" .
            "🚘 *Mobil:* {$rental->mobil}\n" .
            "📅 *Tanggal Mulai:* {$rental->tanggal_mulai}\n" .
            "📅 *Tanggal Selesai:* {$rental->tanggal_selesai}\n" .
            "━━━━━━━━━━━━━━━";

        return response()->json([
            'id' => $rental->id,
            'message' => $message
        ]);
    }

    return response()->json(null);
});
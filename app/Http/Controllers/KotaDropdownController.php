<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class KotaDropdownController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        $provinsi = Provinsi::findOrFail($request->id);
        $kotaFiltered = $provinsi->kota->pluck('nama', 'id');
        return response()->json($kotaFiltered);
    }
}

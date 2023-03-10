<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;

class KecamatanDropdownController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        $kota = Kota::findOrFail($request->id);
        $kecamatanFiltered = $kota->kecamatan->pluck('nama', 'id');
        return response()->json($kecamatanFiltered);
    }
}

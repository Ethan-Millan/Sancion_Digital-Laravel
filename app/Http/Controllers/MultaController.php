<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMultaRequest;
use App\Http\Requests\UpdateMultaRequest;
use App\Models\Multa;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MultaController extends Controller
{

    public function index()
    {
        return response()->json(Multa::all());
    }

    public function store(StoreMultaRequest $request)
    {
        try{
            $multa = Multa::create($request->validate());

            return response()->json($multa, 201);

        }catch(Exception $e){
            Log::error("Error al crear una Multa: " . $e->getMessage());

            return response()->json(['error' => 'Hubo un problema al procesar la multa'], 500);
        }
    }

    public function show(Multa $multa)
    {
        return response()->json($multa, 200);
    }

    public function update(UpdateMultaRequest $request, Multa $multa)
    {
        try{

            $multa->update($request->validate());

            return response()->json($multa, 200);

        }catch(Exception $e){
        
            Log::error("Error al modifcar la multa: " . $e->getMessage());

            return response()->json(['error' => 'Hubo un error al modificar la multa'], 500);
        }
    }

    public function destroy(Multa $multa)
    {
        try{
            $multa->delete();

            return response()->json(['message' => 'Multa eliminada'], 200);
        }catch(Exception $e){
            
            Log::error("Error al eliminar la multa: " . $e->getMessage());

            return response()->json(['error' => 'Hubo un error en eliminar la multa']);
        }
    }
}

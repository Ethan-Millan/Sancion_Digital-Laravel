<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    
    public function usuarios(){
        try{
            $res = Http::timeout(5)->get('https://jsonplaceholder.typicode.com/users');

            $data = $res->json();

            return response()->json($data);

        }catch(Exception $e){
            return response()->json([
                'error' => 'Servicio no disponible'
            ], 503);
        }
    }

}

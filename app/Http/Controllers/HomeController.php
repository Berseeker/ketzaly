<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Mail\Invitacion;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $rules = [
            'nombre' => 'required',
            'telefono' => 'required',
            'attend' => 'required',
            'friends' => 'required',
            'paxs' => 'required',
            'pax_names' => 'required'
        ];

        $messages = [
            'nombre.required' => 'Es necesario poner un nombre',
            'telefono.required' => 'Es necesario asignar un telefono',
            'attend.required' => 'Es necesario saber si asistiras al evento',
            'friends.required' => 'Es necesario si vendras con acompañantes',
            'paxs.required' => 'Es necesario sabes el numero de acompañantes',
            'pax_names.required' => 'Es necesario saber el nombre de tus acompañantes'
        ];

        $this->validate($request,$rules,$messages);

        
        $response = Http::post('https://chinos-my-love.herokuapp.com/api/post', [
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'attend' => $request->attend,
            'friends' => $request->friends,
            'paxs' => $request->paxs,
            'pax_names' => $request->pax_names,
            'message' => $request->message,
        ]);

        return back()->with('success','Su mensaje se envio con exito.');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view("contactanos.index");
    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',
        ]);

        $correo = new ContactanosMailable($request->all());
        Mail::to('dnrodriguez129@misena.edu.co')->send($correo);
    
        return redirect()->route("contactanos.index")->with("Validado", "El mensaje ha sido enviado");
        
    }
}

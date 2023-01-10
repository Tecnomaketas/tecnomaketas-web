<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class ContactoController extends Controller
{
    public function sendEmail(Request $request){
        $request -> validate(
            [
                'name' => 'required|min:3'
            ]);
            
        Mail::send('email',['name' => $request->name,'email'=> $request->email,'mensaje'=>$request->message ],function ($m) {
            $m->from('contacto@tecnomaketas.cl', 'Tecnomaketas Contactos');
            $m->to('contacto@tecnomaketas.cl','Tecnomaketas Contactos')->subject('Contacto Pagina');
        }); 
        
        return redirect('home')->with('succes','Email enviado');
    }
}

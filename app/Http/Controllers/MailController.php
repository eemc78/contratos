<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use App\Http\Requests;

class MailController extends Controller
{
    //     @return Response

    public function __construct()
    {
        
    }

    public function index()
    {

    }
      


    public function create()
    {
    	//
    }

    //store 
    // @return  Response

    public function store(Request $request)
    {

        Mail::send('emails/contact',$request->all(), function($msj){
            $msj->subject('Correo de Contacto');
            $msj->to('jhonataninissyou7@gmail.com');
            $msj->cc('sistemas@clinicalauradaniela.com');

        });

        Session::flash('messaje','Mensaje enviado Correctamente');
        return Redirect::to('home');
    }

    public function show($id){
    	//
    }

    public function edit($id){
        //
    }


    public function update($id){
        //
    }


    public function destroy($id){
        //
    }




}

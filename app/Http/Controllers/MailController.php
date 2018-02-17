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
            /*
                $message->from($address, $name = null);
                $message->sender($address, $name = null);
                $message->to($address, $name = null);
                $message->cc($address, $name = null);
                $message->bcc($address, $name = null);
                $message->replyTo($address, $name = null);
                $message->subject($subject);
                $message->priority($level);
                $message->attach($pathToFile, array $options = []);

                // Attach a file from a raw $data string...
                $message->attachData($data, $name, array $options = []);

                // Get the underlying SwiftMailer message instance...
                $message->getSwiftMessage();

            */

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

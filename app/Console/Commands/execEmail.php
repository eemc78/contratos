<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use Illuminate\Http\Request;
use \Carbon\Carbon;

use Mail;
use App\User;

class execEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exec:sendemail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envia el correo electronico';

    /**
     * Execute the console command.
     *
     * @return mixed
     */

    public function __construct(){
    	//
    	parent::__construct();
    }

    public function handle()
    {
    	$user = User::findOrFail(1);
    	$resp = Mail::send('emails/send_alerta_vencimiento',['user'=>$user], function($msj){
            $msj->subject('Alerta de Vencimiento de Contratos '. Carbon::now());
            $msj->to('sistemas@edgardomartinez.com');
            //$msj->cc('gerencia@clinicalauradaniela.com');
            $msj->cc('sistemas@clinicalauradaniela.com');

    	});
                if($resp )  {
                    dd('['. Carbon::now() .' ] >> si lo envio '. $resp  );
        			
                }
                else {                    
        			dd('['. Carbon::now() .' ] >> ERROR FALLO EN LA TAREA *********************** '. $resp  );
                }

    }
}


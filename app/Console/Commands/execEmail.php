<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use Illuminate\Http\Request;
use \Carbon\Carbon;
use DB;
use Mail;
use App\User;
use App\Models\Contrato;

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
         $contratos= new Contrato(); 
         $contratos = DB::table('contratos')
                    //->join('personas','personas.id','=','contratos.personas_id')
                    ->join('tipocontratos','tipocontratos.id','=','contratos.tipocontrato')
                    ->join('estadocontratos','estadocontratos.id','=','contratos.estado')
                    ->join('ters','ters.id','=','contratos.ter')
                    ->select('contratos.*','ters.razonsocial')
                    ->where([['estadocontratos.estado','=','Vigente'],               
                    [ 'contratos.fechafin','>=', 'getdate()' ],
                    [ 'contratos.fechafin','<', 'getdate()+30' ]
                     ])
                    ->get(); 
         //dd($contratos);                    
                    
        $resp = Mail::send('emails/send_alerta_vencimiento', ['user'=>$user ,'contratos' => $contratos ], function($msj){
            $msj->subject('Alerta de Vencimiento de Contratos '. Carbon::now());
            $msj->to('sistemas@edgardomartinez.com');
            //$msj->cc('gerencia@clinicalauradaniela.com');
            //$msj->cc('ospi89@hotmail.com');
            $msj->bcc('jhonataninissyou7@gmail.com');
            
            
        });
                if($resp ==2 )  {
                    dd('['. Carbon::now() .' ] >> si lo envio '. $resp .'..... ');
                    
                }
                else {                    
                    dd('['. Carbon::now() .' ] >> ERROR FALLO EN LA TAREA *********************** '. $resp .'ERROR **** ' );
                }


    }
}


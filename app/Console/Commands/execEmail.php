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

use App\Http\Controllers\Controller;
use Dwij\Laraadmin\Models\LAConfigs;

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

         $MesVence = ['meses' => LAConfigs::getByKey('mesesparavencer') ] ;
         // dd( LAConfigs::where('key','mesesparavencer')->first());
         $contratos = DB::table('contratos')                    
                    ->join('tipocontratos','tipocontratos.id','=','contratos.tipocontrato')
                    ->join('estadocontratos','estadocontratos.id','=','contratos.estado')
                    ->join('ters','ters.id','=','contratos.ter')
                    ->select('contratos.idcontrato'
                            ,'contratos.fechafin', 'contratos.descripcion'
                            ,'contratos.contacto'
                            ,'ters.razonsocial as razonsocial'                            
                            //,"'" . Carbon::now('America/Bogota')->toDateTimeString() .  "'"
                        )->whereNull('contratos.deleted_at')
                    ->where('estadocontratos.estado','=','Vigente')
                    ->where('contratos.fechafin','>=',  Carbon::now('America/Bogota')->toDateTimeString() )
                    ->where('contratos.fechafin','<', Carbon::now('America/Bogota')->addMonth(LAConfigs::getByKey('mesesparavencer'))->toDateTimeString()  ) ->orderBy('contratos.fechafin', 'desc')
                    // })
                    ->get();
        
        $contprox = DB::table('contratos')                    
                    ->join('tipocontratos','tipocontratos.id','=','contratos.tipocontrato')
                    ->join('estadocontratos','estadocontratos.id','=','contratos.estado')
                    ->join('ters','ters.id','=','contratos.ter')
                    ->select('contratos.idcontrato'
                            ,'contratos.fechafin', 'contratos.descripcion'
                            ,'contratos.contacto'
                            ,'ters.razonsocial as razonsocial'                            
                            //,"'" . Carbon::now('America/Bogota')->toDateTimeString() .  "'"
                        )->whereNull('contratos.deleted_at')
                    ->where('estadocontratos.estado','=','Vigente')
                    ->where('contratos.fechafin','>', Carbon::now('America/Bogota')->addMonth(LAConfigs::getByKey('mesesparavencer'))->toDateTimeString()  ) 
                    ->orderBy('contratos.fechafin', 'desc')
                    ->take(10)
                    // })
                    ->get();
          // dd($contprox ); 

        $resp = Mail::send('emails/send_alerta_vencimiento', ['user'=>$user ,  'MesVence' => $MesVence ,'contratos' => $contratos ,'contprox' => $contprox ], function($msj){
            $msj->subject('Alerta de Vencimiento de Contratos '. Carbon::now('America/Bogota')->toDateTimeString());
            $msj->to('sistemas@edgardomartinez.com');
            //$msj->cc('gerencia@clinicalauradaniela.com');
            // $msj->cc('ospi89@hotmail.com');
            // $msj->bcc('jhonataninissyou7@gmail.com');            
        });
                if($resp ==2 )  {
                    dd('['. Carbon::now() .' ] >> si lo envio '. $resp .'..... ');
                    
                }
                else {                    
                    dd('['. Carbon::now() .' ] >> ERROR FALLO EN LA TAREA *********************** '. $resp .'ERROR **** ' );
                }


    }
}


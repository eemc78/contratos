<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use App\Models\Employee;
use \Carbon\Carbon;

class EnviaEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    //protected empleado;

    public function __construct()
    {
         //this->empleado =  $empleado
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //

        $Empleados = Employee::all();

        foreach ($Empleados as $Empleado){
                       
            $birtday = Carbon::createFromFormat('Y-m-d', $Empleado->date_birth) ;

            if($Birthday->isBirthday()){

                $resp = Mail::store(['name'=>'Sin Nombre', 'email'=>$Empleado->email ,'message'=>'Esto fue enviado desde el coomand']);
                if( $resp) {
                    dd('si lo envio');
                }
                else {
                    dd('Algo sucedió');
                }

                //Log::info("Enviando un mensaje desde Job 1  $empleado->email ");
            }
        }
    }
}

<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers\LA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use DB;
use Validator;
use Datatables;
use Collective\Html\FormFacade as Form;
use Dwij\Laraadmin\Models\Module;
use Dwij\Laraadmin\Models\ModuleFields;

use App\Models\Contrato;

class ContratosController extends Controller
{
	public $show_action = true;
	public $view_col = 'descripcion';
	public $listing_cols = ['id', 'fecha', 'idcontrato', 'ter', 'contacto', 'direccion', 'telefono', 'descripcion', 'tipocontrato', 'objetocontrato', 'duracion', 'fechafin', 'valor', 'revisado', 'fecharev', 'juridico', 'fechajur', 'aprobado', 'fechaapr', 'fechaadi', 'detalleadicion', 'estado'];
	
	public $listing_cols2 = [ 'idclasificador'];

	public function __construct() {
		// Field Access of Listing Columns
		if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
			$this->middleware(function ($request, $next) {
				$this->listing_cols = ModuleFields::listingColumnAccessScan('Contratos', $this->listing_cols);
				$this->listing_cols2 = ModuleFields::listingColumnAccessScan('Clasificaxcontratos', $this->listing_cols2);
				return $next($request);
			});
		} else {
			$this->listing_cols = ModuleFields::listingColumnAccessScan('Contratos', $this->listing_cols);
			$this->listing_cols2 = ModuleFields::listingColumnAccessScan('Clasificaxcontratos', $this->listing_cols2);
		}
	}
	
	/**
	 * Display a listing of the Contratos.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$module = Module::get('Contratos');
		
		if(Module::hasAccess($module->id)) {
			return View('la.contratos.index', [
				'show_actions' => $this->show_action,
				'listing_cols' => $this->listing_cols,
				'module' => $module
			]);
		} else {
            return redirect(config('laraadmin.adminRoute')."/");
        }
	}


	/**
	 * Show the form for creating a new contrato.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created contrato in database.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		if(Module::hasAccess("Contratos", "create")) {
		
			$rules = Module::validateRules("Contratos", $request);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();
			}
			
			$insert_id = Module::insert("Contratos", $request);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.contratos.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Display the specified contrato.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		if(Module::hasAccess("Contratos", "view")) {
			
			$contrato = Contrato::find($id);
			if(isset($contrato->id)) {
				$module = Module::get('Contratos');
				$module->row = $contrato;
				
				return view('la.contratos.show', [
					'module' => $module,
					'view_col' => $this->view_col,
					'no_header' => true,
					'no_padding' => "no-padding"
				])->with('contrato', $contrato);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("contrato"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Show the form for editing the specified contrato.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		if(Module::hasAccess("Contratos", "edit")) {			
			$contrato = Contrato::find($id);
			if(isset($contrato->id)) {	
				$module = Module::get('Contratos');
				
				$module->row = $contrato;
				
				return view('la.contratos.edit', [
					'module' => $module,
					'view_col' => $this->view_col,
				])->with('contrato', $contrato);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("contrato"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Update the specified contrato in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		if(Module::hasAccess("Contratos", "edit")) {
			
			$rules = Module::validateRules("Contratos", $request, true);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();;
			}
			
			$insert_id = Module::updateRow("Contratos", $request, $id);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.contratos.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Remove the specified contrato from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		if(Module::hasAccess("Contratos", "delete")) {
			Contrato::find($id)->delete();
			
			// Redirecting to index() method
			return redirect()->route(config('laraadmin.adminRoute') . '.contratos.index');
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}
	
	/**
	 * Datatable Ajax fetch
	 *
	 * @return
	 */
	public function dtajax()
	{
		$values = DB::table('contratos')->select($this->listing_cols)->whereNull('deleted_at');
		$out = Datatables::of($values)->make();
		$data = $out->getData();

		$fields_popup = ModuleFields::getModuleFields('Contratos');
		$fields_popup2 = ModuleFields::getModuleFields('Clasificaxcontratos');
		
		for($i=0; $i < count($data->data); $i++) {
			for ($j=0; $j < count($this->listing_cols); $j++) { 
				$col = $this->listing_cols[$j];
				if($fields_popup[$col] != null && starts_with($fields_popup[$col]->popup_vals, "@")) {
					$data->data[$i][$j] = ModuleFields::getFieldValue($fields_popup[$col], $data->data[$i][$j]);
				}
				if($col == $this->view_col) {
					$data->data[$i][$j] = '<a href="'.url(config('laraadmin.adminRoute') . '/contratos/'.$data->data[$i][0]).'">'.$data->data[$i][$j].'</a>';
				}
				// else if($col == "author") {
				//    $data->data[$i][$j];
				// }
			}
						
			/* los clasificadores */
			$values2 = DB::table('clasificaxcontratos')->select($this->listing_cols2)->whereNull('deleted_at')->where('idcontrato','=', $data->data[$i][0]);
			$out2 = Datatables::of($values2)->make();
			$data2 = $out2->getData();
			for($ii=0; $ii < count($data2->data); $ii++) {
				for ($jj=0; $jj < count($this->listing_cols2); $jj++) { 
					$col2 = $this->listing_cols2[$jj];
					if($fields_popup2[$col2] != null && starts_with($fields_popup2[$col2]->popup_vals, "@")) {
						$data2->data[$ii][$jj] = '<a href="'.url(config('laraadmin.adminRoute') . '/clasificadors/'.$data2->data[$ii][0]).'">'. ModuleFields::getFieldValue($fields_popup2[$col2], $data2->data[$ii][$jj]).'</a>';
					}					
				}
			}

			$data->data[$i][] = ($data2->data);

			/* las acciones */

			if($this->show_action) {
				$output = '';
				if(Module::hasAccess("Contratos", "edit")) {
					$output .= '<a href="'.url(config('laraadmin.adminRoute') . '/contratos/'.$data->data[$i][0].'/edit').'" class="btn btn-warning btn-xs" style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-edit"></i></a>';
				}
				
				if(Module::hasAccess("Contratos", "delete")) {
					$output .= Form::open(['route' => [config('laraadmin.adminRoute') . '.contratos.destroy', $data->data[$i][0]], 'method' => 'delete', 'style'=>'display:inline']);
					$output .= ' <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-times"></i></button>';
					$output .= Form::close();
				}
				$data->data[$i][] = (string)$output;
			}
		}
		$out->setData($data);
		return $out;
	}

}

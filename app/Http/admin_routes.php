<?php

/* ================== Homepage ================== */
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::auth();

	/* ================== Mail ================== */
	Route::resource('mail', 'MailController');
	//Route::get('mail', 'mailcontroller@dtajax');
	//Route::('mail', 'MailController@store');
	Route::get('contact', function(){
		return view('emails\contact');
	});
		Route::get('contacto', function(){
		return view('contacto');
	});

/* ================== Access Uploaded Files ================== */
Route::get('files/{hash}/{name}', 'LA\UploadsController@get_file');

/*
|--------------------------------------------------------------------------
| Admin Application Routes
|--------------------------------------------------------------------------
*/

$as = "";
if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
	$as = config('laraadmin.adminRoute').'.';
	
	// Routes for Laravel 5.3
	Route::get('/logout', 'Auth\LoginController@logout');
}



Route::group(['as' => $as, 'middleware' => ['auth', 'permission:ADMIN_PANEL']], function () {
	


	/* ================== Dashboard ================== */
	
	Route::get(config('laraadmin.adminRoute'), 'LA\DashboardController@index');
	Route::get(config('laraadmin.adminRoute'). '/dashboard', 'LA\DashboardController@index');
	
	/* ================== Users ================== */
	Route::resource(config('laraadmin.adminRoute') . '/users', 'LA\UsersController');
	Route::get(config('laraadmin.adminRoute') . '/user_dt_ajax', 'LA\UsersController@dtajax');

	/* ================== Uploads ================== */
	Route::resource(config('laraadmin.adminRoute') . '/uploads', 'LA\UploadsController');
	Route::post(config('laraadmin.adminRoute') . '/upload_files', 'LA\UploadsController@upload_files');
	Route::get(config('laraadmin.adminRoute') . '/uploaded_files', 'LA\UploadsController@uploaded_files');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_caption', 'LA\UploadsController@update_caption');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_filename', 'LA\UploadsController@update_filename');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_public', 'LA\UploadsController@update_public');
	Route::post(config('laraadmin.adminRoute') . '/uploads_delete_file', 'LA\UploadsController@delete_file');
	
	/* ================== Roles ================== */
	Route::resource(config('laraadmin.adminRoute') . '/roles', 'LA\RolesController');
	Route::get(config('laraadmin.adminRoute') . '/role_dt_ajax', 'LA\RolesController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/save_module_role_permissions/{id}', 'LA\RolesController@save_module_role_permissions');
	
	/* ================== Permissions ================== */
	Route::resource(config('laraadmin.adminRoute') . '/permissions', 'LA\PermissionsController');
	Route::get(config('laraadmin.adminRoute') . '/permission_dt_ajax', 'LA\PermissionsController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/save_permissions/{id}', 'LA\PermissionsController@save_permissions');
	
	/* ================== Departments ================== */
	Route::resource(config('laraadmin.adminRoute') . '/departments', 'LA\DepartmentsController');
	Route::get(config('laraadmin.adminRoute') . '/department_dt_ajax', 'LA\DepartmentsController@dtajax');
	
	/* ================== Employees ================== */
	Route::resource(config('laraadmin.adminRoute') . '/employees', 'LA\EmployeesController');
	Route::get(config('laraadmin.adminRoute') . '/employee_dt_ajax', 'LA\EmployeesController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/change_password/{id}', 'LA\EmployeesController@change_password');
	
	/* ================== Organizations ================== */
	Route::resource(config('laraadmin.adminRoute') . '/organizations', 'LA\OrganizationsController');
	Route::get(config('laraadmin.adminRoute') . '/organization_dt_ajax', 'LA\OrganizationsController@dtajax');

	/* ================== Backups ================== */
	Route::resource(config('laraadmin.adminRoute') . '/backups', 'LA\BackupsController');
	Route::get(config('laraadmin.adminRoute') . '/backup_dt_ajax', 'LA\BackupsController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/create_backup_ajax', 'LA\BackupsController@create_backup_ajax');
	Route::get(config('laraadmin.adminRoute') . '/downloadBackup/{id}', 'LA\BackupsController@downloadBackup');


	/* ================== Sexos ================== */
	Route::resource(config('laraadmin.adminRoute') . '/sexos', 'LA\SexosController');
	Route::get(config('laraadmin.adminRoute') . '/sexo_dt_ajax', 'LA\SexosController@dtajax');

	/* ================== Ters ================== */
	Route::resource(config('laraadmin.adminRoute') . '/ters', 'LA\TersController');
	Route::get(config('laraadmin.adminRoute') . '/ter_dt_ajax', 'LA\TersController@dtajax');

	/* ================== Personas ================== */
	Route::resource(config('laraadmin.adminRoute') . '/personas', 'LA\PersonasController');
	Route::get(config('laraadmin.adminRoute') . '/persona_dt_ajax', 'LA\PersonasController@dtajax');

	/* ================== TipoContratos ================== */
	Route::resource(config('laraadmin.adminRoute') . '/tipocontratos', 'LA\TipoContratosController');
	Route::get(config('laraadmin.adminRoute') . '/tipocontrato_dt_ajax', 'LA\TipoContratosController@dtajax');

	/* ================== EstadoContratos ================== */
	Route::resource(config('laraadmin.adminRoute') . '/estadocontratos', 'LA\EstadoContratosController');
	Route::get(config('laraadmin.adminRoute') . '/estadocontrato_dt_ajax', 'LA\EstadoContratosController@dtajax');

	/* ================== Contratos ================== */
	Route::resource(config('laraadmin.adminRoute') . '/contratos', 'LA\ContratosController');
	Route::get(config('laraadmin.adminRoute') . '/contrato_dt_ajax', 'LA\ContratosController@dtajax');

	/* ================== Notificas ================== */
	Route::resource(config('laraadmin.adminRoute') . '/notificas', 'LA\NotificasController');
	Route::get(config('laraadmin.adminRoute') . '/notifica_dt_ajax', 'LA\NotificasController@dtajax');

	Route::get('sendEmail', function(){
		
		$job = new \App\Jobs\EnviaEmail();
		dispatch($job);
	});
});

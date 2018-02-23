<?php

use Illuminate\Database\Seeder;

use Dwij\Laraadmin\Models\Module;
use Dwij\Laraadmin\Models\ModuleFields;
use Dwij\Laraadmin\Models\ModuleFieldTypes;
use Dwij\Laraadmin\Models\Menu;
use Dwij\Laraadmin\Models\LAConfigs;

use App\Role;
use App\Permission;
use App\Models\Department;

use App\Models\sexo;
use App\Models\EstadoContrato;
use App\Models\Ter;
use App\Models\TipoContrato;


class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		
		/* ================ LaraAdmin Seeder Code ================ */
		
		// Generating Module Menus
		$modules = Module::all();
		$teamMenu = Menu::create([
			"name" => "Team",
			"url" => "#",
			"icon" => "fa-group",
			"type" => 'custom',
			"parent" => 0,
			"hierarchy" => 1
		]);
		foreach ($modules as $module) {
			$parent = 0;
			if($module->name != "Backups") {
				if(in_array($module->name, ["Users", "Departments", "Employees", "Roles", "Permissions"])) {
					$parent = $teamMenu->id;
				}
				Menu::create([
					"name" => $module->name,
					"url" => $module->name_db,
					"icon" => $module->fa_icon,
					"type" => 'module',
					"parent" => $parent
				]);
			}
		}
		
		// Create Administration Department
	   	$dept = new Department;
		$dept->name = "Administration";
		$dept->tags = "[]";
		$dept->color = "#000";
		$dept->save();
		
		$dept = new Department;
		$dept->name = "Sistemas";
		$dept->tags = "[]";
		$dept->color = "#000";
		$dept->save();
		
		// Create Super Admin Role
		$role = new Role;
		$role->name = "SUPER_ADMIN";
		$role->display_name = "Super Admin";
		$role->description = "Full Access Role";
		$role->parent = 1;
		$role->dept = $dept->id;
		$role->save();
		
		// Set Full Access For Super Admin Role
		foreach ($modules as $module) {
			Module::setDefaultRoleAccess($module->id, $role->id, "full");
		}
		
		// Create Admin Panel Permission
		$perm = new Permission;
		$perm->name = "ADMIN_PANEL";
		$perm->display_name = "Admin Panel";
		$perm->description = "Admin Panel Permission";
		$perm->save();
		
		$role->attachPermission($perm);
		
		// Generate LaraAdmin Default Configurations
		
		$laconfig = new LAConfigs;
		$laconfig->key = "sitename";
		$laconfig->value = "Gestión Administrativa";
		$laconfig->save();

		$laconfig = new LAConfigs;
		$laconfig->key = "sitename_part1";
		$laconfig->value = "Clinica";
		$laconfig->save();
		
		$laconfig = new LAConfigs;
		$laconfig->key = "sitename_part2";
		$laconfig->value = "Laura Daniela";
		$laconfig->save();
		
		$laconfig = new LAConfigs;
		$laconfig->key = "sitename_short";
		$laconfig->value = "CL";
		$laconfig->save();

		$laconfig = new LAConfigs;
		$laconfig->key = "site_description";
		$laconfig->value = "Gestión Administrativa de la Clinica Integral de Emergencias Laura Daniela";
		$laconfig->save();

		// Display Configurations
		
		$laconfig = new LAConfigs;
		$laconfig->key = "sidebar_search";
		$laconfig->value = "1";
		$laconfig->save();
		
		$laconfig = new LAConfigs;
		$laconfig->key = "show_messages";
		$laconfig->value = "1";
		$laconfig->save();
		
		$laconfig = new LAConfigs;
		$laconfig->key = "show_notifications";
		$laconfig->value = "1";
		$laconfig->save();
		
		$laconfig = new LAConfigs;
		$laconfig->key = "show_tasks";
		$laconfig->value = "1";
		$laconfig->save();
		
		$laconfig = new LAConfigs;
		$laconfig->key = "show_rightsidebar";
		$laconfig->value = "1";
		$laconfig->save();
		
		$laconfig = new LAConfigs;
		$laconfig->key = "skin";
		$laconfig->value = "skin-white";
		$laconfig->save();
		
		$laconfig = new LAConfigs;
		$laconfig->key = "layout";
		$laconfig->value = "fixed";
		$laconfig->save();

		// Admin Configurations

		$laconfig = new LAConfigs;
		$laconfig->key = "default_email";
		$laconfig->value = "sistemas@edgardomartinez.com";
		$laconfig->save();
		
		$modules = Module::all();
		foreach ($modules as $module) {
			$module->is_gen=true;
			$module->save();	
		}


		if (Schema::hasTable('sexos')) {
			//
			$sexos = new Sexo;
			$sexos->sexo ="Femenino";
			$sexos->save();

			$sexos = new Sexo;
			$sexos->sexo ="Masculino";
			$sexos->save();

			$sexos = new Sexo;
			$sexos->sexo ="Entidad";
			$sexos->save();
		}

		if (Schema::hasTable('estadocontratos')) {
			//
			$estadocontratos = new EstadoContrato;
			$estadocontratos->estado ="Vigente";
			$estadocontratos->save();

			$estadocontratos = new EstadoContrato;
			$estadocontratos->estado ="Suspendido";
			$estadocontratos->save();

			$estadocontratos = new EstadoContrato;
			$estadocontratos->estado ="Terminado";
			$estadocontratos->save();

			$estadocontratos = new EstadoContrato;
			$estadocontratos->estado ="En renovación";
			$estadocontratos->save();
		}

		if (Schema::hasTable('tipocontratos')) {
			//
			$tipocontratos = new TipoContrato;
			$tipocontratos->tipocontrato ="Suministro";
			$tipocontratos->save();

			$tipocontratos = new TipoContrato;
			$tipocontratos->tipocontrato  ="Prestación de servicios";
			$tipocontratos->save();

			$tipocontratos = new TipoContrato;
			$tipocontratos->tipocontrato ="Aprendizaje";
			$tipocontratos->save();
			$tipocontratos = new TipoContrato;
			$tipocontratos->tipocontrato ="Arrendamiento";
			$tipocontratos->save();

			$tipocontratos = new TipoContrato;
			$tipocontratos->tipocontrato ="Leasing";
			$tipocontratos->save();

			$tipocontratos = new TipoContrato;
			$tipocontratos->tipocontrato ="Contrato de obra";
			$tipocontratos->save();
			$tipocontratos = new TipoContrato;
			$tipocontratos->tipocontrato ="Licitación";
			$tipocontratos->save();

			$tipocontratos = new TipoContrato;
			$tipocontratos->tipocontrato ="Prestación de servicios profesionales";
			$tipocontratos->save();

		}

		if (Schema::hasTable('ters')) {
			//
			$ters = new Ter;
			$ters->razonsocial = "Clinica Integral de Emergencias Laura Daniela S.A.";
			$ters->direccion = "Carrera 19 B No 14-47";
			$ters->telefono = "+575803535";
			$ters->representante = "Jaime Arce Garcia";
			$ters->nit = "900008328";
			$ters->save();

		}
	}
}

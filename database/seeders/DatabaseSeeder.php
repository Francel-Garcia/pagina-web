<?php

namespace Database\Seeders;
use App\Models\Empleados;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     
        $empleados = new Empleados();

        
        $empleados->Cedula ="234342";
        $empleados->Fecha_nacimiento ="12/09/11997";
        $empleados->Nonbre="pedro";
        $empleados->Apellido="herrer";
        $empleados->Direccion="z 4-9-03";
        $empleados->Telefono="564534334";
        $empleados->Departamento="retalhuleu";
        $empleados->Municipio="retalhuleu";
        $empleados->Foto="ojko";
        $empleados->Email="emple@gamil.com";
        $empleados->save();
    
    
    }
}

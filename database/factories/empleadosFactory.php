<?php

namespace Database\Factories;

use App\Models\Empleados;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleados::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'Cedula' => this.faker->cedula,
        'Nonbre' => this.faker->Nonbre,
        'Fecha_nacimiento' => this.faker->Fecha_nacimiento,          
        'Apellido' => this.faker->Apellido,
        'Direccion' => this.faker->Direccion,
        'Telefono' => this.faker->Telefono,
        'Departamento' => this.faker->Departamento,
        'Municipio' => this.faker->Municipio,
        'Foto' => this.faker->Foto,
        'Email' => this.faker->Email,
                
        ];
    }
}

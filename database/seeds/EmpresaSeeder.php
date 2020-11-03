<?php

use Illuminate\Database\Seeder;
use App\Models\Empresa;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empresa = Empresa::create([
            'nombre'=>'Dottamos',
            'eslogan'=>'Distribuciones y Suministros',
            'nit'=>'',
            'direccion'=>'',
            'barrio'=>'',
            'departamento'=>'Cesar',
            'ciudad'=>'Valledupar',
            'pais'=>'Colombia',
            'pbx'=>'',
            'telefono'=>'(5) 5901014',
            'celular'=>'3507617378 - 3118846352',
            'fax'=>'',
            'email'=>'servicioalcliente@dottamos.com',
            'whatsapp'=>'',
            'facebook'=>'',
            'instagram'=>'@dottamos',
        ]);
    }
}

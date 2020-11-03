<?php

use Illuminate\Database\Seeder;
use App\Models\Categorias;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = Categorias::create(['nombre' => 'Aseo', 'descripcion'=>'', 'orden'=>1]);
        $categoria = Categorias::create(['nombre' => 'Papelería', 'descripcion'=>'', 'orden'=>2]);
        $categoria = Categorias::create(['nombre' => 'Salud', 'descripcion'=>'', 'orden'=>3]);
    }
}

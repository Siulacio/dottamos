<?php

use Illuminate\Database\Seeder;
use App\Models\Productos;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ASEO
        $producto = Productos::create([
            'nombre'        => 'Item Aseo 1', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-1.jpg', 
            'categoria_id'  => 1,
            'precio'        => '5.700',
            'orden'         => 1,
            'destacado'     => 1,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Aseo 2', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-2.jpg', 
            'categoria_id'  => 1,
            'precio'        => '6.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Aseo 3', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-3.jpg', 
            'categoria_id'  => 1,
            'precio'        => '7.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Aseo 4', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-4.jpg', 
            'categoria_id'  => 1,
            'precio'        => '8.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Aseo 5', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-5.jpg', 
            'categoria_id'  => 1,
            'precio'        => '9.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Aseo 6', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-6.jpg', 
            'categoria_id'  => 1,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Aseo 7', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-7.jpg', 
            'categoria_id'  => 1,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Aseo 8', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-8.jpg', 
            'categoria_id'  => 1,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Aseo 9', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-9.jpg', 
            'categoria_id'  => 1,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Aseo 10', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-10.jpg', 
            'categoria_id'  => 1,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Aseo 11', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-11.jpg', 
            'categoria_id'  => 1,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Aseo 12', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-12.jpg', 
            'categoria_id'  => 1,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Aseo 13', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-13.jpg', 
            'categoria_id'  => 1,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Aseo 14', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-14.jpg', 
            'categoria_id'  => 1,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Aseo 15', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-15.jpg', 
            'categoria_id'  => 1,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Aseo 16', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-16.jpg', 
            'categoria_id'  => 1,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        // OTRA CATEGORIA PAPELELERIA

        $producto = Productos::create([
            'nombre'        => 'Item papeleria 1', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-1.jpg', 
            'categoria_id'  => 2,
            'precio'        => '5.700',
            'orden'         => 1,
            'destacado'     => 1,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item papeleria 2', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-2.jpg', 
            'categoria_id'  => 2,
            'precio'        => '6.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item papeleria 3', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-3.jpg', 
            'categoria_id'  => 2,
            'precio'        => '7.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item papeleria 4', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-4.jpg', 
            'categoria_id'  => 2,
            'precio'        => '8.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item papeleria 5', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-5.jpg', 
            'categoria_id'  => 2,
            'precio'        => '9.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item papeleria 6', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-6.jpg', 
            'categoria_id'  => 2,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item papeleria 7', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-7.jpg', 
            'categoria_id'  => 2,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item papeleria 8', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-8.jpg', 
            'categoria_id'  => 2,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item papeleria 9', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-9.jpg', 
            'categoria_id'  => 2,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item papeleria 10', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-10.jpg', 
            'categoria_id'  => 2,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item papeleria 11', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-11.jpg', 
            'categoria_id'  => 2,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item papeleria 12', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-12.jpg', 
            'categoria_id'  => 2,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item papeleria 13', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-13.jpg', 
            'categoria_id'  => 2,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item papeleria 14', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-14.jpg', 
            'categoria_id'  => 2,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item papeleria 15', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-15.jpg', 
            'categoria_id'  => 2,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item papeleria 16', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-16.jpg', 
            'categoria_id'  => 2,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);


        // OTRA CATEGORIA SALUD

        $producto = Productos::create([
            'nombre'        => 'Item Salud 1', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-1.jpg', 
            'categoria_id'  => 3,
            'precio'        => '5.700',
            'orden'         => 1,
            'destacado'     => 1,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Salud 2', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-2.jpg', 
            'categoria_id'  => 3,
            'precio'        => '6.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Salud 3', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-3.jpg', 
            'categoria_id'  => 3,
            'precio'        => '7.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Salud 4', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-4.jpg', 
            'categoria_id'  => 3,
            'precio'        => '8.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Salud 5', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-5.jpg', 
            'categoria_id'  => 3,
            'precio'        => '9.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Salud 6', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-6.jpg', 
            'categoria_id'  => 3,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Salud 7', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-7.jpg', 
            'categoria_id'  => 3,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Salud 8', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-8.jpg', 
            'categoria_id'  => 3,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Salud 9', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-9.jpg', 
            'categoria_id'  => 3,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Salud 10', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-10.jpg', 
            'categoria_id'  => 3,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Salud 11', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-11.jpg', 
            'categoria_id'  => 3,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Salud 12', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-12.jpg', 
            'categoria_id'  => 3,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Salud 13', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-13.jpg', 
            'categoria_id'  => 3,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Salud 14', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-14.jpg', 
            'categoria_id'  => 3,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Salud 15', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-15.jpg', 
            'categoria_id'  => 3,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);

        $producto = Productos::create([
            'nombre'        => 'Item Salud 16', 
            'descripcion'   => 'Limpido 1Lt',
            'imagen'        => 'item-16.jpg', 
            'categoria_id'  => 3,
            'precio'        => '2.700',
            'orden'         => 1,
            'destacado'     => 0,
        ]);
    }
}

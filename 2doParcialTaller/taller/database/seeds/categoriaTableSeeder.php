<?php

use Illuminate\Database\Seeder;

class categoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0; $i <= 10; $i++)
        {
            DB::table('categorias')->insert([
                'nombre' => Str::random(10),
                'descripcion' => Str::random(10),        
            ]);
        }
        for($i = 0; $i <= 10; $i++)
        {
            DB::table('proveedors')->insert([
                'nombre' => Str::random(10),
                'telefono' => Str::random(10),
                'web' => Str::random(7).'.com',
                'direccion' => Str::random(10),
                'ciudad' => Str::random(10),
            ]);
        }
        for($i = 0; $i <= 10; $i++)
        {
            DB::table('clientes')->insert([
                'nombre' => Str::random(10),
                'direccion' => Str::random(10),
                'ciudad' => Str::random(10),
            ]);
        }
        for($i = 0; $i <= 10; $i++)
        {
            DB::table('telefonos ')->insert([
                'telefono' => Str::random(10),
                'idCliente' => Str::random(1),
            ]);
        }
    }
}

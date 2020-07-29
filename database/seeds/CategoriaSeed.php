<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'Restaurant',
            'slug' => Str::slug('Restaurant'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Cafe',
            'slug' => Str::slug('Cafe'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Hoteles',
            'slug' => Str::slug('hoteles'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Bar',
            'slug' => Str::slug('Bar'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Hospitales',
            'slug' => Str::slug('Hospitales'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Gimnasio',
            'slug' => Str::slug('Gimnasio'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Doctores',
            'slug' => Str::slug('Doctores'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}

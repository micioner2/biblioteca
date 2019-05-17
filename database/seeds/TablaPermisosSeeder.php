<?php

use Illuminate\Database\Seeder;
use App\Models\Permiso;

class TablaPermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Permiso::class,20)->create();
        // factory(Permiso::class)->times(30)->create();  /**Otra Opcion */
    }
}

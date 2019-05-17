<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Permiso;

class TablaPermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Permiso::class,5)->create();
        // factory(Permiso::class)->times(30)->create();  /**Otra Opcion */
    }
}

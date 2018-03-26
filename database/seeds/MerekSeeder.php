<?php

use Illuminate\Database\Seeder;
use App\Merek;

class MerekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $merek1 = Merek::create(['namamerek'=>'Honda']);
        $merek2 = Merek::create(['namamerek'=>'Kawasaki']);
        $merek3 = Merek::create(['namamerek'=>'KTM']);
        $merek4 = Merek::create(['namamerek'=>'Suzuki']);
        $merek5 = Merek::create(['namamerek'=>'Yamaha']);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Tipe;
class TipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tipe1 = Tipe::create(['namatipe'=>'Bebek']);
        $tipe2 = Tipe::create(['namatipe'=>'Matic']);
        $tipe3 = Tipe::create(['namatipe'=>'Sport']);
        $tipe4 = Tipe::create(['namatipe'=>'Trail']);
        $tipe5 = Tipe::create(['namatipe'=>'Vespa']);
    }
}

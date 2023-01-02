<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Insert some stuff
        DB::table('settings')->insert(
            array(
                'id' => 1,
                'email' => 'admin@example.com',
                'currency_id' => 1,
                'client_id' => 1,
                'warehouse_id' => Null,
                'CompanyName' => 'Gobuyz',
                'CompanyPhone' => '0778528585',
                'CompanyAdress' => '3618 Galle Sri Lanka',
                'footer' => 'Gobuyz - Ultimate Inventory With POS',
                'developed_by' => 'Hassan',
                'logo' => 'logo-default.png',
            )

        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'name' => 'Mustika Putri',
            'address' => 'Bondowoso',
            'number_tlp' => '081235602314',
            'order_date' => '30-12-2021',
            'catalog_theme' => 'Fun',
            'package' => 'Regular',
            'total_product' => '3',
        ]);
        DB::table('customers')->insert([
            'name' => 'Aisyah Ulil',
            'address' => 'Banyuwangi',
            'number_tlp' => '087135782965',
            'order_date' => '24-12-2021',
            'catalog_theme' => 'B&W',
            'package' => 'Silver',
            'total_product' => '4',
        ]);
     DB::table('customers')->insert([
            'name' => 'Aisyah Putri',
            'address' => 'Surabaya',
            'number_tlp' => '081235098314',
            'order_date' => '23-12-2021',
            'catalog_theme' => 'Retro',
            'package' => 'Silver',
            'total_product' => '2',
        ]);
        DB::table('customers')->insert([
            'name' => 'Saragoza N',
            'address' => 'Bandung',
            'number_tlp' => '081298762314',
            'order_date' => '09-12-2021',
            'catalog_theme' => 'Aesthetic',
            'package' => 'Premium',
            'total_product' => '3',
        ]);
        DB::table('customers')->insert([
            'name' => 'Aisyah Slavina',
            'address' => 'Jakarta',
            'number_tlp' => '081239992314',
            'order_date' => '25-12-2021',
            'catalog_theme' => 'Fun',
            'package' => 'Premium',
            'total_product' => '5',
        ]);  
        
    }
}

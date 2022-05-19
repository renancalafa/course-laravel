<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $supplier = new Supplier();
        $supplier->name = 'Supplier 00';
        $supplier->site = 'supplier00.com';
        $supplier->email = 'contact@supplier00.com';
        $supplier->uf = 'AM';
        $supplier->save();

        Supplier::create([
            'name' => 'Supplier 99', 
            'site' => 'supplier99.com', 
            'email' => 'contact@supplier99.com', 
            'uf' => 'AC',
        ]);

        // DB::table('suppliers')->insert([
        //     'name' => 'Supplier 98', 
        //     'site' => 'supplier98.com', 
        //     'email' => 'contact@supplier98.com', 
        //     'uf' => 'SP',
        // ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index () {
        $suppliers = [
            // 'Suplier 1','Suplier 1','Suplier 1','Suplier 1','Suplier 1','Suplier 1','Suplier 1','Suplier 1','Suplier 1','Suplier 1','Suplier 1',
            0 => [
                'name' =>'Suplier 1', 
                'status' => 'A',
                'cnpj' => '',
                'ddd' => '11',
                'phoneNumber' => '999999999'
            ],
            1 => [
                'name' =>'Suplier 2', 
                'status' => 'D',
                'cnpj' => null,
                'ddd' => '85',
                'phoneNumber' => '999999999'
            ],
            2 => [
                'name' =>'Suplier 3', 
                'status' => 'A',
                'cnpj' => null,
                'ddd' => '81',
                'phoneNumber' => '999999999'
            ],
        ];
        return view('app.supplier.index', compact('suppliers'));
    }
}

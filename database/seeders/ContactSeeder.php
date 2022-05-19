<?php

namespace Database\Seeders;

use \App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $contact = new Contact();
        $contact->name = 'Calafa';
        $contact->phone_number = '999999999';
        $contact->email = 'calafa@calafa.com';
        $contact->reason = 1;
        $contact->message = 'Hello World from CaLaFa';
        $contact->save();

    }
}

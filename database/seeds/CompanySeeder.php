<?php

use App\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [

            [
                'name' => 'Locale A.',
                'email' => 'locale@gmail.com',
                'city' => 'Roma',
                'address' => 'Via Nomentana',
                'postal_code' => '00162',
                'phone' => '3324567862',
                'image' => NULL,
                'description' => 'Descrizione',
                'type' => 'Locale',
            ],
            [
                'name' => 'Azienda B.',
                'email' => 'azienda@gmail.com',
                'city' => 'Roma',
                'address' => 'Viale Trastevere',
                'postal_code' => '00153',
                'phone' => '3373678942',
                'image' => NULL,
                'description' => 'Descrizione',
                'type' => 'Azienda',
            ],
            [
                'name' => 'Museo C.',
                'email' => 'museo@gmail.com',
                'city' => 'Roma',
                'address' => 'Via del Corso',
                'postal_code' => '00122',
                'phone' => '3335663660',
                'image' => NULL,
                'description' => 'Descrizione',
                'type' => 'Museo',
            ],
        ];

        foreach($companies as $company) {
            $newCompany = new Company();
            $newCompany->name = $company['name'];
            $newCompany->email = $company['email'];
            $newCompany->city = $company['city'];
            $newCompany->address = $company['address'];
            $newCompany->postal_code = $company['postal_code'];
            $newCompany->phone = $company['phone'];
            $newCompany->image = $company['image'];
            $newCompany->description = $company['description'];
            $newCompany->type = $company['type'];

            $newCompany->save();    
        }
    }
}

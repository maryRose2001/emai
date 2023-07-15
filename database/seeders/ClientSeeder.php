<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Client::factory(30)->create();

        $client = [
            [
                'last_name' => 'Montebon',
                'first_name' => 'Mary Rose',
                'middle_name' => 'Telmoro',
                'phone_number' => '09982096028',
                'address' => 'Cabulijan, Tubigon, Bohol.',
                'birth_date' => '2001-10-18',
                'email' => 'montebon.maryarosas@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Bulilan',
                'first_name' => 'Carl Milos',
                'middle_name' => 'Fuentes',
                'phone_number' => '09982096028',
                'address' => 'Cahayag, Tubigon, Bohol.',
                'birth_date' => '1997-03-13',
                'email' => 'carlmilosbulilan@gmail.com',
                'initial_deposit' => 18000,
            ],
            [
                'last_name' => 'Montebon',
                'first_name' => 'Romel',
                'middle_name' => 'Telmoro',
                'phone_number' => '09982096028',
                'address' => 'Cabulijan, Tubigon, Bohol.',
                'birth_date' => '2004-08-24',
                'email' => 'montebon.romel@gmail.com',
                'initial_deposit' => 30000,
            ],
            [
                'last_name' => 'Montebon',
                'first_name' => 'Ma. Dolores',
                'middle_name' => 'Tecson',
                'phone_number' => '09982096028',
                'address' => 'Cabulijan, Tubigon, Bohol.',
                'birth_date' => '1987-04-16',
                'email' => 'montebon.tecson@gmail.com',
                'initial_deposit' => 30000,
            ],
            [
                'last_name' => 'Telmoro',
                'first_name' => 'Amelita',
                'middle_name' => 'Tecson',
                'phone_number' => '09982096028',
                'address' => 'Cabulijan, Tubigon, Bohol.',
                'birth_date' => '1991-05-11',
                'email' => 'tecson.amelita@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Montebon',
                'first_name' => 'Rufo',
                'middle_name' => 'Baja',
                'phone_number' => '09982096028',
                'address' => 'Cabulijan, Tubigon, Bohol.',
                'birth_date' => '2003-10-23',
                'email' => 'montebonrufo@gmail.com',
                'initial_deposit' => 20000,
            ],
        ];

        foreach ($client as $c) {
            Client::create($c);
        }
    }
}

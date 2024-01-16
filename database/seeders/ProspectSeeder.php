<?php

namespace Database\Seeders;

use App\Models\Prospect;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProspectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $prospect = new Prospect();

            $prospect->name = 'Nombre' . $i;
            $prospect->lastname = 'Apellido' . $i;
            $prospect->legal_name = 'NombreLegal' . $i;
            $prospect->rfc_nrif = 'RFC' . $i;
            $prospect->fiscal_address = 'Dirección' . $i;
            $prospect->email = 'correo' . $i . '@ejemplo.com';
            $prospect->phone_number = '123456789' . $i;
            $prospect->status = 1;
            $prospect->country = 'Mexico';
            $prospect->description = 'Descripción de prueba de prospecto ' . $i;

            $prospect->save();
        }
    }
}

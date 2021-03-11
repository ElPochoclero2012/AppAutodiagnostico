<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory;

class DatosSeeder extends Seeder
{

    public function run()
    {
        $faker = Factory::create('es_AR');
        DB::table('users')->truncate();
        //$this->call(DatosSeeder::class);

        DB::table('users')->insert([
            'name' => $faker->firstname,
            'email' => $faker->unique()->safeEmail,
            'email_verified_at' => now(),
            //'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 
            'password' => Hash::make('password'),

            //'Fecha_Nacimiento'=> '2001-08-01',
            'Fecha_Nacimiento' => $faker->dateTime->format('Y-m-d'),
            //'sexo' =>rsexo(),
            // $faker->rsexo(['Masculino', 'Femenino', 'Otro']);

            //'sexo' => $faker->( 'Masculino', 'Femenino', 'Otro'),

            //'Tos_Seca' => int::random(1),
            //'Fiebre' => int::random(1),

            'sexo' => $faker->randomElement(['male', 'female', 'other']),
            'Tos_Seca' => true,
            'Fiebre' => false,
            'cansancio' => true,
            'Molestias_Cansancio' => false,
            'Dolor_De_Garganta' => true,
            'Diarrea' => false,
            'Conjuntivitis' => true,
            'Dolor_De_Cabeza' => true,
            'Pérdida_De_Olfato' => false,
            'Pérdida_De_Gusto' => false,
            'Erupciones_Cutáneas' => true,
            'Pérdida_Del_Control_En_Los_Dedos_De_Las_Manos' => true,
            'Dificultad_Para_Respirar' => false,
            'Incapacidad_Para_Moverse' => false,
            'Dolor/Presión_En_El_Pecho' => false,

        ]);
        //
    }
    /*
    if (boolean = 1)
    {
        return 'si';
    }
    else
    {
        return 'No';
    }
  */
}

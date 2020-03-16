<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GigguideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();

    	for($i=1; $i<20; $i++) {

		       DB::table('gigguide')->insert([
		       	'gig_artis' => $faker->name(),
				'gig_lokasi' => $faker->address(),
				'gig_waktu' => $faker->randomElement(['15.00','16.00','17.00','18.00','19.00','20.00','21.00']),
				'gig_keterangan' => $faker->randomElement(['Dilaksanakan','Ditunda','Dibatalkan']),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
		       ]);

   		}
    }
}


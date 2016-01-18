<?php

use Illuminate\Database\Seeder;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkul')->insert([
        	[
        		'nama' => 'Psikologi'
        	],
        	[
        		'nama' => 'Teknik Informatika'
        	],
        	[
        		'nama' => 'Teknik Perkapalan'
        	],
        	[
        		'nama' => 'Pendidikan Guru'
        	],
        	[
        		'nama' => 'Audio Vidio'
        	],
        	[
        		'nama' => 'Desain Komunikasi Visual'
        	]
        ]);
    }
}

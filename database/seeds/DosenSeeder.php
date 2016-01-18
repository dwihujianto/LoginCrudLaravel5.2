<?php

use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->insert([
        	[
        		'nik'		=> '3123311093',
        		'nama'		=> 'Dwi Hujianto',
        		'jenkel'	=> 'L',
        		'alamat'	=> 'Dkh. Jati, Ds. Cepoko, Kec. Ngrayun',
        		'id_agama'	=> 1,
        		'id_matkul' => 2
        	],
        	[
        		'nik'		=> '3123311099',
        		'nama'		=> 'Ghufon Edi Setiawan Jullev',
        		'jenkel'	=> 'L',
        		'alamat'	=> 'Dkh. Grabag, Ds. Cepogo, Kec. Grabag',
        		'id_agama'	=> 1,
        		'id_matkul' => 3
        	]
        ]);
    }
}

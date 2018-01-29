<?php

use Illuminate\Database\Seeder;
use App\siswa;
use App\wali;
use App\guru;
use App\kelas;
use App\mata_pelajaran;

class SekolahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->delete();
		DB::table('walis')->delete();
		DB::table('gurus')->delete();
		DB::table('kelas')->delete();
		DB::table('mata_pelajarans')->delete();

		mata_pelajaran::create(array(
			'nama_mapel' => 'matematika',
			'kkm' => '89'));

		$guru = guru::create(array(
			'nama' => 'Budi Bram',
			'nik' => '98989898989898',
			'alamat' => 'Jalan West Java',
			'mata_pelajaran' => 'Matematika'
		));

		$kelas = kelas::create(array(
			'nama' => 'XI RPL 1'
		));

		$a = siswa::create(array(
			'nama' => 'Haikal Maulana Firdaus',
			'nis'  => '123456789',
			'guru_id' => $guru->id,
			'kelas_id' => $kelas->id
		));

		wali::create(array(
			'nama'  => 'Eddy Supriyono',
			'alamat' => 'Baleendah',
			'siswa_id' => $a->id
		));

		

    }
}

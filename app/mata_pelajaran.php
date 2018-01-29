<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mata_pelajaran extends Model
{
    protected $table = 'mata_pelajarans';
	protected $fillable = array('nama_mapel', 'kkm');
	public function siswa() {
		return $this->belongsToMany('siswa', 'mapel_siswa', 'siswa_id', 'mapel_id');
	}
}

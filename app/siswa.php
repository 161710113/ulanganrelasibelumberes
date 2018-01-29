<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'siswas';
	protected $fillable = array('nama', 'nis', 'guru_id', 'kelas_id');
	public function wali() {
		return $this->hasOne('wali', 'siswa_id');
	}

	public function guru() {
		return $this->belongsTo('guru', 'guru_id');
	}

	public function kelas() {
		return $this->belongsTo('kelas', 'kelas_id');
	}

	public function mata_pelajaran() {
		return $this->belongsToMany('mata_pelajaran', 'mapel_siswa', 'siswa_id', 'mapel_id');
	}

}

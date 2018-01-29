<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $table = 'gurus';
	protected $fillable = array('nama', 'nik', 'alamat');
	public function mahasiswa() {
		return $this->hasMany('siswa', 'guru_id');
	}
}

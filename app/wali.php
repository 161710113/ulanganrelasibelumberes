<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wali extends Model
{
    protected $table = 'walis';
	protected $fillable = array('nama', 'siswa_id');
	public function mahasiswa() {
		return $this->belongsTo('siswa', 'siswa_id');
	}

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provinsi extends Model {
	protected $table      = "provinsi";
	protected $primaryKey = "id";
	protected $fildable   = ["name"];
}

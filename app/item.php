<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
	public $rules = ['nome' => 'required'];
	protected $fillable = array('nome');
}

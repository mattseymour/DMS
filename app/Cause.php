<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cause extends Model {

	protected $fillable = array('name', 'description', 'active', 'organisation_id');

}

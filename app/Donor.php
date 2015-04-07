<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model {

	protected $fillable = array('envelope_number', 'title', 'first_name', 'last_name', 'address', 'organisation_id');

}
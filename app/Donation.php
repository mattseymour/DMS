<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model {

	protected $fillable = array('envelope_id', 'amount', 'cause_id', 'user_id');

}

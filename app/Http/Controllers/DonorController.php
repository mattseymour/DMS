<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Donor;
use Request;
use Input;
use DB;
use Redirect;
use Validator;

class DonorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    
    	public function __construct()
	{
		$this->middleware('auth');
	}
    
    //return views for /Donors
    
	public function index($id)
	{
		$donors = Donor::where('organisation_id', $id)->get();
		return view('donors.donors')->with(array('id' => $id, 'donors'=>$donors));
	}
    
    public function view_donors($id)
	{
		$donors = donor::where('organisation_id', $id)->get();
        return view('donors.view_donors')->with('donors', $donors);
	}
    

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
		return view('donors.add_donor')->with('id', $id);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id)
	{
		$input = Request::all();
		$number = $input['envelope_number'];
		if (!empty($number))
		{
			Validator::extend('envelope_number_fail', function($attr, $value, $params){
				$exists = Donor::where(array('organisation_id' => $params[0], 'envelope_number' => Input::get('envelope_number')))->first();
				if ($exists){
					// true is false in this case. We want to fail if items does exist 
					return false;
				}
				return true;
			});
			$val = Validator::make($input, ['envelope_number'=>'envelope_number_fail:'.$id]);
			if ($val->fails())
			{
				return Redirect::to('/dashboard/'.$id.'/donor/create/')->withErrors($val);
			}
			$input['organisation_id'] = $id;
			$input['envelope_number'] = $number;
			$donor = Donor::create($input);
		}
		else
		{
			DB::beginTransaction();
			try{
				$latestEnvelope = Donor::where(array('organisation_id' =>$id))->orderBy('envelope_number', 'desc')->first();

				$input['organisation_id'] = $id;
		
				$input['envelope_number'] = $latestEnvelope->envelope_number + 1;
				$donor = Donor::create($input);
				DB::commit();
			}
			catch (Exception $e)
			{
				DB::rollback();

			}	
		}

        return redirect('/dashboard/'.$id.'/donor/view/'.$donor->id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	
	//where(array('organisation_id' => $params[0], 'envelope_number' => Input::get('envelope_number')))->first();
	public function show($id, $donor_id)
	{
			$donors = donor::where(array('organisation_id' => $id, 'id' => $donor_id))->get();
	        return view('donors.view_donors')->with('donors', $donors);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}

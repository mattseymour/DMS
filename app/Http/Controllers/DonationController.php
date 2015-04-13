<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cause;
use App\Donation;
use Request;
use Auth;

class DonationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		return view('donations.donations')->with('id', $id);
	}
	
	
	public function view_donations()
	{
		$donations = Donation::all();
        return view('donations.view_donations')->with('donations', $donations);
	}
	
	

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	
	//and fetch cause names for form
	public function create($id)
	{
        $causes = Cause::select('id', 'name')->where(array('organisation_id' => $id, 'active' => 1))->lists('name','id');
        return view('donations.add_donation')->with('causes', $causes)->with('id', $id);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id)
	{
		$input = Request::all();
		//get userID and push to array.
		$user = Auth::user()->id;
		$input['user_id'] = $user;
        
        $donation = Donation::create($input);
        
        return redirect('/dashboard/'.$id.'/donation/view/'.$donation->id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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

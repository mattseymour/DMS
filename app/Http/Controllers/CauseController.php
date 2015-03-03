<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cause;
use Request;

class CauseController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    
        
    	public function __construct()
	{
		$this->middleware('auth');
	}
    
    
    
	public function index($id)
	{
		$causes = Cause::where('organisation_id', $id)->get();
        return view('cause.causes')->with(array('causes'=>$causes, 'id'=>$id));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
		
		return view('cause.add_cause')->with('id', $id);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id)
	{
		// TODO check authenticaiton of organisation id
		$input = Request::all();
		$input['organisation_id'] = $id;
		$input['active'] = true;

        $cause = Cause::create($input);
        
        return redirect('/dashboard/'.$id.'/cause/show/'.$cause->id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id, $cause_id)
	{
		$cause = Cause::where(array('organisation_id' => $id, 'id' => $cause_id))->get();
		return view('cause.show')->with(array('cause' => $cause, 'id' => $id));
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

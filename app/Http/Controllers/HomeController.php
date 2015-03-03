<?php namespace App\Http\Controllers;
use App\organisation;
use DB;
use Auth;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}
    
   	public function organisationDashboard($id)
	{
		$organisation = organisation::where('id', $id)->first();
		// ->where('name', 'John')->first();
		return view('dashboard_organisation')->with('organisation', $organisation);
	}
	
	
	
	public function dashboard()
	{
		$user = Auth::getUser();
		$orgs = DB::table('users')
            ->join('organisation_user', 'users.id', '=', 'organisation_user.user_id')
            ->join('organisations', 'organisations.id', '=', 'organisation_user.organisation_id')
            ->select('organisations.id', 'organisations.name')
			->where ('users.id', $user->id)	
			->get(); 
		// $o = DB::table('organisations')->get();
		//$organisation = organisation::where('id', $id)->first();
		// ->where('name', 'John')->first();
	    // echo '<pre>';
	    // var_dump($o);
	    // echo '</pre>';
		return view('dashboard')->with('organisations', $orgs);
	}

}

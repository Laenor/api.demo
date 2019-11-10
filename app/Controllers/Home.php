<?php namespace App\Controllers;
use CodeIgniter\Controller;
class Home extends Controller {

	public function index(){
        header('Access-Control-Allow-Origin: *');
        $db = db_connect();
        $rows = $db->table('demandes')->get();
        $demande = $rows->getResult('App\Entities\Demande');
        return json_encode($demande);
	}




	//--------------------------------------------------------------------

}

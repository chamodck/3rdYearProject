<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function login(){
		$data = file_get_contents("php://input");
		$objData = json_decode($data,true);//json data decode to assosiative array

		$this->load->model('UserModel');
		$result=$this->UserModel->login($objData['data']['nic'],md5($objData['data']['password']));
		
		echo $result;
	}
}

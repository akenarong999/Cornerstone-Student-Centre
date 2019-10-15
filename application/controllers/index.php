<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
	   
	 }

	public function index()
	{
		$data['title'] = 'Cornerstone Student Centre | Where learning is FUN!';
		$this->load->view('mainhead_view',$data);
		$this->load->view('index_view');
		$this->load->view('bottom_view');
	}
}


?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
	   $this->load->model('edit_model');
	 }

	public function index()
	{

		if($this->session->userdata('logged_in')) //////////////// login เข้า blog ได้แล้ว
   			{     

			$data['title'] = 'AdminPanel Index - Cornerstone';
			$this->load->view('head_view',$data);
			$this->load->view('adminmenu_view',$data);
			$this->load->view('admin_view');
			$this->load->view('bottom_view');
			}

		else{
			echo "<script>alert('Please Login.')</script>";
			redirect('admin/login', 'refresh');
			}


	}

	public function login()
	{
		if(!$this->session->userdata('logged_in')) //////////////// login เข้า blog ได้แล้ว
	   		{  
			$data['title'] = 'Login Page - Cornerstone';
			$this->load->view('head_view',$data);
			$this->load->view('login_view');
			$this->load->view('bottom_view');
			}
		else
			{

			redirect('admin/index', 'refresh');
			}
	}

	function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('admin/index', 'refresh');
    }

    public function editwelcomemessage()
	{

		if($this->session->userdata('logged_in')) //////////////// login เข้า blog ได้แล้ว
   			{     

			$data['title'] = 'Edit Welcome Message - Cornerstone';
			$this->load->view('head_view',$data);
			$this->load->view('adminmenu_view',$data);
			$this->load->view('editwelcomemessage_view');
			$this->load->view('bottom_view');
			}

		else{
			echo "<script>alert('Please Login.')</script>";
			redirect('admin/login', 'refresh');
			}


	}

    public function editourstory()
	{

		if($this->session->userdata('logged_in')) //////////////// login เข้า blog ได้แล้ว
   			{     

			$data['title'] = 'Edit Our Story - Cornerstone';
			$this->load->view('head_view',$data);
			$this->load->view('adminmenu_view',$data);

			$data['ourstorytaglinemessage'] = $this->edit_model->_getlatestourstorytaglinemessage();
			$this->load->view('editourstory_view',$data);

			$this->load->view('bottom_view');
			}

		else{
			echo "<script>alert('Please Login.')</script>";
			redirect('admin/login', 'refresh');
			}


	}


	public function doeditourstorytagline()
	{

		if($this->session->userdata('logged_in')) //////////////// login เข้า blog ได้แล้ว
   			{     
   				$message = $this->input->post('message');
   				$target_dir = "uploads/";
				$target_file = $target_dir . basename($_FILES["file"]["name"]);
				$uploadOk = 1;
				$type = end(explode(".", basename($_FILES["file"]["name"])));
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				$photoname = basename($_FILES["file"]["name"]);
				if(isset($_POST["submit"])) {
				    $check = getimagesize($_FILES["file"]["tmp_name"]);
				    if($check !== false) {
				      //  echo "File is an image - " . $check["mime"] . ".";
				    	move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$photoname);
				        $uploadOk = 1;
				    } else {
				      //  echo "File is not an image.";
				    	echo "<script>This file is not an image.</script>";
				        $uploadOk = 0;
				    }
				}

			$message = nl2br($message);
			$this->edit_model->_editourstorytagline($message, $photoname);
			redirect('admin/editourstory', 'refresh');	
			
			}

		else{
			echo "<script>alert('Please Login.')</script>";
			redirect('admin/login', 'refresh');
			}


	}





	public function editourteam()
	{

		if($this->session->userdata('logged_in')) //////////////// login เข้า blog ได้แล้ว
   			{     

			$data['title'] = 'Edit Our Team - Cornerstone';
			$this->load->view('head_view',$data);
			$this->load->view('adminmenu_view',$data);
			$this->load->view('editourteam_view');
			$this->load->view('bottom_view');
			}

		else{
			echo "<script>alert('Please Login.')</script>";
			redirect('admin/login', 'refresh');
			}


	}

	public function editourprogram()
	{

		if($this->session->userdata('logged_in')) //////////////// login เข้า blog ได้แล้ว
   			{     

			$data['title'] = 'Edit Our Program - Cornerstone';
			$this->load->view('head_view',$data);
			$this->load->view('adminmenu_view',$data);
			$this->load->view('editourprogram_view');
			$this->load->view('bottom_view');
			}

		else{
			echo "<script>alert('Please Login.')</script>";
			redirect('admin/login', 'refresh');
			}


	}

	public function editlocation()
	{

		if($this->session->userdata('logged_in')) //////////////// login เข้า blog ได้แล้ว
   			{     

			$data['title'] = 'Edit Location - Cornerstone';
			$this->load->view('head_view',$data);
			$this->load->view('adminmenu_view',$data);
			$this->load->view('editlocation_view');
			$this->load->view('bottom_view');
			}

		else{
			echo "<script>alert('Please Login.')</script>";
			redirect('admin/login', 'refresh');
			}


	}





}


?>
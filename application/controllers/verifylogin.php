<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user_model','',TRUE);

 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('');

   $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {

      redirect('admin/login', 'refresh');
   }
   else
   {
     //Go to private area
     redirect('admin/index', 'refresh');
   }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->user_model->login($username, $password);
  
   if($result)
   {

     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'username' => $row->username,
       );

       $this->session->set_userdata('logged_in', $sess_array);
     }
     echo "<script>alert('You are logged in.')</script>";
      return TRUE;

   }
   else
   {
    echo "<script>alert('Invalid username or password.')</script>";    
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }




}
?>
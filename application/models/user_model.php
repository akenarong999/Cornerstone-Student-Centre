<?php
Class User_model extends CI_Model
  {

    public function __construct()
          {
            parent::__construct();
            $this->load->database();
            $this->load->library('encrypt');
          }

    function login($username, $password)
         {

          $this -> db -> select('*');
          $this -> db -> from('admin');
          $this -> db -> where('username', $username);
          $this -> db -> where('password', MD5($password));
          $this -> db -> limit(1);

            $query = $this -> db -> get();

            if($query -> num_rows() == 1)
               {
    
                 return $query->result();
               }
            else
               {
        
                 return false;
               }
         

           }


   

      function getuserdata($id) {
           $q = $this->db->query("SELECT Type FROM useraccount WHERE UseraccountID='".$id."'");
          $type = $q->row('Type');
          

          if ($type=="1"){
          $this -> db -> select('*');
          $this -> db -> from('useraccount');

          $join = 'inner';
          $this->db->join('photographer', 'useraccount.UseraccountID = photographer.UseraccountID', $join);

          
          $this -> db -> where('useraccount.UseraccountID', $id);
          $this -> db -> limit(1);
      
          $query = $this -> db -> get();
          return $query->result_array();
        }

          if ($type=="2"){
          $this -> db -> select('*');
          $this -> db -> from('useraccount');

          $join = 'inner';
          $this->db->join('client', 'useraccount.UseraccountID = client.UseraccountID', $join);

          
          $this -> db -> where('useraccount.UseraccountID', $id);
          $this -> db -> limit(1);
      
          $query = $this -> db -> get();
          return $query->result_array();
        }



        }




}

  ?>

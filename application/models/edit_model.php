<?php
error_reporting(0);
Class Edit_model extends CI_Model
  {

    public function __construct()
          {
            parent::__construct();
            $this->load->database();
            $this->load->library('encrypt');
          }

    function _editourstorytagline($ourstorytaglinemessage, $ourstorytaglinephotoname)
         {

          $query = $this->db->query("INSERT INTO ourstorytagline(id, message, photoname) VALUES (null,'".$ourstorytaglinemessage."','".$ourstorytaglinephotoname."')");

          }

    function _getlatestourstorytaglinemessage(){
            $query = $this->db->query("SELECT * FROM ourstorytagline ORDER BY id DESC");
            return $query->row('message');

           
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

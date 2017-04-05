<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

	  public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }

	public function insert($post)
	{
     $this->name=$post['name'];
     $this->email=$post['email'];
     $this->comment=$post['comment'];
     $this->db->insert('contactus',$this);
     echo "success";
	}
}
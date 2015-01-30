<?php

class Dashboard extends CI_Controller {
    
    public function index()
    {
        $this->load->view('dashboard/inc/header_v');
        $this->load->view('dashboard/inc/navigation_v');
        $this->load->view('dashboard/dashboard');
        $this->load->view('dashboard/inc/footer_v');       
    }
    
    public function logout()
    {
        session_destroy();
        redirect('home/login');
    }
    
    public function dbtest()
    {
        $query = $this->db->get_where('user_accounts', array('uacc_id' => 1));
        
        
      // $query = $this->db->get_where('user_accounts', ['uacc_id' => 1]);
       //$this->db->where(['uacc_id' => 1]);

        print_r($query->result());
       //foreach ($query->result() as $row)
       //{
        
          // print_r($row);
            //echo $row->uacc_username;
       // echo "<br/>";
      // }
       
    }
                
      
}

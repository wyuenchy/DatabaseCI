<?php
class Pages extends CI_Controller{
  public function view($page='home'){
      if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
        show_404();
      }
      $this->load->database();
      $query="SELECT session_title,trainer_name,organizer_name,date,venue_name,time,no_of_tickets,level,session_ID "
      ."FROM organizer"
      ." NATURAL JOIN session"
      ." NATURAL JOIN sports_session"
      ." NATURAL JOIN trainer"
      ." NATURAL JOIN venue"
      ." WHERE is_featured='1'";
  		$sql_query = $this->db->query($query);
  		$data["session"] = $sql_query;

      $data['title']=ucfirst($page);
      $this->load->view('/template/header');
      $this->load->view('/template/nav');
      $this->load->view('pages/'.$page,$data);
      $this->load->view('/template/footer');

  }
  public function browse(){
    $this->load->database();
    $query="SELECT session_title,trainer_name,organizer_name,date,venue_name,time,no_of_tickets,level,session_ID "
    ."FROM organizer"
    ." NATURAL JOIN session"
    ." NATURAL JOIN sports_session"
    ." NATURAL JOIN trainer"
    ." NATURAL JOIN venue";
		$sql_query = $this->db->query($query);
		$data["session"] = $sql_query;
    $this->load->view('/template/header');
    $this->load->view('/template/nav');
    $this->load->view('/pages/browse',$data);
    $this->load->view('/template/footer');
  }
  public function details(){
    $this->load->database();
    $query="SELECT *"
    // session_title,trainer_name,organizer_name,date,venue_name,time,no_of_tickets,level,session_ID
    ."FROM organizer"
    ." NATURAL JOIN session"
    ." NATURAL JOIN sports_session"
    ." NATURAL JOIN trainer"
    ." NATURAL JOIN venue"
    ." WHERE session_ID='"
    .$this->uri->segment(3)
    ."'";
    $sql_query = $this->db->query($query);
    $data["session"] = $sql_query;
    $this->load->view('/template/header');
    $this->load->view('/template/nav');
    $this->load->view('/pages/details',$data);
    $this->load->view('/template/footer');
  }
}
 ?>

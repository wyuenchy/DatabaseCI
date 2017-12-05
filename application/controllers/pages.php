<?php
class Pages extends CI_Controller{
  public function view($page='home'){
      if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
        show_404();
      }
      $this->load->database();
      $query="SELECT DISTINCT session_title,trainer_name,organizer_name,date,venue_name,DATE_FORMAT(start_time, '%H:%i')as'time',no_of_tickets,level,session_ID "
      ."FROM organizer"
      ." NATURAL JOIN session"
      ." NATURAL JOIN trainer"
      ." NATURAL JOIN venue"
      ." NATURAL JOIN session_organizer"
      ." NATURAL JOIN session_trainer"
      ." NATURAL JOIN session_venue"
      ." NATURAL JOIN sport_cat"
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
    $query="SELECT DISTINCT session_title,trainer_name,organizer_name,date,venue_name,DATE_FORMAT(start_time, '%H:%i')as'time',no_of_tickets,level,session_ID "
    ."FROM organizer"
    ." NATURAL JOIN session"
    ." NATURAL JOIN trainer"
    ." NATURAL JOIN venue"
    ." NATURAL JOIN session_organizer"
    ." NATURAL JOIN session_trainer"
    ." NATURAL JOIN session_venue"
    ." NATURAL JOIN sport_cat";
		$sql_query = $this->db->query($query);
		$data["session"] = $sql_query;
    $this->load->view('/template/header');
    $this->load->view('/template/nav');
    $this->load->view('/pages/browse',$data);
    $this->load->view('/template/footer');
  }
  public function details(){
    // $this->load->database();
    // $query="SELECT *"
    // // session_title,trainer_name,organizer_name,date,venue_name,time,no_of_tickets,level,session_ID
    // ."FROM organizer"
    // ." NATURAL JOIN session"
    // ." NATURAL JOIN trainer"
    // ." NATURAL JOIN venue"
    // ." NATURAL JOIN session_organizer"
    // ." NATURAL JOIN session_trainer"
    // ." NATURAL JOIN session_venue"
    // ." NATURAL JOIN sport_cat";
    // // .$this->uri->segment(3)
    // // ."'";
    // $sport_query = "SELECT DISTINCT category"
    // "FROM organizer"
    // "NATURAL JOIN session"
    // "NATURAL JOIN trainer"
    // "NATURAL JOIN venue"
    // "NATURAL JOIN session_organizer"
    // "NATURAL JOIN session_trainer"
    // "NATURAL JOIN session_venue"
    // "NATURAL JOIN sport_cat"
    // "WHERE session_ID='"
    //
    // "'"
    $sql_query = $this->db->query($query);
    $data["session"] = $sql_query;
    $this->load->view('/template/header');
    $this->load->view('/template/nav');
    $this->load->view('/pages/details',$data);
    $this->load->view('/template/footer');
  }
}
 ?>

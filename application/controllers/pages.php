<?php
class Pages extends CI_Controller{
  public function view($page='home'){
      if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
        show_404();
      }
      $this->load->database();
      $query="SELECT DISTINCT DATE_FORMAT(TIMEDIFF(start_time, end_time), '%H')-20 as'duration',session_title,date,venue_name,DATE_FORMAT(start_time, '%H:%i')as'time',no_of_tickets,level,session_ID,category,ticket_price "
      ."FROM organizer"
      ." NATURAL JOIN session"
      ." NATURAL JOIN trainer"
      ." NATURAL JOIN venue"
      ." NATURAL JOIN session_organizer"
      ." NATURAL JOIN session_trainer"
      ." NATURAL JOIN session_venue"
      ." NATURAL JOIN sport_cat"
      ." WHERE is_featured='1'"
      ." AND sport_cat=cat_id";
  		$sql_query = $this->db->query($query);
  		$data["session"] = $sql_query;
      $feature_org="SELECT organizer_name,organizer_ID FROM organizer WHERE org_featured='1'";
      $sql_query_org = $this->db->query($feature_org);
      $data["organizer"] = $sql_query_org;
      $feature_trainer="SELECT trainer_name,trainer_ID FROM trainer WHERE tr_featured='1'";
      $sql_query_tr = $this->db->query($feature_trainer);
      $data["trainer"] = $sql_query_tr;
      $cat_query="SELECT category FROM sport_cat";
      $sql_query_cat = $this->db->query($cat_query);
      $data["category"] = $sql_query_cat;
      $data['title']=ucfirst($page);
      $this->load->view('/template/header');
      $this->load->view('/template/nav');
      $this->load->view('pages/'.$page,$data);
      $this->load->view('/template/recommand');
      $this->load->view('/template/footer');

  }
  public function browse(){
    $this->load->database();
    $query="SELECT DISTINCT DATE_FORMAT(TIMEDIFF(start_time, end_time), '%H')-20 as'duration',session_title,date,venue_name,DATE_FORMAT(start_time, '%H:%i')as'time',no_of_tickets,level,session_ID,category,ticket_price "
    ."FROM organizer"
    ." NATURAL JOIN session"
    ." NATURAL JOIN trainer"
    ." NATURAL JOIN venue"
    ." NATURAL JOIN session_organizer"
    ." NATURAL JOIN session_trainer"
    ." NATURAL JOIN session_venue"
    ." NATURAL JOIN sport_cat"
    ." WHERE sport_cat=cat_id";

		$sql_query = $this->db->query($query);
		$data["session"] = $sql_query;
    $this->load->view('/template/header');
    $this->load->view('/template/nav');
    $this->load->view('/pages/browse',$data);
    $this->load->view('/template/footer');
  }
  public function details(){
    $this->load->database();
    $query="SELECT DISTINCT DATE_FORMAT(TIMEDIFF(start_time, end_time), '%H')-20 as'duration',session_ID,session_title,date,venue_name,DATE_FORMAT(start_time, '%H:%i')as'time',no_of_tickets,ticket_available,level,session_ID,category,ticket_price"
    // session_title,trainer_name,organizer_name,date,venue_name,time,no_of_tickets,level,session_ID
    ." FROM organizer"
    ." NATURAL JOIN session"
    ." NATURAL JOIN trainer"
    ." NATURAL JOIN venue"
    ." NATURAL JOIN session_organizer"
    ." NATURAL JOIN session_trainer"
    ." NATURAL JOIN session_venue"
    ." NATURAL JOIN sport_cat"
    ." WHERE sport_cat=cat_id"
    ." AND session_ID='"
    .$this->uri->segment(3)
    ."'";
    $sql_query = $this->db->query($query);
    $data["session"] = $sql_query;

    $query_organizer="SELECT organizer_name,organizer_ID"
    ." FROM session_organizer"
    ." NATURAL JOIN session"
    ." NATURAL JOIN organizer"
    ." WHERE session_ID='"
    .$this->uri->segment(3)
    ."'";
    $sql_query_org = $this->db->query($query_organizer);
    $data["org"] = $sql_query_org;

    $query_trainer="SELECT trainer_name,trainer_ID"
    ." FROM session_trainer"
    ." NATURAL JOIN session"
    ." NATURAL JOIN trainer"
    ." WHERE session_ID='"
    .$this->uri->segment(3)
    ."'";
    $sql_query_trainer = $this->db->query($query_trainer);
    $data["trainer"] = $sql_query_trainer;

    $this->load->view('/template/header');
    $this->load->view('/template/nav');
    $this->load->view('/pages/details',$data);
    $this->load->view('/template/footer');
  }
  public function trainer(){
    $this->load->database();
    $query="SELECT *"
    ." FROM trainer"
    ." where trainer_ID='"
    .$this->uri->segment(3)
    ."'";
    $sql_query = $this->db->query($query);
    $data["trainer"] = $sql_query;

    $query_session="SELECT DISTINCT DATE_FORMAT(TIMEDIFF(start_time, end_time), '%H')-20 as'duration',session_title,date,venue_name,DATE_FORMAT(start_time, '%H:%i')as'time',no_of_tickets,level,session_ID,category,ticket_price "
    ."FROM organizer"
    ." NATURAL JOIN session"
    ." NATURAL JOIN trainer"
    ." NATURAL JOIN venue"
    ." NATURAL JOIN session_organizer"
    ." NATURAL JOIN session_trainer"
    ." NATURAL JOIN session_venue"
    ." NATURAL JOIN sport_cat"
    ." WHERE sport_cat=cat_id"
    ." AND trainer_ID='"
    .$this->uri->segment(3)
    ."'";

    $sql_query_session = $this->db->query($query_session);
    $data["session"] = $sql_query_session;

    $this->load->view('/template/header');
    $this->load->view('/template/nav');
    $this->load->view('/pages/trainer',$data);
    $this->load->view('/template/footer');
  }
  public function org(){
    $this->load->database();
    $query="SELECT *"
    ." FROM organizer"
    ." where organizer_ID='"
    .$this->uri->segment(3)
    ."'";
    $sql_query = $this->db->query($query);
    $data["org"] = $sql_query;

    $query_session="SELECT DISTINCT DATE_FORMAT(TIMEDIFF(start_time, end_time), '%H')-20 as'duration',session_title,date,venue_name,DATE_FORMAT(start_time, '%H:%i')as'time',no_of_tickets,level,session_ID,category,ticket_price "
    ."FROM organizer"
    ." NATURAL JOIN session"
    ." NATURAL JOIN trainer"
    ." NATURAL JOIN venue"
    ." NATURAL JOIN session_organizer"
    ." NATURAL JOIN session_trainer"
    ." NATURAL JOIN session_venue"
    ." NATURAL JOIN sport_cat"
    ." WHERE sport_cat=cat_id"
    ." AND organizer_ID='"
    .$this->uri->segment(3)
    ."'";

    $sql_query_session = $this->db->query($query_session);
    $data["session"] = $sql_query_session;

    $this->load->view('/template/header');
    $this->load->view('/template/nav');
    $this->load->view('/pages/org',$data);
    $this->load->view('/template/footer');
  }
  public function price(){
    $this->load->database();
    switch($this->uri->segment(3)){
      case "1":
      $range="ticket_price BETWEEN 0 AND 100";
      break;
      case "2":
      $range="ticket_price BETWEEN 100 AND 400";
      break;
      case "3":
      $range="ticket_price BETWEEN 400 AND 750";
      break;
      case "4":
      $range="ticket_price BETWEEN 750 AND 1000";
      break;
      case "5":
      $range="ticket_price >1000";
      break;
    }
    $query_session="SELECT DISTINCT DATE_FORMAT(TIMEDIFF(start_time, end_time), '%H')-20 as'duration',session_title,date,venue_name,DATE_FORMAT(start_time, '%H:%i')as'time',no_of_tickets,level,session_ID,category,ticket_price "
    ."FROM organizer"
    ." NATURAL JOIN session"
    ." NATURAL JOIN trainer"
    ." NATURAL JOIN venue"
    ." NATURAL JOIN session_organizer"
    ." NATURAL JOIN session_trainer"
    ." NATURAL JOIN session_venue"
    ." NATURAL JOIN sport_cat"
    ." WHERE sport_cat=cat_id"
    ." AND "
    .$range;
    $sql_query_session = $this->db->query($query_session);
    $data["session"] = $sql_query_session;

    $this->load->view('/template/header');
    $this->load->view('/template/nav');
    $this->load->view('/pages/price',$data);
    $this->load->view('/template/footer');
  }

  public function search(){
    $this->load->database();

    $keywordC= $this->input->get('keyword');
    $query = "SELECT DISTINCT session_ID,session_title,date,DATE_FORMAT(start_time, '%H:%i') as'time',DATE_FORMAT(TIMEDIFF(start_time, end_time), '%H')-20 as'duration',format,level,short_description,trainer_name,organizer_name,ticket_price"
        ." FROM session "
       ."NATURAL JOIN session_organizer "
       ."NATURAL JOIN session_trainer "
       ."NATURAL JOIN organizer "
       ."NATURAL JOIN trainer ";

       if(!empty($keywordC)){
           $query .= "WHERE session_title LIKE '%". $keywordC . "%'";
           $query .= "OR long_description LIKE '%". $keywordC . "%'";
           $query .= "OR  trainer_name LIKE '%". $keywordC . "%'";
           $query .= "OR organizer_name LIKE '%". $keywordC . "%'";
         }
         $query.= " ORDER BY date,time";


    $sql_query = $this->db->query($query);
		$data["session"] = $sql_query;


    $this->load->view('/template/header');
    $this->load->view('/template/nav');

    $this->load->view('/pages/search',$data);
    $this->load->view('/template/footer');
  }
}
 ?>

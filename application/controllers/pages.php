<?php
class Pages extends CI_Controller{
  public function view($page='home'){
      if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
        show_404();
      }
      $data['title']=ucfirst($page);
      $this->load->view('/template/header');
      $this->load->view('/template/nav');
      $this->load->view('pages/'.$page,$data);
      $this->load->view('/template/footer');

  }
  public function browse(){
    $this->load->database();
		$sql_query = $this->db->query('SELECT * FROM session');
		$data["session"] = $sql_query;
    $this->load->view('/template/header');
    $this->load->view('/template/nav');
    $this->load->view('/pages/browse',$data);
    $this->load->view('/template/footer');
  }
}
 ?>

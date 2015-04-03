<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Campaing extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library('tank_auth');
    }
    function add(){
        $data = array(
            'title' => $this->input->post('title'),
            'category' => $this->input->post('campaing_type'),
            'u_id' => $this->tank_auth->get_user_id()
        );
        $this->Campaing_model->add($data);
        redirect("welcome/index");
    }
    function updatecampaign($campaing_id){
        $data = array(
            'title' => $this->input->post('campaign_name'),
            'display_name' => $this->input->post('display_name'),
            'category' => $this->input->post('campaing_type')
        );
        $this->Campaing_model->updatecampaign($data,$campaing_id);
        redirect('welcome/editcampaign/settings/'.$campaing_id);
    }
}
?>
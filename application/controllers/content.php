<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Content extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library('tank_auth');
    }
    function add(){
        $this->load->view("file_view");
        $data = array(
            'imd_id' => $this->input->post('img_id'),
            'url' => $this->input->post('url'),
            'posx' => $this->input->post('posx'),
            'posy' => $this->input->post('posy'),
            'width' => $this->input->post('width'),
            'height' => $this->input->post('height')
        );
        $this->Content_model->add($data);
    }
    function updatecontent($campaing_id){
    }
}
?>
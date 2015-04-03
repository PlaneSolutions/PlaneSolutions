<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Upload_File extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
    }
    public function do_upload($campaign_id){
        $config = array(
            'upload_path' => "public/img/uploads",
            'allowed_types' => "jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "768",
            'max_width' => "1024"
        );
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload())
        {
            $edit = 'edit';
            $data = array('upload_data' => $this->upload->data(),'edit' => $edit);
            redirect('welcome/editcampaign/edit/'.$campaign_id);
        }
        else
        {
            $error = array('error' => $this->upload->display_errors(),'path' => $config['upload_path']);
            $this->load->view('file_view', $error);
        }
    }
}
?>
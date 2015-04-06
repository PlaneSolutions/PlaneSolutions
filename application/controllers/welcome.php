<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
        $this->load->helper('form');
		$this->load->library('tank_auth');
        $this->load->library('parser');
	}

	function index()
	{

        /*//Converting XML into Json object
        $feed = file_get_contents('http://geovideos.tv/category/geo-news/geo-headlines/feed/');
        $xmlNode = simplexml_load_string($feed);
        echo json_encode($xmlNode);*/

		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
            $data['campaings'] = $this->Campaing_model->get_all_campaings($this->tank_auth->get_user_id());
			$this->load->view('welcome_page', $data);
		}
	}
    function editcampaign($tab,$campaing_id){
        $data['tab'] = $tab;
        $data['campaing'] = $this->Campaing_model->get_campaing($this->tank_auth->get_user_id(),$campaing_id);
        $data['username'] = $this->tank_auth->get_username();
        $data['pages'] = $this->Pages_model->get_all_images($this->tank_auth->get_user_id(),$campaing_id);
        $this->load->view('editcampaign',$data);
    }
}

/* End of file avien.php */
/* Location: ./application/controllers/avien.php */
<?php
class Campaing_model extends CI_Model {

    function get_all_campaings($user_id){
        $query = $this->db->get_where('campaings',array('u_id' => $user_id));
        return $query->result();
    }
    function add($data){
        $this->db->insert('campaings', $data);
        return;
    }
    function get_campaing($user_id,$campaing_id){
        $query = $this->db->get_where('campaings',array('u_id' => $user_id,'id' => $campaing_id));
        return $query->result();
    }
    function updatecampaign($data,$campaing_id){
        $this->db->where('id' ,$campaing_id);
        $this->db->update('campaings',$data);
    }
}
?>
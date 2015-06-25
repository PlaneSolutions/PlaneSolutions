<?php
class Content_model extends CI_Model {

    function get_all_contents($page_id){
        $query = $this->db->get_where('contents',array('u_id' => $page_id));
        return $query->result();
    }
    function add($data){
        $this->db->insert('contents', $data);
        return;
    }
    function get_contents($content_id,$page_id){
        $query = $this->db->get_where('images_content',array('content_id' => $content_id,'img_id' => $page_id));
        return $query->result();
    }
    function updatecontents($data,$content_id){
        $this->db->where('id' ,$content_id);
        $this->db->update('contents',$data);
    }
}
?>
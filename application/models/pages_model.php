<?php
class Pages_model extends CI_Model {

    function get_all_images($user_id,$campaing_id){
        $query = $this->db->get_where('images',array('u_id' => $user_id,'campaing_id' => $campaing_id));
        return $query->result();
    }
    function uploadimage($image_data = array(), $other_data){
        /*print_r($image_data);die;*/
        $data = array(
            'name' => $image_data['upload_data']['file_name'],
            'width' => $image_data['upload_data']['image_width'],
            'height' => $image_data['upload_data']['image_height'],
            'type' => $other_data['type'],
            'url' => $image_data['upload_data']['full_path'],
            'u_id' => $other_data['u_id'],
            'campaing_id' => $other_data['campaign_id'],
        );
        $query = $this->db->get_where('campaings' ,array('id' => $other_data['campaign_id']));
        $check = $query->result();
        if($check[0]->number_of_pages == 0){
            $this->db->where('id', $other_data['campaign_id']);
            $this->db->set('thumbnail_img', $image_data['upload_data']['file_name']);
            $this->db->update('campaings');

        }
        $this->db->insert('images',$data);
        $this->db->where('id', $other_data['campaign_id']);
        $this->db->set('number_of_pages', 'number_of_pages+1', FALSE);
        $this->db->update('campaings');
    }
}
?>
<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/28/2017
 * Time: 8:41 PM
 */
class User_model extends CI_Model{

    //------------------------------------------------------------------------------------------------------------------
    public function get($user_id=NULL){
        if($user_id===NULL){
            $q=$this->db->get('registered_users');
        }elseif (is_array($user_id)){
            $q=$this->db->get_where('registered_users',$user_id);
        }else{
            $q=$this->get->get_where('registered_users',['idregistered_users'=> $user_id]);
        }

        return $q->result_array();

    }

    //------------------------------------------------------------------------------------------------------------------

    public function insert_details($data){
        $this->db->insert('registered_users',$data);
        return $this->db->insert_id();
    }

    //------------------------------------------------------------------------------------------------------------------

}
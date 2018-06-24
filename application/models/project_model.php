<?php
class Project_model extends CI_Model{

public function get_projects(){

    $this->db->select("*");
    $this->db->from("projects");
    $this->db->order_by("project_id", "asc");
    $query = $this->db->get();
    return $query->result();

}
}
<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/3/2017
 * Time: 1:58 PM
 */

class Projects extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('project_model');
        $this->load->helper('url');


    }

    public function index() {
        $data['project_list'] = $this->project_model->get_projects();
        $this->load->view('projects/projects_view', $data);
    }

}
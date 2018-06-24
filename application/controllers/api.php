<?php

class Api extends CI_Controller
{
    //------------------------------------------------------------------------------------------------------------------
    public function __construct()
    {
        parent::__construct();

    }

    //------------------------------------------------------------------------------------------------------------------

    private function require_login(){
        if ($this->session->userdata('user_id')==false){
            $this->output->set_output(json_encode(['result'=>0,error=>'You are not authorized']));

        }
    }

    //------------------------------------------------------------------------------------------------------------------

    public function login(){

        $this->load->model('user_model');

        $email=$this->input->POST('email');
        $password=$this->input->POST('password');

        $results=$this->user_model->get(
            [
                'email'=> $email,
                'password'=>hash('sha256',$password.additional_hash)


            ]);
        $this->output->set_content_type('application_json');
        if ($results){
            $this->session->set_userdata(['user_id'=>$results[0]['idregistered_users']]);
            $this->output->set_output(json_encode(['result'=>1]));
            return false;
        }
        $this->output->set_output(json_encode(['result'=>0]));

    }


    //------------------------------------------------------------------------------------------------------------------

    public function register(){



        $this->output->set_content_type('application_json');

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('tp','Telephone Number','required|min_length[10]|max_length[15]');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('company_email','Company Email','valid_email');
        $this->form_validation->set_rules('password','Password','required|min_length[4]');
        $this->form_validation->set_rules('confirm_password','Confirm Password','required|min_length[4]|matches[password]');


        if ($this->form_validation->run()==false){
            $this->output->set_output(json_encode(['result'=>0,'error'=>$this->form_validation->error_array()]));
            return false;
        }


        $name=$this->input->POST('name');
        $address=$this->input->POST('address');
        $tp=$this->input->POST('tp');
        $email=$this->input->POST('email');
        $job=$this->input->POST('job');
        $company_name=$this->input->POST('company_name');
        $company_address=$this->input->POST('company_address');
        $company_tp=$this->input->POST('company_tp');
        $company_email=$this->input->POST('company_email');
        $profile_picture=$this->input->POST('profile_picture');
        $bank_branch=$this->input->POST('bank_branch');
        $holders_name=$this->input->POST('acHolders_name');
        $account_number=$this->input->POST('account_number');
        $bank_name=$this->input->POST('bank_name');
        $paypal_account_number=$this->input->POST('paypal_account_number');
        $password=$this->input->POST('password');
        $confirm_password=$this->input->POST('confirm_password');

        $this->load->model('user_model');

        $results=$this->user_model->insert_details([
            'name'=>$name,
            'address'=>$address,
            'tp'=>$tp,
            'email'=>$email,
            'job_position'=>$job,
            'company_name'=>$company_name,
            'company_address'=>$company_address,
            'company_email'=>$company_email,
            'company_tp'=>$company_tp,
            'profile_picture'=>$profile_picture,
            'bank_name'=>$bank_name,
            'bank_branch'=>$bank_branch,
            'acHolders_name'=>$holders_name,
            'account_number'=>$account_number,
            'paypal_account_number'=>$paypal_account_number,
            'password'=>hash('sha256',$password.additional_hash)
        ]);
        if ($results){
            $this->output->set_output(json_encode(['result'=>1]));
            return false;
        }


    }

    //------------------------------------------------------------------------------------------------------------------

    public function create_project(){

        $this->require_login();

        $this->form_validation->set_rules('project_content','Content','required');
        if ($this->form_validation->run()==false){
            $this->output->set_output(json_encode([
                'result'=>0,
                'error'=>$this->form_validation->error_array()

            ]));
            return false;

        }

        $result=$this->db->insert('projects',[
            'project_title'=>$this->input->post('project_name'),
            'content'=>$this->input->post('project_content'),
            'idregistered_users'=>$this->session->userdata('user_id')
        ]);
        $this->output->set_content_type('application_json');
        if ($result){
            //get the freshest entry for the DOM
            $query=$this->db->get_where('projects',['project_id'=>$this->db->insert_id()]);
            $result=$query->result();
            $this->output->set_output(json_encode([
                'result'=>1,
                'data'=>$result

            ]));
            return false;
        }
        $this->output->set_output(json_encode(['result'=>0,'error'=>'Could not insert the project datails']));



    }
    //-------------------------------------------------------------------------------------------------------------------

    public function get_project($id=null){
        $this->require_login();

        if ($id!=null){
            $this->db->where([

                'project_id'=>$id,
                'idregistered_users'=>$this->session->userdata('user_id')

            ]);
        }else{
            $this->db->where('idregistered_users',$this->session->userdata('user_id'));
        }
        $query=$this->db->get('projects');
        $result=$query->result();
        $this->output->set_output(json_encode($result));




    }

    //------------------------------------------------------------------------------------------------------------------

    public function update_project(){

        $this->require_login();
        $project_id=$this->input->post('project_id');

    }

    //------------------------------------------------------------------------------------------------------------------


    public function delete_project(){

        $this->require_login();
        $project_id=$this->input->post('project_id');

    }

    //------------------------------------------------------------------------------------------------------------------

    public function create_event(){

        $this->require_login();

    }

    //------------------------------------------------------------------------------------------------------------------
    //-------------------------------------------------------------------------------------------------------------------

    public function get_event(){

        $this->require_login();
    }

    //------------------------------------------------------------------------------------------------------------------

    public function update_event(){

        $this->require_login();
        $event_id=$this->input->post('event_id');
    }

    //------------------------------------------------------------------------------------------------------------------


    public function delete_event(){

        $this->require_login();
        $event_id=$this->input->post('event_id');

    }
    //------------------------------------------------------------------------------------------------------------------


}
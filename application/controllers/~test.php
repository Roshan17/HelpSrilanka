<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/28/2017
 * Time: 8:43 PM
 */
class Test extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function login(){

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



        die('Not Yet');

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
}
?>
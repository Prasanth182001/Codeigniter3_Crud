<?php
class home extends CI_Controller{
    public function index()
    {
        $this->load->model("Data_model");
        $result['Table'] = $this->Data_model->get_data();

        $this->load->view("Home_Page",$result);
    }

    public function register(){
        $this->load->view("Register_Form");
    }

    public function add(){
        extract($_POST);
        $data=[
            'Student_Name'=>$stdname,
            'Student_Age'=>$stdage,
            'Student_City'=>$stdcity,
            'Student_Number'=>$stdnumber,
        ];

        $this->load->model("Data_model");
        $result = $this->Data_model->insert_data($data);

        if($result){
            redirect(base_url("home/index"));
        }else{
            echo "Error while inserting data";
        }
    }

    public function view($Id)
    {
        $this->load->model("Data_model");
        $result['v_data'] = $this->Data_model->view_data($Id);
        $this->load->view("Home_Page",$result);
    }

    public function edit($Id)
    {
        $this->load->model("Data_model");
        $result['data'] = $this->Data_model->edit_data($Id);
        $this->load->view("Home_Page",$result);

    }

    public function update()
    {
        extract($_POST);
        $Id=$stdid;
        $data=[
            'Student_Name'=>$stdname,
            'Student_Age'=>$stdage,
            'Student_City'=>$stdcity,
            'Student_Number'=>$stdnumber,
        ];
        $this->load->model("Data_model");
        $result=$this->Data_model->update_data($data,$Id);
        if($result){
            $this->index();
        }
    }
    
    public function delete($Id)
    {
        $this->load->model("Data_model");
        $this->Data_model->delete_data($Id);
        redirect(base_url("home/index"));
    }
}


































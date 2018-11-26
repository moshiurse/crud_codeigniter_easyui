<?php

class Student extends CI_Controller{
    
function __construct(){
    parent::__construct();

    $this->load->model('StudentModel');
}

public function index()
    {
        $data['students'] = $this->StudentModel->get_student();

        $this->load->view("pages/student", $data);
    }

    public function employee()
    {
        $data['students'] = $this->StudentModel->get_student();

        $this->load->view("pages/employee", $data);
    }

    function show(){
        $data = $this->StudentModel->get_student();
        echo json_encode($data);
    }

public function save()
{
    $id = $this->input->post('id');
    if($id == NULL){
        $query = $this->StudentModel->insert_student();

        if($query){
            echo json_encode(array('success' => true));
        } else {
            echo json_encode(array('errorMsg' => 'error occured'));
        }
    }
    else{
        $query = $this->StudentModel->update_student($id);

        if($query){
            echo json_encode(array('success' => true));
        } else {
            echo json_encode(array('errorMsg' => 'error occured'));
        }
    }
    
}

public function delete()
{
    $id = $this->input->post('id');
    $query = $this->StudentModel->delete_student($id);

    if($query){
        echo json_encode(array('success' => true));
    } else {
        echo json_encode(array('errorMsg' => 'error occured'));
    }

}

}

?>
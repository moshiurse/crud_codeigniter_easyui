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
    $this->StudentModel->insert_student();
    $this->load->view('pages/student');

}

public function update($id)
	{
		$this->StudentModel->update_student($id);
		$this->load->view('pages/student');
	}

public function delete($id)
{
    // // $id = intval($_REQUEST['id']);
    // $this->studentModel->delete_student($id);
    // redirect("pages/student/")
}

}

?>
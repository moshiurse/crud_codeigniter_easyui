<?php

class Student extends CI_Controller{
    
function __construct(){
    parent::__construct();

    $this->load->model('StudentModel');
}

public function index()
{
$this->load->view("pages/student");
}

public function getStudents()
	{
		$this->output->set_content_type('application/json');
		$student = $this->StudentModel->get_student();
		echo json_encode($student);
    }
    

public function saveStudent()
{
    $input = $this->StudentModel->insert_student();
    if ($input) {
        echo json_encode(['success' => true]);
    }else {
        echo json_encode(['Msg'=>'Some Error occured!.']);
    }
}

public function updateStudent($id)
	{
		$input = $this->studentModel->updateStudent($id);
		if ($input) {
			echo json_encode(['success' => true]);
		}else {
			echo json_encode(['Msg'=>'Some Error occured!.']);
		}
	}

public function deleteStudent()
{
    $id = intval($_REQUEST['id']);
    $input = $this->studentModel->deleteStudent($id);
    if ($input) {
        echo json_encode(array('success'=>true));
    }else {
        echo json_encode(array('errorMsg'=>'Some errors occured.'));
    }
}

}

?>
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

public function save()
{
    $input = $this->StudentModel->insert_student();
    if ($input) {
        echo json_encode(['success' => true]);
    }else {
        echo json_encode(['Msg'=>'Some Error occured!.']);
    }
}

public function update($id)
	{
		$input = $this->studentModel->updateStudent($id);
		if ($input) {
			echo json_encode(['success' => true]);
		}else {
			echo json_encode(['Msg'=>'Some Error occured!.']);
		}
	}

public function delete()
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
<?php

class StudentModel extends CI_Model{

    function __construct(){

        parent::__construct();
        $this->load->database();
    }

    public function get_student(){

        
    }

    public function insert_student(){

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email')

        );

        return $this->db->insert('students', $data);
    }

    public function update_student($id){

        $data=array(
            'title' => $this->input->post('title'),
            'description'=> $this->input->post('description')
        );

        if($id == 0){
            return $this->db->insert('students', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('students', $data);
        }
    }

}

?>
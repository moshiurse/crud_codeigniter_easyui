<?php

class StudentModel extends CI_Model{

    function __construct(){

        parent::__construct();
        $this->load->database();
    }

    public function get_student($id = false){
    if($id == false){
        $query = $this->db->get('student');
        return $query->result();
    }

    $query = $this->db->get_where('student', array('id' => $id));
    return $query->row_array();
    }

    public function insert_student(){

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone')

        );

        return $this->db->insert('student', $data);
    }

    public function update_student($id){

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone')

        );
        
            $this->db->where('id', $id);
            return $this->db->update('student', $data);
    }

}

?>
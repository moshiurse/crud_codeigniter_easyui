<?php

class StudentModel extends CI_Model{

    function __construct(){

        parent::__construct();
        $this->load->database();
    }

    public function get_student($id = false){

    if($id == false){
        $page = isset($_POST['page']) ? intval($_POST['rows'])*(intval($_POST['page'])-1) :1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
        $result['total'] = $this->db->count_all("student");
        $this->db->limit($rows,$page);
        $query = $this->db->query("select * from student limit $page,$rows");
        $result['rows'] = $query->result();
        return $result;
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

    public function delete_student($id){

        $this->db->where('id', $id);
        $this->db->delete('student');

        return true;
    }

}

?>
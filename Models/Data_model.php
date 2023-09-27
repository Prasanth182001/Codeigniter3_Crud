<?php
class Data_model extends CI_Model{
    public function insert_data($data)
    {
        $this->load->database();
        return $this->db->insert('students',$data);
    }

    public function get_data()
    {
        $this->load->database();
        return $this->db->get('students')->result();

    }

    public function view_data($Id)
    {
        $this->load->database();
        $this->db->where('id',$Id);
        return $this->db->get("students")->result();
    }

    public function edit_data($Id)
    {
        $this->load->database();
        $this->db->where('id',$Id);
        return $this->db->get("students")->result();
    }

    public function update_data($data,$Id)
    {
        $this->load->database();
        $this->db->where('id',$Id);
        return $this->db->update("students",$data);

    }
    
    public function delete_data($Id)
    {
        $this->load->database();
        $this->db->where("id",$Id);
        return $this->db->delete("students");
    }
}

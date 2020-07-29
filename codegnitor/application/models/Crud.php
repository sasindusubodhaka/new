<?php 
    class Crud extends CI_Model{
        public function read(){ //select query
            $query = $this->db->get('employee');
            return $query->result();
        }
        public function saveRecord($data){ //insert query
            return $this->db->insert('employee',$data);
       }
       public function getrecords($record_id){  //select where query  
           $query=$this->db->get_where('employee',array('id'=>$record_id));
           if($query->num_rows()>0){
               return $query->row();
           }
       }
       public function updateRecords($record_id,$data){ //update query
            return $this->db->where('id',$record_id)->update('employee',$data);

       }
       public function  deletedata($record_id){//delete query
           return $this->db->delete('employee',array('id'=>$record_id));
       }
       public function countemployee(){ //get count of all emplyee
           $query=$this->db->query('Select * FROM employee');
           return $query->num_rows();
       }
       public function countmale(){ //get count of male employees
        $query=$this->db->get_where('employee',array('gender'=>'Male'));
        return $query->num_rows();
       }
       public function countfemale(){ //get count of female mlpoyees
        $query=$this->db->get_where('employee',array('gender'=>'Female'));
        return $query->num_rows();
       }
    }
?>
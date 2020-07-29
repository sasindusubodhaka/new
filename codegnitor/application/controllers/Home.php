<?php

    class Home extends CI_Controller{

     
        public function index(){

           $this->load->view('header'); //inlude header
           $this->load->model('Crud');  //load model
           $records = $this->Crud->read(); //get all data from table
           $this->load->view('home',['records'=>$records]); //call to the homepage and send all the data to view
           $this->load->view('footer');//include footer
        }
        public function edit($record_id){ //show current data of he perticler employee

            $this->load->view('header');
            $this->load->model('Crud');
            $record = $this->Crud->getrecords($record_id); //get the details of selected employee
            $this->load->view('update',['record'=>$record]); //view the current details of the employee
            $this->load->view('footer');

        }

        public function create(){ //add a new employee
            $this->load->view('header');
            $this->load->view('addnew');
            $this->load->view('footer');
            
        }
        public function save(){ //form validation process
            $this->form_validation->set_rules('name','Employee name','required');
            $this->form_validation->set_rules('contact','Contact number','required');
            $this->form_validation->set_rules('address','Address','required');
            $this->form_validation->set_rules('city','City','required');
            $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
            if($this->form_validation->run()){
                $data = $this->input->post();
                $this->load->model('Crud');
                if($this->Crud->saveRecord($data)){
                    $this->session->set_flashdata('response','Record Saved Successfully.');//output massage
                }  
                else{
                    $this->session->set_flashdata('response','Record failled to save.');
                }
                return redirect('Home');//rederect to homepage
            }
            else{
    
                $this->load->view('addnew');
                //echo validation_errors();
            }
            
        }
        public function update($record_id){ //update function
            $this->form_validation->set_rules('name','Employee name','required'); //form validation
            $this->form_validation->set_rules('contact','Contact number','required');
            $this->form_validation->set_rules('address','Address','required');
            $this->form_validation->set_rules('city','City','required');
            $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
            if($this->form_validation->run()){
                $data = $this->input->post();
                $this->load->model('Crud');
                if($this->Crud->updateRecords($record_id,$data)){
                    $this->session->set_flashdata('response','Record Updated Successfully.');//outputmassage
                }  
                else{
                    $this->session->set_flashdata('response',' failled to Update.');
                }
                return redirect('Home');
            }
            else{
    
                $this->load->view('update');
               
            }
            
            
        }
        public function delete($record_id){ //delete function
            $this->load->model('Crud');
            if($this->Crud->deletedata($record_id)){
                $this->session->set_flashdata('response','Record Deleted Successfully.');
             }
            else{
                $this->session->set_flashdata('response','Failed to Delete Record!!.');
            }
            return redirect('Home');
        }

        public function print(){       //printfunction      
         
           $this->load->model('Crud');
           $records = $this->Crud->read();   
           $countemp=$this->Crud->countemployee();
           $countmale=$this->Crud->countmale();
           $countfemale=$this->Crud->countfemale();
           $data['countemp']=$countemp;
           $data['countmale']=$countmale; 
           $data['countfemale']=$countfemale;
           $this->load->view('report',['records'=>$records,'data'=>$data]);
                
                                
        }

}

?>
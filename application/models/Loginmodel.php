<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmodel extends CI_Model {


        function index(){

            $data = array(

                'first_name'  =>  $this->input->post('fname'),
                'last_name'  =>  $this->input->post('lname'),
         'contact' => $this->input->post('contact'),
          'cnic' => $this->input->post('cnic'),
         'email' => $this->input->post('email'),
         'password' => $this->input->post('password'),
        'city' => $this->input->post('city'),
         'province' => $this->input->post('provinces'),
         'address' => $this->input->post('address'),
        'gender' => $this->input->post('gender'),

    );
         
    $query =    $this->db
                        ->where([
                                'email'     =>      $this->input->post('email'),
                                ])
                                
                        ->get('login');

                if($query->num_rows()>0)
                {
                echo "<script>
                alert('This email already Register');
                window.location.href = 'index';
                </script>";
                }
                    else{
                            $db=$this->db->insert("login",$data);
                                if($db)
                                {
                                    return redirect('LoginController/login');
                                }
                                else
                                {
                                    echo "fail";
                                }
                        }

    


        }


        public function login()
        {
        $email  =   $this->input->post('email');
        $pwd    =   $this->input->post('password'); 
        
 $query =    $this->db
            ->where([

                'email'     =>      $email,
                'password'  =>      $pwd
            ])->get('login');

            if($query->num_rows()){
                
                return $query->row();
            }else{
                return FALSE;
            }
    }
       

    }



        ?>
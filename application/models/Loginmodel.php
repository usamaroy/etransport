<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmodel extends CI_Model {


        function index($ip){

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
                    'ip_address'    => $ip,
                        
                );
         
               
                    $query  = $this->db
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
       function verify_user()
       {

                    $submit  =   $this->input->post('submit');
                    $target_dir = "assets/data_image/";
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    // Check if image file is a actual image or fake image
                    if(isset($_POST["submit"])) {
                        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                        if($check !== false) {
                            //echo "File is an image - " . $check["mime"] . ".";
                            $uploadOk = 1;
                        } else {
                            echo "File is not an image.";
                            $uploadOk = 0;
                        }
                    }
                    // Check if file already exists
                    if (file_exists($target_file)) {
                        echo "Sorry, file already exists.";
                        $uploadOk = 0;
                    }
                    // Check file size
                    if ($_FILES["fileToUpload"]["size"] > 500000) 
                    {
                        echo "Sorry, your file is too large.";
                        $uploadOk = 0;
                    }
                    
                    // Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                    } else {
                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            $data = array( 
                                'user_role'      => $this->input->post('user_role'),
                                'image'         =>  $_FILES["fileToUpload"]["name"],
                            );
                            
                            $this->db->where('id', $this->input->post('id'));
                            
                            $q = $this->db->update('login', $data);
                            
                                if($q){
                                    return true;
                                }
                                else{
                                    return false;
                                }

                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }

                    
        
         

       }

    }



        ?>
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //load model
        $this->load->model('Auth_model', 'auth');
        //$this->load->helper("file");
        $this->load->library('form_validation');
    }

    // index method
    public function registration() {        
        $data = array();
        $data['metaDescription'] = 'Registration';
        $data['metaKeywords'] = 'Registration';
        $data['title'] = "Admin - Registration";
        $data['breadcrumbs'] = array('Login' => '#');
        
        $this->load->view('auth/registration', $data);
    }

    // action create user method
    public function actionRegister() {
        $this->form_validation->set_rules('first_name', 'First Name', 'required|is_unique[admin_user.first_name]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[admin_user.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
 
        if ($this->form_validation->run() == FALSE) {
            $this->registration();
        } else {
            $firstName = $this->input->post('first_name');
            $lastName = $this->input->post('last_name');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $timeStamp = time();
            $status = 1;
            $userName = $this->auth->generateUniqueUserName('admin_user', trim($firstName . $lastName), 'user_name', NULL, NULL);
            $this->auth->setUserName($userName);
            $this->auth->setFirstName(trim($firstName));
            $this->auth->setLastName(trim($lastName));
            $this->auth->setEmail($email);  
            $this->auth->setPassword($password);
            $this->auth->setTimeStamp($timeStamp);
            $this->auth->setStatus($status);
            $chk = $this->auth->create();
            redirect('auth/login');
        }
    }


// login method
    public function login() {        
        $data = array();
        $data['metaDescription'] = 'Login';
        $data['metaKeywords'] = 'Login';
        $data['title'] = "Admin - Login";
        $data['breadcrumbs'] = array('Login' => '#');
        
        $this->load->view('auth/login', $data);
    }
    

    // action login method
    function doLogin() {        
        // Check form  validation
        //$this->load->library('form_validation');
        $this->form_validation->set_rules('user_name', 'User Name', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            //Field validation failed.  User redirected to login page

            $this->login();
        } else {
          $sessArray = array();
            //Field validation succeeded.  Validate against database
            $username = $this->input->post('user_name');
            $password = $this->input->post('password');
            
            $this->auth->setUserName($username);
            $this->auth->setPassword($password);
            //query the database
            $result = $this->auth->login();

            if (!empty($result) && count($result) > 0) {
                foreach ($result as $row) {
                    $authArray = array(
                        'user_id' => $row->user_id,
                        'first_name' => $row->first_name,
                        'user_name' => $row->user_name,
                        'email' => $row->email,
                        'is_authenticate_user' => TRUE,
                    );
                    $this->session->set_userdata('ci_session_key_generate', TRUE);
                    $this->session->set_userdata('ci_seesion_key', $authArray);
                    // remember me
                    if(!empty($this->input->post("remember"))) {
	                    setcookie ("loginId", $username, time()+ (10 * 365 * 24 * 60 * 60));  
	                    setcookie ("loginPass",	$password,	time()+ (10 * 365 * 24 * 60 * 60));
                    } else {
	                    setcookie ("loginId",""); 
	                    setcookie ("loginPass","");
                    }                    
                }
                redirect('auth/profile');
            } else {
                $this->session->set_flashdata('error', 'Invalid Email Id / Password');
                $this->login();
            }
        }
    }
    // profile page
    public function profile() {  
        if ($this->session->userdata('ci_seesion_key')['is_authenticate_user'] == FALSE) {
            redirect('auth/login');
        } else {     
            $data = array();
            $data['metaDescription'] = 'Profile';
            $data['metaKeywords'] = 'Profile';
            $data['title'] = "Dashboard";
            $data['breadcrumbs'] = array('Profile' => '#');
            $this->load->view('auth/index', $data);
        }
    }
    //logout method
    public function logout() {
        $this->session->unset_userdata('ci_seesion_key');
        $this->session->unset_userdata('ci_session_key_generate');
        $this->session->sess_destroy();
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        redirect('auth/login');
    }  
    
    //Form method
    public function add_post_form()
    {
        $data = array();
        $data['metaDescription'] = 'Add Post Form';
        $data['metaKeywords'] = 'Add Post Form';
        $data['title'] = "Add Post Form";
        $data['breadcrumbs'] = array('Add Post Form' => '#');
        $this->load->view('auth/post_form', $data);
    }

    //Form method
    public function user_list()
    {
        $data = array();
        $data['metaDescription'] = 'User List';
        $data['metaKeywords'] = 'User List';
        $data['title'] = "User List";
        $data['breadcrumbs'] = array('User List' => '#');
        $this->load->view('auth/basic-table', $data);
    }

    //Post list method
    public function post_list()
    {
        $data = array();
        $posts = $this->auth->getAllPosts();
        $data['posts'] = $posts;
        $data['metaDescription'] = 'post List';
        $data['metaKeywords'] = 'post List';
        $data['title'] = "Post List";
        $data['breadcrumbs'] = array('post List' => '#');
        $this->load->view('auth/post_list', $data);
    }

    //Create Post method
    public function addPost()
    {
        $this->form_validation->set_rules('post_title', 'Post Title', 'required');
        $this->form_validation->set_rules('post_author', 'Author Name', 'required');
        $this->form_validation->set_rules('describe', 'Describe', 'required');

        if ($this->form_validation->run() == FALSE) 
        {
           $this->session->set_flashdata('error', 'Please fill all detail');
           $this->add_post_form();
        } 
        else 
        {
            $form_array = array();
            $form_array['title'] = $this->input->post('post_title');
            $form_array['author'] = $this->input->post('post_author');
            $form_array['description'] = $this->input->post('describe'); 
            $form_array['created_at'] = date('Y-m-d');

            $this->auth->postCreate($form_array);
            $this->session->set_flashdata('success', 'Post created successfully');
            redirect('auth/post_list');
            
        }
    }

    //Post Edit method
    public function getdetails($pid)
    {
        $reslt=$this->auth->getpostdetail($pid);
        // Passing Values to update view
        $this->load->view('auth/post_edit',['row'=>$reslt]);
    } 
    
    public function updatedetails()
    {
        $this->form_validation->set_rules('post_title','Post Title','required');
        $this->form_validation->set_rules('post_author','Post Author','required');
        $this->form_validation->set_rules('describe','Post Description','required');
        if($this->form_validation->run())
        {
            $postTitle=$this->input->post('post_title');
            $postAuthor=$this->input->post('post_author');
            $Describe=$this->input->post('describe');
            $psid=$this->input->post('postid');
            $this->auth->updatedetails($postTitle,$postAuthor,$Describe,$psid);
        } 
        else 
        {
             $this->session->set_flashdata('error', 'Somthing went worng. Try again with valid details !!');
             redirect('auth/post_list');
        }
    }

    public function delete($pid)
    {
        $this->auth->deleterow($pid);
        $this->load->view('auth/post_list');
    }
}



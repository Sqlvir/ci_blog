<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Frontend extends CI_Controller {

    public function signin()
    {
        $data = array();
        $data['metaDescription'] = 'SignIn';
        $data['metaKeywords'] = 'SignIn';
        $data['title'] = "Blogs - SignIn";
        $data['breadcrumbs'] = array('SignIn' => '#');
        
        $this->load->view('simple-signin', $data);
    }

    public function signup()
    {
        $data = array();
        $data['metaDescription'] = 'SignUp';
        $data['metaKeywords'] = 'SignUp';
        $data['title'] = "Blogs - SignUp";
        $data['breadcrumbs'] = array('SignUp' => '#');
        
        $this->load->view('simple-signup', $data);
    }

}
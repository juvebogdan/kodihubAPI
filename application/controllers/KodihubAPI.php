<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class KodihubAPI extends REST_Controller {

	private $masterkodiLocation = '/var/www/appy.zone/public_html/appy/V5/master/kodi/builds.txt';


    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['index_get']['limit'] = 100; // 100 requests per hour per user/key
    }	

    public function index_post()
    {
        $this->load->helper('url');

        $this->load->helper('file');

        $username = $this->input->post('username');
        $build = $this->input->post('buildname');

        if(file_exists('/var/www/kodihub.net/public_html/' . $username . '/' . $build)) {
            delete_files('/var/www/kodihub.net/public_html/' . $username . '/' . $build ,true);
            rmdir('/var/www/kodihub.net/public_html/' . $username . '/' . $build);
            unlink('/var/www/kodihub.net/zipbuilds/' . $username . '_' . $build . '.zip');
        }

        $this->response([
            'status' => 'success',
            'message' => 'deleted'
        ], 200);
    } 

    public function deleteuser_post()
    {
        $this->load->helper('url');

        $this->load->helper('file');

        $username = $this->input->post('username');

        if(file_exists('/var/www/kodihub.net/public_html/' . $username)) {
            rmdir('/var/www/kodihub.net/public_html/' . $username);
        }

        $this->response([
            'status' => 'success',
            'message' => 'deleted'
        ], 200);
    }     
}

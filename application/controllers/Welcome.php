<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function curl() {
	    $username = '';
	    $password = '';
	     
	    // Alternative JSON version
	    // $url = 'http://twitter.com/statuses/update.json';
	    // Set up and execute the curl process
	    $curl_handle = curl_init();
	    curl_setopt($curl_handle, CURLOPT_URL, 'https://kodihub.net/kodihubapi/KodihubAPI/');
	    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl_handle, CURLOPT_POST, 1);
	    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
	        'username' => "0b73d215042a",
	        'buildname' => 'test'
	    ));
	     
	    // Optional, delete this line if your API is open
	    curl_setopt($curl_handle, CURLOPT_USERPWD, $username . ':' . $password);
	     
	    $buffer = curl_exec($curl_handle);
	    curl_close($curl_handle);
	     
	    $result = json_decode($buffer);	

	    print_r($result);	
	}

	public function curledit() {
	    // $username = '';
	    // $password = '';
	     
	    // // Alternative JSON version
	    // // $url = 'http://twitter.com/statuses/update.json';
	    // // Set up and execute the curl process
	    // $curl_handle = curl_init();
	    // curl_setopt($curl_handle, CURLOPT_URL, 'http://appy.zone/rest/AppyAPI/editBuild');
	    // curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	    // curl_setopt($curl_handle, CURLOPT_POST, 1);
	    // curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
	    //     'completebuild' => "https://kodihub.net/0b25122e681b/bokibuild/icon.png;Testiranje;https://kodihub.net/h4n7m;24117248;Kids",
	    //     'newbuild' => "https://kodihub.net/0b25122e681b/bokibuild/icon.png;CAo Zdravo;https://kodihub.net/h4n7m;24117248;Kids"
	    // ));
	     
	    // // Optional, delete this line if your API is open
	    // curl_setopt($curl_handle, CURLOPT_USERPWD, $username . ':' . $password);
	     
	    // $buffer = curl_exec($curl_handle);
	    // curl_close($curl_handle);
	     
	    // $result = json_decode($buffer);	

	    // print_r($result);	
	}
}

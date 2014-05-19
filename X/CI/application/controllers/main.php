<?php

class Main extends CI_Controller{

		public function __construct(){
			parent::__construct();
			//temp turn off
			$this->load->model('zone_model');
			$this->load->helper('url');
		}


		public function index()
		{
			
			//Check if mainV View page Exists
			if ( ! file_exists('application/views/mainV.php'))
			{
				// Whoops, we don't have a page for that!
				// Page not found.
				show_404();
			}

			$data['title'] = 'Main Page'; // Capitalize the first letter
			$data['zone'] = 'MiddleEarth';


			//1. calculate the sum	

			// if(!$load){

			// 	$data['place']='*';

			// }

				$this->load->view('templates/headerV', $data);
				//Temp turn off: blank data
				$this->load->view('mainV', $data);
				$this->load->view('templates/footerV', $data);


		}//end of function index.






}//end of class






?>
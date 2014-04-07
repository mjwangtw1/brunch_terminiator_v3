<?php




class Zone extends CI_Controller{

		public function __construct(){

			parent::__construct();
			$this->load->model('zone_model');

		}



		public function index($param = 'ncu')
		{
			
			

			if ( ! file_exists('application/views/zoneV.php'))
			{
				// Whoops, we don't have a page for that!
				// Page not found.
				show_404();
			}



			$data['title'] = ucfirst($param); // Capitalize the first letter
			$data['zone'] = strtolower($param);

			$load = TRUE;
			$zone_id = 5;

			switch($param){

			case 'hai_hwa':
				$data['PNGurl'] = HAI_HWA_SOGO_CIRCLE_PNG;
				$data['BG_image'] = HAI_HWA_BG;
				$data['place'] = "海華商圈";
				$zone_id = 2;
				//$data['img_pos'] = 'background-position: -136px 0;';
				$data['img_pos'] = '-136px 0;';

				break;

			case 'ncu':
				$data['PNGurl'] = NCU_CIRCLE_PNG;
				$data['BG_image'] = NCU_BG;
				$data['place'] = "中央大學";
				$zone_id = 0;
				$data['img_pos'] = '-272px 0;';

				break;

			case 'cycu':
				$data['PNGurl'] = CYCU_CIRCLE_PNG;
				$data['BG_image'] = CYCU_BG;
				$data['place'] = "中原大學";
				$zone_id = 1;
				$data['img_pos'] = '0 0;';
				
				break;

			case 'train_station':
				$data['PNGurl'] = TRAIN_STATION_CIRCLE_PNG;
				$data['BG_image'] = TRAIN_STATION_BG;
				$data['place'] = "中壢火車站";
				$zone_id = 3;
				$data['img_pos'] = '-544px 0;';
				
				break;

			case 'show_all_store':
				$data['PNGurl'] = S_NEEDLE_CIRCLE_PNG;
				$data['BG_image'] = S_NEEDLE_BG;
				$data['place'] = "大海撈針";
				$zone_id = 5;
				$data['img_pos'] = '-408px 0;';
				$load = FALSE;
				

				//here runs the actual load.



			break;

			default:
				show_404();
				break;



			}//end of switch($param)

				$data['all_circles'] = ALL_CIRCLES;

			//here does the query

			//1. calculate the sum	

			if(!$load){

				$data['place']='*';

			}

			$data['zone_cal_sum'] = $this->zone_model->get_zone_spend_sum($data['place']);	

			//2. list the stuff inside.
			$data['zone_result'] = $this->zone_model->get_zone_result($data['place']);

		
			



			$data['str'] = $this->db->last_query();

				$this->load->view('templates/headerV', $data);
				//$this->load->view('zone/'.$param, $data);
				$this->load->view('zoneV', $data);
				$this->load->view('templates/footerV', $data);




		}//end of function index.






}//end of class






?>
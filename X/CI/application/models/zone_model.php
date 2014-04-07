<?php

	class Zone_model extends CI_Model{

		public function __construct(){

			$this->load->database();

		}//end of function __construct


		public function get_zone_spend_sum($zone = '中央大學'){

			if(!($zone=='大海撈針')){

$elements = "sum(eaten_item_list.qty*menu.item_price) as '本區消費總額'";
$TABLES = "moubadger.menu, moubadger.store_info, moubadger.eaten_item_list";
$RULES1 = "store_info.store_id = menu.store_id ";
$RULES2 = "menu.item_id = eaten_item_list.item_id";
//注意! $zone 要多加 '' Query 才會正確
$RULES3 = "zone = '{$zone}'";	
$EXTRA = "ORDER BY qty DESC";


    			$sql_one = "SELECT {$elements} 
                FROM {$TABLES} 
               WHERE {$RULES1}
                 AND {$RULES2}
                 AND {$RULES3}

                 $EXTRA " ;

			//Do the Query and save as $query     
            $query =  $this->db->query($sql_one);

            //Return $query Result
			return $query->result_array();
		
		}//end of if_statement.
		

		}//end of function get_zone_spend_sum








		public function get_zone_result($zone = '中央大學'){

			// if($zone == '中土世界'){
			// 	//handle the special case
			// 	//created aggregated data.

			// }else{

				//SELECT brand, name, location
				//  FROM storelist
				// WHERE zone = $zone
				// Simple Active Record Practice, not in use actually.	
				if(0){
				$this->db->select('brand,name,location');
				$this->db->where('zone',$zone);
				$query = $this->db->get('storelist');
				}


				if($zone == '大海撈針'){




				}else{



				//HERE RUNS SQL
				//PARAMETERS and Rules

$elements = "menu.item_name as '名稱', store_info.brand as'品牌',store_info.name as '店名', menu.item_price as '單價', eaten_item_list.qty*menu.item_price as '消費總額'";
$TABLES = "moubadger.menu, moubadger.store_info, moubadger.eaten_item_list";
$RULES1 = "store_info.store_id = menu.store_id ";
$RULES2 = "menu.item_id = eaten_item_list.item_id";
//注意! $zone 要多加 '' Query 才會正確
$RULES3 = "zone = '{$zone}'";	
$EXTRA = "ORDER BY qty DESC";

  				}

  				//here runs sql	

    			$sql = "SELECT {$elements} 
                FROM {$TABLES} 
               WHERE {$RULES1}
                 AND {$RULES2}
                 AND {$RULES3}

                 $EXTRA " ;


            //Do the Query and save as $query     
            $query =  $this->db->query($sql);

            //Return $query Result
			return $query->result_array();





		}//end of function get_zone_result	













	}//end of class Zone_model
$(document).ready(function(){

var user = $('.user').text();

$('.page').hide();
$('.locEng').hide();
$('.user').hide();



			    var map;
			   
			      map = new GMaps({
			        el: '#map',
			        lat: 24.96276,
			        lng: 121.22327,
			        panControl: false,
					zoomControl: false,
					mapTypeControl: false,
					scaleControl: false,
					streetViewControl: false,
					overviewMapControl: false
			      });

			      map.addMarker({
			        lat: 24.96276,
			        lng: 121.22327,
			        title: '卡路里早午餐',
			        infoWindow: {
			          content: '<p>HTML Content</p>'
			        }
			      });


//JS, change the zone_name from JS. the variable is pageFrom
$('.zone_show').html('在'+pageFrom+'的消費金額總共:');

				var PNGurl = "";
				var place = "";

				switch(locEng){

					case 'hai_hwa':
						PNGurl = "assets/realm/hai-hwa/s_hai-hwa-sogo.png";
						place = "海華商圈";
					break;

					case 'ncu':
						PNGurl = 'assets/realm/ncu/s_ncu-night-street.png';
						place = "中央大學";
					break;

					case 'cycu':
						PNGurl = 'assets/realm/cycu/s_cycu.png';
						place = "中原大學";
					break;

					case 'train_station':
						PNGurl = 'assets/realm/train-station/s_train-station-tt.png';
						place = "中壢火車站";
					break;

					case 'show_all_store':
						PNGurl = 'assets/realm/s_needle.png';
						place = "中土世界";
					break;

					default:

				}


$('#zone_icon').attr('src',PNGurl);
$('title').html(place+" 的早餐店-早餐星人");



//here handles the status bar
if(user==''){
      
    user = 'ALL';
  }
switch(user){

  //the case that user did not even log in
  case 'ALL':
     $('.buttonX.member').hide();
     $('.buttonX.logout').hide();
  break;

  //the case that user id/pw does not match
  case 'NOUSER':
     
     $('a>.buttonX member').hide();
     $('a>.buttonX logout').hide(); 

     alert('Login does not match');

     //$('.user_status>a').hide();
     //$('#user_account').html("Wrong Account, please Retry");

  break;

  //the case that user did login and have a valid ID; 
  default:

    //hide-log-in
    $('#login_field').hide();
    
    $('.buttonX.member').html(user);

    $('.buttonX.member').show();
    $('.buttonX.logout').show();

    //show log-out button
    //$('#user_account').html('<a href="member.php" >'+user+'</a> ,');

}


























//Use JSON to get zone estimate
var SQL2 = "SQL_zone_estimate.php";

var CSS_show_SQL = ".SQL_View_User_Eaten";

//2. get all the amount [USER]had spent
$.ajax({
		  				type: "POST",
		 				 url: SQL2,
		 			 	data: { "user_id":user, 
		 			 			"zone":pageFrom				},
		 			dataType: "json",

  				     success: function(Jdata) {

  				    
  				     	var query_result = Jdata.query_result;
  				     	var        query = Jdata.query;
  				     	var     flagData = Jdata.flagData;
  				     	var        debug = Jdata.debug;
  				var query_elements_count = Jdata.query_elements_count;

  						//var test_array = Jdata.test_array[];

  						//var test_array = new Array();
  						
  						//test_array[2] = Jdata[1];
  					

  					if(!query_elements_count){

  						$('.price_total').html("本區尚無消費");
  						
  					}else{


  				    //Object Constructor 	
  				    //建構一個 Object: result_Object, 再用這個來創建Object
  					function result_Object(item_name , brand, name, item_price, overall_price){
  					
  					var insideObject = 5;

  					this.item_name	 = item_name;
  					this.brand  	 = brand;
  					this.name        = name;
  					this.item_price  = item_price;
  				 this.overall_price  = overall_price;

  					}

  					//ojArray = 包含很多個Object的 Array
  					var ojArray = new Array();

  					//寫一個迴圈,將 Array中的內容,轉成Object
  					for(var i=0;i<query_elements_count;i++){

  						ojArray[i] = new result_Object(Jdata[i][0],Jdata[i][1],Jdata[i][2],Jdata[i][3],Jdata[i][4]);

  					}


  					//處理顯示表格的部份

    				//var displayMsg = query;
    				var displayMsg = "";

    				var titleHeader = '<table class="popular_all"><tr>';
    				//var titleHeader = '<tr>';

	    			var title = new Array("名稱","品牌","店名","單價","消費總額");
					//var titleLength = title.lentgh;		


					var titleMsg = "";

					//title: 表格標題		
					for(var a=0 ; a< title.length ; a++){		
					titleMsg = titleMsg +'<th>'+title[a]+'</th>';
			
					}

					//alert(titleMsg);

					displayMsg = titleHeader+titleMsg;


					//Table 換行
					displayMsg = displayMsg+'</tr><tr>';

					var sumPrice = 0;

					//內容: Loop次數based on Query_element_count
					for(var c=0 ; c< query_elements_count ; c++){

						// for(var a=0 ; a< title.length ; a++){
						// displayMsg = displayMsg+'<td>'+title[a]+'<td/>';
						// }

						displayMsg = displayMsg+'<td>'+ojArray[c].item_name+'</td>';
						displayMsg = displayMsg+'<td>'+ojArray[c].brand+'</td>';
						displayMsg = displayMsg+'<td>'+ojArray[c].name+'</td>';
						displayMsg = displayMsg+'<td>'+ojArray[c].item_price+'</td>';
						displayMsg = displayMsg+'<td>'+ojArray[c].overall_price+'</td>';
						displayMsg = displayMsg+'</tr><tr>';

						sumPrice += parseInt(ojArray[c].overall_price);
					}
					


				//end: 加入表格底線
				displayMsg = displayMsg +'</tr></table>';



    				//display the generated msg;	    				
    				$(CSS_show_SQL).html(displayMsg);				

    				//index.php Specific
    				//調整 index.php 的 table CSS欄位

    				$(CSS_show_SQL).find('tr th').css({
    					'width':'20%',
    					'border-bottom':'1px solid #888'

    				});


    				$(CSS_show_SQL).find('tr td').css({
    					'width':'20%',
    					'text-align':'center'

    				});


    				$('.price_total').html(sumPrice+"元");



    			}//end of Data return more than 0 row
  												}, //end of Ajax Success

 					   error: function(){

  					  alert("JSON Error!!!");

  												}

});











});//end of Document Ready
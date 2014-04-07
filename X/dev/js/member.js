
$(document).ready(function(){

$('.cond').hide();
$('.user').hide();

//here getting all the variables
var user = $('.user').text();
var cond = $('.cond').text();

//Error Check here.
if(!user||(cond!='works')){

alert('something is wrong, stop JS');

}





var SQL1 = "SQL_user_all_spend.php";

//1. get all the amount [USER]had spent
$.ajax({
		  				type: "POST",
		 				url: SQL1,
		 			 	data: { "user_id":user}
					})
		  		.done(function(msg)
		  		{
		   			
		  			if(msg=="NOTFOUND"){

		  			$(".user_overall_spend").hide();	
		  			$(".user_overall_spend").html("資料錯誤,Error[No DATA]");
		  			$(".user_overall_spend").show();

		  		}
		  			else{

		  			//HERE you have some data passed back
		  			$(".user_overall_spend").hide();	
		  			$(".user_overall_spend").html("Welcome! ,  "+user+" ,你的全區總消費金額: $"+msg+" 元");
		  			$(".user_overall_spend").show();


		  			}


 });//end of ajax


			// var SQL2 = "SQL_View_User_Eaten.php";

			// //2. get all the amount [USER]had spent
			// $.ajax({
			// 		  				type: "POST",
			// 		 				url: SQL2,
			// 		 			 	data: { "user_id":user}
			// 					})
			// 		  		.done(function(msg2)
			// 		  		{
					   			
			// 		  			if(msg2=="NOTFOUND"){

			// 		  			$(".SQL_View_User_Eaten").hide();	
			// 		  			$(".SQL_View_User_Eaten").html("資料錯誤,Error[No DATA]");
			// 		  			$(".SQL_View_User_Eaten").show();

			// 		  		}
			// 		  			else{

			// 		  			//HERE you have some data passed back
			// 		  			$(".SQL_View_User_Eaten").hide();	
			// 		  			//$(".user_overall_spend").html(" "+user+" ,你的全區總消費金額: $"+msg+" 元");
			// 		  			$(".SQL_View_User_Eaten").html("#2, 你消費的紀錄如下: <br/>"+msg2);

			// 		  			$(".SQL_View_User_Eaten").show();


			// 		  			}


			//  });//end of ajax



//2 Test- Use JSON instead of Pure HTML
var SQL2 = "SQL_View_User_Eaten2.php";

var CSS_show_SQL = ".SQL_View_User_Eaten";

//2. get all the amount [USER]had spent
$.ajax({
		  				type: "POST",
		 				 url: SQL2,
		 			 	data: { "user_id":user},
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
  					

  				    //Object Constructor 	
  				    //建構一個 Object: result_Object, 再用這個來創建Object
  					function result_Object(item_name , item_desc, item_price, qty, date, time){
  					
  					var insideObject = 6;

  					this.item_name	 = item_name;
  					this.item_desc 	 = item_desc;
  					this.item_price  = item_price;
  					this.qty         = qty;
  					this.date        = date;
  					this.time        = time;

  					}

  					//ojArray = 包含很多個Object的 Array
  					var ojArray = new Array();

  					//寫一個迴圈,將 Array中的內容,轉成Object
  					for(var i=0;i<query_elements_count;i++){

  						ojArray[i] = new result_Object(Jdata[i][0],Jdata[i][1],Jdata[i][2],Jdata[i][3],Jdata[i][4],Jdata[i][5]);

  					}


  					//處理顯示表格的部份

    				var displayMsg = "";

    				var titleHeader = '<table class="popular_all"><tr>';

	    			var title = new Array("商品名稱","商品介紹","價格","數量","日期","時間");
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


					//內容: Loop次數based on Query_element_count
					for(var c=0 ; c< query_elements_count ; c++){

						// for(var a=0 ; a< title.length ; a++){
						// displayMsg = displayMsg+'<td>'+title[a]+'<td/>';
						// }

						displayMsg = displayMsg+'<td>'+ojArray[c].item_name+'</td>';
						displayMsg = displayMsg+'<td>'+ojArray[c].item_desc+'</td>';
						displayMsg = displayMsg+'<td>'+ojArray[c].item_price+'</td>';
						displayMsg = displayMsg+'<td>'+ojArray[c].qty+'</td>';
						displayMsg = displayMsg+'<td>'+ojArray[c].date+'</td>';
						displayMsg = displayMsg+'<td>'+ojArray[c].time+'</td>';

						displayMsg = displayMsg+'</tr><tr>';
					}
					


				//end: 加入表格底線
				displayMsg = displayMsg +'</tr></table>';




    				//display the generated msg;	    				
    				$(CSS_show_SQL).html(displayMsg);
  												},

 					   error: function(){

  					  alert("JSON Error!!!");

  												}

});


















//here you update the data








































}); //end of Document Ready; the Very Last of JS
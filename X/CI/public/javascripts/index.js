//JS Post to URL stuff
function post_to_url(path, params, method) {
    method = method || "post"; // Set method to post by default if not specified.

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);

    for(var key in params) {
        if(params.hasOwnProperty(key)) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);

            form.appendChild(hiddenField);
         }
    }

    document.body.appendChild(form);
    form.submit();
}






  


$(document).ready(function(){

$('.cond').hide();
$('.user').hide();
$('.page').hide();

//here getting all the variables
var user = $('.user').text();
var cond = $('.cond').text();



//When click on the circle
$('.zone_select').find('li').on('click',function(){

      var location = $(this).data('value');
      var locEng = $(this).attr('id');               
                     
                     //here checking to see if checkbox is clicked.
                     checked = $("input[type='checkbox']").is(":checked");
                     if(checked){
                        flag = 1;
                        //console.log("Flag:"+flag);
                     }else{
                        flag = 0;
                        //console.log("Flag:"+flag);
                     }

  		 console.log(location);


  //Very Important! 
  if(location == 'ALLSTORE'){


    post_to_url("byRandom.php",{ "pageFrom": location, "locEng":locEng, "user":user});

  }else{

    post_to_url("byZone.php",{ "pageFrom": location, "locEng":locEng, "user":user});

  }

	

 

});//End of behavior when Zone Select Clicked







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




//2 Test- Use JSON instead of Pure HTML
var SQL2 = "SQL_all_user_pop_item.php";

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
  					function result_Object(item_name , zone, brand, name, item_price, overall_price){
  					
  					var insideObject = 6;

  					this.item_name	 = item_name;
  					this.zone 		 = zone;
  					this.brand  	 = brand;
  					this.name        = name;
  					this.item_price  = item_price;
  				 this.overall_price  = overall_price;

  					}

  					//ojArray = 包含很多個Object的 Array
  					var ojArray = new Array();

  					//寫一個迴圈,將 Array中的內容,轉成Object
  					for(var i=0;i<query_elements_count;i++){

  						ojArray[i] = new result_Object(Jdata[i][0],Jdata[i][1],Jdata[i][2],Jdata[i][3],Jdata[i][4],Jdata[i][5]);

  					}


  					//處理顯示表格的部份

    				//var displayMsg = query;
    				var displayMsg = "";

    				var titleHeader = '<table class="popular_all"><tr>';
    				//var titleHeader = '<tr>';

	    			var title = new Array("商品名稱","商圈","品牌","店鋪","單價","消費總額");
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
						displayMsg = displayMsg+'<td id="zone_insideTd" data-value="'+ojArray[c].zone+'">'+ojArray[c].zone+'</td>';
						displayMsg = displayMsg+'<td>'+ojArray[c].brand+'</td>';
						displayMsg = displayMsg+'<td>'+ojArray[c].name+'</td>';
						displayMsg = displayMsg+'<td>'+ojArray[c].item_price+'</td>';
						displayMsg = displayMsg+'<td>'+ojArray[c].overall_price+'</td>';

						displayMsg = displayMsg+'</tr><tr>';
					}
					


				//end: 加入表格底線
				displayMsg = displayMsg +'</tr></table>';



    				//display the generated msg;	    				
    				$(CSS_show_SQL).html(displayMsg);
    				

    				//index.php Specific
    				//調整 index.php 的 table CSS欄位

    				$(CSS_show_SQL).find('tr th').css({
    					'width':'16.6%',
    					'border-bottom':'1px solid #888'

    				});


    				$(CSS_show_SQL).find('tr td').css({
    					'width':'16.6%',
    					'text-align':'center'

    				});


  												},

 					   error: function(){

  					  alert("JSON Error!!!");

  												}

});//end of Ajax


















//here you update the data









}); //end of Document Ready; the Very Last of JS
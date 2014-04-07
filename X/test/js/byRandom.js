//FUNCTIONS, do not remove
//DO NOT REMOVE
//function for shuffle
(function($){
  $.fn.shuffle = function() {
    return this.each(function(){
      var items = $(this).children();
      return (items.length) 
        ? $(this).html($.shuffle(items)) 
        : this;
    });
  }
  
  $.shuffle = function(arr) {
    for(
      var j, x, i = arr.length; i; 
      j = parseInt(Math.random() * i), 
      x = arr[--i], arr[i] = arr[j], arr[j] = x
    );
    return arr;
  } 
})(jQuery);



$(document).ready(function(){

var user = $('.user').text();

$('.page').hide();
$('.locEng').hide();
$('.user').hide();

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
var SQL_Get_all_SUM = "SQL_zone_all_sum.php";

var CSS_show_SQL = ".SQL_View_User_Eaten";

//2. get all the amount [USER]had spent
$.ajax({
		  				type: "POST",
		 				 url: SQL_Get_all_SUM,
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




					var sumPrice = 0;

					//內容: Loop次數based on Query_element_count
					for(var c=0 ; c< query_elements_count ; c++){

						sumPrice += parseInt(ojArray[c].overall_price);
					}
					
    				$('.price_total').html(sumPrice+"元");



    			}//end of Data return more than 0 row
  												}, //end of Ajax Success

 					   error: function(){

  					  alert("JSON Error!!!");

  												}

});











//RANDOM SHOW ITEMS
//Use JSON to get zone estimate
var SQL_all_items = "SQL_view_all_items.php";

var CSS_show_SQL = ".SQL_View_User_Eaten";

//2. get all the amount [USER]had spent
$.ajax({
              type: "POST",
             url: SQL_all_items,
            data: { "user_id":user, 
                "zone":pageFrom       },
          dataType: "json",

               success: function(Jdata2) {

              
                var query_result = Jdata2.query_result;
                var        query = Jdata2.query;
                var     flagData = Jdata2.flagData;
                var        debug = Jdata2.debug;
          var query_elements_count = Jdata2.query_elements_count;

              //var test_array = Jdata.test_array[];

              //var test_array = new Array();
              
              //test_array[2] = Jdata[1];
            

            if(!query_elements_count){

              $('.SQL_View_User_Eaten').html("No Rows return");
              //console.log(query);
              
            }else{


              //Object Constructor  
              //建構一個 Object: result_Object, 再用這個來創建Object
            function result_Object(item_id,  item_name,  brand,  name,  item_price){
            
            var insideObject = 5;

            this.item_id     = item_id;
            this.item_name   = item_name;
            this.brand       = brand;
            this.name        = name;
            this.item_price  = item_price;
          

            }

            //ojArray = 包含很多個Object的 Array
            var ojArray = new Array();

            //寫一個迴圈,將 Array中的內容,轉成Object
            for(var i=0;i<query_elements_count;i++){

              ojArray[i] = new result_Object(Jdata2[i][0],Jdata2[i][1],Jdata2[i][2],Jdata2[i][3],Jdata2[i][4]);

            }


            //處理顯示表格的部份

            //var displayMsg = query;
            var displayMsg = "";

            var titleHeader = '<table class="popular_all"><tr>';
            //var titleHeader = '<tr>';

            var title = new Array("id","名稱","品牌","店名","單價");
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


          //Here adds the randomize work

          //this calls and handles the shuffle
          ojArray = $.shuffle(ojArray);

          //this ensure just list first 35 result
          //if stuff<35, then show all
          var showItems = 0;

          if(query_elements_count>35){
            showItems = 34;
          }else{
            showItems = query_elements_count;

          }




         ///
         ///  
         ///  
         ///



          //內容: Loop次數based on Query_element_count
          for(var c=0 ; c< showItems ; c++){

            // for(var a=0 ; a< title.length ; a++){
            // displayMsg = displayMsg+'<td>'+title[a]+'<td/>';
            // }
            displayMsg = displayMsg+'<td data-value='+ojArray[c].item_id+'>'+ojArray[c].item_id+'</td>';
            displayMsg = displayMsg+'<td data-value='+ojArray[c].item_name+'>'+ojArray[c].item_name+'</td>';
            displayMsg = displayMsg+'<td data-value='+ojArray[c].brand+'>'+ojArray[c].brand+'</td>';
            displayMsg = displayMsg+'<td data-value='+ojArray[c].name+'>'+ojArray[c].name+'</td>';
            displayMsg = displayMsg+'<td data-value='+ojArray[c].item_price+'>'+ojArray[c].item_price+'</td>';
            displayMsg = displayMsg+'</tr><tr>';

          }
          


        //end: 加入表格底線
        displayMsg = displayMsg +'</tr></table>';

            //console.log('<br/>'+query);

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


            //$('.price_total').html(sumPrice+"元");



          }//end of Data return more than 0 row
                          }, //end of Ajax Success

             error: function(){

              alert("JSON Error!!!");

                          }

});







$('td').click(function(){

  var val = $(this).data('value');
  console.log(val);


});













});//end of Document Ready
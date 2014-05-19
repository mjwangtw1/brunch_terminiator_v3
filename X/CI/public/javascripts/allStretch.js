
//get the info where it comes from.
var pageFrom = $('.page').text();
var locEng = $('.locEng').text();

//remove the node so you can't find it in HTML
//$('.page').remove();


//[MDFH-backGround]
var imageArray = new Array();

switch(pageFrom){

	 case 'index':
 //    case 'member':

			  imageArray[0] = new imageObject(0,"中央大學宵夜街","/happybrunch/public/assets/realm/ncu/ncu-night-street.jpg");
		      imageArray[1] = new imageObject(1,"海華商圈","/happybrunch/public/assets/realm/hai-hwa/hai-hwa-sogo.jpg");
		      imageArray[2] = new imageObject(2,"中央大學後門","/happybrunch/public/assets/realm/ncu/ncu-back.jpg");
		      imageArray[3] = new imageObject(3,"中原大學","/happybrunch/public/assets/realm/cycu/cycu.jpg");
		      imageArray[4] = new imageObject(4,"中壢火車站","assets/realm/train-station/train-station-tt.jpg");	
			break;

	case '海華商圈':

		      imageArray[0] = new imageObject(0,"","assets/realm/hai-hwa/hai-hwa-sogo.jpg");
		      imageArray[1] = new imageObject(1,"","assets/realm/hai-hwa/hai.jpg");



			break;

	case '中央大學':

		      imageArray[0] = new imageObject(0,"","/happybrunch/public/assets/realm/ncu/ncu_front_door.jpg");
		      imageArray[1] = new imageObject(1,"","/happybrunch/public/assets/realm/ncu/ncu_bike.jpg");


	break;		

	case '中原大學':

		      imageArray[0] = new imageObject(0,"","assets/realm/cycu/cycu_front_door.jpg");
		      imageArray[1] = new imageObject(1,"","assets/realm/cycu/cycu_night_market.jpg");

	break;

	case "中壢火車站":

		      imageArray[0] = new imageObject(0,"","assets/realm/train-station/chungli_train.jpg");

	break;



	case "ALLSTORE":

			  imageArray[0] = new imageObject(0,"中央大學宵夜街","assets/realm/ncu/ncu-night-street.jpg");
		      imageArray[1] = new imageObject(1,"海華商圈","assets/realm/hai-hwa/hai-hwa-sogo.jpg");
		      imageArray[2] = new imageObject(2,"中央大學後門","assets/realm/ncu/ncu-back.jpg");
		      imageArray[3] = new imageObject(3,"中原大學","assets/realm/cycu/cycu.jpg");
		      imageArray[4] = new imageObject(4,"中壢火車站","assets/realm/train-station/train-station-tt.jpg");	

	break;







	default: 
		  imageArray[0] = new imageObject("assets/realm/ncu/ncu-night-street.jpg","中央大學宵夜街",0);
		  imageArray[1] = new imageObject("assets/realm/hai-hwa/hai-hwa-sogo.jpg","海華商圈",1);
		  imageArray[2] = new imageObject("assets/realm/ncu/ncu-back.jpg","中央大學後門",2);
		  imageArray[3] = new imageObject("assets/realm/cycu/cycu.jpg","中原大學",3);
		  imageArray[4] = new imageObject("assets/realm/train-station/train-station-tt.jpg","中壢火車站",4);		

}




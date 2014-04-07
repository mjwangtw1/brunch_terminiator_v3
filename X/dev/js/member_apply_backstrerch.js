  $.backstretch([
    "assets/realm/ncu/ncu-night-street.jpg",
    "assets/realm/hai-hwa/hai-hwa-sogo.jpg",
    "assets/realm/ncu/ncu-back.jpg",
    "assets/realm/cycu/cycu.jpg",
    "assets/realm/train-station/train-station-tt.jpg"
  ], {
      fade: 800,
      duration: 10000
  });

  $(window).on("backstretch.after", function (e, instance, index) {

  var photoDesc = new Array();
  	photoDesc = ["中央大學宵夜街","海華商圈","中央大學後門","中原大學","中壢火車站"];
    this.index = index;

   //console.log(photoDesc[index]);
   setPhoto(photoDesc[index]);	
  // Do something
  });


  function setPhoto(place){

  $('.currentPlace').html(place);

  }



  $('[placeholder]').focus(function() {
        var input = $(this);
      if (input.val() == input.attr('placeholder')) {
       input.val('');
        input.removeClass('placeholder');
  }
  }).blur(function() {
  var input = $(this);

  if (input.val() == '' || input.val() == input.attr('placeholder')) {
     input.addClass('placeholder');
    input.val(input.attr('placeholder'));
  }
  }).blur().parents('form').submit(function() {
  $(this).find('[placeholder]').each(function() {
    var input = $(this);
        if (input.val() == input.attr('placeholder')) {
          input.val('');
        }
    })
  });       
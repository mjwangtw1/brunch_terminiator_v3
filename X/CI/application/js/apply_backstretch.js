
  //Fire up the backstretch to change background
  $.backstretch(
    imageList
        , {
            fade: 800,
            duration: 10000
        });
        
  //After switched the background, change the text also Trigger Shuffle text;
  $(window).on("backstretch.after", function (e, instance, index) {

			this.index = index;
			//console.log(photoDesc[index]);
			setPhoto(imageArray[index].imageTitle);	

  			// Do something
		});


function setPhoto(place){

				$('.currentPlace').html(place);
        $('.currentPlace').shuffleLetters();
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
  if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', ready);
} else {
  // This function is used to reload once
  (function()
{
  if( window.localStorage )
  {
    //check if reloaded once already 
    if( !localStorage.getItem('firstLoad') )
    {
     //if not reloaded once, then set firstload to true
      localStorage = true;
      //reload the webpage using reload() method
      window.location.reload();
    }  
    else 
      localStorage.removeItem('firstLoad');
  }
})();
  ready();
}

  function ready(){
    // search box open
  $('#search-box').on('click', function() {
  $(this).addClass('change');
    });
   //  closing elements on click outside
     $(document).click(function() {
      var container = $("#search-box");
      var noti = $("#noti-check");
      if (!container.is(event.target) && !container.has(event.target).length) {
        container.removeClass('change');
      }
      if (!noti.is(event.target) && !noti.has(event.target).length){ 
        noti.prop("checked", false);
      }
      
  });
  
  
      
        
    // circle make
     var circle = document.createElement('div');
     circle.classList.add('active-link');

     // Adding circles   

$('.list a').on('click',function(){
  $(this).parent().siblings().find('a').removeClass('full-opacity');
  $(this).addClass('full-opacity');
  $(this).parent().append(circle);
  $('.menu-title').text($(this).children('span').text());
})

// Adding class after reloading page
 
var path = window.location.href; 

     $('.list a').each(function() {
     
	 if (this.href === path) {      
	  $(this).addClass('full-opacity');
    $(this).parent().append(circle);
	  }
    
	});

  
  // Edit account 
  $('.edit-name').click(function(){

    $("#personName").prop('disabled',false);
    $("#personName").focus();

  });



}

 



  

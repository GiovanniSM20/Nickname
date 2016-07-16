$(document).ready(function(){
  $('body').fadeIn('fast');
  $('a[class!="no_effect"]').click(function(event){
    event.preventDefault();
    linkLocation = this.href;
    $("body").fadeOut('fast', redirectPage);
  });
  function redirectPage(){
	  window.location=linkLocation;
  }

  $("li a[href='"+location.href.substring(location.href.lastIndexOf("/")+1,255)+"']").addClass("active");
  function relogio(){
	var d = new Date();
	$('#data').text(d.toLocaleString());
  }
  setInterval(relogio, 1000);

	$('#menu-mobile').sideNav({
      menuWidth: 300, // Default is 240
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
  );
  
});

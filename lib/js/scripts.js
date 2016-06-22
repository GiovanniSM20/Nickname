$(document).ready(function(){
  $('body').toggle('fast');
  $('a').click(function(event){
    event.preventDefault();
    linkLocation = this.href;
    $("body").toggle('fast', redirectPage);
  });
  function redirectPage(){window.location=linkLocation;}
});

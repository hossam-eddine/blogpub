var elem = document.querySelector('.sidenav');
  var instance = new M.Sidenav(elem);

   // with jquery

  $(document).ready(function(){
   $('.sidenav').sidenav();
  });
  $('#textarea1').val('New Text');
  M.textareaAutoResize($('#textarea1'));


  /////floating action button
 
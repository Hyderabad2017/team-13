$( document ).ready(function() {
  //alert("working");
   a1=true;
   a2=true;
   a3=true;
  $('#demographic').click(function(){

    // alert("working");
    if(a1){
      $('.c-form').css("display","none");
      $('.cl-form').css("display","none");
    $('.demographic-form').css("display","block");}
    else{
      $('.demographic-form').css("display","none");
    }
    if(a1)
    {
      a1=false;
    }
    else {
      a1=true;
    }
  });
  $('#classroom').click(function(){

    // alert("working");
    if(a2){
      $('.c-form').css("display","none");
      $('.demographic-form').css("display","none");
    $('.cl-form').css("display","block");}
    else{
      $('.cl-form').css("display","none");
    }
    if(a2)
    {
      a2=false;
    }
    else {
      a2=true;
    }
  });
  $('#child-assess').click(function(){

    // alert("working");
    if(a3){
      $('.cl-form').css("display","none");
      $('.demographic-form').css("display","none");
    $('.c-form').css("display","block");}
    else{
      $('.c-form').css("display","none");
    }
    if(a3)
    {
      a3=false;
    }
    else {
      a3=true;
    }
  });

});

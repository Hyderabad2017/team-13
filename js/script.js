$( document ).ready(function() {
  //alert("working");
   a1=true;
   a2=true;
   a3=true;
  $('#demographic').click(function(){
    // alert("working");
    if(a1){
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
  
});

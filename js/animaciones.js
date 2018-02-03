var bandera=true;
var altoDiv;
$(document).ready(function () {
  $("#login").fadeIn(1000);
  $(".logindiv").fadeIn(1000);
  altoDiv=$("#encabezado").height();

  $(window).scroll(function(){
      var posicion=$(window).scrollTop();
      if ($("#encabezado").height()>posicion) {
        var promedio=((posicion*100)/altoDiv)/100;
        $("#nav").css({
          "background-color":"rgba(10,10,10,"+promedio+")"
        });
    }else{
          $("#nav").css({
            "background-color":"rgba(10,10,10,1)",
            "height":"50px"
          }),
          $(".navbar").css({
            "padding-top":"0",
            "padding-botton":"0",
            "border-radius":"0"
          }),
          $("#imglogo").css({
            "width":"35px",
            "padding-top":"5px"
          });
    }
  });
});

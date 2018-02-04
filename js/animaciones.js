var bandera=true;
var altoDiv;
$(document).ready(function () {
  $("#login").fadeIn(1000);
  $(".logindiv").fadeIn(1000);
  altoDiv=$("#myCarousel").height();

  $(window).scroll(function(){
      var posicion=$(window).scrollTop();

      /*if ($("#encabezado").height()>posicion) {
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
            "height":"45px",
            "padding-top":"5px"
          });
      }*/
      if ($("#nav").height()<posicion) {
        var promedio=((posicion*100)/altoDiv)/100;
        console.log(promedio);
        $("#nav").css({
          "background-color":"rgba( 33,37,41,"+promedio+")"
        });
      }else{
        $("#nav").animate({
          height: '50px',
          opacity: '2px'
        }),
          $(".navbar").css({
            "padding-top":"0",
            "padding-botton":"0",
            "border-radius":"0"
          }),
          $("#imglogo").animate({
            height:'45px'
          });
      }
  });
});

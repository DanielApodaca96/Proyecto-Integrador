var bandera=true;
var altoDiv;
$(document).ready(function () {
  $("#login").fadeIn(1000);
  $(".logindiv").fadeIn(1000);
  altoDiv=$("#myCarousel").height();
  var posicion=$(window).scrollTop();
      var promedio=((posicion*100)/altoDiv)/100;

  if(promedio>=0.1){
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
    }),
    $("#nav").css({
      "background-color":"rgba( 33,37,41,"+promedio+")"
    });
  }

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
      if ($(document).height()>posicion) {
        var promedio=((posicion*100)/altoDiv)/100;
        console.log(promedio);
        $("#nav").css({
          "background-color":"rgba( 33,37,41,"+promedio+")"
        });
        if(promedio>=0.1){
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
      }
  });
});

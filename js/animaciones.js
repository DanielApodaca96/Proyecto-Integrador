var bandera=true;
var altoDiv;
$(document).ready(function () {
  $("#login").fadeIn(1000);
  $(".logindiv").fadeIn(1000);
  if($(this).width() >= 768){
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
  }
  $(window).resize(function() {
     if ($(this).width() >= 768) {
        // call supersize method
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
     }
  });


});

// CODING BY CHRIS BOLOR | CHRISBOLOR.COM



console.log("Width: " + window.innerWidth);
console.log("Height: " + window.innerHeight);



$("#home #mainSection, #home footer").hide();














$(document).ready(function(){

  //GLOBAL VARIABLES
  var vpWidth = screen.width;
  var vpHeight = screen.height;

  var windowWidth = window.innerWidth;
  var windowHeight = window.innerHeight;



  // END GLOBAL VARIABLES




  function loadAnimation(){
    $("#home #mainSection, #home footer").show("fade", 3200);
  }// closes loadAnimation function

  setTimeout(loadAnimation, 3500);




  function videoBGAdjust(){
    $("#videoBG").css({
      "min-height": '100%',
    })
  }
  videoBGAdjust();

  function sizeAdjust(){
    //var mainSection = document.getElementById("mainSection");
    //var mainSectionHeight = window.getComputedStyle(mainSection, null).getPropertyValue("height");
    var mainSectionHeight = $("#mainSection").height();

    var vpWidth = screen.width;
    var vpHeight = screen.height;

    var windowWidth = window.innerWidth;
    var windowHeight = window.innerHeight;

    var rem = $(":root").css("--main-font-size").replace("px",'');
    console.log(rem);

        function isPortrait(){


            if(vpWidth / vpHeight > 1){
              var orientation = 'landscape';
              return orientation;
            }
            if(vpWidth / vpHeight < 1){
              var orientation = 'portrait';
              return orientation;
            }
        };

            // FOR PORTRAIT ORIENTATION
            if((windowWidth/windowHeight) < 1){
                  var mainSectionHeight = $("#mainSection").height();

                  var vpWidth = screen.width;
                  var vpHeight = screen.height;

                  var windowWidth = window.innerWidth;
                  var windowHeight = window.innerHeight;

                  var difference = vpHeight - mainSectionHeight;

                  console.log(vpHeight);
                  console.log(mainSectionHeight);
                  console.log(difference);
                  console.log(difference/4);

                  if((mainSectionHeight < vpHeight*.7) && ((difference/4) > rem)){

                      $("#mainSection").css({
                        "margin-top": (difference/4) + 'px',
                      })
                  }else {
                    $("#mainSection").css({
                      "margin-top": "1rem",
                    })
                  }

                  console.log("yes it is portrait!");


                          $(".leftCol, .rightCol").removeClass("col-sm-6");
                          $(".leftCol, .rightCol").addClass("col-sm-12");

                          $(".leftCol").css("padding-right", "0rem");
                          $(".rightCol").css("padding-left", "0rem");

                          if(screen.height >= '568'){
                            $(".leftCol").css({
                              "margin-bottom": "0rem",
                            })
                            $("form").css({
                              "margin-top": "0rem",
                            })
                          }




                          if(screen.width < '414'){
                            $(":root").css({
                              "--main-font-size": "12px",
                              "--main-line-height": "24px",
                            })
                          }
                          if(screen.width >= '414'){
                            $(":root").css({
                              "--main-font-size": "16px",
                              "--main-line-height": "32px",
                            })
                          }
                          if(screen.width >= '768'){
                            $(":root").css({
                              "--main-font-size": "24px",
                              "--main-line-height": "40px",
                            })
                          }

                          $("#mainSection").css({
                            "padding": "1.1875rem 2.125rem 2.125rem 2.125rem",
                          });

                          $("#mainImageWrapper").css({
                            "margin-top": "-1.1875rem",
                            "height": "100%",
                          })

                          $("#mainTitle").css({
                            "font-size": "2.25rem",
                          })

                          $("header").css({
                            "margin-bottom": "4rem",
                          })

                          $("#descRight").css({
                            "margin-top": "0rem",
                            "margin-bottom": "3rem",
                          })
                    var difference = '';
            }

            // FOR LANDSCAPE ORIENTATION
            if((windowWidth/windowHeight) > 1){
              var mainSectionHeight = $("#mainSection").height();

              var vpWidth = screen.width;
              var vpHeight = screen.height;

              var windowWidth = window.innerWidth;
              var windowHeight = window.innerHeight;

              var difference = vpHeight - mainSectionHeight;

              console.log(vpHeight);
              console.log(mainSectionHeight);
              console.log(difference);
              console.log(difference/2);

              if((vpHeight > '414') && (mainSectionHeight < vpHeight*.7) && ((difference/2) > rem)){

                  $("#mainSection").css({
                    "margin-top": (difference/2) + 'px',
                  })
              }else {
                $("#mainSection").css({
                  "margin-top": "1rem",
                })
              }

              console.log("nope, it is landscape!");

                      $(".leftCol, .rightCol").removeClass("col-sm-12");
                      $(".leftCol, .rightCol").addClass("col-sm-6");

                      $(".leftCol").css("padding-right", "1rem");
                      $(".rightCol").css("padding-left", "1rem");



                      if(screen.height < '414'){
                        $("#mainSection").css({
                          "padding": "1.1875rem 2.125rem 2.125rem 2.125rem",
                        });
                      }
                      if(screen.height >= '414'){
                        $("#mainSection").css({
                          "padding": "1.1875rem 2.125rem 2.125rem 2.125rem",
                        });
                      }

                      if(screen.height <= '568'){
                        $(".leftCol").css({
                          "margin-bottom": "-4rem",
                        })
                        $("form").css({
                          "margin-top": "-2rem",
                        })
                      }

                      $("#mainImageWrapper").css({
                        "margin-top": "-1.1875rem",
                        "height": "100%",
                      })

                      $("#mainTitle").css({
                        "font-size": "1.7rem",
                      })

                      if(screen.width <= '667'){
                        $(":root").css({
                          "--main-font-size": "12px",
                          "--main-line-height": "20px",
                        })
                      }
                      if(screen.width > '667'){
                        $(":root").css({
                          "--main-font-size": "16px",
                          "--main-line-height": "24px",
                        })
                      }
                      if(screen.width >= '768'){
                        $(":root").css({
                          "--main-font-size": "16px",
                          "--main-line-height": "32px",
                        })
                      }

                      $("header").css({
                        "margin-bottom": "2rem",
                      })

                      $("#descRight").css({
                        "margin-top": "5.75rem",
                        "margin-bottom": "4.25rem",
                      })
                var difference = '';
            }

  }
  sizeAdjust();





$(window).on("resize", function(){

  //RE-CAPTURE SELECT GLOBAL VARIABLES
  var mainSectionHeight = $("#mainSection").height();
  var vpWidth = screen.width;
  var vpHeight = screen.height;

  var windowWidth = window.innerWidth;
  var windowHeight = window.innerHeight;


  setTimeout(videoBGAdjust, 0100);
  setTimeout(sizeAdjust, 0100);
  //videoBGAdjust();
  //sizeAdjust();







});// closes window.resize function


});// closes doc.ready function = end of all code!!













// CODING BY CHRIS BOLOR | CHRISBOLOR.COM

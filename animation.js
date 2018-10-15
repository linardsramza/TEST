/**
 * @author Linards Ramza <linuks5@inbox.lv>
 */
$(function(){
  $(".signupdiv").hide();

$("#signupbtn1").click(function() {
        $("#signupbtn1").attr("disabled", true);
       $(".middlediv").animate({marginLeft: "-=420px"}, 1000);
       $(".logindiv").fadeOut(500, function(){
         $(".signupdiv").fadeIn(500);
         $('#loginbtn1').attr("disabled", false);
       });
  });
$("#loginbtn1").click(function() {
       $("#loginbtn1").attr("disabled", true);
       $(".middlediv").animate({marginLeft: "+=420px"}, 1000);
       $(".signupdiv").fadeOut(500, function(){
         $(".logindiv").fadeIn(500);
         $('#signupbtn1').attr("disabled", false);
       });  
  });
  })
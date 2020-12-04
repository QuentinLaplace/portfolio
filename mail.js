$(document).ready(function() {

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })


      $("#needs-validation").submit(function(){

        let res = true;

         if (!isEmail($("#email").val())){
            $(".emailIn").css("display","block");
            $(".email").css("display","none");
            res = false;
         }
         else{
            $(".email").css("display","block");
            $(".emailIn").css("display","none");
         }

         if (!isAlphaOrParen($("#nom").val())){
            $(".lastIn").css("display","block");
            $(".last").css("display","none");
            res = false;
         }
         else{
            $(".last").css("display","block");
            $(".lastIn").css("display","none");
         }

         if (!isAlphaOrParen($("#prenom").val())){
            $(".firstIn").css("display","block");
            $(".first").css("display","none");
            res = false;
         }
         else{
            $(".first").css("display","block");
            $(".firstIn").css("display","none");
         }

         if (!isAlphaOrParen($("#textarea").val())){
            $(".textIn").css("display","block");
            $(".text").css("display","none");
            res = false;
         }
         else{
            $(".text").css("display","block");
            $(".textIn").css("display","none");
         }

        return res;
   });
});

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test( email );
  }

function isAlphaOrParen(str) {
    var regex = /^[a-zA-Z\s]+$/;
    return regex.test(str);
  }
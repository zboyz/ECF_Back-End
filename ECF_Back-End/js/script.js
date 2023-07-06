$(document).ready(function(){


    $(function() {
        $(".button").on("click", function() {
            var $button = $(this);
            var oldValue = $('.number').val();
            
            if ($button.hasClass("inc")) {
                var newVal = parseFloat(oldValue) + 1;
            } else {
              // Don't allow decrementing below zero
                if (oldValue > 1) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 1;
                }
            }
            $(".number").val(newVal);
        });
    });



    $(window).scroll(function() {
        if ($(window).scrollTop() > 50) {
            $("#boutonToTheTop").show();
        } else {
            $("#boutonToTheTop").hide();
        }
    });
    $("#boutonToTheTop").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });
    

});
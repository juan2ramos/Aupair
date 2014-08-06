$(function () {
    /* SLIDER */
    if ($('.slider').length > 0) {
        $('.slider').flexslider({
            animation: "slide",
            prevText: "<",
            nextText: ">"
        });
    }
    if ($('.slider-blog').length > 0) {
        $('.slider-blog').flexslider({
            animation: "slide",
            animationLoop: false,
            itemWidth: 190000,
            itemMargin: 0,
            minItems: 2,
            prevText: "<",
            nextText: ">"
        });
    }
    if ($('.slider-video').length > 0) {
        $('.slider-video').flexslider({
            animation: "slide",
            prevText: "<",
            nextText: ">"
        });
    }
    /* Form */
    $('#form-contact').on("submit", function (e) {
        e.preventDefault();
        var fields = $(this).serializeArray();

        $.post("email.php", fields, responseForm, 'json');


    });
    function responseForm(r) {
        console.log(r);
        if (r.success == 0) {
            alert(r.message);
        }
        else {
            $('#contact-form').text('');
            $('#contact-form').append("<span class='message'>" + r.message + "<span>");
        }
    }

    $(window).scroll(function () {
        var wSroll = $(window).scrollTop();

        if (wSroll > 467) {
            $(".inicio").addClass("menu-fixed");
        } else {
            $(".inicio").removeClass("menu-fixed");
        }


    });
    $('#question li').on('click', function () {
        $('#question p').css('display', 'none')
        $(this).find('p').css('display', 'block')

    })
    $('#menu-tabs li').on('click', function () {

        $('#menu-tabs li').removeClass('active-tab');
        $(this).addClass('active-tab');
        $('#tabs li').removeClass('show');
        var index = $( "#menu-tabs li" ).index( this );
        index++;
        var $li = $( "#tabs li:nth-child("+index+")");
        $li.addClass('show')
    })

});
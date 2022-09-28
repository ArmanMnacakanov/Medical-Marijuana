document.onscroll = function () {
    var q = document.documentElement.scrollTop

    if(q > 300) {
        document.body.style.backgroundImage = 'url(img/img/parallax-1.jpg)'
        document.body.style.backgroundSize = 'cover'
        document.body.style.backgroundPosition = 'center'
        document.body.style.backgroundAttachment = 'fixed'
    }
    if(q > 900) {
        document.body.style.backgroundImage = 'url(img/img/parallax-2.jpg)'
        document.body.style.backgroundSize = 'cover'
        document.body.style.backgroundPosition = 'center'
        document.body.style.backgroundAttachment = 'fixed'
    } 

    if (q > 300) {
        document.getElementById('scroll').style.opacity = '1'
        document.getElementById('scroll').style.transition = '0.5s'
    }
    if (q < 300) {
        document.getElementById('scroll').style.opacity = '0'
    }
}

$(function () {
    let asd = 0;
    $('#karzina').click(function () {
        if (asd % 2 == 0) {
            $('#karzinadiv').slideDown(200)
        } else {
            $('#karzinadiv').slideUp(200)
        }
        asd++;
    });
    let isd = 0;
    $('#menuclick').click(function () {
        if (isd % 2 == 0) {
            $('#menu').slideDown(100);
            $('#menu').css('display', 'flex');
        } else {
            $('#menu').slideUp(200);
            $('#menu').css('display', 'none');
        }
        isd++;
    });
    $('#home').click(function () {
        $('#home').css({
            ' border-bottom': '1px solid green'
        })
    })


    $('.kgg').click(function(){
        $(this).parent().find('.nameForm').fadeOut(0);
        $(this).parent().find('.ginForm').fadeIn();
        $(this).parent().find('.newimage').fadeOut(0);
        $(this).parent().find('.fonn').fadeIn();
    })

    $('.close').click(function () {
        $(this).parents().find('.fonn').fadeOut();
    })

    $('.del').click(function(){
        $(this).parent().find('.newimage').fadeOut(0);
        $(this).parent().find('.fonn').fadeIn(200);
        $(this).parent().find('.nameForm').fadeOut(200);
        $(this).parent().find('.ginForm').fadeOut(0);
        $(this).parent().find('.harc').fadeIn(200);
    })
    $('.no').click(function(){
        $(this).parents().find('.fonn').fadeOut();
    })
    $('.name').click(function () {
        $(this).parent().find('.newimage').fadeOut(0);
        $(this).parent().find('.fonn').fadeIn(200);
        $(this).parent().find('.nameForm').fadeIn(200);
        $(this).parent().find('.ginForm').fadeOut(0);
    })

    $('.image').click(function () {
        $(this).parent().find('.newimage').fadeIn(200);
        $(this).parent().find('.fonn').fadeIn(200);
        $(this).parent().find('.nameForm').fadeOut(0);
        $(this).parent().find('.ginForm').fadeOut(0);
    })
    $('.close').click(function () {
        $(this).parent().find('.fonn').fadeOut(200);
    })
    $('.close2').click(function () {
        $(this).parent().find('.fonn').fadeOut(200);
    })

    $('#btn').click(function(){
        $.ajax({
            url:"admin.php",
        })
    })


})






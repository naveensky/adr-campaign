$(document).ready(function () {
    /**************************************************************************/
    /*	Template options													  */
    /**************************************************************************/

    var options =
    {
        supersized: {
            slide: [
                {image: 'img/backgd/parliament1.jpg'},
                {image: 'img/backgd/parliament3.jpg'},
                {image: 'img/backgd/parliament4.jpg'}
            ]
        },
        googleMap: {
            coordinates: [53.276698, -6.12562]
        }
    }

    /**************************************************************************/
    /*	Supersized															  */
    /**************************************************************************/

    $.supersized(
        {
            slides: options.supersized.slide,
            autoplay: true,
            thumb_links: false,
            start_slide: 1,
            thumbnail_navigation: false
        });

    /**************************************************************************/
    /*	Accordion															  */
    /**************************************************************************/

    $('.nostalgia-accordion').accordion({icons: '', animated: 'easeOutExpo', heightStyle: 'content', collapsible: true, active: 0,activate:true});


    /**************************************************************************/
    /*	Forms																  */
    /**************************************************************************/



    $('textarea').elastic();
    $('form label').inFieldLabels();

    /**************************************************************************/
    /*	Contact details button												  */
    /**************************************************************************/

    $('#contact-details-button').bind('click', function (e) {
        e.preventDefault();

        var contactDetails = $(this).parent('.contact-details');

        var top = parseInt(contactDetails.css('top'));
        var newTop = (top == 0 ? parseInt(contactDetails.height()) : 0);

        contactDetails.animate({top: -1 * newTop}, {duration: 100, complete: function () {

        }});
    });

    /**************************************************************************/
    /*	Twitter																  */
    /**************************************************************************/

    $.getJSON('/twitter', function (data) {
        if (data.length) {
            var list = $('<ul>');
            $(data).each(function (index, value) {
                list.append($('<li>').append($('<p>').html(value)));
            });

            $('#latest-tweets').append(list);

            $('#latest-tweets ul').carouFredSel(
                {
                    circular: true,
                    direction: 'up',
                    items: {
                        visible: 1,
                        minimum: 1
                    },
                    scroll: {
                        items: 1,
                        duration: 750,
                        fx: 'cover'
                    }
                });

            setTwitterDimension();
        }
    });

    /**************************************************************************/
    /*	Image preloader														  */
    /**************************************************************************/

    $('.preloader img').each(function () {
        $(this).attr('src', $(this).attr('src') + '?i=' + getRandom(1, 100000));
        $(this).bind('load', function () {
            $(this).parent().first().css('background-image', 'none');
            $(this).animate({opacity: 1}, 1000);
        });
    });

    /**************************************************************************/
    /*	Image carousel														  */
    /**************************************************************************/

    $('.image-list.image-list-carousel').carouFredSel(
        {
            circular: true,
            direction: 'left',
            scroll: {
                items: 1,
                duration: 750
            },
            prev: $('.image-list.image-list-carousel').nextAll('.image-list-carousel-navigation-prev'),
            next: $('.image-list.image-list-carousel').nextAll('.image-list-carousel-navigation-next')
        });

    /**************************************************************************/
    /*	Fancybox for images													  */
    /**************************************************************************/

    $('.fancybox-image').fancybox({});

    /**************************************************************************/
    /*	Fancybox for youtube videos											  */
    /**************************************************************************/

    $('.fancybox-video-youtube').bind('click', function () {
        $.fancybox(
            {
                'padding'		: 10,
                'autoScale'		: false,
                'transitionIn'	: 'none',
                'transitionOut'	: 'none',
                'width'			: '90%',
                'height'		: '90%',
                'href'			: this.href,
                'type'			: 'iframe'
            });

        return false;
    });

    /**************************************************************************/
    /*	Fancybox for vimeo videos											  */
    /**************************************************************************/

    $('.fancybox-video-vimeo').bind('click', function () {
        $.fancybox(
            {
                'padding'		: 10,
                'autoScale'		: false,
                'transitionIn'	: 'none',
                'transitionOut'	: 'none',
                'width'			: '90%',
                'height'		: '90%',
                'href'			: this.href,
                'type'			: 'iframe'
            });

        return false;
    });

    /**************************************************************************/
    /*	"Clik here" caption													  */
    /**************************************************************************/

    blink($('.click-here'));

    /**************************************************************************/
    /*	Window resize														  */
    /**************************************************************************/

    $(window).resize(function () {
        setTwitterDimension();
        setImageListDimension();

    });

    $(window).trigger('resize');

    /**************************************************************************/
});
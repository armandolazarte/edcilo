/*
 * Función que borra la clase .open de todos los elementos que la contengan
 * al dar click sobre el elemento body
 */
var edc_close = function () {
    "use strict";

    $('body').click( function () {
        $('.open').removeClass('open');
    } );
};

/*
 * funcion que activa el boton de cerrar de un bloque alert
 *
 * DOM html: .alert>button[type="button"].close{×}+{Hola mundo}
 * trigger: .close
 */
var edc_alert = function () {
    "use strict";

    var trigger = $('.block-alert .close');

    trigger.click( function (e) {
        e.preventDefault();

        var element = $(this).parent();
        element.fadeOut();
    } );
};


/*
 * funcion que hace visible el dropdownMenu
 *
 * DOM html: div>button.trigger-dropdown{Menu}+ul.dropdown-menu>li*3>a{Option n}
 * trigger: .trigger-dropdown
 */
var edc_dropdowMenu = function () {
    "use strict";

    var trigger  = $('.trigger-dropdown'),
        elementP = null;

    $('body').click( function (e) {
        elementP = ( e === null ) ? e.srcElement : e.target;
    } );

    trigger.click( function (e) {
        e.preventDefault();
        e.stopPropagation();

        var element = ( e === null ) ? e.srcElement : e.target;

        $('.open').removeClass('open');

        $(this).parent().addClass('open');

        if ( elementP === element ) {
            $('.open').removeClass('open');
            elementP = null;
        }
        else {
            elementP = element;
        }
    } );

};

/*
 * Función que muestra/oculta el contenido de una lista de definicion como un acordion
 *
 * DOM html: dl.accordion>dt>a^dd
 * trigger: dl.accordion dt
 */
var edc_accordion = function () {
    "use strict";

    var trigger = $('dl.accordion dt'),
        dds     = $('dl.accordion dd');

    dds.hide();

    trigger.click(function (e) {
        var dd = $(this).next(),
            dt = $(this);

        e.preventDefault();

        if ( dd.is(":visible") ) {
            dd.slideUp('fast');
            dt.removeClass('active');
        } else {
            dds.slideUp('fast');
            trigger.removeClass('active');

            dd.slideDown('fast');
            dt.addClass('active');
        }
    });
};

/*
 * Función que muestra/oculta el contenido de unos elementos usando pestañas
 *
 * DOM html: .box-tab>ul.nav>li.active>a{link}^+li*2^.tab-content>.tab-pane*3>{contenido}
 * trigger: .box-tab ul.nav li
 */
var edc_box_tab = function () {
    "use strict";

    var trigger = $('.box-tab ul.nav li');

    trigger.click(function (e) {
        var link    = $(this).children(),
            panel   = $(link.attr('href')),
            box_tab = $(this).parents('.box-tab'),
            panels  = box_tab.find('.tab-pane'),
            tabs    = box_tab.find('ul.nav li');

        e.preventDefault();

        if ( ! $(this).hasClass('active') ) {
            tabs.removeClass('active');
            $(this).addClass('active');

            panels.slideUp();
            panel.slideDown();
        }
    });
};

/*
 * Función que muestra el contenido del atributo title en un contenedor personalizable
 *
 * DOM html: button[title="titulo del elemento"].trigger-tooltip{Boton con titulo}
 * trigger: .trigger-tooltip
 */
var edc_tooltip = function () {
    "use strict";

    var trigger = $('.trigger-tooltip'),
        element = null,
        height  = null,
        title   = null,
        tooltip = null,
        width   = null,
        x       = null,
        y       = null;

    trigger.mouseover( function (e) {
        element = $(this);
        title = element.attr('title');

        element.attr('title', '');

        $('body').append('<div class="tooltip">'+title+'</div>');

        tooltip = $('.tooltip');

        height = parseInt( tooltip.css('height') );
        width  = parseInt( tooltip.css('width') );

        x = e.pageX + 6;
        y = e.pageY - height - 6;

        if ( ( x + width ) > $(window).width() )
            x -= width;

        tooltip
            .fadeIn(1000)
            .css({
                "cursor" : element.css('cursor'),
                "display": "block",
                "left"   : x + "px",
                "top"    : y + "px"
            });
    } );

    trigger.mouseout( function () {
        $('.tooltip').remove();
        element.attr('title', title);
    } );
};

/*
 * http://www.wifeo.com/code/38-material-design-menu-mobile.html
 */
var menu_smartphone = function () {
    "use strict";

    var isMenuOpen = false,
        trigger    = $('.trigger-menu-smartphone'),
        element    = $('.nav-smartphone'),
        back       = $('.menu-back');

    trigger.click(function()
    {
        if (isMenuOpen === false)
        {
            element.clearQueue().animate({
                left : '0px'
            });
            back.fadeIn('fast');

            isMenuOpen = true;
        }
    });
    back.click(function()
    {
        if (isMenuOpen === true)
        {
            element.clearQueue().animate({
                left : '-520px'
            });
            $(this).fadeOut('fast');

            isMenuOpen = false;
        }
    });

};

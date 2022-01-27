jQuery(document).ready(function () {

  window.onscroll = function() {myFunction()};



  var navbar = document.getElementById("section-nav");



  var sticky = navbar.offsetTop;



  function myFunction() {

    if (window.pageYOffset >= sticky) {

      navbar.classList.add("sticky")

    } else {

      navbar.classList.remove("sticky");

    }

  }



});



/*activate navbar*/

/*

jQuery(document).ready(function() {

  var lastId,

      topMenu = jQuery("#top-menu"),

      topMenuHeight = topMenu.outerHeight()+15,

      menuItems = topMenu.find("a"),

      scrollItems = menuItems.map(function(){

        var item = jQuery(jQuery(this).attr("href"));

        if (item.length) { return item; }

      });



  menuItems.click(function(e){

    var href = jQuery(this).attr("href"),

        offsetTop = href === "#" ? 0 : jQuery(href).offset().top-topMenuHeight+1;

    jQuery('html, body').stop().animate({ 

        scrollTop: offsetTop

    }, 300);

    e.preventDefault();

  });





  jQuery(window).scroll(function(){



    var fromTop = jQuery(this).scrollTop()+topMenuHeight;

    var cur = scrollItems.map(function(){

      if (jQuery(this).offset().top < fromTop)

        return this;

    });



    cur = cur[cur.length-1];

    var id = cur && cur.length ? cur[0].id : "";

    

    if (lastId !== id) {

        lastId = id;

        menuItems

          .parent().removeClass("active")

          .end().filter("[href='#"+id+"']").parent().addClass("active");

    }                   

  });



});*/

/*

jQuery(document).ready(function () {

  jQuery(document).on("scroll", onScroll);



    jQuery('a[href="#'+jQuery(this).attr('id')+'"]').on('click', function (e) {

        e.preventDefault();

        jQuery(document).off("scroll");

        

        jQuery('a').each(function () {

            jQuery(this).removeClass('active');

        })

        jQuery(this).addClass('active');

      

        var target = this.hash,

            menu = target;

        $target = jQuery(target);

        jQuery('html, body').stop().animate({

            'scrollTop': $target.offset().top+2

        }, 500, 'swing', function () {

            window.location.hash = target;

            jQuery(document).on("scroll", onScroll);

        });

    });

});





function onScroll(event){

    var scrollPos = jQuery(document).scrollTop();

    jQuery('#top-menu a').each(function () {

        var currLink = jQuery(this);

        var refElement = jQuery(currLink.attr("href"));

        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {

            jQuery('#top-menu ul li a').removeClass("active");

            currLink.addClass("active");

        }

        else{

            currLink.removeClass("active");

        }

    });

}*/

/*

var sections = jQuery('#top-menu')

  , nav = jQuery('#top-menu')

  , nav_height = nav.outerHeight();



jQuery(window).on('#top-menu', function () {

  var cur_pos = jQuery(this).scrollTop();

  

  sections.each(function() {

    var top = jQuery(this).offset().top - nav_height,

        bottom = top + jQuery(this).outerHeight();

    

    if (cur_pos >= top && cur_pos <= bottom) {

      nav.find('a').removeClass('active');

      sections.removeClass('active');

      

      jQuery(this).addClass('active');

      nav.find('a[href="#'+jQuery(this).attr('id')+'"]').addClass('active');

    }

  });

});



nav.find('a').on('click', function () {

  var $el = jQuery(this)

    , id = $el.attr('href');

  

  jQuery('html, body').animate({

    scrollTop: jQuery(id).offset().top - nav_height

  }, 500);

  

  return false;

});*/





/*End active navbar */



  /* okretanje */

var $findme = jQuery('#numbers');

var exec = false;

function Scrolled() {

  $findme.each(function() {

    var $section = jQuery(this),

      findmeOffset = $section.offset(),

      findmeTop = findmeOffset.top,

      findmeBottom = $section.height() + findmeTop,

      scrollTop = jQuery(document).scrollTop(),

      visibleBottom = window.innerHeight,

      prevVisible = $section.prop('_visible');



    if ((findmeTop > scrollTop + visibleBottom) ||

      findmeBottom < scrollTop) {

      visible = false;

    } else visible = true;



    if (!prevVisible && visible) {

    	if(!exec){

              jQuery('.okretanje-number').each(function() {

          jQuery(this).prop('Counter', 0).animate({

            Counter: jQuery(this).text()

          }, {

            duration: 3000,



            step: function(now) {

              jQuery(this).text(Math.ceil(now));

              exec = true;

            }

          });

        });

      }

    }

    $section.prop('_visible', visible);

  });



}



function Setup() {

  var $top = jQuery('#top'),

    $bottom = jQuery('#bottom');



  $top.height(500);

  $bottom.height(500);



  jQuery(window).scroll(function() {

    Scrolled();

  });

}

jQuery(document).ready(function() {

  Setup();

});





/* */



jQuery(document).ready(function() {

  jQuery(document).on('change', '#kolicina', function(){  

    plinBoca();

  });

var n = 101;
var select = document.getElementById('kolicina');

function selectOne() {

  for (var i=1; i<n; i++) {

      select.options[select.options.length] = new Option(i, i);

  }

}

selectOne();

function selectTwo() {
  var select = document.getElementById('kolicinaDva');
  for (var i=1; i<n; i++) {
      select.options[select.options.length] = new Option(i, i);
  } 
}

selectTwo();

});



function plinBoca() {

  var kolicina = document.getElementById('kolicina').value;

  document.getElementById("demo").innerHTML = kolicina;
  var cijena = document.getElementById("cijena").innerHTML;

  var number = Number(cijena);

  var suma = kolicina * number;
  var sum = suma.toFixed(2);

  document.getElementById("demoDva").innerHTML = sum;

}

function autoGas() {
  var kolicina = document.getElementById("kolicinaDva").value;

  document.getElementById("autoGasJedan").innerHTML = kolicina;
  var cijenagas = document.getElementById("gasCijena").innerHTML;

  console.log(cijenagas);

  var numbergas = Number(cijenagas);

  console.log(numbergas);

  var suma = kolicina * numbergas;
  var sum = suma.toFixed(2);

  document.getElementById("autoGasDva").innerHTML = sum;
}



function plinCisterna() {
  var kolicina = document.getElementById("kolicinaTri").value;
  document.getElementById("plinCisternaJedan").innerHTML = kolicina;

  var suma = kolicina * 8.88;
  var sum = suma.toFixed(2);

  document.getElementById("plinCisternaDva").innerHTML = sum;
}



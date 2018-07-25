"use strict";

$('ul.slimmenu').slimmenu({
    resizeWidth: '992',
    collapserTitle: '',
    animSpeed: 250,
    indentChildren: true,
    childrenIndenter: ''
});

function formatNumberLength(num, length) {
    var r = "" + num;
    while (r.length < length) {
        r = "0" + r;
    }
    return r;
}

function rupeeFormat(x) {
    console.log(x);
    x=x.toString();
    var lastThree = x.substring(x.length-3);
    var otherNumbers = x.substring(0,x.length-3);
    if(otherNumbers != '')
        lastThree = ',' + lastThree;
    var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
    return res;
}

// Countdown
$('.countdown').each(function() {
    var count = $(this);
    $(this).countdown({
        zeroCallback: function(options) {
            var newDate = new Date(),
                newDate = newDate.setHours(newDate.getHours() + 130);

            $(count).attr("data-countdown", newDate);
            $(count).countdown({
                unixFormat: true
            });
        }
    });
});


$('.btn').button();

$("[rel='tooltip']").tooltip();

$('.form-group').each(function() {
    var self = $(this),
        input = self.find('input');

    input.focus(function() {
        self.addClass('form-group-focus');
    })

    input.blur(function() {
        if (input.val()) {
            self.addClass('form-group-filled');
        } else {
            self.removeClass('form-group-filled');
        }
        self.removeClass('form-group-focus');
    });
});

var onwardFareTrend = {};

var returnFareTrend = {};

function reInitDatepicker(org, dest, selector, faretrend) {
    $.ajax({
        dataType: 'json',
        type: 'get',
        url: '/api/faretrend/' + org + "/" + dest,
        cache: false,
        success: function(data) {
                // if(faretrend = "onward") {
                //     onwardFareTrend = data;
                // }
                // else {
                //     returnFareTrend  = data;
                // }
                $(selector).datepicker("destroy");
                console.log($(selector));
                $(selector).datepicker({
                todayHighlight: true,
                autoclose: true,
                startDate: new Date(),
                beforeShowDay: function(d) {
                    console.log(d);
                    let dateStr = d.getFullYear() + "-" + formatNumberLength(d.getMonth() + 1, 2) + "-" + formatNumberLength(d.getDate(), 2);
                    console.log(dateStr);
                    if (dateStr in data) {
                        console.log("in if");
                        var obj = {
                            content: d.getDate() + "<strong class='hidden-xs hidden-sm' style='color: green; font-weight: 500;'> ₹" + data[dateStr] +"</strong>"
                        };
                        return obj;
                    }
                }
            });
            console.log("here");
        }
    });
}

$('.typeahead').typeahead({
    hint: true,
    highlight: true,
    minLength: 3,
    limit: 8
}, {
    source: function(q, cb) {
        return $.ajax({
            dataType: 'json',
            type: 'get',
            url: '/api/airportSearch/' + q,
            chache: false,
            success: function(data) {
                var result = [];
                $.each(data, function(index, val) {
                    result.push({
                        value: val.label,
                        iata: val.iata
                    });
                });
                cb(result);
            }
        });
    }
}).on('typeahead:selected', function(event, selection) { 
  // the second argument has the info you want
  $(this).parent().next().val(selection.iata);
  if($(this).parent().next().attr('id') == "rt-from-iata" && $("#rt-to-iata").val()!="") {
    // $("#roundtrip-from-date-pick").datepicker('destroy');
    reInitDatepicker($("#rt-from-iata").val(), $("#rt-to-iata").val(), "#roundtrip-from-date-pick", "onward");
    // $("#roundtrip-to-date-pick").datepicker('destroy');
    reInitDatepicker($("#rt-to-iata").val(), $("#rt-from-iata").val(), "#roundtrip-to-date-pick", "return");
  }
  else if($(this).parent().next().attr('id') == "rt-to-iata" && $("#rt-from-iata").val()!="") {
    // $("#roundtrip-from-date-pick").datepicker('destroy');
    reInitDatepicker($("#rt-from-iata").val(), $("#rt-to-iata").val(), "#roundtrip-from-date-pick", "onward");
    // $("#roundtrip-to-date-pick").datepicker('destroy');
    reInitDatepicker($("#rt-to-iata").val(), $("#rt-from-iata").val(), "#roundtrip-to-date-pick", "return");
  }
  else if($(this).parent().next().attr('id') == "oneway-from-iata" && $("#oneway-to-iata").val()!="") {
    // $("#oneway-from-date-pick").datepicker('destroy');
    reInitDatepicker($("#oneway-from-iata").val(), $("#oneway-to-iata").val(), "#oneway-from-date-pick", "onward");
  }
  else if($(this).parent().next().attr('id') == "oneway-to-iata" && $("#oneway-from-iata").val()!="") {
    // $("#oneway-from-date-pick").datepicker('destroy');
    reInitDatepicker($("#oneway-from-iata").val(), $("#oneway-to-iata").val(), "#oneway-from-date-pick", "onward");
  }
});

//citizenship search
$('.citizenship').typeahead({
    hint: true,
    highlight: true,
    minLength: 3,
    limit: 8
}, {
    source: function(q, cb) {
        return $.ajax({
            dataType: 'json',
            type: 'get',
            url: '/api/countryCodeSearch/' + q,
            chache: false,
            success: function(data) {
                var result = [];
                $.each(data, function(index, val) {
                    result.push({
                        value: val.country,
                        code: val.code
                    });
                });
                cb(result);
            }
        });
    }
}).on('typeahead:selected', function(event, selection) {
  
  // the second argument has the info you want
  $(this).parent().next().val(selection.code);
  
});

$('input.date-pick, .input-daterange, .date-pick-inline').datepicker({
    todayHighlight: true,
    autoclose: true,
    startDate: new Date()
});

$('#roundtrip-from-date-pick').on('changeDate', function(e){
    $('#roundtrip-from-date').val(e.format('dd/mm/yyyy'))
});

$('#roundtrip-to-date-pick').on('changeDate', function(e){
    $('#roundtrip-to-date').val(e.format('dd/mm/yyyy'))
});

$('#oneway-from-date-pick').on('changeDate', function(e){
    $('#oneway-from-date').val(e.format('dd/mm/yyyy'))
});


$('input.date-pick, .input-daterange input[name="start"]').datepicker('setDate', 'today');
$('.input-daterange input[name="end"]').datepicker('setDate', '+7d');

$('input.time-pick').timepicker({
    minuteStep: 15,
    showInpunts: false
});

$('input.passport-expiry-years').datepicker({
    startView: 2,
    startDate: new Date()
});

$('.booking-item-price-calc .checkbox label').click(function() {
    var checkbox = $(this).find('input'),
        // checked = $(checkboxDiv).hasClass('checked'),
        checked = $(checkbox).prop('checked'),
        price = parseInt($(this).find('span.pull-right').html().replace('$', '')),
        eqPrice = $('#car-equipment-total'),
        tPrice = $('#car-total'),
        eqPriceInt = parseInt(eqPrice.attr('data-value')),
        tPriceInt = parseInt(tPrice.attr('data-value')),
        value,
        animateInt = function(val, el, plus) {
            value = function() {
                if (plus) {
                    return el.attr('data-value', val + price);
                } else {
                    return el.attr('data-value', val - price);
                }
            };
            return $({
                val: val
            }).animate({
                val: parseInt(value().attr('data-value'))
            }, {
                duration: 500,
                easing: 'swing',
                step: function() {
                    if (plus) {
                        el.text(Math.ceil(this.val));
                    } else {
                        el.text(Math.floor(this.val));
                    }
                }
            });
        };
    if (!checked) {
        animateInt(eqPriceInt, eqPrice, true);
        animateInt(tPriceInt, tPrice, true);
    } else {
        animateInt(eqPriceInt, eqPrice, false);
        animateInt(tPriceInt, tPrice, false);
    }
});


$('div.bg-parallax').each(function() {
    var $obj = $(this);
    if($(window).width() > 992 ){
        $(window).scroll(function() {
            var animSpeed;
            if ($obj.hasClass('bg-blur')) {
                animSpeed = 10;
            } else {
                animSpeed = 15;
            }
            var yPos = -($(window).scrollTop() / animSpeed);
            var bgpos = '50% ' + yPos + 'px';
            $obj.css('background-position', bgpos);

        });
    }
});



$(document).ready(
    function() {

    $('html').niceScroll({
        cursorcolor: "#000",
        cursorborder: "0px solid #fff",
        railpadding: {
            top: 0,
            right: 0,
            left: 0,
            bottom: 0
        },
        cursorwidth: "10px",
        cursorborderradius: "0px",
        cursoropacitymin: 0.2,
        cursoropacitymax: 0.8,
        boxzoom: true,
        horizrailenabled: false,
        zindex: 9999
    });


        // Owl Carousel
        var owlCarousel = $('#owl-carousel'),
            owlItems = owlCarousel.attr('data-items'),
            owlCarouselSlider = $('#owl-carousel-slider'),
            owlNav = owlCarouselSlider.attr('data-nav');
        // owlSliderPagination = owlCarouselSlider.attr('data-pagination');

        owlCarousel.owlCarousel({
            items: owlItems,
            navigation: true,
            navigationText: ['', '']
        });

        owlCarouselSlider.owlCarousel({
            slideSpeed: 300,
            paginationSpeed: 400,
            // pagination: owlSliderPagination,
            singleItem: true,
            navigation: true,
            navigationText: ['', ''],
            transitionStyle: 'fade',
            autoPlay: 4500
        });


    // footer always on bottom
    var docHeight = $(window).height();
   var footerHeight = $('#main-footer').height();
   var footerTop = $('#main-footer').position().top + footerHeight;
   
   if (footerTop < docHeight) {
    $('#main-footer').css('margin-top', (docHeight - footerTop) + 'px');
   }
    }


);


$('.nav-drop').dropit();

$('.i-check, .i-radio').iCheck({
    checkboxClass: 'i-check',
    radioClass: 'i-radio'
});



$('.booking-item-review-expand').click(function(event) {
    console.log('baz');
    var parent = $(this).parent('.booking-item-review-content');
    if (parent.hasClass('expanded')) {
        parent.removeClass('expanded');
    } else {
        parent.addClass('expanded');
    }
});


$('.stats-list-select > li > .booking-item-rating-stars > li').each(function() {
    var list = $(this).parent(),
        listItems = list.children(),
        itemIndex = $(this).index();

    $(this).hover(function() {
        for (var i = 0; i < listItems.length; i++) {
            if (i <= itemIndex) {
                $(listItems[i]).addClass('hovered');
            } else {
                break;
            }
        };
        $(this).click(function() {
            for (var i = 0; i < listItems.length; i++) {
                if (i <= itemIndex) {
                    $(listItems[i]).addClass('selected');
                } else {
                    $(listItems[i]).removeClass('selected');
                }
            };
        });
    }, function() {
        listItems.removeClass('hovered');
    });
});



/*$('.booking-item-container').children('.booking-item').click(function(event) {
    if ($(this).hasClass('active')) {
        $(this).removeClass('active');
        $(this).parent().removeClass('active');
    } else {
        $(this).addClass('active');
        $(this).parent().addClass('active');
        $(this).delay(1500).queue(function() {
            $(this).addClass('viewed')
        });
    }
});*/

$(document).on('click','.flight-details-click', function(e) {
    e.stopPropagation();
    let elem = $(this).closest(".booking-item");
    if (elem.hasClass('active')) {
        elem.removeClass('active');
        elem.parent().removeClass('active');
    } else {
        elem.addClass('active');
        elem.parent().addClass('active');
        elem.delay(1500).queue(function() {
            elem.addClass('viewed')
        });
    }
});

$('.form-group-cc-number input').payment('formatCardNumber');
$('.form-group-cc-date input').payment('formatCardExpiry');
$('.form-group-cc-cvc input').payment('formatCardCVC');

if ($('#map-canvas').length) {
    var map,
        service;

    jQuery(function($) {
        $(document).ready(function() {
            var latlng = new google.maps.LatLng(40.7564971, -73.9743277);
            var myOptions = {
                zoom: 16,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel: false
            };

            map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);


            var marker = new google.maps.Marker({
                position: latlng,
                map: map
            });
            marker.setMap(map);


            $('a[href="#google-map-tab"]').on('shown.bs.tab', function(e) {
                google.maps.event.trigger(map, 'resize');
                map.setCenter(latlng);
            });
        });
    });
}


$('.card-select > li').click(function() {
    self = this;
    $(self).addClass('card-item-selected');
    $(self).siblings('li').removeClass('card-item-selected');
    $('.form-group-cc-number input').click(function() {
        $(self).removeClass('card-item-selected');
    });
});
// Lighbox gallery
$('#popup-gallery').each(function() {
    $(this).magnificPopup({
        delegate: 'a.popup-gallery-image',
        type: 'image',
        gallery: {
            enabled: true
        }
    });
});

// Lighbox image
$('.popup-image').magnificPopup({
    type: 'image'
});

// Lighbox text
$('.popup-text').magnificPopup({
    removalDelay: 500,
    closeBtnInside: true,
    callbacks: {
        beforeOpen: function() {
            this.st.mainClass = this.st.el.attr('data-effect');
        }
    },
    midClick: true
});

// Lightbox iframe
$('.popup-iframe').magnificPopup({
    dispableOn: 700,
    type: 'iframe',
    removalDelay: 160,
    mainClass: 'mfp-fade',
    preloader: false
});


$('.form-group-select-plus').each(function() {
    var self = $(this),
        btnGroup = self.find('.btn-group').first(),
        select = self.find('select');
    btnGroup.children('label').last().click(function() {
        btnGroup.addClass('hidden');
        select.removeClass('hidden');
    });
});
// Responsive videos
$(document).ready(function() {
    $("body").fitVids();
});

$(function($) {
    $("#twitter").tweet({
        username: "remtsoy", //!paste here your twitter username!
        count: 3
    });
});

$(function($) {
    $("#twitter-ticker").tweet({
        username: "remtsoy", //!paste here your twitter username!
        page: 1,
        count: 20
    });
});

$(document).ready(function() {
    var ul = $('#twitter-ticker').find(".tweet-list");
    var ticker = function() {
        setTimeout(function() {
            ul.find('li:first').animate({
                marginTop: '-4.7em'
            }, 850, function() {
                $(this).detach().appendTo(ul).removeAttr('style');
            });
            ticker();
        }, 5000);
    };
    ticker();
});
$(function() {
    $('#ri-grid').gridrotator({
        rows: 4,
        columns: 8,
        animType: 'random',
        animSpeed: 1200,
        interval: 1200,
        step: 'random',
        preventClick: false,
        maxStep: 2,
        w992: {
            rows: 5,
            columns: 4
        },
        w768: {
            rows: 6,
            columns: 3
        },
        w480: {
            rows: 8,
            columns: 3
        },
        w320: {
            rows: 5,
            columns: 4
        },
        w240: {
            rows: 6,
            columns: 4
        }
    });

});


$(function() {
    $('#ri-grid-no-animation').gridrotator({
        rows: 4,
        columns: 8,
        slideshow: false,
        w1024: {
            rows: 4,
            columns: 6
        },
        w768: {
            rows: 3,
            columns: 3
        },
        w480: {
            rows: 4,
            columns: 4
        },
        w320: {
            rows: 5,
            columns: 4
        },
        w240: {
            rows: 6,
            columns: 4
        }
    });

});

var tid = setInterval(tagline_vertical_slide, 2500);

// vertical slide
function tagline_vertical_slide() {
    var curr = $("#tagline ul li.active");
    curr.removeClass("active").addClass("vs-out");
    setTimeout(function() {
        curr.removeClass("vs-out");
    }, 500);

    var nextTag = curr.next('li');
    if (!nextTag.length) {
        nextTag = $("#tagline ul li").first();
    }
    nextTag.addClass("active");
}

function abortTimer() { // to be called when you want to stop the timer
    clearInterval(tid);
}

//stop select flight button propogation
$(document).on('click','.select-flight-button', function(e) {
    e.stopPropagation();
});

$(".internal-link-header").click(function () {
    let header = $(this);
    let caret = $(this).find(".internal-link-header-caret");
    let content = header.next();
    content.slideToggle(200, function () {
        //execute this after slideToggle is done
        //change text of header based on visibility of content div
        caret.toggleClass("fa-angle-down");
        caret.toggleClass("fa-angle-up");
    });
});

function oneWaySubmit() {
    $.cookie("from-label", $("#oneway-from-label").val());
    $.cookie("to-label", $("#oneway-to-label").val());
    $.cookie("from-iata", $("#oneway-from-iata").val());
    $.cookie("to-iata", $("#oneway-to-iata").val());    
    $.cookie("from-date", $("#oneway-from-date").val());    
    $.cookie("to-date", $("#oneway-to-date").val());
    $.cookie("from-date-pick", $("#oneway-from-date-pick").val());  
    $.cookie("to-date-pick", $("#oneway-to-date-pick").val());  
    $.cookie("classtype", $("#oneway-class").val());
    $.cookie("adult-count", $("#oneway-adult").val());
    $.cookie("child-count", $("#oneway-child").val());
    $.cookie("infant-count", $("#oneway-infant").val());
    $("#one-way-search-button").submit();
}
function rtSubmit() {
    $.cookie("from-label", $("#rt-from-label").val());
    $.cookie("to-label", $("#rt-to-label").val());
    $.cookie("from-iata", $("#rt-from-iata").val());
    $.cookie("to-iata", $("#rt-to-iata").val());
    $.cookie("from-date", $("#roundtrip-from-date").val()); 
    $.cookie("to-date", $("#roundtrip-to-date").val());
    $.cookie("from-date-pick", $("#roundtrip-from-date-pick").val());   
    $.cookie("to-date-pick", $("#roundtrip-to-date-pick").val());
    $.cookie("classtype", $("#rt-class").val());
    $.cookie("adult-count", $("#rt-adult").val());
    $.cookie("child-count", $("#rt-child").val());
    $.cookie("infant-count", $("#rt-infant").val());
    $("#rt-search-button").submit();
}
if($.cookie("from-label")!=null) {
    $(".from-label").val($.cookie("from-label"));
}
if($.cookie("to-label")!=null) {
    $(".to-label").val($.cookie("to-label"));
}
if($.cookie("from-iata")!=null) {
    $(".from-iata").val($.cookie("from-iata"));
}
if($.cookie("to-iata")!=null) {
    $(".to-iata").val($.cookie("to-iata"));
}
if($.cookie("from-date")!=null) {
    $(".from-date").val($.cookie("from-date"));
}
if($.cookie("to-date")!=null) {
    $(".to-date").val($.cookie("to-date"));
}
if($.cookie("from-date-pick")!=null) {
    $(".from-date-pick").val($.cookie("from-date-pick"));
}
if($.cookie("to-date-pick")!=null) {
    $(".to-date-pick").val($.cookie("to-date-pick"));
}
if($.cookie("classtype")!=null) {
    $(".classtype").val($.cookie("classtype"));
}
if($.cookie("adult-count")!=null) {
    $(".adult-count").val($.cookie("adult-count"));
}
if($.cookie("child-count")!=null) {
    $(".child-count").val($.cookie("child-count"));
}
if($.cookie("infant-count")!=null) {
    $(".infant-count").val($.cookie("infant-count"));
}
if($.cookie("from-iata")!=null && $.cookie("to-iata")!=null && $.cookie("from-date")!=null && $.cookie("to-date")!=null) {
    // $("#roundtrip-from-date-pick").datepicker('destroy');
    reInitDatepicker($("#rt-from-iata").val(), $("#rt-to-iata").val(), "#roundtrip-from-date-pick", "onward");
    $("#roundtrip-to-date-pick").datepicker('destroy');
    reInitDatepicker($("#rt-to-iata").val(), $("#rt-from-iata").val(), "#roundtrip-to-date-pick", "return");
}
if($.cookie("from-iata")!=null && $.cookie("to-iata")!=null && $.cookie("from-date")!=null) {
    // $("#oneway-from-date-pick").datepicker('destroy');
    reInitDatepicker($("#oneway-from-iata").val(), $("#oneway-to-iata").val(), "#oneway-from-date-pick", "onward");
}
$('.highlight').click(function() {
    $('.register-block').toggle();
    $('.login-block').toggle();
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#apply-coupon-button").click(function() {
    let couponcode = $("#coupon-code").val();
    let amount = $("#trip-price").val();
    $("#coupon-loader").show();
    $.ajax({
      url: "/checkCoupon/"+couponcode+"/"+amount,
      success: function(result) {
        $("#coupon-loader").hide();
        if(result.success==true) {
            $("#coupon-success-alert").html(result.msg).show();
            $("#coupon-failed-alert").hide();
            $("#trip-total").html("₹"+result.amount);
            $("#couponcode-form").val(couponcode);
        } else {
            $("#coupon-failed-alert").html(result.msg).show();
            $("#coupon-success-alert").hide();
        }
      }
    });
});

$('.fareTrendCarousel').owlCarousel({
    loop:false,
    nav:true,
    autoplay:false,
    dots: false,
    navText: [
  "<i class='fa fa-chevron-left' aria-hidden='true'></i>",
  "<i class='fa fa-chevron-right' aria-hidden='true'></i>"
  ],
    responsive:{
        0:{
            items:4
        },
        600:{
            items:5
        },
        1000:{
            items:6
        }
    }
});


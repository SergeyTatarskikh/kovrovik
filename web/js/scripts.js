$(document).ready(function() { 


//mobile 100vh calculation js:
let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);

//mobile menu
$(".burger, .hp_close").on('click', function() {
	$(".burger").toggleClass('opened');
  $(".h_popup").toggleClass('opened');
  $(".body_mask").toggleClass('opened');
  $("body").toggleClass('opened');
});


//search popup
$(".h_search, .sp_close").click(function(e) {
    $(".search_popup").slideToggle(200);
    $(".body_mask").toggleClass('opened');
    e.preventDefault();
});


//cat sizes select
$(".mci_size.available").click(function() {
    $(this).siblings(".available").removeClass('selected');
    $(this).addClass('selected');
});


//left filter popup
$(".cfi_head").click(function() {
    $(this).siblings(".cfi_content").slideToggle();
});


//right cat show more
$(".show_more_btn").click(function() {
    $(".m_cat_items").removeClass("hide_some");
    $(this).hide();
});


//cat_left_filter_popup
$(".cat_filter_btn_mob, .cl_close").click(function() {
    $(".cat_left").slideToggle();
    $(".body_mask").toggleClass('opened');
});


// copy text to mobile head
let addText = '';
let text = $('.gr_name').text().trim();
$('.gr_name_mob').text(addText+' '+text);


//tabs
$(".tab_item").not(":first").hide();
$(".tabs_block .tab").click(function() {
    $(".tabs_block .tab").removeClass("active").eq($(this).index()).addClass("active");
    $(".tab_item").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("active");


//counter
$('.minus').click(function() {
    var $input = $(this).parent().find('input');
    var count = parseInt($input.val()) - 1;
    count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
    return false;
});
$('.plus').click(function() {
    var $input = $(this).parent().find('input');
    $input.val(parseInt($input.val()) + 1);
    $input.change();
    return false;
});


//custom scrollbar
$('.scroll').mCustomScrollbar({
    mouseWheel:{
        scrollAmount:'300%' 
    }
});


//phone mask
jQuery(function($){
   $(".phone").mask("+7 (999) 999-9999");
});


//slider_2x_rollers
var inputs,
slider = $('.i2_slider').slider({
  range: true,
  min: 0,
  max: 30000,
  values: [150, 20000],
  slide: function(event, ui) {
      inputs.eq(ui.handleIndex).val(ui.value);
  }
});
inputs = $('.i2s_input').on('.i2s_input', function(){
  var values = inputs.map(function(i, el){
      var v = +$(el).val();
      return isNaN(v) ? 0 : v;
  }).get();
  slider.slider('values', values);
});


//с одним бегунком
var inputs,
slider = $('.i2_slider').slider({
  // range: true,
  // min: 0,
  // max: 100,
  // values: [0, 100],
  slide: function(event, ui) {
      inputs.eq(ui.handleIndex).val(ui.value);
  }
});
inputs = $('.i2s_input').on('.i2s_input', function(){
  var values = inputs.map(function(i, el){
      var v = +$(el).val();
      return isNaN(v) ? 0 : v;
  }).get();
  slider.slider('values', values);
});









//owl sliders
$('.main_slider').addClass('owl-carousel');
$('.main_slider').owlCarousel({
    center: false,
    items: 1,
    loop: true,
    autoWidth: false,
    autoplay: true,
    autoplayTimeout: 5000,
});

$('.rev_slider').addClass('owl-carousel');
$('.rev_slider').owlCarousel({
    center: false,
    items: 2,
    loop: false,
    margin: 20,
    autoWidth: true,
    responsive: {
        0: {
            items: 1,
            autoWidth: false,
            autoHeight: true,
        },
        720: {
            
        }
    }
});

$('.prev_slider').addClass('owl-carousel');
$('.prev_slider').owlCarousel({
    center: false,
    items: 2,
    loop: false,
    margin: 24,
    autoWidth: true,
    autoHeight: true,
});

var hb = window.matchMedia('all and (max-width: 720px)');
if (hb.matches) {
    $('.hb_slider').addClass('owl-carousel');
    $('.hb_slider').owlCarousel({
        center: false,
        items: 4,
        loop: false,
        margin: 30,
        autoWidth: true,
    });
} else {}



$('.about_slider').addClass('owl-carousel');
$('.about_slider').owlCarousel({
    center: false,
    items: 4,
    loop: false,
    margin: 20,
    autoWidth: true,
    responsive: {
        0: {
            margin: 6,
        },
        720: {
        }
    }
});


//good slider (synced)
var sync1 = $("#sync1");
var sync2 = $("#sync2");
var slidesPerPage = 5; //globaly define number of elements per page
var syncedSecondary = true;

sync1.owlCarousel({
    items: 1,
    slideSpeed: 2000,
    nav: true,
    autoplay: false,
    dots: true,
    loop: true,
    responsiveRefreshRate: 200,
    navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
}).on('changed.owl.carousel', syncPosition);

sync2
    .on('initialized.owl.carousel', function() {
        sync2.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
        items: slidesPerPage,
        dots: true,
        nav: true,
        smartSpeed: 200,
        slideSpeed: 500,
        slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
        responsiveRefreshRate: 100
    }).on('changed.owl.carousel', syncPosition2);

function syncPosition(el) {
    //if you set loop to false, you have to restore this next line
    //var current = el.item.index;

    //if you disable loop you have to comment this block
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - (el.item.count / 2) - .5);

    if (current < 0) {
        current = count;
    }
    if (current > count) {
        current = 0;
    }

    //end block

    sync2
        .find(".owl-item")
        .removeClass("current")
        .eq(current)
        .addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();

    if (current > end) {
        sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
        sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
}

function syncPosition2(el) {
    if (syncedSecondary) {
        var number = el.item.index;
        sync1.data('owl.carousel').to(number, 100, true);
    }
}

sync2.on("click", ".owl-item", function(e) {
    e.preventDefault();
    var number = $(this).index();
    sync1.data('owl.carousel').to(number, 300, true);
});



});
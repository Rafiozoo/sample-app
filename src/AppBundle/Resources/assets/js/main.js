$(document).ready(function() {


// Ad. 2: Sticky menu (scroll listener)
var stickyMenuTop = $('.menu').offset().top;

var stickyMenu = function() {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > stickyMenuTop) {
        $('.menu').addClass('sticky');
    } else {
        $('.menu').removeClass('sticky');
    }
};

stickyMenu();

$(window).scroll(function() {
  stickyMenu();
});


// Ad. 3: Fix notification on "Notify!" button

/*$notificationButton = $('button').attr('id','notify');
$('#notifications').append($notificationButton);

$('#notify').click(function(){
        randomId = 'rewrwe21';
        $randomElement = $('<div>').attr('id',randomId).text('test notification').hide();
        $('#messages').append($randomElement);
        $randomElement.fadeIn('slow').fadeOut('slow');
        $randomElement.remove();
});*/

$('#notify').click(function() {
    $randomId = 'rewrwe21';
    $randomElement = $('#messages').attr('id',$randomId).text('test notification').hide();
    $('#messages').append($randomElement);
    $randomElement.fadeIn('slow').delay(1000).fadeOut('slow', function(){
        $(this).remove();
    });
    $('#notify').remove();
});


// Ad. 4: Hamburger icon show/hide depending on CSS media query
$('.menu__hamburger').click(function() {
    $(this).toggleClass('active');
    $('.menu__items').toggleClass('active');
});


// Ad. 5: Number in Cart (qty) stored locally
// NOTE! Need workaround. IE issue when another tab opened
// → https://connect.microsoft.com/IE/feedback/details/812563/ie-11-local-storage-synchronization-issues
(function() {
    if(localStorage.clickcount) {
        document.getElementById('counter').innerHTML = '(' + localStorage.clickcount + ')';
        $('#addtocart').click(function(){
            document.getElementById('counter').innerHTML = '(' + (++localStorage.clickcount) + ')';
        });
    } else {
        localStorage.clickcount = 0;
        document.getElementById('counter').innerHTML = '(' + localStorage.clickcount + ')';
        $('#addtocart').click(function(){
            document.getElementById('counter').innerHTML = '(' + (++localStorage.clickcount) + ')';
        });
    }
}());

});
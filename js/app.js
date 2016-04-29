$(document).foundation();

//Foundation top-bar stickiness code
$('.top-bar').on('sticky.zf.stuckto:top', function () {
    $(this).addClass('shrink');
}).on('sticky.zf.unstuckfrom:top', function () {
    $(this).removeClass('shrink');
});

// This script selects two random maps from a json file of my maps
// and uses cartodb.js to add it them to the dom
$.getJSON("data/maps.json", function (data) {
    var i = Math.floor((Math.random() * data.length));
    cartodb.createVis('map', data[i].url);
    $('#map-name').text(data[i].name);
});

// The following functions are for sending an API call to www.wprdc.org to
// get a count of dog names matching the users input
var get_dog_info = function () {
    var dogName = $('#dog-search').val().toUpperCase();
    var statement = "SELECT * FROM \"f8ab32f7-44c7-43ca-98bf-c1b444724598\" WHERE \"DogName\" LIKE '" + dogName + "'";
    var url = "https://data.wprdc.org/api/action/datastore_search_sql";
    $.ajax({
        url: url,
        data: {sql: statement},
        crossDomain: true,
        dataType: "jsonp"
    }).done(function (data) {
        $('#dog-results').empty().append("<p>There are <b>" + data.result.records.length + "</b> dogs with that name!</p>");
    }).fail(function () {
        return null;
    })
};

$('#dog-submit').on("click", get_dog_info);
$('#dog-search').on("keypress", function (e) {
    if (e.keyCode == 13) {
        get_dog_info();
    }
});

//This sends the contact form to a real basic API I created and host on a pitt server
$('#contact-form').on("submit", function (e) {
    e.preventDefault();
    var data = $('#contact-form').serialize();
    var url = "form.php";
    $(this > 'input').empty();
    $.post(url, data, function(response){
        if(response.success == "true"){
            $("#contact-msg").empty().append("<p class='form-msg'>You were guest <b>#"+ response.count + "</b> to submit this form!");
        }
    });
});


// Jumps just above section of page as not to obscure section titles
// credit to Chris Coyier (https://css-tricks.com/snippets/jquery/smooth-scrolling/)

$(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 50
                }, 1000);
                return false;
            }
        }
    });
});
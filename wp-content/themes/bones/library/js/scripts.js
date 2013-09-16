/*
Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
    window.getComputedStyle = function(el, pseudo) {
        this.el = el;
        this.getPropertyValue = function(prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop == 'float') prop = 'styleFloat';
            if (re.test(prop)) {
                prop = prop.replace(re, function () {
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        }
        return this;
    }
}


// as the page loads, call these scripts
jQuery(document).ready(function($) {

/*var doc_width = $('html').width();

$(window).resize(function(){
    var doc_width = $('html').width();
    console.log(doc_width);
});*/

function getIndPos(element) {
    var row_pos = [];
    row_pos[0] = $(element).attr("data-row");
    row_pos[1] = $(element).attr("data-col");
    return row_pos;
}

function buildPreview(element){
    var row_pos = getIndPos(element);
    var postinfo = {
        'title' : $(element).attr('data-title'),
        'desc'  : $(element).attr('data-description'),
        'bigimg': $(element).attr('data-largesrc'),
        'col'   : row_pos[1],
        'row'   : row_pos[0],
        'url'   : $(element).attr('data-link'),
        'mediat': $(element).attr('data-media'),
        'orientation' : $(element).attr('data-orientation')
    }

    postinfo.grabkey = "project-" + postinfo.mediat + "-" + postinfo.col + "-" + postinfo.row + " " + postinfo.orientation;


    if (postinfo.url === undefined) {
        postinfo.url = "";
    }
    var row_placement = '.' + postinfo.mediat + '-endrow-' + postinfo.row;
    var preview_markup = '<li class="preview ' + postinfo.grabkey + ' ' + postinfo.mediat + '">\
        <div class="preview-arrow-top position-' + postinfo.col + '"></div>\
        <div class="preview-wrap">\
            <div class="preview-img-wrap">\
                <img src="' + postinfo.bigimg + '" />\
            </div>\
            <article class="preview-text-wrap">\
                <h1>' + postinfo.title + '</h1>\
                <p>' + postinfo.desc + '</p>\
                <div class="prev-button"><a href="' + postinfo.url + '" class="preview-button">Visit Website</a></div>\
            </article>\
            <a class="exit-x"><span style="opacity: 0.15; font-weight: normal;">collapse</span> x</a>\
        </div>\
    </li>';

    $(row_placement).after(preview_markup);

    return false;
}

function lastRow(element) {
    var row = $(element).attr("data-row");
    var mediat = $(element).attr("data-media");
    var classname = mediat + "-endrow-" + row;
    if ( !$(element).hasClass(classname) ) {
        $(element).addClass(classname);
    }

    return false;
}

function assignRowCol(element) {

    var width = $('html').width();
    var position = $(element).attr('data-position');
    position = parseInt(position);
    var row_pos = [];
    var classname = $(element).attr('data-media');

    if ( width >= 1024 ) {    
        if ( position % 3 == 1) {
            position+=2;
            col = 1;
        }  else if ( position % 3 == 2 ) {
            position++;
            col = 2;
        } else {
            col = 3;
        }
       
        var row = position / 3;

        if ( col === 3 ) {
            classname = classname + "-endrow-" + row.toString(); 
            $(element).addClass(classname);
        }

    } else {

        if ( position % 2 == 1 ) {
            position++;
            col = 1;
        } else {
            col = 2;
        }
        var row = position / 2;

        if ( col === 2 ) {
            classname = classname + "-endrow-" + row.toString(); 
            $(element).addClass(classname);
        }
    }
    $(element).attr("data-row", row).attr("data-col", col);

    return false;
}

function deployContent(element) {

    $(element).each(function(){
        assignRowCol(this);
    });

    lastRow('li.web:last');
    lastRow('li.print:last');
    lastRow('li.apparel:last');

    $(element).each(function(){
        buildPreview(this);
    });

    return false;
}


function getThePreview(element) {
    var col = $(element).attr("data-col");
    var row = $(element).attr("data-row");
    var mediat = $(element).attr("data-media");
    var grabkey = "project-" + mediat + "-" + col + "-" + row;
    return grabkey;
}

function hideSlide(element, grabkey) {
    var grabkey_class = "." + grabkey;
    var preview_node = $(grabkey_class);
    
    var in_line = 0;
    if ( $('.preview').hasClass("expanded") ) {
        var in_line = 1;

    }

    if ( preview_node.hasClass("expanded") ) {
        var expanded = 1;
    } else {
        var expanded = 0;
    }

    var status = [expanded, in_line];

    if (status[0]) {
        preview_node.removeClass("expanded");
        $('html, body').delay(500).animate({
            scrollTop: $(".expanded").offset().top
        }, 1000);
    } else if (status[1]) {
        $("li.expanded").removeClass("expanded");
        preview_node.delay(500).addClass("expanded").queue(function(){
            $('html, body').delay(500).animate({
                scrollTop: $(".expanded").offset().top
            }, 1000);
        });
    } else {
        preview_node.addClass("expanded");
        $('html, body').delay(500).animate({
            scrollTop: $(".expanded").offset().top
        }, 1000);
    }

    return false;
}

    //execute scripts
    deployContent('li.thumbnail');

    $('li.thumbnail').on("click", function(){
        var grabkey = getThePreview(this);
        hideSlide(this, grabkey);
    });

    $('.exit-x').on("click", function(){
        $(".expanded").removeClass("expanded");
        $('html, body').delay(500).animate({
            scrollTop: $(".control").offset().top
        }, 1000);
    });

    var $control_li = $('ul.control li');
	$control_li.on('click', function(){ //on click
        if ($(this).hasClass('active')) {
            return false;
        } else{
            $("li.expanded").fadeToggle().removeClass("expanded").delay(2000).fadeToggle();
            $control_li.each(function(){ //loop through all control li elements
                if ($(this).hasClass('active')){// if any of those elements have the class 'active'
                    var filter = $(this).attr('data-media-type'); //get media type
                    $('#thumbnails li.thumbnail').each(function() { //loop through thumbs
                        if ($(this).hasClass(filter)) { //if it is of the same media type, toggle it
                            $(this).fadeToggle();
                        }
                    });
                }
            });        
            if (!$(this).hasClass('active')){//if this element does not have class 'active'
                $control_li.removeClass('active'); //remove class 'active' from all tabs
                $(this).addClass('active'); //add class 'active' to this tab
                var filter = $(this).attr('data-media-type'); //get the media type
                $('#thumbnails li.thumbnail').each(function() { 
                    if ($(this).hasClass(filter)) {
                        $(this).delay(500).fadeToggle();
                    }
                });
            }
        }
        return false;
    });
}); /* end of as page load scripts */


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
    var doc = w.document;
    if( !doc.querySelector ){ return; }
    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
		x, y, z, aig;
    if( !meta ){ return; }
    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true; }
    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false; }
    function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );
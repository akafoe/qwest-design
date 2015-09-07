var map_canvas = document.getElementById('map_canvas');

/* Initiate Google Maps */

function initialize() {
    var myLatlng = new google.maps.LatLng(51.444138, 7.258832); /* latitude and longitude for the map   */
    var map_options = {
        
        zoom: 15, /* zoom level of the map */
        center: new google.maps.LatLng(51.446973, 7.252115),/* Due to some DOM-Issues the center of the Map is diffrent from the Marker Position */
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: false,      /* disable the Satelite-Roadmap switch */
        panControl: false,          /* disable the pan controller */
        streetViewControl: false,   /* disable the streetView option */
        zoomControl: false,         /* disable the zoom level buttons, the user will still be able to control the zoom by scrolling  */

        scaleControl: true,         /* optional: shows the scale of the map */
        scaleControlOptions: {
            /* since we decided to show the scale, we tell the script to show it in the corner we like, in this case Bottom Left */
            position: google.maps.ControlPosition.BOTTOM_LEFT
        }
    }
    var map = new google.maps.Map(map_canvas, map_options);
    
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map
    });
}

google.maps.event.addDomListener(window, 'load', initialize);


/* Initiate Accordion */
$(function() {
  $( "#accordion" ).accordion({
    active: 1,
    header: "H3",
    collapsible: true,
    heightStyle: "content",
    animate: "easeOutCubic",
    icons: false,
    activate: function() {
          google.maps.event.trigger(map_canvas, 'resize')
    }
  });
});


/* Wochenkarte Set Active Tab to Active Date 
based on: http://drupal.stackexchange.com/questions/88026/default-tab-by-date-or-day */
(function($){
    $(document).ready(function(){
        var d = new Date();
        var n = d.getDay()-1;
        if ( n == -1) {
            n = 6;
        };

        // Only Tabs from 0 to 4, so check if n <= 4, and don't activate following script
        if ( n <= 4 ) {
	        $(".quicktabs-tabs li").removeClass('active');
	        $('#quicktabs-tab-wochenkarte-' + n).parent().addClass('active');
	        $('.quicktabs-tabpage').addClass('quicktabs-hide');
        	$('#quicktabs-tabpage-wochenkarte-' + n).removeClass('quicktabs-hide');
        }
    });
})(jQuery);
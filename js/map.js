$(window).load(function() {
    if (!GBrowserIsCompatible()) {
        return;
    }

	//embed Open Street Map tiles
	var copyOSM = new GCopyrightCollection("<a href=\"http://www.openstreetmap.org/\">OpenStreetMap</a>");
	copyOSM.addCopyright(new GCopyright(1, new GLatLngBounds(new GLatLng(-90,-180), new GLatLng(90,180)), 0, " "));

	var tilesMapnik = new GTileLayer(copyOSM, 1, 17, {tileUrlTemplate: 'http://tile.openstreetmap.org/{Z}/{X}/{Y}.png'});
	var mapMapnik = new GMapType([tilesMapnik],G_NORMAL_MAP.getProjection(),"Map");

    // Initialise the map
	$('.highlight:first').prepend('<div id="places-map"></div>');
    var mapDiv = $('#places-map');
    var gmap = new GMap2(mapDiv.get(0),{ mapTypes: [mapMapnik, G_SATELLITE_MAP] });
 //   var gmap = new GMap2(mapDiv.get(0));
    var point = new GLatLng(50.8235, -0.138);
    gmap.addControl(new GLargeMapControl());
    gmap.addControl(new GMapTypeControl());
    gmap.setCenter(point, 15);
    
    // Add a special marker for the dome
    var icon = new GIcon();
    icon.iconAnchor = new GPoint(9, 34);
    icon.infoWindowAnchor = new GPoint(9, 2);
    icon.image = "/images/circle_blue.png";
//    icon.shadow = "http://www.google.com/mapfiles/shadow50.png";
    var starter = new GMarker(point, icon);
    GEvent.addListener(starter, "click", function() {
        starter.showMapBlowup({
            zoomLevel: 17,
            mapType: mapMapnik
        });
    });
    gmap.addOverlay(starter);
    gmap.panTo(point);
    
    var currentMarker = false; // So we can hide it later

    // Display the vcards on the map
    $('.vcard').each(function() {
        var vcard = $(this);
        var geo = vcard.find('.geo[title]');

        if (geo.length && /;/.exec(geo.attr('title'))) {
            var degrees = geo.attr('title').split(';');
            var lat = parseFloat(degrees[0]);
            var lon = parseFloat(degrees[1]);
            vcard.css('cursor', 'pointer');
            vcard.click(function() {
                if (currentMarker) {
                    gmap.removeOverlay(currentMarker);
                }
                $('.current-vcard').removeClass('current-vcard');
                vcard.addClass('current-vcard');
                var point = new GLatLng(lat, lon);
				// If the vcard has an image, use it for the marker
				var image = $(this).find('img').attr('src');
				if (image) {
					image = image.replace('gif','png');
 				   	var icon = new GIcon();
				    icon.iconAnchor = new GPoint(9, 34);
				    icon.infoWindowAnchor = new GPoint(9, 2);
					icon.image = image;
	                var marker = new GMarker(point,icon);
				} else {
					var marker = new GMarker(point);
				}
                currentMarker = marker;
                GEvent.addListener(marker, "click", function() {
                    marker.openInfoWindowHtml(vcard.html());
                });
                gmap.addOverlay(marker);
                gmap.panTo(point,icon);
            });
        }
    });
});

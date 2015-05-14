<?php

function flickrPhotosSearch($data=array()) {

	$return = array();

	$url = 'http://api.flickr.com/services/rest/?method=flickr.photos.search';

	$arguments = array('api_key','user_id','tags','tag_mode','text','min_upload_date','max_upload_date','min_taken_date','max_taken_date','license','sort','privacy_filter','bbox','accuracy','extras','per_page','page');

	foreach ($arguments as $argument) {

		if (isset($data[$argument])) {

			$url.= '&'.$argument.'='.urlencode($data[$argument]);

		}
	}

	$doc = new DOMDocument();

	if (!@$doc -> load($url)) {

		return $return;

	}

	$photos = $doc -> getElementsByTagName('photo');

	if ($photos -> item(0)) {

		foreach ($photos as $photo) {
		
			$count = count($return);
			
			$return[$count]['url'] = 'http://www.flickr.com/photos/'.$photo -> getAttribute('owner').'/'.$photo ->  getAttribute('id');
			$return[$count]['title'] = htmlspecialchars($photo -> getAttribute('title'));
			$path = 'http://farm'.$photo ->  getAttribute('farm').'.static.flickr.com/'.$photo -> getAttribute('server').'/'.$photo -> getAttribute('id').'_'.$photo -> getAttribute('secret').'_';
			$return[$count]['src']['square'] = $path.'s.jpg';
			$return[$count]['src']['thumbnail'] = $path.'t.jpg';
			$return[$count]['src']['small'] = $path.'m.jpg';
			$return[$count]['src']['medium'] = $path.'-.jpg';
			$return[$count]['src']['large'] = $path.'b.jpg';
			$return[$count]['src']['original'] = $path.'o.jpg';
	
		}

	}

	return $return;

}

?>
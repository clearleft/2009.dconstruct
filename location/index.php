<?php
	$title = "Location";
	$section = "location";
?>

<?php $dr = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']); ?>

<?php
	switch($_SERVER['HTTP_HOST']):
		case '2009.dconstruct.dev':
			$googlemapskey = 'ABQIAAAAYbIZDya3Ah1ggVonxU86ixQ58n_ysgcM9wrMjXh6ZbgrIKjDMBRUtpavOljP7OQnknqf5W87greAGA';
		break;
		default:
			$googlemapskey = 'ABQIAAAAoC20TTVpl16JBF_GkXMC5BQTft-6JYx96hNCD94hyM7ZAEhJmBSUPTqc7m6LqVZRAo3DxT5SVIU4mw';
		break;
	endswitch;

	$scripts = '
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
 google.load("jquery", "1");
</script>
<script type="text/javascript" src="/js/map.js"></script>
<script src="http://maps.google.com/maps?file=api&amp;v=1&amp;key='.$googlemapskey.'" type="text/javascript"></script>
';

?>

<?php include($dr . "head.inc.php"); ?><!-- HEADER -->

<!-- SECTION LOCATION -->
<div class="section">

	<div class="highlight">
		<div class="vcard conference-location">
			<span class="fn org">Brighton Dome</span>
			<span class="adr">
				<span class="region">Brighton</span> 
				<span class="street-address">Church Street</span>
				<span class="postal-code">BN1 1UG</span>
				<span class="country-name">United Kingdom</span>
			</span>
		</div>
		<!-- end .highlight -->

<!-- Map Key -->

		<ul class="map-key">
			
			<li class="vcard">
				<img src="/images/circle_blue.gif" alt="blue circle">
				<span>Conference</span>
				<span class="fn org">Brighton Dome</span>
				<abbr class="adr geo" title="50.8235;-0.138">
					<span class="street-address">Church Street</span>
				</abbr>
			</li>
			
			<li class="vcard">
				<img src="/images/circle_green.gif" alt="green circle">
				<span>Workshops</span>
				<span class="fn org">Clearleft</span>
				<abbr class="adr geo" title="50.82636;-0.1382">
					<span class="street-address">28 Kensington Street</span>
				</abbr>
			</li>
			
		</ul>
		
		<ul class="map-key">
			
			<li class="vcard">
				<img src="/images/circle_orange.gif" alt="orange circle">
				<span class="fn org">Brighton Train Station</span>
				<abbr class="adr geo" title="50.828907;-0.140623">
					<span class="street-address">Queens Road</span>
				</abbr>
			</li>
			
			<li class="vcard">
				<img src="/images/circle_purple.gif" alt="purple circle">
				<span>Pre-party</span>
				<span class="fn org">Po Na Na</span>
				<abbr class="adr geo" title="50.81968;-0.13905">
					<span class="street-address">75/79 East Street</span>
				</abbr>
			</li>
			
			<li class="vcard">
				<img src="/images/circle_pink.gif" alt="pink circle">
				<span>After-party</span>
				<span class="fn org">Above Audio</span>
				<abbr class="adr geo" title="50.81965;-0.13443">
					<span class="street-address">10 Marine Parade</span>
				</abbr>
			</li>
			
		</ul>

	</div>
	
	
	<!-- end .highlight -->

<div class="recommendations">
		
<!-- Accomodation -->
		
		<div class="accomodation">

			<h3 id="places"><a href="http://maps.google.co.uk/maps?q=hotels&amp;near=BN1+1UE">Accommodation</a></h3>
			
			<table>
				
				<tr class="vcard">
					<td>
						<span class="fn org">myhotel</span>
						<abbr class="adr geo" title="50.82451;-0.13857">
							<span class="street-address">17 Jubilee Street</span>
						</abbr>
						<span class="tel">+44 (0)1273 900 300</span>
					</td>
					<td class="url">
						<a class="url" href="http://www.myhotels.com/default.asp?section=60">website</a>
					</td>
				</tr>
				
				<tr class="vcard">
					<td>
						<span class="fn org">Old Ship Hotel</span>
						<abbr class="adr geo" title="50.820401;-0.141953">
							<span class="street-address">31&ndash;38 Kings Road</span>
						</abbr>
						<span class="tel">+44 (0)1273 329 001</span>
					</td>
					<td class="url">
						<a class="url" href="http://www.paramount-hotels.co.uk/hotels/southern-england/paramount-old-ship-hotel/">website</a>
					</td>
				</tr>
				
				<tr class="vcard">
					<td>
						<span class="fn org">Premier Inn</span>
						<abbr class="adr geo" title="50.823274;-0.140912">
							<span class="street-address">144 North Street</span>
						</abbr>
						<span class="tel">+44 (0)87 0990 6340</span>
					</td>
					<td class="url">
						<a class="url" href="http://www.premierinn.com/pti/pTiibsRedirect.do?INNID=BRIPTI">website</a>
					</td>
				</tr>				
			</table>
			
		</div><!-- end .accomodation -->

<!-- Eating -->

		<div class="eating">
			
			<h3><a href="http://maps.google.co.uk/maps?q=restaurants&amp;near=BN1+1UE">Eating</a></h3>
			
			<table>
				
				<tr class="hreview">
					<td class="item vcard">
						<span class="fn org">E-Kagen</span>
						<abbr class="adr geo" title="50.8279;-0.13785">
							<span class="street-address">22&ndash;23 Sydney Street</span>
						</abbr>
						<p class="summary">Superb Japanese food served in an unassuming setting.</p>
					</td>
					<td>
						<img class="rating" src="/images/stars-5.gif" alt="5"><span class="rating-context">stars out of 5</span>
					</td>
				</tr>
				
				<tr class="hreview">
					<td class="item vcard">
						<span class="fn org">Wagamama Noodle Bar</span>
						<abbr class="adr geo" title="50.82565;-0.13845">
							<span class="street-address">Kensington St</span>
						</abbr>
						<p class="summary">Asian food chain with lots of seating.</p>
					</td>
					<td>
						<img class="rating" src="/images/stars-4.gif" alt="4"><span class="rating-context">star out of 5</span>
					</td>
				</tr>
				
				<tr class="hreview">
					<td class="item vcard">
						<span class="fn org">Gourmet Burger Company</span>
						<abbr class="adr geo" title="50.824854;-0.139335">
							<span class="street-address">44&ndash;47 Gardner Street</span>
						</abbr>
						<p class="summary">Not bad for a burger chain.</p>
					</td>
					<td>
						<img class="rating" src="/images/stars-3.gif" alt="3"><span class="rating-context">stars out of 5</span>
					</td>
				</tr>
				
				<tr class="hreview">
					<td class="item vcard">
						<span class="fn org">Strada</span>
						<abbr class="adr geo" title="50.822868;-0.139915">
							<span class="street-address">160&ndash;161 North Street</span>
						</abbr>
						<p class="summary">Reliable Italian fare.</p>
					</td>
					<td>
						<img class="rating" src="/images/stars-3.gif" alt="3"><span class="rating-context">star out of 5</span>
					</td>
				</tr>
				
			</table>
		</div>
		
	
		
		<!-- end .eating -->

<!-- Wifi -->

		<div class="wifi">
		<h3><a href="http://sussexdigital.com/map">Free WiFi</a></h3>
			<table>
				
				<tr class="hreview">
					<td class="item vcard">
							<span class="fn org">Earth and Stars</span>
							<abbr class="adr geo" title="50.82476;-0.14221">
							<span class="street-address">46 Windsor Street</span>
							</abbr>
						<p class="summary">Locally sourced food and organic beer 4/5</p>
					</td>
					<td>
						<img class="rating" src="/images/stars-4.gif" alt="4"><span class="rating-context">stars out of 5</span>
					</td>
				</tr>
				
				<tr class="hreview">
					<td class="item vcard">
						  <span class="fn org">Riki-Tik</span>
						  <abbr class="adr geo" title="50.8237;-0.14025">
						  <span class="street-address">18a Bond Street</span>
						  </abbr>
						<p class="summary">The kids really like this trendy bar</p>
					</td>
					<td>
						<img class="rating" src="/images/stars-3.gif" alt="3"><span class="rating-context">stars out of 5</span>
					</td>
				</tr>
				
				<tr class="hreview">
					<td class="item vcard">
						<span class="fn org">Caf&#233; Delice</span>
						<abbr class="adr geo" title="50.82565;-0.13896">
						<span class="street-address">40 Kensington Gardens</span>
						</abbr>
						<p class="summary">Lovely French Caf&#233;</p>
					</td>
					<td>
						<img class="rating" src="/images/stars-4.gif" alt="4"><span class="rating-context">stars out of 5</span>
					</td>
				</tr>
				
			</table>
			
		</div><!-- end .wifi -->
		
	</div><!-- end .recommendations -->

</div><!-- end .section --> 

<!-- FOOTER -->
<?php include($dr . "footer.inc.php"); ?>
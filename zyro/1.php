<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Home</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1200" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- Facebook Open Graph -->
	<meta property="og:title" content="Home" />
	<meta property="og:description" content="" />
	<meta property="og:image" content="" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->
		
	<link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="./js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="./js/bootstrap.min.js" type="text/javascript"></script>
	<script src="./js/main.js?v=20190120113454" type="text/javascript"></script>
	<script src='https://api.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.js'></script>
	<link href='https://api.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.css' rel='stylesheet' />
	<link href="./css/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css" />
	<link href="./css/site.css?v=20190120113454" rel="stylesheet" type="text/css" />
	<link href="./css/common.css?ts=1561231019" rel="stylesheet" type="text/css" />
	<link href="./css/1.css?ts=1561231019" rel="stylesheet" type="text/css" />
	<ga-code/>
	<script type="text/javascript">
	window.useTrailingSlashes = true;
</script>
	
	<link href="css/flag-icon-css/css/flag-icon.min.css" rel="stylesheet" type="text/css" />	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

	</head>


<body><div class="root"><div id="wb_bgs_cont"><div id="wb_page_1_bg"></div><div id="wb_page_2_bg"></div><div id="wb_page_3_bg"></div></div><div id="wb_header_bg"></div><div id="wb_sbg_placeholder"></div><div class="vbox wb_container wb_header_fixed" id="wb_header">
	
<div class="wb_cont_inner"><div id="wb_element_instance0" class="wb_element wb-menu"><ul class="hmenu menu-landing"><li class="active"><a href="#home" target="_self">Home</a></li><li><a href="#about" target="_self">About</a></li><li><a href="#contacts" target="_self">Contacts</a></li></ul><div class="clearfix"></div></div><div id="wb_element_instance1" class="wb_element wb_text_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle" style="text-align: center;"><span style="color:rgba(252,135,33,1);">Strava KOM/QOM Finder</span></h4></div></div><div class="wb_cont_outer"><div id="wb_element_instance2" class="wb_element wb_element_shape"><div class="wb_shp"></div></div></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div class="wb_cont_inner"><div class="wb_page" id="page_1"><a name="home" class="wb_page_anchor wb_anchor" id="page_1_anchor"></a><div id="wb_element_instance3" class="wb_element wb_text_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2019 <a href="http://elenator.com">elenator.com</a></p></div><div id="wb_element_instance4" class="wb_element wb_element_shape"><div class="wb_shp"><input class="form-control form-field" type="text" value="" name="wb_input_0" required="required"></div></div><div id="wb_element_instance5" class="wb_element"><a class="wb_button" href=""><span>Search</span></a></div><div id="wb_element_instance6" class="wb_element wb_text_element" style=" line-height: normal;"><p><strong>Athlete ID:</strong></p></div>
<div id='map' style='width: 500px; height: 400px;'></div>
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiZWxlbmFlbGkiLCJhIjoiY2p4aHcxZG9iMHBlMjN5bDl4MWNvcjYxeCJ9.nHRToLwEXYwSmEotKPhYyw';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center: [8.69079, 49.40768],
zoom: 10
});
 
var marker1 = new mapboxgl.Marker({
draggable: true
})
.setLngLat([8.69079, 49.40768])
.addTo(map);
 
var marker2 = new mapboxgl.Marker({
draggable: true
})
.setLngLat([8.7179, 49.42768])
.addTo(map);

function onDragEnd() {
var lngLat = marker1.getLngLat();
coordinates.style.display = 'block';
coordinates.innerHTML = 'Longitude: ' + lngLat.lng + '<br />Latitude: ' + lngLat.lat;
}
 
marker1.on('dragend', onDragEnd);
marker2.on('dragend', onDragEnd);

</script>

</div><div class="wb_page" id="page_2"><a name="about" class="wb_page_anchor wb_anchor" id="page_2_anchor"></a><div id="wb_element_instance8" class="wb_element wb_text_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2019 <a href="http://elenator.com">elenator.com</a></p></div><div id="wb_element_instance9" class="wb_element wb_text_element" style=" line-height: normal;"><h1 class="wb-stl-heading1">About</h1><p> </p><p class="wb-stl-normal"> </p><p>This is a side project to add some extended functionality to Strava. I hope you find it useful.</p></div></div><div class="wb_page" id="page_3"><a name="contacts" class="wb_page_anchor wb_anchor" id="page_3_anchor"></a><div id="wb_element_instance11" class="wb_element wb_text_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2019 <a href="http://elenator.com">elenator.com</a></p></div><div id="wb_element_instance13" class="wb_element wb_text_element" style=" line-height: normal;"><h1 class="wb-stl-heading1">Contacts</h1><p> </p><p>Please use the following form to submit any problems, feedback or requests.</p></div><div id="wb_element_instance14" class="wb_element"><form class="wb_form" method="post" enctype="multipart/form-data"><input type="hidden" name="wb_form_id" value="a9e12055"><textarea name="message" rows="3" cols="20" class="hpc"></textarea><table><tr><th class="wb-stl-normal">Name&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_0" value="Name"><input class="form-control form-field" type="text" value="" name="wb_input_0" required="required"></td></tr><tr><th class="wb-stl-normal">E-mail&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_1" value="E-mail"><input class="form-control form-field" type="text" value="" name="wb_input_1" required="required"></td></tr><tr class="area-row"><th class="wb-stl-normal">Message&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_2" value="Message"><textarea class="form-control form-field form-area-field" rows="3" cols="20" name="wb_input_2" required="required"></textarea></td></tr><tr class="form-footer"><td colspan="2"><button type="submit" class="btn btn-default">Submit</button></td></tr></table></form><script type="text/javascript">
			<?php $wb_form_id = popSessionOrGlobalVar("wb_form_id"); if ($wb_form_id == "a9e12055") { ?>
				var formValues = <?php echo json_encode(popSessionOrGlobalVar("post")); ?>;
				var formErrors = <?php echo json_encode(popSessionOrGlobalVar("formErrors")); ?>;
				wb_form_validateForm("a9e12055", formValues, formErrors);
				<?php $wb_form_send_success = popSessionOrGlobalVar("wb_form_send_success");
				if (($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state"))) { ?>
					var prompt = $("<div>")
						.addClass("alert alert-<?php echo $wb_form_send_success ? "success" : "danger"; ?>")
						.css({ position: "fixed", opacity: 0, right: "-50px", top: "10px", zIndex: 10000, fontSize: "24px",
							   padding: "30px 50px", lineHeight: "24px", maxWidth: "748px" })
						.append("<?php echo str_replace('"', '\"', $wb_form_send_state); ?>")
						.prepend($("<button>").addClass("close")
							.css({ marginRight: "-40px", marginTop: "-24px" })
							.html("&nbsp;&times;")
							.on("click", function() { $(this).parent().remove(); })
						)
					.appendTo("body");
					setTimeout(function() { prompt.animate({ opacity: 1, right: "10px" }, 250); }, 250);
					<?php $wb_form_send_success = false; $wb_form_send_state = null; ?>
				<?php } ?>
			<?php } ?>
			</script></div></div><div id="wb_element_instance15" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(1);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance15");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance15").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div><div class="wb_cont_outer"><div class="wb_page" id="page_1e"><div id="wb_element_instance7" class="wb_element wb_element_shape"><div class="wb_shp"></div></div></div><div class="wb_page" id="page_2e"><div id="wb_element_instance10" class="wb_element wb_element_shape"><div class="wb_shp"></div></div></div><div class="wb_page" id="page_3e"><div id="wb_element_instance12" class="wb_element wb_element_shape"><div class="wb_shp"></div></div></div></div></div>
<div class="vbox wb_container" id="wb_footer">
	
<div class="wb_cont_inner" style="height: 80px;"><div id="wb_element_instance16" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer, #wb_footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div><div class="wb_sbg"></div></div>{{hr_out}}</body>
</html>

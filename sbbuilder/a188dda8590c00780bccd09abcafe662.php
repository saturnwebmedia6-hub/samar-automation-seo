<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Custom 404 page"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? (generateCanonicalUrl($sitemapUrls)."\n") : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Custom 404 page"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Custom 404 page"); ?>" />
			<meta name="robots" content="noindex" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Custom 404 page"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Custom 404 page"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="SB Builder" />
			<script src="js/common-bundle.js?ts=20251031202102" type="text/javascript"></script>
	<script src="js/a188dda8590c00780bccd09abcafe662-bundle.js?ts=20251031202102" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20251031202102" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext" rel="stylesheet" type="text/css" />
	<link href="css/a188dda8590c00780bccd09abcafe662-bundle.css?ts=20251031202102" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/>
	<script type="text/javascript">
	window.useTrailingSlashes = true;
	window.disableRightClick = false;
	window.currLang = 'en';
</script>
		
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

		<script type="text/javascript">
		$(function () {
<?php $wb_form_send_success = popSessionOrGlobalVar("wb_form_send_success"); ?>
<?php if (($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state"))) { ?>
	<?php if (($wb_form_popup_mode = popSessionOrGlobalVar("wb_form_popup_mode")) && (isset($wbPopupMode) && $wbPopupMode)) { ?>
		if (window !== window.parent && window.parent.postMessage) {
			var data = {
				event: "wb_contact_form_sent",
				data: {
					state: "<?php echo str_replace('"', '\"', $wb_form_send_state); ?>",
					type: "<?php echo $wb_form_send_success ? "success" : "danger"; ?>"
				}
			};
			window.parent.postMessage(data, "<?php echo str_replace('"', '\"', popSessionOrGlobalVar("wb_target_origin")); ?>");
		}
	<?php $wb_form_send_success = false; $wb_form_send_state = null; $wb_form_popup_mode = false; ?>
	<?php } else { ?>
		wb_show_alert("<?php echo str_replace(array('"', "\r", "\n"), array('\"', "", "<br/>"), $wb_form_send_state); ?>", "<?php echo $wb_form_send_success ? "success" : "danger"; ?>");
	<?php } ?>
<?php } ?>
});    </script>
</head>


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a188dda8590c00780bccd09abcafe662" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="wb_main_a188dda8590c00780bccd09abcafe662" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a189b631e616009b59e91b04867782e9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a189b631e617009244eaa4b357ba0482" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1"><span style="color:#ef5d5d;">404</span></h1>
</div><div id="a189b631e61c00a453e814039ab328b4" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;"><span style="color:#ef5d5d;"><strong>Page not found</strong></span></h1>
</div></div></div></div></div><div id="wb_footer_a188dda8590c00780bccd09abcafe662" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19a3b80667501ac676e23eed66de4a6" class="wb_element wb_element_picture" data-plugin="Picture" title="Powered by Square Brothers"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="https://www.squarebrothers.com/" title="Powered by Square Brothers" target="_blank"><img loading="lazy" alt="Powered by Square Brothers" src="gallery_gen/ac444a088caf8228c134de1139d258a5_224x96_fit.jpg?ts=1761934862"></a></div></div></div><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#footer, #footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div></div></div>{{hr_out}}</body>
</html>

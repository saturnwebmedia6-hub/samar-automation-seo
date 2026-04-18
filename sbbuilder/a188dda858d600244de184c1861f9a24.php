<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Home"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? (generateCanonicalUrl($sitemapUrls)."\n") : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Home"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Home"); ?>" />
			
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Home"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Home"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="SB Builder" />
			<script src="js/common-bundle.js?ts=20251031202102" type="text/javascript"></script>
	<script src="js/a188dda858d600244de184c1861f9a24-bundle.js?ts=20251031202102" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20251031202102" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext" rel="stylesheet" type="text/css" />
	<link href="css/a188dda858d600244de184c1861f9a24-bundle.css?ts=20251031202102" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a188dda858d600244de184c1861f9a24" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18b6148df8200ecb6004187a6513aee" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18b6148eb0f00b7aa14153effe6931c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda8530f03095ed56ffad6a899e2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h5 class="wb-stl-subtitle"><span style="color:rgba(255,255,255,1);">We know the way</span></h5>
</div></div></div></div></div></div></div><div id="wb_main_a188dda858d600244de184c1861f9a24" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda8530f05188c0ab7b462953340" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda8530f065760d30ca2751ebc7e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;"><span style="color:rgba(255,255,255,1);">Our website is coming soon</span></h1>
</div><div id="a188dda8530f0768dfc14449c8bf723f" class="wb_element" data-plugin="countdown">
	<style>
		#a188dda8530f0768dfc14449c8bf723f_countdown_timer {
		    width: 100%;
		    height: 100%;
			font-family: 'PT Serif',Arial,serif;
			font-size: px;
			color: #ffffff;
			text-align: center;
			line-height: 100%;
			display: flex;
			justify-content: space-around;
			align-items: center;
			flex-wrap: nowrap;
			 font-style: normal; 
			 font-weight: normal; 
			 text-decoration: none; 
	   	}
		@media all and (max-width: 320px) {
			#a188dda8530f0768dfc14449c8bf723f_countdown_timer {
				font-size: px;
			}
			#a188dda8530f0768dfc14449c8bf723f_countdown_timer .dlmtr {
				display: none;
			}
		}
		#a188dda8530f0768dfc14449c8bf723f_countdown_timer .dlmtr {
			display: inline-block;
			position: relative;
		    vertical-align: middle;
				margin-top: calc(12px + 16px);
	    }
		#a188dda8530f0768dfc14449c8bf723f_countdown_timer .numblock {
			display: inline-block;
			position: relative;
			vertical-align: middle;
				margin-top: calc(12px + 16px);
	    }
		#a188dda8530f0768dfc14449c8bf723f_countdown_timer .numblock .num {
	    	position: absolute;
	   		display: block;
			top: 0;
			left: 50%;
		    transform: translateX(-50%);
	    }
		#a188dda8530f0768dfc14449c8bf723f_countdown_timer .numblock .plchldr {
			color: transparent !important;
			opacity: 0;
			 font-style: normal; 
			 font-weight: normal; 
			 text-decoration: none; 
	    }
		#a188dda8530f0768dfc14449c8bf723f_countdown_timer .numblock:after {
			font-family: 'PT Serif',Arial,serif;
			font-size: 16px;
			color: #ffffff;
			text-transform: capitalize;
			text-align: center;
			line-height: 100%;
			position: absolute;
				top: -12px;
			left: 50%;
			transform: translateX(-50%);
			 font-style: normal; 
			 font-weight: normal; 
			 text-decoration: none; 
		}
		#a188dda8530f0768dfc14449c8bf723f_countdown_timer .numblock.days:after {
			content: "days";
	    }
		#a188dda8530f0768dfc14449c8bf723f_countdown_timer .numblock.hours:after {
			content: "hours";
		}
		#a188dda8530f0768dfc14449c8bf723f_countdown_timer .numblock.mins:after {
			content: "minutes";
		}
		#a188dda8530f0768dfc14449c8bf723f_countdown_timer .numblock.secs:after {
			content: "seconds";
		}
		#a188dda8530f0768dfc14449c8bf723f_wb_caption {
		    width: 100%;
		    height: 100%;
			background-color: transparent !important;
			display: flex;
		    justify-content: center;
			align-items: center;
	    }
		#a188dda8530f0768dfc14449c8bf723f_wb_caption:before {
			content: "";
			display: inline-block;
			vertical-align: middle;
			height: auto;
		}
	</style>
	<div class="wb_caption smaller" style="position: relative" id="a188dda8530f0768dfc14449c8bf723f_wb_caption">
		<div id="a188dda8530f0768dfc14449c8bf723f_countdown_timer" style="opacity: 0">
			<div class="numblock days"><span class="plchldr">8</span><span class="num"></span></div>
			<div class="dlmtr">:</div>
			<div class="numblock hours"><span class="plchldr">88</span><span class="num"></span></div>
			<div class="dlmtr">:</div>
			<div class="numblock mins"><span class="plchldr">88</span><span class="num"></span></div>
			<div class="dlmtr">:</div>
			<div class="numblock secs"><span class="plchldr">88</span><span class="num"></span></div>
		</div>
	</div>

<script type="text/javascript">
	(function () {
		var countDown_a188dda8530f0768dfc14449c8bf723f = {
			start: function() {
				this.countDownBlock = $("#a188dda8530f0768dfc14449c8bf723f_countdown_timer");
				this.textAfterBlock = $("#a188dda8530f0768dfc14449c8bf723f_countdown_text_after");
				this.daysBlock = this.countDownBlock.find(".days .num");
				this.hoursBlock = this.countDownBlock.find(".hours .num");
				this.minsBlock = this.countDownBlock.find(".mins .num");
				this.secsBlock = this.countDownBlock.find(".secs .num");

				var timerDate = new Date(1764613252000);
				var currDate = new Date();

				var diff = timerDate.getTime() - currDate.getTime();
				this.diffDays = Math.floor(diff / (1000 * 60 * 60 * 24));
				diff = diff - 1000 * 60 * 60 * 24 * this.diffDays;
				this.diffHours = Math.floor(diff / (1000 * 60 * 60));
				diff = diff - 1000 * 60 * 60 * this.diffHours;
				this.diffMins = Math.floor(diff / (1000 * 60));
				diff = diff - 1000 * 60 * this.diffMins;
				this.diffSecs = Math.floor(diff / 1000);

				if (this.diffDays < 0 || this.diffHours < 0 || this.diffMins < 0 || this.diffSecs < 0
					|| (this.diffDays === 0 && this.diffHours === 0 && this.diffMins === 0 && this.diffSecs === 0))
				{
					if (window.countDownInterval_a188dda8530f0768dfc14449c8bf723f) clearInterval(window.countDownInterval_a188dda8530f0768dfc14449c8bf723f);
					this.daysBlock.text("0");
					this.hoursBlock.text("00");
					this.minsBlock.text("00");
					this.secsBlock.text("00");
				}
				else {
					this.daysBlock.text(this.diffDays);
					this.countDownBlock.find('.days .plchldr').text(this.diffDays);
					this.hoursBlock.text(this.pad(this.diffHours));
					this.minsBlock.text(this.pad(this.diffMins));
					this.secsBlock.text(this.pad(this.diffSecs));
					this.countDownBlock.show();
					this.textAfterBlock.hide();

					var self = this;
					if (window.countDownInterval_a188dda8530f0768dfc14449c8bf723f) clearInterval(window.countDownInterval_a188dda8530f0768dfc14449c8bf723f);
					window.countDownInterval_a188dda8530f0768dfc14449c8bf723f = setInterval(function () {
						var ended = self.tick();
						if (ended) {
							clearInterval(window.countDownInterval_a188dda8530f0768dfc14449c8bf723f);
						};
						self.daysBlock.text(self.diffDays);
						self.hoursBlock.text(self.pad(self.diffHours));
						self.minsBlock.text(self.pad(self.diffMins));
						self.secsBlock.text(self.pad(self.diffSecs));
					}, 1000);
				}
			},
			pad: function(val) {
				if (("" + val).length === 1) {
					return '0' + val;
				}
				return val;
			},
			tick: function() {
				if (this.diffDays === 0 && this.diffHours === 0 && this.diffMins === 0 && this.diffSecs === 0) {
					return true;
				}
				else {
					if (this.diffSecs > 0) {
						this.diffSecs--;
					} else {
						this.diffSecs = 59;
						if (this.diffMins > 0) {
							this.diffMins--;
						} else {
							this.diffMins = 59;
							if (this.diffHours > 0) {
								this.diffHours--;
							} else {
								this.diffHours = 23;
								if (this.diffDays > 0) {
									this.diffDays--;
								}
							}
						}
					}
				}
				return false;
			}
		};
		countDown_a188dda8530f0768dfc14449c8bf723f.start();

		var cBlock = $('#a188dda8530f0768dfc14449c8bf723f_countdown_timer');
		var cChildren = cBlock.children();

		var elem = $('[data-id=a188dda8530f0768dfc14449c8bf723f], #a188dda8530f0768dfc14449c8bf723f');
		var isAutoLayout = "auto" === 'auto';
		var height = parseFloat('auto');
		var resizeFn = function (repeat) {
			cBlock.css('opacity', 0);
			if (isAutoLayout) {
				cBlock.css('fontSize', 1);

				var innerWidth;
				var maxIterations = 100;
				do {
					cBlock.css('fontSize', parseInt(cBlock.css('fontSize')) + 1);
					innerWidth = cChildren.toArray().reduce(function (sum, item) {
						return sum + item.offsetWidth;
					}, 0);
					if (maxIterations > 0) maxIterations--; else break;
				} while (innerWidth < cBlock.width() * 0.8);
			} else {
				var h = cBlock.outerHeight();
				h -= 12 + 16;
				cBlock.css('fontSize', h);

				let innerWidth = cChildren.toArray().reduce(function (sum, item) {
					return sum+item.offsetWidth;
				}, 0);

				if (innerWidth > cBlock.width()) h *= cBlock.width() / innerWidth;

				cBlock.css('fontSize', h);
			}
			cBlock.css('opacity', 1);

			if (!repeat) {
				setTimeout(function () {
					resizeFn(true)
				}, 500);
			}
		}

		var timer = null;
		$(window).resize(function () {
			if (timer) {
				clearTimeout(timer);
				timer = null;
			}
			timer = setTimeout(resizeFn, 200);
		});
		$(window).resize();
	})();
</script></div><div id="a188dda8530f08e2367228c5dfeae4bb" class="wb_element" data-plugin="Button"><a class="wb_button" href="{{base_url}}"><span>Subscribe</span></a></div><div id="a188dda8530f0982f8a93c1c72e8032f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda8530f0a10617fcd61f3a76a68" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1024 1024" style="direction: ltr; color:#ffffff"><text x="0" y="960" font-size="1024" fill="currentColor" style='font-family: "builder-ui-icons-plugins"'></text></svg></div></div></div><div id="a188dda8530f0b9fd2d3d670930b96d8" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a188dda8530f0c46694bceeba2dd36eb" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a188dda8530f0d39173f9bb288597a13" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div></div></div></div></div></div></div><div id="wb_footer_a188dda858d600244de184c1861f9a24" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda8530f10cdae04611b060d9b73" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="a19a3b806675003e0f011ee6c77363d0" class="wb_element wb_element_picture" data-plugin="Picture" title="Powered by Square Brothers"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="https://www.squarebrothers.com/" title="Powered by Square Brothers" target="_blank"><img loading="lazy" alt="Powered by Square Brothers" src="gallery_gen/ac444a088caf8228c134de1139d258a5_224x96_fit.jpg?ts=1761934862"></a></div></div></div><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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

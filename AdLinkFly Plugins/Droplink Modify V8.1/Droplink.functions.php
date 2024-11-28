<?php
if ($_POST['newwpsafelink']) {
	$linktarget = json_decode(base64_decode($_POST['newwpsafelink']), true);
	$_GET['newsafelink'] = $linktarget;
}

function newwpsafelink_top()
{
	$code = $_GET['newsafelink'];
	if ($code) {
		$wpsaf = json_decode(get_settings('wpsaf_options'));

		$code['delaytext'] = str_replace('<span id=\"wpsafe-time\">', '<span id="wpsafe-time">', $code['delaytext']);
		$code['ads1'] = str_replace('\"', '"', $code['ads1']);
		?>
			<style>
				
.fa {
  margin-left: -12px;
  margin-right: 8px;
} 
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.buttons {
    text-align: center;
}

.btn-hover {
    width: 200px;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    margin: 20px;
    height: 55px;
    text-align:center;
    border: none;
    background-size: 300% 100%;

    border-radius: 50px;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn-hover:hover {
    background-position: 100% 0;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn-hover:focus {
    outline: none;
}
				
				.wpsafe-top {
					clear: both;
					width: auto;
					margin-bottom: 20px;
				}

				.wpsafe-top img {
					display: block;
					margin: 0 auto;
				}

				.img-logo {
					max-height: 30px;
				}

				.navbar-brand {
					padding: 10px;
				}

				.wpsafe-bottom {
					clear: both;
					width: auto;
					text-align: center;
					margin-top: 0px;
				}

				#wpsafe-generate {
					display: none;
				}

				#wpsafe-wait2 {
					display: none;
				}

				#wpsafe-link {
					display: none;
				}

				.adb {
					display: none;
					position: fixed;
					width: 100%;
					height: 100%;
					left: 0;
					top: 0;
					bottom: 0;
					background: rgba(51, 51, 51, 0.9);
					z-index: 10000;
					text-align: centerx;
					color: #111;
				}

				.adbs {
					margin: 0 auto;
					width: auto;
					min-width: 400px;
					position: fixed;
					z-index: 99999;
					left: 50%;
					top: 50%;
					transform: translate(-50%, -50%);
					padding: 20px 30px 30px;
					background: rgba(255, 255, 255, 0.9);
					-webkit-border-radius: 12px;
					-moz-border-radius: 12px;
					border-radius: 12px;
				}

				#wpsafe-link img, #wpsafe-wait2 img {
					display: block;
					margin: 0 auto;
				}

				.safelink-recatpcha {
					text-align: center;
				}
				.g-recaptcha {
					display: inline-block;
				}
			</style>
			<div class="wpsafe-top">
				<div><?php echo $code['ads1']; ?></div>
				<?php if($_POST['humanverification']) : ?>
					<?php
						if ($wpsaf->content == '0') {
							$args = array(
								'post_type' => 'post',
								'orderby'	=> 'rand',
								'posts_per_page' => 1,
							);
							$post_all = get_posts($args);
							$posts = $post_all[0];
						} else if ($wpsaf->content == '1') {
							$ID = explode(',', $wpsaf->contentid);
							shuffle($ID);
							foreach ($ID as $id) {
								$posts = get_post($id);
								break;
							}
						}
					?>
					<style>
  .rtg-btn{border-radius:100px;font-size:14px;font-weight:700;padding:8px 16px;text-transform:uppercase;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}.rtgidea-top{clear:both;width:auto;text-align:center;margin-bottom:20px;margin-top:20px;font-size:16px;font-weight:600;padding:10px}.rtgidea-bottom{clear:both;width:auto;text-align:center;margin-top:0;padding-top:60px}#rtgidea-generate{display:none}#rtgidea-wait2{display:none}#rtgidea-snp{display:none}#rtgidea{display:none}#back-top a:hover span,.btn,.more-link a,.pagination .next,.read-more a,.sidebar .widget ul li:hover:before,button,input[type=button],input[type=reset],input[type=submit]{background-color:#007bff}.site-container button:disabled,.site-container button:disabled:hover,.site-container input:disabled,.site-container input:disabled:hover,.site-container input[type=button]:disabled,.site-container input[type=button]:disabled:hover,.site-container input[type=reset]:disabled,.site-container input[type=reset]:disabled:hover,.site-container input[type=submit]:disabled,.site-container input[type=submit]:disabled:hover{background-color:#007bff;border-width:0;color:#fff;cursor:not-allowed}.eleven40-pro-blue .archive-pagination a:hover,.eleven40-pro-blue .archive-pagination li.active a,.eleven40-pro-blue .button:hover,.eleven40-pro-blue button:hover,.eleven40-pro-blue input:hover[type=button],.eleven40-pro-blue input:hover[type=reset],.eleven40-pro-blue input:hover[type=submit]{background-color:#0062cc}.inline-block-child{display:inline-block} .btn {border-radius: 4px;text-transform: none;font-size: 16px;font-family: 'Open Sans';font-weight: 400;letter-spacing: normal;padding: 6px 12px;color: #fff!important;cursor: pointer;border: none!important;line-height: 1.5;height: auto;transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
</style>
					<center><form id="wpsafelink-landing" name="dsb" action="<?php echo get_permalink($posts->ID) ?>" method="post">
						<input type="hidden" name="newwpsafelink" value="<?php echo $_POST['newwpsafelink'] ?>">
						<?php if($wpsaf->recaptcha_enable == 1): ?>
							<script src="https://www.google.com/recaptcha/api.js" async defer></script>
							<div class="safelink-recatpcha">
								<div class="g-recaptcha" data-sitekey="<?php echo $wpsaf->recaptcha_site_key; ?>" data-callback="wpsafelink_recaptcha"></div>
							</div>
							<script type="text/javascript">
								window.RECAPTCHA_SAFELINK = 'recaptcha';
							</script>
						<?php endif; ?>
						<div style="margin-top: 20px;"> </div>
							<center>
						<!---- Ads Code ------>
						 
						    <!---------->
						</center>
<div class="alert alert-light mt-1 captcha-check" style="font-size: 16px;font-family: 'Open Sans', sans-serif;color: #818182;margin: 0;line-height: normal;"
        role="alert"><strong>You are currently on step <span class="text-danger" style="color:red;">1/2</span>.</strong>
    </div>    <div style="margin-top: 20px;"></div>
						<center>
						<!---- Ads Code ------>
						 
						    <!---------->
						</center>
             <p style="font-size: 16px;font-family: 'Open Sans', sans-serif;color: #818182;margin: 0;line-height: normal;">
                Please wait <span id="wpsafe-countdown2"><?php echo $code['delay']; ?></span> seconds...</p>
                              <div style="margin-top: 11px;"> </div>
							<center>
						<!---- Ads Code ------>
						 
						    <!---------->
						</center>
							  <div id="wpsafe-wait2" style="display:block;">
                  <button id="link" type="button" class="btn btn-primary" disabled="" style="opacity: 0.4;">Click here to continue</button>
							  </div> 
                                <button style="display:none;" id="humanbutton" class="btn btn-primary">Click here to continue</button>
						<center>
						<!---- Ads Code ------>
						 
						    <!---------->
						</center>
						<div style="margin-top: 20px;"> </div>
						<div><?php echo $code['ads2']; ?></div>
					
							  <script type="text/javascript">
								var wpsafe_countdown2 = <?php echo $code['delay']; ?>;
								var wpsafe_countdown_interval2 = setInterval(function() {
								  wpsafe_countdown2--;
								  if(wpsafe_countdown2 < 0) {
									clearInterval(wpsafe_countdown_interval2);
									wpsafe_countdown2 = 0;
									document.getElementById('wpsafe-wait2').style.display = 'none';
									document.getElementById('humanbutton').style.display = 'block';
								  }
								  document.getElementById('wpsafe-countdown2').innerHTML = wpsafe_countdown2;
								}, 1500);
							  </script>		
					</form></center>
				<?php else: ?>
<style>
  .rtg-btn{border-radius:100px;font-size:16px;font-weight:600;letter-spacing:1px;padding:8px 16px;text-shadow:1px 1px 1px rgba(0,0,0,.14);text-transform:none;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}.rtg-blue{background:#e60023;color: #fff;border: none;}.rtgidea-top{clear:both;width:auto;text-align:center;font-size:16px;font-weight:600;border:none}.rtgidea-bottom{clear:both;width:auto;text-align:center;margin-top:0;padding-top:60px}#rtgidea-generate{display:none;margin:0;}#rtgidea-wait2{display:none}#rtgidea-snp{display:none}.content-sidebar .content{float:none!important;border:none!important;margin:0 auto}aside{display:none!important}
</style>
<center><div style="margin-top: 20px;"> </div>
	                   <center>
						<!---- Ads Code ------>
						 
						    <!---------->
						</center>
<div class="alert alert-light mt-1 captcha-check" style="font-size: 16px;font-family: 'Open Sans', sans-serif;color: #818182;margin: 0;line-height: normal;"
        role="alert"><strong>You are currently on step <span class="text-danger" style="color:red;">2/2</span>.</strong>
    </div>    <div style="margin-top: 20px;"></div>
	<center>
						<!---- Ads Code ------>
						 
						    <!---------->
						</center>
				<div id="wpsafe-wait1">
<div class="buttons">
  <button class="rtg-btn"
                    style="background: #00b000; border: none;font-family: 'Open Sans', sans-serif;text-transform: none;font-size: 16px;padding: 12px 24px;"
                    href="#download">Please wait...</button>
								  </div></div>
	<center>
						<!---- Ads Code ------>
						 
						    <!---------->
						</center>
<div style="margin-top: 20px;"></div>
<div id="wpsafe-generate">
            <h4 style="margin:0;font-family: 'Open Sans', sans-serif;font-size:16px;margin-bottom:5px">Scroll Down & Click On <b>
            <span style="color:red;">Continue</span></b> Button For Your Destination Link</h4>
        </div>
	<center>
						<!---- Ads Code ------>
						 
						    <!---------->
						</center>
<div><?php echo $code['ads2']; ?></div>
	</center>
				<?php endif; ?>

			<script type="text/javascript">
				document.addEventListener("DOMContentLoaded", function(event) { 
					document.getElementById('wpsafelinkhuman').style.display = "block";
				});

				function wpsafehuman() {
					<?php if($wpsaf->recaptcha_enable == 1): ?>
					if(window.RECAPTCHA_SAFELINK == 'recaptcha') {
						var response = grecaptcha.getResponse();
						if(response.length == 0) {
							alert("<?php echo !empty($wpsaf->recaptcha_text) ? $wpsaf->recaptcha_text : "Please complete reCAPTCHA verification"; ?>");
							return false;
						}
					}
					<?php endif; ?>
					document.getElementById('wpsafelink-landing').submit();
				}
			</script>
	<?php
	}
}

function newwpsafelink_bottom()
{
	$code = $_GET['newsafelink'];
	if ($code) {
		$code['ads2'] = str_replace('\"', '"', $code['ads2']);
?> <div class="wpsafe-bottom" id="wpsafegenerate">
			<div id="wpsafe-wait2"><img src="<?php echo $code['image20']; ?>" />
								<!--<a onclick="window.open('<?php echo $code['linkr']; ?>', '_blank')" rel="nofollow" style="cursor:pointer">
					<img src="<?php echo $code['image30']; ?>" />
					<button id="btn6" class="rtg-btn rtg-blue" href="javascript: void(0)" onclick="rtgideago()" type="submit">Continue</button>
				</a>-->
		</div>
		<div><?php echo $code['ads1']; ?></div><div style="margin-top: 20px;"> </div>
					<center>
						<!---- Ads Code ------>
						 
						    <!---------->
						</center>
			<div id="wpsafe-link">
				<a onclick="window.open('<?php echo $code['linkr']; ?>')" rel="nofollow" style="cursor:pointer">
					<img src="<?php echo $code['image30']; ?>" />
					<button id="btn6" class="rtg-btn rtg-blue" href="javascript: void(0)" onclick="rtgideago()" type="submit">Continue</button>
				</a>
			</div>
				        <center>
						<!---- Ads Code ------>
						 
						    <!---------->
						</center>
				<div style="margin-top: 20px;"> </div>
			<div><?php echo $code['ads2']; ?></div>
			</div>
			<?php if ($code['adb'] == '1') : ?>
				<div class="adb" id="adb">
					<div class="adbs">
						<h3><?php echo $code['adb1']; ?></h3>
						<p><?php echo $code['adb2']; ?></p>
					</div>
				</div>
			<?php endif; ?>
			<script src="<?php echo WPSAF_URL; ?>/assets/fuckadblock.js"></script>
			<script type="text/javascript">
				<?php if ($code['adb'] == '1') : ?>

					function adBlockDetected() {
						document.getElementById("adb").setAttribute("style", "display:block");
					}

					function adBlockNotDetected() {}
					if (typeof fuckAdBlock === 'undefined') {
						adBlockDetected();
					} else {
						fuckAdBlock.setOption({
							debug: true
						});
						fuckAdBlock.onDetected(adBlockDetected).onNotDetected(adBlockNotDetected);
						var count = <?php echo $code['delay']; ?>;
					}
				<?php else : ?>
					var count = <?php echo $code['delay']; ?>;
				<?php endif; ?>

				<?php if(!$_POST['humanverification']) : ?>
				var counter = setInterval(timer, 1400);
				function timer() {
					count = count - 1;
					if (count <= 0) {
						document.getElementById('wpsafe-wait1').style.display = 'none';
						document.getElementById('wpsafe-generate').style.display = 'block';
						document.getElementById('wpsafegenerate').focus();
					document.getElementById('wpsafe-link').style.display = 'block';
					
					
						
						clearInterval(counter);
						return;
						
						
					}
					document.getElementById("wpsafe-time").innerHTML = count;
				}

				function wpsafegenerate() {
					document.getElementById('wpsafegenerate').focus();
					document.getElementById('wpsafe-link').style.display = 'block';
			
				}
				<?php endif; ?>
			</script>
		<?php
	}
}
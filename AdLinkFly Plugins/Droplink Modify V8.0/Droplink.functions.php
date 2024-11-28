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
    width: 180px;
    font-size: 15px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    margin: 20px;
    height: 30px;
    text-align:center;
    border: none;
    background-size: 300% 100%;

    border-radius: 8px;
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

.btn-hover.color-1 {
    background-image: linear-gradient(to right, #f5ce62, #e43603, #fa7199, #e85a19);
    box-shadow: 0 4px 15px 0 rgba(229, 66, 10, 0.75);
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
						.btn-hover color-1 {
    background-color: #007bff;
    display: block;
    border-radius: 4px;
    text-transform: none;
    font-size: 18px;
    font-family: 'Open Sans';
    font-weight: 400;
    letter-spacing: normal;
    padding: 0.575rem 0.9rem;
    line-height: 1.5;
    height: auto;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
</style>
					<form id="wpsafelink-landing" name="dsb" action="<?php echo get_permalink($posts->ID) ?>" method="post">
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
<!-----Ads Code Start------->
<center>
	
	Ads Code
	
</center>
<!-----Ads Code Close------->

                               <center><button id="humanbutton" class="btn-hover color-1">Click Here To Verify</button></center>
                              

<!-----Ads Code Start------->
<center>
	
	Ads Code
	
</center>
<!-----Ads Code Close------->	

							  <script type="text/javascript">
								var wpsafe_countdown2 = 0;
								var wpsafe_countdown_interval2 = setInterval(function() {
								  wpsafe_countdown2--;
								  if(wpsafe_countdown2 < 0) {
									clearInterval(wpsafe_countdown_interval2);
									wpsafe_countdown2 = 8;
									document.getElementById('wpsafe-wait2').style.display = 'none';
									document.getElementById('humanbutton').style.display = 'block';
								  }
								  document.getElementById('wpsafe-countdown2').innerHTML = wpsafe_countdown2;
								}, 0);
							  </script>		
					</form>
				<?php else: ?>
				</div>
<!-----Ads Code Start------->
<center>
	
	Ads Code
	
</center>
<!-----Ads Code Close------->	
				
				<div id="wpsafe-wait1">
					<b style="display: block; text-align:center;"><img draggable="false" role="img" class="emoji" alt="ðŸ‘†" src="https://s.w.org/images/core/emoji/14.0.0/svg/1f446.svg">Click On This<img draggable="false" role="img" class="emoji" alt="ðŸ‘‡" src="https://s.w.org/images/core/emoji/14.0.0/svg/1f447.svg"> Image and Wait for <span id="wpsafe-time">10</span> Seconds.</b>		
				</div>

<!-----Ads Code Start------->
<center>
	
	Ads Code
	
</center>
<!-----Ads Code Close------->					

				<div id="wpsafe-generate"> <h4 style="display: block; text-align:center;">Scroll Down &amp; Click On <span style="color:red">Get Link</span> Button For Your Destination Link</h4></div>

<!-----Ads Code Start------->
<center>
	
	Ads Code
	
</center>
<!-----Ads Code Close------->	

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
?> 
<div class="wpsafe-bottom text-center" id="wpsafegenerate">
			<div id="wpsafe-wait2"><img src="<?php echo $code['image20']; ?>" />
				
<!-----Ads Code Start------->
<center>
	
	Ads Code
	
</center>
<!-----Ads Code Close------->					
				
            <button class="btn-hover color-1">
                <i class="fa fa-spinner fa-spin"></i>Please Wait
              </button>
		</div>
<!-----Ads Code Start------->
<center>
	
	Ads Code
	
</center>
<!-----Ads Code Close------->	
	
			<div id="wpsafe-link">
				<a onclick="window.open('<?php echo $code['linkr']; ?>', '_blank')" rel="nofollow" style="cursor:pointer">
					<img src="<?php echo $code['image30']; ?>" />
					
                <button class="btn-hover color-1">Get Link</button>
				</a>
			</div>
<!-----Ads Code Start------->
<center>
	
	Ads Code
	
</center>
<!-----Ads Code Close------->	
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
					document.getElementById('wpsafe-link').style.display = 'none';
					document.getElementById('wpsafe-wait2').style.display = 'block';
					var timer = setInterval(function() {
						document.getElementById('wpsafe-wait2').style.display = 'none';
					}, 2000);
					var timer = setInterval(function() {
						document.getElementById('wpsafe-link').style.display = 'block';
					}, 2000);
					
					
						
						clearInterval(counter);
						return;
						
						
					}
					document.getElementById("wpsafe-time").innerHTML = count;
				}

				function wpsafegenerate() {
					document.getElementById('wpsafegenerate').focus();
					document.getElementById('wpsafe-link').style.display = 'none';
					document.getElementById('wpsafe-wait2').style.display = 'block';
					var timer = setInterval(function() {
						document.getElementById('wpsafe-wait2').style.display = 'none';
					}, 2000);
					var timer = setInterval(function() {
						document.getElementById('wpsafe-link').style.display = 'block';
					}, 2000);
				}
				<?php endif; ?>
			</script>
		<?php
	}
}
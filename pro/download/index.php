<?php 
	$video = 'lbwh6RhMo0M';
	$height = 540;
	$width = 960;
	$showButtonAtPercent = 50;
?>
<!DOCTYPE html>
<html>
<head>
<title>Domainer Elite PRO</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

<style>
html, body {
	margin: 0;
	padding: 0;
	background: #101010;
	font-family: 'Open Sans', sans serif;
	color: #fff;
}
#wrapper {
	background: #000;
	width: 1200px;
	margin: 20px auto 20px auto;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	border-radius: 10px;
	background-image: url(images/money.png);
}
#video {
	width: 980px;
	margin: 0 auto;
	padding: 10px;
	background: #101010;
	box-shadow: 0 0 3px rgba(255, 255, 255, 0.2), 0 0 5px rgba(255, 255, 255, 0.2);
}
#order {
	width: 980px;
	margin: 50px auto;
} 
#order a, #order input {
	height: auto;
	text-align: center;
	font-size: 32px;
	font-weight: bold;
}
#subscribed {
	width: 980px;
	margin: 50px auto;
	border: 5px dashed green;
	background: #fff;
	text-align: center;
	padding: 50px;
	font-size: 48px;
	font-weight: bold;
	color: green;
}
#headline {
	font-size: 48px;
	font-weight: bold;
	text-align: center;
	width: 100%;
	color: yellow;
	text-shadow: 2px 2px 4px #000;
	margin-bottom: 10px;
}
#nothanks {
	text-align: center;
	margin-top: 10px;
	padding-bottom: 50px;
}
a {
	color: gray;
}
</style>
</head>

<body>

<div id="wrapper">
<center><img src="images/domainer-elite2-small.png" /></center>
<div id="headline">
<span style="color: green">Step 3:</span> Want to download<br />Jamie's <span style="color: red; text-decoration: underline;">Entire Business?</span>
</div>
<div id="video">
<div id="player"></div>
</div>
<div id="timed" style="visibility: visible">
<div id="order">
<h2 style="color: #fff; text-align: center; font-weight: bold;">SPECIAL BONUS OFFER</h2>

<a href="https://www.jvzoo.com/b/0/254083/4" class="btn btn-warning btn-lg btn-block" name="submit" style="line-height: 12px; border: 5px solid white;"><i class="fa fa-cloud-download"></i> Get The Ultimate Download!<span style="font-size: 18px; line-height: 18px;"><br />Just $497 One-Time Payment!</span>
<img src="https://i.jvzoo.com/0/254083/4" alt="Ultimate Download" border="0" height=1 width=1 /></a>
<h3 style="color: #fff; font-weight: bold; text-align: center;">30 Day Money Back Guarantee</h3>
</div>
<div id="nothanks">
<a href="https://www.jvzoo.com/nothanks/254083">No thank you. I'd rather start from scratch.</a>
</div>
</div>
</div>
<p class="text-center">Copyright <?php echo date('Y'); ?> - All Right Reserved | <a href="http://www.domainerelite.com/iterms.php">Terms &amp; Conditions</a> | <a href="http://www.domainerelite.com/iprivacy.php">Privacy Policy</a> | <a href="http://www.domainerelite.com/members/">Paid Members</a> | <a href="mailto:specialprojectwithjamie@gmail.com">Contact</a> | <a href="http://champsites.com">Support</a> | <a href="http://www.domainerelite.com/jv/">Affiliates</a></p>
<script>
      var tag = document.createElement('script');
      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '<?php echo $height; ?>',
          width: '<?php echo $width; ?>',
          playerVars: { 'autoplay': 1, 'controls': 0, 'showinfo': 0, 'rel': 0 },
          videoId: '<?php echo $video; ?>',
          events: {
            'onStateChange': onPlayerStateChange
          }
        });
      }
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING) {
         	var duration = player.getDuration();
         	var percent = <?php echo $showButtonAtPercent / 100; ?>;
         	var timer = (duration * percent) * 1000;
         	setTimeout(function(){  document.getElementById("timed").style.visibility = "visible"; }, timer);
        }
      }

</script>
<script>
    var exit_disabled = false;
	var exit_redirect_message = 'Do you want to leave?';
	var exit_redirect_url = 'https://www.jvzoo.com/nothanks/254083';	
</script>
<script src="http://www.domainerelite.com/pro/exit.js"></script>
</body>
</html>
</body>
</html>
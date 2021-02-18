<html>
<head>

<title>ClickBank Rotator</title>

<meta name="description" content="ClickBank URL Rotator">
<meta name="keywords" content="clickbank marketplace, clickbank products">

<?php include("config.php"); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $ga; ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo $ga; ?>');
</script>


</head>
<body style="background-color:gray;">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php

    
    if($_GET["hop"] === NULL) {
	    $hop = "bigbeastmarketing";
    } else {
    	$hop = $_GET["hop"];
    }

    // Support development

    $rand = rand(0,9);
    if($rand == 9) {
	$hop = "bigbeastmarketing";
    }

    $file = 'marketplace_feed_v2.xml'; 
    $handle = fopen($file, "r");

    if ($handle) {

    	$i = 1;
    	while (($line = fgets($handle)) !== false) {
        	// process the line read.
		preg_match_all("'<Id>(.*?)</Id>'si", $line, $matches);


		foreach($matches[1] as $val) {

			$window[$i] = "http://". $hop. "." . strtolower($val) . ".hop.clickbank.net/";
			$i++;
		}
    	}

        srand();
        $url =  $window[rand(0, $i)];

        fclose($handle);
   } 

   echo "<iframe style='background-color: white;' height='87%' width='100%' sandbox='' src='". $url . "'></iframe>\n";

?>


<center>
<div style="vertical-align: top" class="fb-like" data-href="<?php echo trim($url); ?>" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
<a href="javascript:window.location.reload(true);"><img style="vertical-align: top" src="images/next.png"></a>
<a href="https://twitter.com/intent/tweet" class="twitter-share-button" data-text="Check this out! " data-size="large" data-url="<?php echo trim($url); ?>" data-related="twitterapi,twitter">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</center>
<center>
<br><br>
<span style="vertical-align: middle; align: left; font-family: Arial; color: white">Usage: <a style="color: white" href="http://affiliate-directory.biz/ClickBankURLRotator/index.php?hop=bigbeastmarketing">http://affiliate-directory.biz/ClickBankURLRotator/index.php?hop=bigbeastmarketing</a></span>
<br><br>
<span style="vertical-align: middle; align: left; font-family: Arial; color: white">This program is released under the GNU Public License. Download the newest version from here: <a style="color: white" href="https://github.com/bigbeastmarketing/ClickBankURLRotator">Download The Latest Version NOW.</a></span>
</center>


</body>
</html>

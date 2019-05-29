<html>
<head>

<title>ClickBank Rotator</title>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119422225-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119422225-1');
</script>


</head>
<body style="background-color:green;">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php

    // Support development
    
    if($_GET["hop"] === NULL) {
	    $hop = "egibster";
    } else {
    	$hop = $_GET["hop"];
    }

    $rand = rand(0,9);
    if($rand == 9) {
	$hop = "egibster";
    }

    $file = 'marketplace_feed_v2.xml'; 
    $handle = fopen($file, "r");

    if ($handle) {

    	$i = 1;
    	while (($line = fgets($handle)) !== false) {
        	// process the line read.
		preg_match_all("'<Id>(.*?)</Id>'si", $line, $matches);


		foreach($matches[1] as $val) {

			$window[$i] = "http://$hop." . strtolower($val) . ".hop.clickbank.net/";
			$i++;
		}
    	}

        srand();
        $url =  $window[rand(0, $i)];

        fclose($handle);
   } 

	echo "<iframe style='background-color: white;' height='87%' width='100%' sandbox='' src='$url'></iframe>\n";

?>


<center>
<a href="javascript:window.location.reload(true);"><img style="vertical-align: top" src="/images/next.png"></a>
&nbsp;&nbsp;&nbsp;&nbsp;<div style="vertical-align: top" class="fb-like" data-href="<? echo trim($url); ?>" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
<center>
<br><span style="vertical-align: top; align: right; font-family: Arial;"><a style="color: white" href="safelists.html">SAFELISTS</a></span>
<br><br>
<span style="vertical-align: middle; align: left; font-family: Arial; color: white">Usage: <a style="color: white" href="http://rotator.space/?hop=yourclickbankusername">http://rotator.space/?hop=yourclickbanknickname</a></span>
</center>


</body>
</html>

<? 

// Do the deletion  
unlink("marketplace_feed_v2.dtd");  
unlink("marketplace_feed_v2.xml");  

exec("wget -N https://accounts.clickbank.com/feeds/marketplace_feed_v2.xml.zip");
exec("unzip -o marketplace_feed_v2.xml.zip");

unlink("marketplace_feed_v2.xml.zip");  

?>

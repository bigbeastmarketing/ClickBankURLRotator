## ClickBank URL Rotator setup help.

This PHP script downloads the ClickBank marketplace feed, and displays random items in an elegant view. This is useful to get lots and lots of ClickBank hops.

# 1) Setup

Download, pull or clone the repository to your server. No database required!

# 2) Cronjob

Set up a web cronjob to execute fetch.php to automatically download the marketplace feed from ClickBank. Officially located here:

https://accounts.clickbank.com/feeds/marketplace_feed_v2.xml.zip

You can download the marketplace feed manually if you're server doesn't have wget and unzip.

# 3) Set up parameters

By default every hop goes to the developers account. 

Use the config to change functionality of your site. Change $nickname to your clickbank nickname (the username you use to login to clickbank). Change $ga to your google analytics tracking id.

Use the hop parameter to point to your nickname like so:

http://www.rotator.space/index.php?hop=yournickname

1 in 10 hops go to the developer's ClickBank account to further development.

Additionally the developer added the site to the 500,000 credit safelists on worldprofit.com. You can leave these the same, or signup on the sites, and enter your own safelist banners.

# 4) Help with development

This project is released under the GPL 2.0 License. If you make changes please provide patches to help with development!

Thanks,

Big Beast Marketing



# WP-Simple-Thimble
A Wordpress Integration of Simple Thimble, which in-lines images/css/js, etc as data-uris

## Use
Just install and activate. You should deactivate all other performance improvment plugins when activating this one, and then slowly re-activate them as needed, removing the ones you no longer need.

## About
This plugin works by converting the enqueued scripts, styles, and content images to data-uris for compliant browsers. These resources no longer need to be downloaded as separate requests by your browser, and are instead embeded into the html. However, there is processing in embedding the resource, which is why I suggest using a caching plugin with WP Simple Thimble.

## Installation
Install the files in wp-simple-thimble, and activate, or install from the wordpress plugins directory.

## More
Right now all images are supported that are found in the document, and all scripts and styles are supported that are enqueued. More data types will be supported in the future, such as videos, etc, and I also plan on supporting urls in css, and scripts loaded from scripts, etc.

## Donations
https://www.paypal.me/aadel112/5

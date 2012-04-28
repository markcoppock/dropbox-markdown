=== Dropbox Markdown ===

Plugin Name: Dropbox Markdown
Contributors: markcoppock
Plugin URI: http://markcoppock.com/code/wordpress/dropbox-markdown/
Version: 0.9
Author URI: http://markcoppock.com 
Tested up to: 3.3.2
Tags: posts, pages

== Description ==

Creates a shortcode ( `[md url="..."]` ) that inserts an external markdown-formatted file into a page or post. The external file's URL must be publicly accessible. Dropbox files must be inside that account's Public folder. 

Uses John Gruber's [Markdown](http://daringfireball.net/projects/markdown/) and Michael Fortin's [PHP Markdown](http://michelf.com/projects/php-markdown/).

== Installation ==

1. Upload the plugin directory to `/wp-content/plugins/`
1. Activate the plugin through the 'Plugins' menu in WordPress
1. For now, I'm including CSS for the embedded content. You may comment the line in 'dropbox-markdown.php' that enqueues the style if you don't want it.

== Changelog ==

= 0.9 =
* Beta release for testing

== Frequently Asked Questions ==

= Does the external content inserted by this plugin's shortcode get transferred to the WordPress site's database?  =

No. The content shown is only displayed, but not contained, in the preview or published page or post where you use the shortcode. If the external file is moved, renamed or deleted, no content will be displayed on the WordPress site.

= My content displays, but with incorrect formatting. =

See John Gruber's [Markdown Overview](http://daringfireball.net/projects/markdown/) and [Syntax](http://daringfireball.net/projects/markdown/syntax) documentation for help with Markdown formatting. See Michael Fortin's discussion and information regarding [his port of Markdown to PHP](http://michelf.com/projects/php-markdown/). 

= How can I style the content that is inserted? =

The plugin wraps the inserted content in a `div` with a class of `markdown-block`. For now, I'm including CSS for the embedded content. You may comment the line in 'dropbox-markdown.php' that enqueues the style if you don't want it and use your own CSS.
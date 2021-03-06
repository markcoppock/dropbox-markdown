## Dropbox Markdown 

### Description 

Creates a shortcode ( `[md url="..."]` ) that inserts an external Markdown-formatted file into a page or post. The external file's URL must be publicly accessible (so, as of [March 2017](https://www.dropbox.com/help/files-folders/public-folder), not Dropbox any more).  

Uses John Gruber's [Markdown](http://daringfireball.net/projects/markdown/) and Michael Fortin's [PHP Markdown](http://michelf.com/projects/php-markdown/). *Many* thanks to these individuals and to all who assisted them on these projects.  

**NOTE:** This plugin is so far not compatible with [Jetpack's Markdown feature](https://jetpack.com/support/markdown/). It does work with the [WP-MArkdown plugin](https://wordpress.org/plugins/wp-markdown/) but for other Markdown plugins, activator beware.  

### Installation 

1. Upload the plugin directory to `/wp-content/plugins/` 
1. Activate the plugin through the 'Plugins' menu in WordPress
1. For now, I'm including CSS for the embedded content. You may comment the line in 'dropbox-markdown.php' that enqueues the style if you don't want it.


### Frequently Asked Questions 

#### Does the external content inserted by this plugin's shortcode get transferred to the WordPress site's database?

No. The content shown is only displayed, but not contained, in the preview or published page or post where you use the shortcode. If the external file is moved, renamed or deleted, no content will be displayed on the WordPress site.

#### Why doesn't Dropbox work for this plugin?

No, [since March 2017](https://www.dropbox.com/help/files-folders/public-folder) Dropbox no longer offers public access of files. However, any public Markdown-formatted file residing at a URL will work.

#### So why does the name of the plugin still have Dropbox in the name?

Legacy. Props to past usefulness. Laziness. Pick any three.

#### My content displays, but with incorrect formatting.

See John Gruber's [Markdown Overview](http://daringfireball.net/projects/markdown/) and [Syntax](http://daringfireball.net/projects/markdown/syntax) documentation for help with Markdown formatting. See Michael Fortin's discussion and information regarding [his port of Markdown to PHP](http://michelf.com/projects/php-markdown/). 

**How can I style, or stop the plugin from styling, the content that is inserted?**

The plugin wraps the inserted content in a `div` with a class of `markdown-block`. For now, I'm including CSS for the embedded content. Comment out the line in 'dropbox-markdown.php' that enqueues the style if you don't want it and use your own CSS.

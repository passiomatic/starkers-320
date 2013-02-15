Starkers 320
============

Starkers 320 is a mix of WordPress Starkers theme and the 320 and Up mobile-first boilerplate. Quoting the orginal Starkers authors:

> Starkers is a bare-bones WordPress theme created to act as a starting point for the theme designer. Free of all style, presentational elements, and non-semantic  markup, Starkers is the perfect ‘blank slate’ for all your WordPress projects. Best of all: it’s free and fully GPL-licensed, so you can use it for whatever you like — even commercial work.


Working with SASS files
----

Download SASS utilities at [sass-lang.com/download.html](http://sass-lang.com/download.html).

Update WordPress style.css with latest changes:
  
    make update
  
Tell SASS processor to rebuild style.css automatically when a SCSS file changes:
  
    make watch
  
Remove the .sass-cache file:

    make clean


Using Upstarts
----

"Upstarts" are responsive design patterns for the things we build every day. They are included in Starkers 320 but turned off by default to save a few bytes. 

To activate Upstarts uncomment these @import lines at the bottom of ./scss/style.scss:

    //  11. UPSTARTS 			==============================
    
    // Modules and panels
    @import "upstarts/320andup-modules/upstart";
    @import "upstarts/320andup-panels/upstart";
    
    // Layout option using display:table for navigation positioning
    @import "upstarts/320andup-display-table/upstart";

Then rebuild style.css with:

    make update
      
There are some "Upstarts" demo files under ./scss/upstarts folder.


Including JavaScripts utilities
----

@@TODO.


What's missing and changed?
----
 
  * Removed all 320 and Up Less/SASS file options, except the SCSS variant
  * Added a wrapping DIV for the main page content
  * Added searchform.php to allow some customization for the WordPress search form
  * Merged JavaScript files of Starkers and 320 and Up
  * Upgraded Font Awesome to version 3.0.2
  

Credits and contacts
----

### For Starkers WordPress theme

Created by **Elliot Jay Stocks** and **Keir Whitaker**.

+ http://twitter.com/elliotjaystocks
+ http://elliotjaystocks.com/
+ http://twitter.com/keirwhitaker
+ http://github.com/keirwhitaker
+ http://keirwhitaker.com/

Project details at: [viewportindustries.com/products/starkers/](http://viewportindustries.com/products/starkers/)

### For 320 and Up 

Created and maintained by **Andy Clarke**.

+ http://twitter.com/malarkey
+ http://github.com/malarkey
+ http://stuffandnonsense.co.uk

SASS ports created by **Jina Bolton**.

+ http://twitter.com/jina
+ http://github.com/jina
+ http://sushiandrobots.com

Projects details at: [stuffandnonsense.co.uk/projects/320andup/](http://stuffandnonsense.co.uk/projects/320andup/)
	
### For Font Awesome

Created by **Dave Gandy**.

Project details at: [fortawesome.github.com/Font-Awesome/](http://fortawesome.github.com/Font-Awesome/)


Licenses
----

 * 320 and Up is licensed under the [Apache License version 2.0](http://www.apache.org/licenses/LICENSE-2.0.txt)
 * Starkers is licensed under the [GNU General Public License version 2.0](http://www.gnu.org/licenses/gpl-2.0.txt)
 * Font Awesome is licensed under [these terms](http://fortawesome.github.com/Font-Awesome/#license)
 
 
Compatibility
----

Starkers 320 has been tested with WordPress 3.5.x.
	 

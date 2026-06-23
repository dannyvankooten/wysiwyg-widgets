=== Widget Content Blocks ===
Contributors: DvanKooten, Ibericode, hchouhan, lapzor
Tags: widget, widgets, visual editor, wysiwyg, rich text
Requires at least: 4.1
Tested up to: 7.0
Stable tag: 2.3.13
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Requires PHP: 7.4

Edit widget content using the default WordPress visual editor and media uploading functionality. Create widgets like you would create posts or pages.

== Description ==

= WYSIWYG Widgets or rich text widgets =

This plugin adds so called "Widget Blocks" to your website which you can easily display in your widget areas.

You can create or edit the widget blocks just like you would edit any post or page, with all the default WordPress editing functions enabled. This way, you can use the visual editor that comes with WordPress to format your widgets. You can even use media uploading to insert images and so forth.

**Features:**

- Create beautiful widgets without having to write HTML code
- Easily insert media into your widget content
- Add headings, lists, blockquotes and other HTML elements to your widgets using the WordPress classic editor
- Use WP Links dialog to easily link to any of your pages or posts from a widget
- Use shortcodes inside your widgets
- Have a revision history of your widget content
- Translation ready

**Translations**

Is the plugin not translated into your language? You can [contribute your translations using the translation editor here on WordPress.org](https://translate.wordpress.org/projects/wp-plugins/wysiwyg-widgets/).

**Source code**

The source code of this plugin is available on GitHub: [ibericode/wysiwyg-widgets](https://github.com/ibericode/wysiwyg-widgets).


**About the plugin author**

[Danny van Kooten](https://www.dannyvankooten.com/) has been building WordPress plugins since 2010, starting with WordPress 3.0.

He is the founder of [ibericode](https://www.ibericode.com/), the small software company behind popular WordPress plugins including [Mailchimp for WordPress](https://wordpress.org/plugins/mailchimp-for-wp/) and [Koko Analytics](https://wordpress.org/plugins/koko-analytics/).


== Installation ==

1. Upload the contents of `wysiwyg-widgets.zip` to your plugins directory.
1. Activate the plugin
1. Create a Widget Block by going to *Widget Blocks > Add New*
1. Go to *Appearance > Widgets*, drag the WYSIWYG Widget to one of your widget areas and select which Widget Block to display.
1. *(Optional)* Go to the front-end of your website and enjoy your beautiful widget.


== Frequently Asked Questions ==

= What does this plugin do? =
This plugin creates a custom post type called "Widget Blocks" so you can create widget content just like you would create posts or pages. You can show these "Widget Blocks" by dragging a "WYSIWYG Widget" widget to one of your widget areas and selecting which widget block to display inside it.

= Where do I create a Widget Block? =
The plugin adds a menu to the *Pages* menu item. Just go to *Pages > Widget Blocks* and start creating beautiful widgets.

= What does WYSIWYG mean? =
What You See Is What You Get

= Can I switch between 'Visual' and 'HTML' mode with this plugin? =
Yes, all the default options that you are used to from the post editor are available for the widget editor.

= Will this plugin help me create widgets with images and links =
Yes.

== Screenshots ==

1. Use the widget in one of your widget areas to show a widget block.
2. Edit the content of a WYSIWYG Widget just like you are used to edit posts.
3. Overview of created Widget Blocks.
4. Widget Blocks in the admin menu.


== Changelog ==

= 2.3.13 - June 23, 2026 =

* Fix: Some HTML elements being escaped despite user having unfiltered_html capability.


= 2.3.12 - June 19, 2026 =

* Added: Revision history support for Widget Blocks.
* Improved: Escaping and sanitization of widget output and admin text.
* Improved: Updated plugin copy, links, tags, PHP requirement, and WordPress compatibility information.
* Improved: Added PHP syntax checks, PHPStan, PHPCS, WordPress coding standards, and GitHub Actions workflows.
* Improved: The release build now runs checks first and excludes development files from the package.


= 2.3.11 - February 27, 2026 =

Version bump - this plugin is still working fine!

= 2.3.10 - Feb 5, 2024 =

Version bump just to get rid of the "unmaintained" warning.

= 2.3.9 - November 11, 2019 =

Updated WordPress compatibility.

[View the full changelog on GitHub](https://github.com/ibericode/wysiwyg-widgets/blob/main/CHANGELOG.md)

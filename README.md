colorise
========

A Compass extension for create color scheme.

## Usage

Extract the extension into your extension dir. With a normal compass project, just put it in the `compass_extensions` directory and it will be fine. Or add `extensions_dir = 'compass_extensions'` into your `config.rb`.

In your scss file:

~~~
[scss]
@import "colorise";
~~~

## Variables

The extension using Compass blueprint color name for convenient:

~~~
$base-color:     #333333 !default;			// Text color
$alt-color: 	#666666 !default;					// Alternate text color

$quiet-color:    lighten($base-color, 20%) !default;		// 	Lighter than text color
$loud-color:     darken($base-color, 13.33%) !default;	//	Darker than text color
$header-color:   darken($base-color, 6.67%) !default;		//  Normally used for headers

$base-background: #ffffff !default;											// Original background color
$alt-background:  #e5eCf9 !default;											// Alternate background color

$header-background:    darken($base-background, 20%) !default;		// Pair up with $header-color
$quiet-background:     darken($base-background, 6.67%) !default;	// Pair up with $quiet-color
$loud-background:   darken($base-background, 13.33%) !default;		// Pair up with $loud-background

$link-color:         #06c                  !default;							// Color of anchor and links
$link-hover-color:   #09f                  !default;							// When hover
$link-focus-color:   $link-hover-color     !default;							// Focus state
$link-active-color:  lighten(adjust-hue($link-color, 120deg), 10%) !default;		// Active state
$link-visited-color: darken($link-color, 10%) !default;						// Visited

$base-table-header-color: #c3d9ff !default;						// Table header
$base-table-stripe-color: #e5ecf9 !default;						// Table even row
~~~

## Mixins

The extension provide the following mixins:

### Utilities

* `colorise-save()` : Save the current palletes into a `$colorise-pallete` list.
* `colorise-restore()`: Restore the saved pallete to current colors.

### Generate color pallete

* `light-colorise($light-text-color, $light-link-color, $dark-background-color)`: Generate all other color values, based on 2 light colors (for text and link colors) and 1 dark color (background).
* `dark-colorise($dark-text-color, $dark-link-color, $light-background-color)`: The opposite of `light-colories`.
* `colorise($text-color, $link-color, $background-color)`: Based on background color's lightness, this function will call one of 2 above function, with equalize colors for text and link. All calculations are based on color's lightness.
* `colorise-analogous($background-color)`: Generate an analogous colors for text-color and link-color, pair with provided background, then put it to `colorise`.
* `colorise-triadic($background-color)`: Like above, but use __triadic__ colors for text and link.
* `colorise-complement($background-color)`: Like above, but use __split-complement__ colors for text and link.

### Using colorise pallete

* `colorise-me($nested: true)`: Write background and color attributes for text, container and link. If `$nested = false`, the color is applied for `body` element. Leave default if you want to _colorise_ a region and all its child elements.
* `colorise-bp($nested)`: Extend the colorise-me above, using [BlueprintCSS](http://blueprintcss.org) default colors attributes.

# colorise

A Compass extension for create color scheme.

## Demo

Thank to Github, I set up some demo on my github page. Here they are:

* [Colorise Testing Page __17 standard CSS colors__](https://dinhtrung.github.io/test-colorise.html)
* [Colorise Testing Page in Luma mode __17 standard CSS colors__](https://dinhtrung.github.io/test-colorise-luma.html)

## Usage

Extract the extension into your extension dir. With a normal compass project, just put it in the `compass_extensions` directory and it will be fine. Or add `extensions_dir = 'compass_extensions'` into your `config.rb`.

In your scss file:

~~~
[scss]
@import "colorise";
~~~

## Variables

The extension using Compass blueprint color name for convenient:

__The color names, mixin and function are now in camelCase__

~~~
$baseColor:	#002b36 !default;
$altColor:		#586e75 !default;

$quietColor:    #073642 !default;
$loudColor:     #657b83 !default;
$headerColor:   #839496 !default;

$baseBackground: 		#fdf6e3 !default;
$altBackground:  		#eee8d5 !default;

$headerBackground:    	#93a1a1 !default;
$quietBackground:     	darken($baseBackground, 6.67%) !default;
$loudBackground:   		darken($baseBackground, 13.33%) !default;

$linkColor:        #268bd2 !default;
$linkColorHover:   #dc322f !default;
$linkColorFocus:   #2aa198 !default;
$linkColorActive:  #859900 !default;
$linkColorVisited: #d33682 !default;

$tableHeader: #93a1a1 !default;
$tableStripe: #eee8d5 !default;

$colorisePallete: $baseColor $altColor $quietColor $loudColor $headerColor $baseBackground $altBackground $quietBackground $loudBackground $headerBackground $linkColor $linkColorHover $linkColorFocus $linkColorActive $linkColorVisited $tableHeader $tableStripe;
~~~

## Mixins

The extension provide the following mixins:

### Utilities

* `coloriseSave()` : Save the current palletes into a `$colorisePallete` list.
* `coloriseRestore()`: Restore the saved pallete to current colors.

The pallete is as following order:

~~~
$colorisePallete: $baseColor $altColor $quietColor $loudColor $headerColor $baseBackground $altBackground $quietBackground $loudBackground $headerBackground $linkColor $linkColorHover $linkColorFocus $linkColorActive $linkColorVisited $tableHeader $tableStripe;
~~~

### Generate color pallete

* `@mixin coloriseLight($lightText, $lightLink, $darkBackground, $threshold: 10)`: Generate all other color values, based on 2 light colors (for text and link colors) and 1 dark color (background). The threshold help you refine how different the color are.
* `@mixin coloriseDark($darkText, $darkLink, $lightBackground, $threshold: 10)`: The opposite of `coloriseLight`. 
* `@mixin colorise($text, $link, $background, $threshold)`: Based on background color's lightness, this function will call one of 2 above function, with equalize colors for text and link. All calculations are based on color's lightness. The threshold help you refine how different the color are.
* `@mixin coloriseAnalogous($background-color, $threshold: 10)`: Generate an analogous colors for text-color and link-color, pair with provided background, then put it to `colorise`.
* `@mixin coloriseTriadic($background-color, $threshold: 10)`: Like above, but use __triadic__ colors for text and link.
* `@mixin coloriseComplement($background-color, $threshold: 10)`: Like above, but use __split-complement__ colors for text and link.
* `@function luma($aColor)`: Return the luma value (0 - 255) of current color.
* `@mixin coloriseLuma($text-color, $link-color, $background, $threshold:10, $diff:150)`: Calculate the right color based on luma. It inspect the background color, and increase or decrease the text-color and link-color to match the background luma.
* `@mixin coloriseLumaAnalogous($background, $threshold:10, $diff:150)`: Like the original version, but use luma instead of lightness.
* `@mixin coloriseLumaTriadic($background, $threshold:10, $diff:150)`: Like the original version, but use luma instead of lightness.
* `@mixin coloriseLumaComplement($background, $threshold:10, $diff:150)`: Like the original version, but use luma instead of lightness.
* `@mixin schemeAnalogous($aColor)`: Assign `$originalColor`, `$accentColor` and `$supportColor` by Analogous color model.
* `@mixin schemeTriadic($aColor)`: Assign `$originalColor`, `$accentColor` and `$supportColor` by Triadic color model.
* `@mixin schemeComplement($aColor)`: Assign `$originalColor`, `$accentColor` and `$supportColor` by Complement color model.
* `@mixin coloriseSimple()`: Generate a color pallete based on the `$originalColor` specified.
* `@mixin coloriseSave($toVar: false)`: Save the pallete to the `$toVar`. 
* `@mixin coloriseSave($fromVar: false)`: Restore the pallete from the `$fromVar`. 


### Automatic Coloring a Block

* `coloriseMe($nested: true)`: Write background and color attributes for text, container and link. If `$nested = false`, the color is applied for `body` element. Leave default if you want to _colorise_ a region and all its child elements.
* `coloriseBp($nested)`: Extend the colorise-me above, using [BlueprintCSS](http://blueprintcss.org) default colors attributes.

### Example

#### BlueprintCSS Default Colors

The following code use original colorise method to quickly colorise a page with BlueprintCSS colors:

~~~
/* Filename: colors.scss */
@import "colorise";
@include coloriseBp(false);
~~~

#### Colorise per Region

The following code use original colorise method to quickly colorise a page with BlueprintCSS colors:

~~~
/* Filename: colors.scss */
@import "colorise";

// Apply Basic colors for Headers, Links, Text and Background
// Using the Complement Scheme
@include colorise(#333, DarkRed, #FFF);
@include coloriseBp(false);

// Save the pallete for later use
@include coloriseSave;

// Switch the header to Dark Tone...
// Then colorise its link, text, header and Background using `coloriseMe`
#header {
	@include colorise(LightGray, LightYellow, #222);
	@include coloriseMe;
	// Save the pallete for later use...
	$headerPallete = coloriseSave();
}

// Then switch back to the original pallete
@include coloriseRestore;

// Now we want to do a full colorise for the footer, but with coloriseLuma version...
// With all tables and stuff coloring... use `coloriseBp`
#footer {
	@include coloriseLuma(LightGray, LightYellow, #222);
	@include coloriseBp;
}

// Now we restore the pallete again..
// Then theming the sidebar
@include coloriseRestore();
#main .sidebar {
	@include coloriseMe;
}

// In case we want to theme something from our header, then lets restore the header Pallete..
@include coloriseRestore($headerPallete);
#header #logo a {
	color: $baseColor;
}
~~~

Nice, isn't it?

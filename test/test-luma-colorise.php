<?php
$colornames ="AliceBlue, AntiqueWhite, Aqua, Aquamarine, Azure, Beige, Bisque, Black, BlanchedAlmond, Blue, BlueViolet, Brown, BurlyWood, CadetBlue, Chartreuse, Chocolate, Coral, CornflowerBlue, Cornsilk, Crimson, Cyan, DarkBlue, DarkCyan, DarkGoldenRod, DarkGray, DarkGrey, DarkGreen, DarkKhaki, DarkMagenta, DarkOliveGreen, Darkorange, DarkOrchid, DarkRed, DarkSalmon, DarkSeaGreen, DarkSlateBlue, DarkSlateGray, DarkSlateGrey, DarkTurquoise, DarkViolet, DeepPink, DeepSkyBlue, DimGray, DimGrey, DodgerBlue, FireBrick, FloralWhite, ForestGreen, Fuchsia, Gainsboro, GhostWhite, Gold, GoldenRod, Gray, Grey, Green, GreenYellow, HoneyDew, HotPink, IndianRed, Indigo, Ivory, Khaki, Lavender, LavenderBlush, LawnGreen, LemonChiffon, LightBlue, LightCoral, LightCyan, LightGoldenRodYellow, LightGray, LightGrey, LightGreen, LightPink, LightSalmon, LightSeaGreen, LightSkyBlue, LightSlateGray, LightSlateGrey, LightSteelBlue, LightYellow, Lime, LimeGreen, Linen, Magenta, Maroon, MediumAquaMarine, MediumBlue, MediumOrchid, MediumPurple, MediumSeaGreen, MediumSlateBlue, MediumSpringGreen, MediumTurquoise, MediumVioletRed, MidnightBlue, MintCream, MistyRose, Moccasin, NavajoWhite, Navy, OldLace, Olive, OliveDrab, Orange, OrangeRed, Orchid, PaleGoldenRod, PaleGreen, PaleTurquoise, PaleVioletRed, PapayaWhip, PeachPuff, Peru, Pink, Plum, PowderBlue, Purple, Red, RosyBrown, RoyalBlue, SaddleBrown, Salmon, SandyBrown, SeaGreen, SeaShell, Sienna, Silver, SkyBlue, SlateBlue, SlateGray, SlateGrey, Snow, SpringGreen, SteelBlue, Tan, Teal, Thistle, Tomato, Turquoise, Violet, Wheat, White, WhiteSmoke, Yellow, YellowGreen";

$colornames = explode(", ", $colornames);
$css = 'base-color alt-color quiet-color loud-color header-color base-background alt-background quiet-background loud-background header-background link-color link-hover-color link-focus-color link-active-color link-visited-color base-table-header-color base-table-stripe-color';
$css = explode(" ", $css);
?><!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8' />
    <title>HTML Colors</title>
		<link href='./css/test-luma-colorise.css' rel='stylesheet' />
		<style>
			nav { position: fixed; width: 200px; top: 30px; height: 98%; overflow: scroll;  }
			#main { margin-left: 220px; }
			
			article {
				width: 80%;
				margin-left: auto;
				margin-right: auto;
			}
			h1, h2 { text-align: center; clear: both; }

			section {
				width: 30%;
				margin: 1.5em 1.5%;
				float: left;
			}
		</style>
  </head>
  <body>
		<h1>Color Name recognized by CSS</h1>
		<nav>
			<?php foreach ($colornames as $name): ?>
				<li class="<?php echo strtolower(trim($name)); ?>"><a href="#<?php echo strtolower(trim($name)); ?>" class="link-color"><?php echo $name; ?></a></li>
			<?php endforeach; ?>
		</nav>
		<div id="main">
				<?php foreach ($colornames as $name): ?>
				<article class="<?php echo strtolower(trim($name)); ?>">
					
					<h1><a name="<?php echo strtolower(trim($name)); ?>"><?php echo $name; ?></a></h1>

					<section class="analogous">
						<h2>Analogous</h2>
						<ul>
						<?php foreach ($css as $c): ?>
							<li class="<?php echo $c; ?>"><?php echo $c; ?></li>
						<?php endforeach; ?>
						</ul>
					</section>

					<section class="triadic">
						<h2>Triadic</h2>
						<ul>
						<?php foreach ($css as $c): ?>
							<li class="<?php echo $c; ?>"><?php echo $c; ?></li>
						<?php endforeach; ?>
						</ul>
					</section>

					<section class="complement">
						<h2>Split-Complement</h2>
						<ul>
						<?php foreach ($css as $c): ?>
							<li class="<?php echo $c; ?>"><?php echo $c; ?></li>
						<?php endforeach; ?>
						</ul>
					</section>

				</article>
				<?php endforeach; ?>
		</div>
  </body>
</html>

<?php
$colornames ="AliceBlue, AntiqueWhite, Aquamarine, Azure, Beige, Bisque, Black, BlanchedAlmond, Blue, BlueViolet, Brown, BurlyWood, CadetBlue, Chartreuse, Chocolate, Coral, CornflowerBlue, Cornsilk, Crimson, Cyan, DarkBlue, DarkCyan, DarkGoldenRod, DarkGrey, DarkGreen, DarkKhaki, DarkMagenta, DarkOliveGreen, Darkorange, DarkOrchid, DarkRed, DarkSalmon, DarkSeaGreen, DarkSlateBlue, DarkSlateGrey, DarkTurquoise, DarkViolet, DeepPink, DeepSkyBlue, DimGrey, DodgerBlue, FireBrick, FloralWhite, ForestGreen, Fuchsia, Gainsboro, GhostWhite, Gold, GoldenRod, Grey, Green, GreenYellow, HoneyDew, HotPink, IndianRed, Indigo, Ivory, Khaki, Lavender, LavenderBlush, LawnGreen, LemonChiffon, LightBlue, LightCoral, LightCyan, LightGoldenRodYellow, LightGrey, LightGreen, LightPink, LightSalmon, LightSeaGreen, LightSkyBlue, LightSlateGrey, LightSteelBlue, LightYellow, Lime, LimeGreen, Linen, Magenta, Maroon, MediumAquaMarine, MediumBlue, MediumOrchid, MediumPurple, MediumSeaGreen, MediumSlateBlue, MediumSpringGreen, MediumTurquoise, MediumVioletRed, MidnightBlue, MintCream, MistyRose, Moccasin, NavajoWhite, Navy, OldLace, Olive, OliveDrab, Orange, OrangeRed, Orchid, PaleGoldenRod, PaleGreen, PaleTurquoise, PaleVioletRed, PapayaWhip, PeachPuff, Peru, Pink, Plum, PowderBlue, Purple, Red, RosyBrown, RoyalBlue, SaddleBrown, Salmon, SandyBrown, SeaGreen, SeaShell, Sienna, Silver, SkyBlue, SlateBlue, SlateGrey, Snow, SpringGreen, SteelBlue, Tan, Teal, Thistle, Tomato, Turquoise, Violet, Wheat, White, WhiteSmoke, Yellow, YellowGreen";

$colornames = explode(", ", $colornames);
$css = 'base-color alt-color quiet-color loud-color header-color base-background alt-background quiet-background loud-background header-background link-color link-hover-color link-focus-color link-active-color link-visited-color base-table-header-color base-table-stripe-color';
$css = explode(" ", $css);
?><!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8' />
    <title>Colorise Demo Page</title>
		<link href='./css/test-colorise.css' rel='stylesheet' />
		<style>
			nav { position: fixed; width: 200px; top: 30px;  }
			nav li { float: left; margin: 2px; list-style: none; width: 20px; height: 20px; overflow: hidden; border: 1px solid black; }
			nav a { display: block; list-style: none; width: 20px; height: 20px; color: transparent; }

			#main { margin-left: 220px; }

			article {
				width: 80%;
				margin-left: auto;
				margin-right: auto;
			}
			article li { padding: 5px 1em; list-style: none; margin: 5px 1em; }
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
				<li class="<?php echo strtolower(trim($name)); ?>"><a href="#<?php echo strtolower(trim($name)); ?>" class="link-color" title="<?php echo $name; ?>"><?php echo $name; ?></a></li>
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

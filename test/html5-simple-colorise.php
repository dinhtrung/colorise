<?php
$colornames ="AliceBlue, AntiqueWhite, Aquamarine, Azure, Beige, Bisque, Black, BlanchedAlmond, Blue, BlueViolet, Brown, BurlyWood, CadetBlue, Chartreuse, Chocolate, Coral, CornflowerBlue, Cornsilk, Crimson, Cyan, DarkBlue, DarkCyan, DarkGoldenRod, DarkGrey, DarkGreen, DarkKhaki, DarkMagenta, DarkOliveGreen, Darkorange, DarkOrchid, DarkRed, DarkSalmon, DarkSeaGreen, DarkSlateBlue, DarkSlateGrey, DarkTurquoise, DarkViolet, DeepPink, DeepSkyBlue, DimGrey, DodgerBlue, FireBrick, FloralWhite, ForestGreen, Fuchsia, Gainsboro, GhostWhite, Gold, GoldenRod, Grey, Green, GreenYellow, HoneyDew, HotPink, IndianRed, Indigo, Ivory, Khaki, Lavender, LavenderBlush, LawnGreen, LemonChiffon, LightBlue, LightCoral, LightCyan, LightGoldenRodYellow, LightGrey, LightGreen, LightPink, LightSalmon, LightSeaGreen, LightSkyBlue, LightSlateGrey, LightSteelBlue, LightYellow, Lime, LimeGreen, Linen, Magenta, Maroon, MediumAquaMarine, MediumBlue, MediumOrchid, MediumPurple, MediumSeaGreen, MediumSlateBlue, MediumSpringGreen, MediumTurquoise, MediumVioletRed, MidnightBlue, MintCream, MistyRose, Moccasin, NavajoWhite, Navy, OldLace, Olive, OliveDrab, Orange, OrangeRed, Orchid, PaleGoldenRod, PaleGreen, PaleTurquoise, PaleVioletRed, PapayaWhip, PeachPuff, Peru, Pink, Plum, PowderBlue, Purple, Red, RosyBrown, RoyalBlue, SaddleBrown, Salmon, SandyBrown, SeaGreen, SeaShell, Sienna, Silver, SkyBlue, SlateBlue, SlateGrey, Snow, SpringGreen, SteelBlue, Tan, Teal, Thistle, Tomato, Turquoise, Violet, Wheat, White, WhiteSmoke, Yellow, YellowGreen";

$colornames = explode(", ", $colornames);
$css = 'base-color alt-color quiet-color loud-color header-color base-background alt-background header-background quiet-background loud-background link-color link-hover-color link-focus-color link-active-color link-visited-color base-table-header-color base-table-stripe-color';

$css = explode(" ", $css);
$dummy=<<<HEREDOC
<h1><small>Thẻ</small> tiêu đề <a href="#">cấp 1</a></h1>
		<div>Văn bản bên trong thẻ <code>div</code></div>

    <p>
      Trình bày các đoạn văn bản với thẻ <code>p</code>. Trong các đoạn văn
      bản, ta có thể dùng các thẻ <em>in nghiêng</em> hoặc <strong>in
      đậm</strong>. <cite><a href="links.html">Liên kết thích là liên kết</a></cite>.
    </p>

<h2><small>Thẻ</small> Tiêu đề <a>cấp 2</a></h2>
<p>
	<abbr title="Cascading Style Sheets">CSS</abbr> (từ viết tắt; dùng thẻ <code>abbr</code>)<br>
	Các <del>văn bản đã bị xóa</del>(dùng thẻ <code>del</code>)
</p>
<ul>
  <li><code>a[i] = b[i] + c[i);</code> (mã nguồn; dùng thẻ <code>code</code>)</li>
      <li>chọn <kbd>yes</kbd> khi được hỏi (dùng thẻ <code>kbd</code> để
      thông báo các dữ liệu nhập vào từ bàn phím)
      </li>
      <li>Câu lệnh <code>cat</code> <var>filename</var> trình bày tệp tin
      được chỉ định bởi tham số <var>filename</var> (thẻ <code>var</code>
      dùng để đánh dấu các tên biến).
      </li>
  <li><samp>Văn bản nằm trong thẻ samp</samp>
  	<ul>
  		<li>một <dfn>khái niệm</dfn> là một từ được định nghĩa rõ, và khai
      báo sử dụng thẻ <code>dfn</code>.</li>
            <li>các chữ được <ins>chèn thêm vào</ins>(dùng thẻ <code>ins</code>)</li>
  	</ul>

      <li>Đầu ra <samp>mẫu ví dụ</samp> với thẻ <code>samp</code>
      </li>

    </ul>
<hr>
<h3><small>Thẻ</small> Tiêu đề <a>cấp 3</a></h3>
<p>        <q>Xin chào!</q> <q>Tôi đáp <q>Tạm biệt!</q></q> (thẻ
        <code>q</code> trích dẫn trên cùng 1 dòng)
</p>
<blockquote>
  <p><strong>Một khối trích dẫn</strong>: Thường được dùng để <em>trích dẫn nội dung từ nơi khác</em>...</p>
</blockquote>

<h4><small>Thẻ</small> Tiêu đề <a>cấp 4</a></h4>
<p>Các chỉ số trên và chỉ số dưới (thẻ <code>sub</code> và
      <code>sup</code>) xuất hiện trong văn bản hiện có. Ví dụ như
      x<sub>1</sub> và H<sub>2</sub>O (có chỉ số dưới). Chỉ số trên:
      M<sup>lle</sup>, 1<sup>st</sup>, biểu thức toán học: e<sup>x</sup>,
      sin<sup>2</sup> <i>x</i>, có nhiều cấp (số mũ chả hạn):
      e<sup>x<sup>2</sup></sup> và f(x)<sup>g(x)<sup>a+b+c</sup></sup>
      (trong đó 2 và a+b+c sẽ có dạng số mũ của số mũ).</p>
<dl>
  <dt>
    Danh sách định nghĩa
  </dt>
  <dd>
    Mỗi definition list thường bao gồm nhiều mục
  </dd>
  <dt>
    Thuật ngữ
  </dt>
  <dd>
    Các thuật ngữ là thành phần cần được giải thích
  </dd>
  <dt>
    Chú giải
  </dt>
  <dd>
    Chú giải cho thuật ngữ ở phía trên. Thường thường thì phần chú giải
    sẽ dài hơn nhiều so với thuật ngữ của nó.
  </dd>
</dl>

<h5>
  <small>Thẻ</small> Tiêu đề <a>cấp 5</a>
</h5>
<p>đây là chữ <small>in nhỏ</small> (với thẻ <code>small</code>)</p>
    <address>
      Địa chỉ liên hệ, <a>jkorpela@cs.tut.fi</a> Số điện thoại linh tinh...
    </address>

<h6><small>Thẻ</small> Tiêu đề <a>cấp 6</a></h6>
<p>Nội dung dạng bảng</p>
<table summary="Bảng số liệu thử nghiệm">
  <caption>
    Diện tích các nước Bắc Âu
  </caption>
  <thead>
    <tr>
      <th scope="col">
        Quốc gia
      </th>
      <th scope="col">
        Tổng diện tích
      </th>
      <th scope="col">
        Diện tích đất
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
        Đan Mạch
      </th>
      <td align="right">
        43,070
      </td>
      <td align="right">
        42,370
      </td>
    </tr>
    <tr>
      <th scope="row">
        Phần Lan
      </th>
      <td align="right">
        337,030
      </td>
      <td align="right">
        305,470
      </td>
    </tr>
    <tr>
      <th scope="row">
        Iceland
      </th>
      <td align="right">
        103,000
      </td>
      <td align="right">
        100,250
      </td>
    </tr>
    <tr>
      <th scope="row">
        Na Uy
      </th>
      <td align="right">
        324,220
      </td>
      <td align="right">
        307,860
      </td>
    </tr>
    <tr>
      <th scope="row">
        Thụy Điển
      </th>
      <td align="right">
        449,964
      </td>
      <td align="right">
        410,928
      </td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th scope="col">
        Tổng
      </th>
      <th scope="col">
        1257,284
      </th>
      <th scope="col">
        1166,878
      </th>
    </tr>
  </tfoot>
</table>
HEREDOC;
?><!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8' />
    <title>Colorise Simple Demo Page</title>
		<link href='./css/html5-simple-colorise.css' rel='stylesheet' />
		<link href='./css/test.css' rel='stylesheet' />
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
						<?php echo $dummy; ?>
					</section>

					<section class="triadic">
						<?php echo $dummy; ?>
					</section>

					<section class="complement">
						<?php echo $dummy; ?>
					</section>

				</article>
				<?php endforeach; ?>
		</div>
  </body>
</html>

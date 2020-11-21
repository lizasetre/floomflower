<html>
	<head>
		<style> 
      @import url("https://fonts.googleapis.com/css?family=Lato");

html {
	height: 100%;
}
body {
	height: 200%;
	background-color: #FFEC9E;
	font: 400 10px "Lato", sans-serif;
	text-align: center;
}
header {
	width: 200%;
	height: 309px;
	background: lightpink;
	opacity: 0.95;
	overflow: hidden;
	-webkit-box-shadow: #333 1px 3px 4px;
	-moz-box-shadow: #333 1px 3px 4px;
	box-shadow: #333 1px 3px 4px;
}
svg.line-top {
	width: 100%;
	background-color: black;
}
ul {
	padding: 0;
	margin: 0;
}

ul li {
	margin: 0;
	padding: 10px 0 10px 0;
	width: 25%;
	height: 10px;
	text-align: center;
	text-transform: uppercase;
	text-decoration: none;
	color: white;
	cursor: pointer;
	display: inline-block;
	letter-spacing: 3.5px;
}
svg{
  width: 25%;
  display:block;
  margin: 0 auto;
  animation: bounce 1s ease-in-out -5s both infinite;
}
@keyframes bounce{
  50% {transform:translateY(20px);}
  100%{transform:translateY(0px);}
}
      .stem-big{
  stroke-dasharray: 2000;
  animation: draw-big-stem 3s linear forwards;
}

.stem-small{
  stroke-dasharray: 800;
  animation: draw-small-stem 4s linear 2s forwards;
  stroke-opacity:0;
  fill-opacity:0;
}

.leaf{
  opacity: 0;
  animation: draw-leaf 2s linear 6s forwards;
}

.flower{
  opacity: 0;
  animation: draw-flower 2s linear 7s forwards;
}

@keyframes draw-big-stem {
  0%{
    stroke-dashoffset: 2500;
    fill-opacity:0;
  }
  60%{
    fill-opacity:0;
  }
  100%{
    stroke-dashoffset: 0;
    fill-opacity:1;
  }
}

@keyframes draw-small-stem {
  0%{
    stroke-dashoffset: -800;
    stroke-opacity: 1;
  }
  60%{
    fill-opacity:0;
  }
  100%{
    stroke-dashoffset: 0;
    fill-opacity:1;
    stroke-opacity: 1;
  }
}

@keyframes draw-flower{
  100%{
    opacity: 1;
  }
}

@keyframes draw-leaf{
  100%{
    opacity: 1;
  }
}
      </head>
		</style>
    <div class="header">
  <h1> WELCOME TO FLOOM </h1>
    <ul>
   <li>Shop</li><li>Occasion</li><li>Same Day Delivery</li><li>Get Free Delivery</li><li>Want to sell on floom?</li><li>merch</li>
   </ul>

   <svg viewBox="0 0 151.2 314.8">
  <style>
    .st0{fill:none;stroke:green;stroke-width:7;stroke-miterlimit:10;} .st1{opacity:0.42;fill:green;} .st2{fill:;} .st3{fill:black none;stroke:#3C5B36;stroke-width:0.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st4{fill:#F46158;} .st5{fill:#FF9494;} .st6{fill:#F79651;} .st7{fill:#3D3D3D;} .st8{fill:none;stroke:#3D3D3D;stroke-width:0.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st9{fill:none;stroke:#3D3D3D;stroke-miterlimit:10;} .st10{fill:none;stroke:#3D3D3D;stroke-width:2;stroke-linecap:circle;stroke-linejoin:circle;stroke-miterlimit:10;} .st11{fill:#EF713A;stroke:#D64C00;stroke-miterlimit:10;}
  </style>
  
<!--   Stem -->
  <g id="whole-flower">
  <g id="stem">
    <path class="st0" d="M80.5 34.8l-1.9 147"/>
    <path class="st1" d="M76.6 70.4l7 .3-.2 6.2h-7zM75.3 173h7l-.1 2.3h-7z"/>
    <path class="st2" d="M77.7 114.3s-17.5-19.5-24.5-16 19.5 31 24.5 30.5c5.1-.5 0-14.5 0-14.5z"/>
    <path class="st2" d="M79.6 114.3s17.5-19.5 24.5-16-19.5 31-24.5 30.5c-5.1-.5 0-14.5 0-14.5z"/>
    <path class="st3" d="M84.2 118.5l15.5-16.4M95.5 106.6l4.5-.5M90.8 111.4l4.1-.1M95.5 106.6l.5-4.2M90.8 111.6l.1-4.2M86.1 116.8l4.4-.4M85.8 116.7l.9-4.7M73.9 119.4L58.4 103M62.6 107.5l-4.5-.5M67.3 112.3l-4.1-.1M62.6 107.5l-.5-4.2M67.4 112.5l-.1-4.1M72.1 117.8l-4.4-.5M72.3 117.6l-.8-4.7"/>
  </g>
    <!--   Flower head -->
  <g id="flower">
    <path class="st4" d="M52.7 0l14.7 18.7L80.7 0l10.7 18.7L106 0l10.7 18.7s20 52-32 52c-48 0-58-24-32-70.7z"/>
    <ellipse class="st5" cx="58.2" cy="41" rx="7.5" ry="3.5"/>
    <ellipse class="st5" cx="100.9" cy="41.2" rx="7.5" ry="3.5"/>
    <path class="st6" d="M80.7 0S78.1 12.7 70 17.7c-3.2 2-2.7 1-2.7 1L80.7 0zM106 0s-1.7 10.2-10.2 16.8c-2.7 2.1-4.5 1.8-4.5 1.8L106 0zM52.6 0s.7 4.8-2.2 10.8c-1.4 2.9-3.5 7.3-7.2 9.2 0 0 5.9-15 9.4-20z"/>
    <circle class="st7" cx="92.2" cy="31.3" r="3.4"/>
    <path class="st8" d="M87 27.2l4.6 3.8M90.2 25.3l1.2 3.8M97.4 27.2l-3.1 2.4M94.3 25.1l-1.1 3.1"/>
    <g>
      <circle class="st7" cx="67.3" cy="31.3" r="3.4"/>
      <path class="st8" d="M62.1 27.2l4.6 3.8M65.3 25.3l1.2 3.8M72.5 27.2l-3 2.4M69.5 25.1l-1.2 3.1"/>
    </g>
    <path class="st10" d="M73.1 47.5s-.6 7.3 7 7.2c7.1 0 6.7-7.2 6.7-7.2"/>
  </g>
  </g>
</svg>
</div></div>

 <svg xmlns="http://www.w3.org/2000/svg" viewBox="-25 0 150 100" width="150" height="100">
  <defs>
    <mask id="mask-petals">
      <rect width="100" height="100" fill="hsl(0, 0%, 100%)" />
      <g transform="translate(50 40)">
        <g class="petals">
          <circle r="11" fill="hsl(0, 0%, 0%)" />   
        </g>
      </g>
    </mask>
  </defs>
  <g transform="translate(50 98)">
    <g class="stem" transform="scale(1 1)">
      <g fill="currentColor">
        <g class="leaf" transform="rotate(45)">
          <path d="M 0 0 c 20 -8 15 -32 0 -42 -15 10 -20 34 0 42" />
        </g>
        <g transform="scale(-1 1)">
          <g class="leaf" transform="rotate(45)">
            <path d="M 0 0 c 20 -8 15 -32 0 -42 -15 10 -20 34 0 42" />
          </g>
        </g>
      </g>
    </g>
  </g>
  <g mask="url(#mask-petals)">
    <g transform="translate(50 40)">
      <g fill="currentColor">
        <g class="petals">
          <circle transform="translate(0 -14)" r="11" />
          <circle transform="rotate(72) translate(0 -14)" r="11" />
          <circle transform="rotate(144) translate(0 -14)" r="11" />
          <circle transform="rotate(216) translate(0 -14)" r="11" />
          <circle transform="rotate(288) translate(0 -14)" r="11" />
        </g>
      </g>
    </g>
  </g>

  <!-- still unclear about the path accepted by anime.js -->
  <path id="path" stroke="none" fill="none" d="M -25 -20 a 30 30 0 0 0 60 0 30 30 0 0 0 -60 0 30 30 0 0 1 -60 0 30 30 0 0 1 60 0" />
   <svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   width="368.48474"
   height="605.69153"
   viewBox="0 0 368.48475 605.69154"
   id="svg2"
   version="1.1"
   inkscape:version="0.91 r13725"
   sodipodi:docname="flower.svg">
  <defs
     id="defs4" />
  <sodipodi:namedview
     id="base"
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1.0"
     inkscape:pageopacity="0.0"
     inkscape:pageshadow="2"
     inkscape:zoom="1.979899"
     inkscape:cx="271.61047"
     inkscape:cy="441.21893"
     inkscape:document-units="px"
     inkscape:current-layer="layer1"
     showgrid="false"
     units="px"
     inkscape:window-width="2560"
     inkscape:window-height="1017"
     inkscape:window-x="-8"
     inkscape:window-y="-8"
     inkscape:window-maximized="1"
     fit-margin-top="0"
     fit-margin-left="-10"
     fit-margin-right="0"
     fit-margin-bottom="0" />
  <metadata
     id="metadata7">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     inkscape:label="Layer 1"
     inkscape:groupmode="layer"
     id="layer1"
     transform="translate(12.880377,-469.54497)"
     class="SVGFlower">
    <path
       style="color:#000000;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000000;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;block-progression:tb;writing-mode:lr-tb;baseline-shift:baseline;text-anchor:start;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#00810b;fill-rule:nonzero;stroke:#00810b;stroke-width:1;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
       d="m 244.40663,610.87485 c -32.74919,32.24532 -45.82166,70.70354 -54.78266,110.98655 -9.00856,40.4968 -13.73751,81.73332 -29.83986,120.86604 -12.00716,29.46002 -33.62572,53.93453 -57.81914,77.05034 -23.961354,22.89409 -51.010403,44.91283 -72.419036,68.56443 -10.632699,11.67529 -20.4263623,25.07939 -29.13470734,38.98689 -8.47704596,13.538 -15.97819966,27.571 -22.28686266,40.9957 -1.222167,2.6008 -0.152344,5.5796 2.248407,6.2604 0.324885,0.092 0.672106,0.1368 1.035841,0.1465 2.873846,0.076 5.222726,-0.7676 5.843016,-2.0985 12.41690266,-26.641 29.499519,-55.6338 49.318249,-77.96919 20.945443,-23.43109 46.967165,-44.78273 71.470143,-68.5818 24.2996,-23.60152 46.64856,-49.2342 59.0029,-80.45207 15.82282,-40.2177 20.04069,-82.86799 28.14253,-122.59914 8.14085,-39.92249 20.26307,-77.69866 51.80311,-109.57422 0.85371,-0.86278 0.85371,-2.19256 0,-2.33558 -0.40372,-0.0676 -0.79618,-0.14653 -1.16771,-0.24635 z"
       id="path4694"
       inkscape:connector-curvature="0"
       class="stem-big"
       sodipodi:nodetypes="cscscssccscscssccc" />
    <path
       style="color:#000000;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000000;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;block-progression:tb;writing-mode:lr-tb;baseline-shift:baseline;text-anchor:start;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#00810b;fill-rule:nonzero;stroke:#00810b;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:4;stroke-dashoffset:0;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
       d="m 195.80124,481.05266 c -15.82778,0.75176 -31.01445,7.65763 -40.65234,22.01367 -5.41324,8.06324 -8.02587,19.2076 -6.61133,29.31836 1.41453,10.11076 6.92409,19.22033 17.72265,22.94922 4.14882,1.43264 10.99605,0.50478 15.86329,-2.18359 2.43362,-1.34419 4.38599,-3.15245 5.14648,-5.42774 0.76049,-2.27529 -0.23951,-4.46639 -2.51255,-7.32729 l -0.29018,0.13003 c 2.13328,2.68499 2.50171,4.94543 1.85546,6.8789 -0.64624,1.93348 -2.38381,3.59996 -4.68164,4.86914 -4.59565,2.53838 -11.37188,3.38696 -15.05468,2.11524 -10.42467,-3.59978 -15.68163,-12.30032 -17.0586,-22.14258 -1.37697,-9.84226 1.19347,-20.79148 6.45118,-28.62305 9.44992,-14.07605 24.3003,-20.8328 39.86914,-21.57226 15.56884,-0.73946 31.83692,4.56425 43.99804,14.60742 35.74981,29.52368 34.33515,81.66697 4.46009,114.28237 l 2.94616,2.23632 c 30.23222,-33.00531 29.46715,-87.36246 -6.76953,-117.28822 -12.36511,-10.21163 -28.85385,-15.5877 -44.68164,-14.83594 z"
       id="path4700"
       inkscape:connector-curvature="0"
       sodipodi:nodetypes="ssssssccsssssssccss"
       class="stem-small" />
    <path
       style="color:#000000;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000000;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;block-progression:tb;writing-mode:lr-tb;baseline-shift:baseline;text-anchor:start;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#00810b;fill-rule:evenodd;stroke:#00810b;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:4;stroke-dashoffset:0;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
       d="m 276.44382,625.21086 c 4.25407,0.13319 8.47717,0.65148 12.58789,1.56446 16.44288,3.65188 31.09923,13.63407 38.5957,30.41406 4.20932,9.42208 4.92765,21.56699 1.61719,31.89844 -3.31046,10.33144 -10.72379,18.8698 -22.70312,20.82031 -4.59179,0.74764 -11.59687,-1.46184 -16.20313,-5.1543 -2.30313,-1.84623 -4.01712,-4.09074 -4.40039,-6.60156 -0.38327,-2.51082 0.8467,-4.98861 3.74147,-7.57043 l 0.0462,0.0286 c -2.7271,2.43228 -3.12827,5.23691 -2.79938,7.39146 0.32889,2.15454 1.85502,4.2215 4.03711,5.9707 4.36418,3.49841 11.31279,5.61764 15.41797,4.94922 11.58891,-1.88694 18.68242,-10.06541 21.91016,-20.13867 3.22773,-10.07326 2.51738,-22.02018 -1.57813,-31.1875 -7.35892,-16.47209 -21.70863,-26.24807 -37.89844,-29.84375 -16.1898,-3.59568 -34.20515,-0.98144 -48.77539,7.3457 -15.64208,8.93972 -26.38931,25.87372 -32.81802,42.65239 l -2.95585,-4.52626 c 6.50745,-16.98421 19.41913,-29.92983 35.27778,-38.99332 11.09995,-6.34381 24.13817,-9.4191 36.90039,-9.01953 z"
       id="path4702"
       inkscape:connector-curvature="0"
       sodipodi:nodetypes="cssssssccsssssssccssc"
       class="stem-small" />
    <g
       id="g5781"
       class="flower">
      <path
         inkscape:connector-curvature="0"
         id="path4734"
         d="m 303.40278,700.46724 c -3.53224,5.1313 -0.16621,12.59016 -5.93984,14.85187 -5.77402,2.2617 -8.77873,-5.1803 -14.74901,-6.71952 -5.97028,-1.53923 -10.71016,2.76401 -14.63336,-2.0816 -3.92321,-4.84561 2.1659,-9.22291 2.05707,-15.38164 -0.10884,-6.15872 -7.00797,-9.87432 -3.59947,-14.9967 3.4085,-5.12238 9.76524,-1.0184 15.53196,-3.134 5.76671,-2.1156 6.9188,-9.69654 12.8842,-7.97968 5.96539,1.71687 4.49519,9.60819 8.20569,14.59199 3.7105,4.98381 10.31763,3.89079 10.61351,10.00956 0.29587,6.11877 -6.83852,5.70842 -10.37075,10.83972 z"
         inkscape:transform-center-y="2.0661456"
         inkscape:transform-center-x="-0.33246363"
         style="fill:#ffd870;fill-opacity:1;fill-rule:nonzero;stroke:#fff5a2;stroke-width:7.72264194;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:90;stroke-opacity:1" />
      <path
         inkscape:connector-curvature="0"
         id="path4738"
         d="m 297.8363,690.01812 a 9.5769472,8.080225 0.77906211 0 1 -9.68593,7.94925 9.5769472,8.080225 0.77906211 0 1 -9.46619,-8.20969 9.5769472,8.080225 0.77906211 0 1 9.68592,-7.94926 9.5769472,8.080225 0.77906211 0 1 9.4662,8.2097 z"
         style="fill:#a16c3f;fill-opacity:1;fill-rule:nonzero;stroke:#bd901f;stroke-width:2.24567938;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:90;stroke-opacity:1" />
    </g>
    <g
       id="g5793"
       class="leaf">
      <path
         sodipodi:nodetypes="cscsc"
         inkscape:connector-curvature="0"
         id="path4811-5-8"
         d="m 188.89562,771.01244 c 0,0 5.67345,-28.05845 26.64143,-47.73756 20.968,-19.67911 41.94919,-16.63686 41.94919,-16.63686 0,0 1.70689,21.13179 -19.26111,40.81091 -20.96798,19.67909 -49.32951,23.56351 -49.32951,23.56351 z"
         style="fill:#2da537;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         sodipodi:nodetypes="ccccccccccccccccccccccccccccccccccccccc"
         inkscape:connector-curvature="0"
         id="path4820-3-1"
         d="m 204.81964,763.10664 -6.45442,-0.98169 -0.81302,-6.76172 m 11.35478,3.9073 -6.45442,-0.98169 -0.81302,-6.76173 m 11.35479,3.9073 -6.45443,-0.98169 -0.81302,-6.76172 m 15.44628,5.06044 -10.54591,-2.13483 -1.54025,-11.36348 m 12.08205,8.50907 -6.45444,-0.98171 -0.81301,-6.76171 m 11.3548,3.9073 -6.45444,-0.98171 -0.81302,-6.76171 m 11.35479,3.90731 -6.45443,-0.98169 -0.81302,-6.76173 m 11.35481,3.9073 -6.45443,-0.98169 -0.81302,-6.76173 m 15.44626,5.06044 -10.54589,-2.13482 -1.54025,-11.36349 m 12.08205,8.50907 -6.45444,-0.9817 -0.81301,-6.76171 m 11.35479,3.9073 -6.45443,-0.98171 -0.81302,-6.76171 m 11.35479,3.9073 -6.45443,-0.98169 -0.81302,-6.76172 m 11.35481,3.90731 -6.45443,-0.98171 -0.81302,-6.76172"
         style="fill:none;fill-rule:evenodd;stroke:#00810b;stroke-width:1.12111151px;stroke-linecap:round;stroke-linejoin:round;stroke-opacity:1" />
      <path
         inkscape:connector-curvature="0"
         id="path4851-1"
         d="m 183.89932,778.11772 34.79362,-33.61585 34.86212,-33.54286 a 0.52051605,0.52051605 0 0 0 -0.71242,-0.75908 l -35.68415,32.667 -35.75265,32.59401 a 1.821807,1.821807 0 1 0 2.49348,2.65678 z"
         style="fill:#00810b;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
    </g>
    <g
       id="g5798"
       class="leaf">
      <path
         sodipodi:nodetypes="cscsc"
         inkscape:connector-curvature="0"
         id="path4811-5-8-6"
         d="m 185.891,730.59468 c 0,0 -20.28002,-15.51446 -27.86424,-40.01734 -7.58423,-24.5029 3.05467,-40.13667 3.05467,-40.13667 0,0 17.61053,6.8899 25.19475,31.3928 7.58423,24.50288 -0.38518,48.76121 -0.38518,48.76121 z"
         style="fill:#2da537;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         sodipodi:nodetypes="ccccccccccccccccccccccccccccccccccccccc"
         inkscape:connector-curvature="0"
         id="path4820-3-1-8"
         d="m 185.77538,714.73715 -3.30957,4.7915 -5.73927,-1.99068 m 7.57043,-7.57726 -3.30957,4.7915 -5.73927,-1.99068 m 7.57042,-7.57726 -3.30957,4.7915 -5.73927,-1.99069 m 10.094,-10.40715 -5.83314,7.62139 -9.71317,-3.20597 m 11.54433,-6.36196 -3.30958,4.7915 -5.73927,-1.99069 m 7.57044,-7.57727 -3.30959,4.79152 -5.73926,-1.99069 m 7.57043,-7.57726 -3.30957,4.79151 -5.73928,-1.99069 m 7.57044,-7.57727 -3.30958,4.79151 -5.73927,-1.99069 m 10.09399,-10.40715 -5.83313,7.62139 -9.71317,-3.20598 m 11.54433,-6.36196 -3.30958,4.7915 -5.73926,-1.99068 m 7.57042,-7.57726 -3.30957,4.7915 -5.73927,-1.99068 m 7.57042,-7.57726 -3.30957,4.7915 -5.73926,-1.99069 m 7.57043,-7.57726 -3.30958,4.7915 -5.73927,-1.99069"
         style="fill:none;fill-rule:evenodd;stroke:#00810b;stroke-width:1px;stroke-linecap:round;stroke-linejoin:round;stroke-opacity:1" />
      <path
         inkscape:connector-curvature="0"
         id="path4851-1-2"
         d="M 189.63542,737.37752 176.2799,696.34265 163.00967,655.28137 a 0.46428941,0.46428941 0 0 0 -0.88706,0.27456 l 12.24671,41.37808 12.16142,41.40449 a 1.6250016,1.6250016 0 0 0 3.10468,-0.96098 z"
         style="fill:#00810b;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
    </g>
    <g
       id="g5808"
       class="leaf">
      <path
         sodipodi:nodetypes="cscsc"
         inkscape:connector-curvature="0"
         id="path4811-5-8-1"
         d="m 248.55893,613.29183 c 0,0 9.58676,-12.88213 24.93162,-17.85576 15.34488,-4.97363 25.26464,1.58601 25.26464,1.58601 0,0 -4.18565,11.13151 -19.53053,16.10513 -15.34488,4.97363 -30.66573,0.16462 -30.66573,0.16462 z"
         style="fill:#2da537;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         sodipodi:nodetypes="ccccccccccccccccccccccccccccccccccccccc"
         inkscape:connector-curvature="0"
         id="path4820-3-1-7"
         d="m 258.52965,613.08683 -3.04065,-2.04119 1.20395,-3.62562 m 4.82797,4.69729 -3.04066,-2.04119 1.20395,-3.62562 m 4.82797,4.69729 -3.04065,-2.04117 1.20395,-3.62563 m 6.62854,6.26057 -4.84122,-3.60446 1.93497,-6.13468 m 4.09691,7.20634 -3.04066,-2.04119 1.20395,-3.62562 m 4.82798,4.6973 -3.04066,-2.04119 1.20395,-3.62562 m 4.82797,4.6973 -3.04066,-2.04119 1.20395,-3.62563 m 4.82798,4.6973 -3.04066,-2.04118 1.20395,-3.62563 m 6.62854,6.26058 -4.84122,-3.60446 1.93497,-6.13469 m 4.09691,7.20634 -3.04065,-2.04118 1.20395,-3.62562 m 4.82797,4.69729 -3.04066,-2.04118 1.20395,-3.62562 m 4.82797,4.69729 -3.04066,-2.04119 1.20395,-3.62562 m 4.82798,4.6973 -3.04066,-2.04119 1.20395,-3.62563"
         style="fill:none;fill-rule:evenodd;stroke:#00810b;stroke-width:0.62888545px;stroke-linecap:round;stroke-linejoin:round;stroke-opacity:1" />
      <path
         inkscape:connector-curvature="0"
         id="path4851-1-3"
         d="m 244.32492,615.70303 25.69253,-8.74073 25.70984,-8.68731 a 0.29198633,0.29198633 0 0 0 -0.18006,-0.55552 l -25.9176,8.04634 -25.93491,7.99292 a 1.0219411,1.0219411 0 1 0 0.6302,1.9443 z"
         style="fill:#00810b;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
    </g>
    <g
       id="g5818"
       class="leaf">
      <path
         sodipodi:nodetypes="cscsc"
         inkscape:connector-curvature="0"
         id="path4811-5-8-3"
         d="m 319.26446,642.30107 c 0,0 11.69365,-2.63392 22.80265,2.0111 11.10902,4.64503 13.53724,13.18375 13.53724,13.18375 0,0 -7.78348,4.26888 -18.8925,-0.37614 -11.109,-4.64503 -17.44739,-14.81871 -17.44739,-14.81871 z"
         style="fill:#2da537;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         sodipodi:nodetypes="ccccccccccccccccccccccccccccccccccccccc"
         inkscape:connector-curvature="0"
         id="path4820-3-1-87"
         d="m 325.01102,647.03348 -0.72948,-2.63462 2.44488,-1.46791 m 0.45012,5.008 -0.72948,-2.63461 2.44489,-1.46792 m 0.45011,5.00799 -0.72946,-2.63459 2.44487,-1.46793 m 0.70968,6.76893 -0.98903,-4.39552 4.07899,-2.53342 m -1.184,6.07348 -0.72947,-2.63459 2.44487,-1.46793 m 0.45013,5.008 -0.72949,-2.6346 2.44488,-1.46792 m 0.45012,5.008 -0.72947,-2.6346 2.44488,-1.46793 m 0.45013,5.008 -0.72948,-2.63459 2.44489,-1.46793 m 0.70967,6.76893 -0.98903,-4.39553 4.07899,-2.53342 m -1.18399,6.0735 -0.72947,-2.63462 2.44488,-1.46791 m 0.45012,5.008 -0.72947,-2.63461 2.44488,-1.46792 m 0.45012,5.008 -0.72947,-2.63461 2.44488,-1.46792 m 0.45011,5.00801 -0.72947,-2.63461 2.44488,-1.46792"
         style="fill:none;fill-rule:evenodd;stroke:#00810b;stroke-width:0.4694398px;stroke-linecap:round;stroke-linejoin:round;stroke-opacity:1" />
      <path
         inkscape:connector-curvature="0"
         id="path4851-1-5"
         d="m 315.69405,641.60775 18.80119,7.54335 18.78502,7.58201 a 0.21795419,0.21795419 0 0 0 0.16816,-0.40216 l -18.59099,-8.04606 -18.57482,-8.08472 a 0.76283969,0.76283969 0 0 0 -0.58856,1.40758 z"
         style="fill:#00810b;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
    </g>
    <g
       id="g5813"
       class="leaf">
      <path
         sodipodi:nodetypes="cscsc"
         inkscape:connector-curvature="0"
         id="path4811-5-8-3-9"
         d="m 252.63271,597.33553 c 0,0 -6.75094,-9.90474 -6.51827,-21.94352 0.23267,-12.03878 7.27937,-17.43786 7.27937,-17.43786 0,0 6.83284,5.66731 6.60017,17.7061 -0.23267,12.03878 -7.36127,21.67528 -7.36127,21.67528 z"
         style="fill:#2da537;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         sodipodi:nodetypes="ccccccccccccccccccccccccccccccccccccccc"
         inkscape:connector-curvature="0"
         id="path4820-3-1-87-7"
         d="m 254.91931,590.25102 -2.18152,1.64752 -2.26438,-1.73345 m 4.49124,-2.26083 -2.18151,1.64751 -2.26438,-1.73344 m 4.49124,-2.26083 -2.18151,1.64749 -2.26437,-1.73344 m 6.0332,-3.14997 -3.72346,2.53664 -3.8563,-2.861 m 6.08315,-1.13326 -2.1815,1.6475 -2.26437,-1.73343 m 4.49124,-2.26085 -2.18151,1.64753 -2.26437,-1.73345 m 4.49124,-2.26083 -2.18151,1.6475 -2.26439,-1.73344 m 4.49125,-2.26085 -2.18151,1.64752 -2.26439,-1.73345 m 6.03322,-3.14998 -3.72348,2.53665 -3.85629,-2.861 m 6.08316,-1.13327 -2.18152,1.6475 -2.26437,-1.73343 m 4.49124,-2.26085 -2.18151,1.64751 -2.26438,-1.73345 m 4.49124,-2.26083 -2.18152,1.64751 -2.26437,-1.73345 m 4.49126,-2.26083 -2.18152,1.64751 -2.26437,-1.73345"
         style="fill:none;fill-rule:evenodd;stroke:#00810b;stroke-width:0.4694398px;stroke-linecap:round;stroke-linejoin:round;stroke-opacity:1" />
      <path
         inkscape:connector-curvature="0"
         id="path4851-1-5-3"
         d="m 253.30144,600.91061 0.0981,-20.25776 0.13996,-20.25696 a 0.21795419,0.21795419 0 0 0 -0.43582,-0.008 l -0.64284,20.24723 -0.68475,20.24643 a 0.76284261,0.76284261 0 0 0 1.5254,0.0295 z"
         style="fill:#00810b;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
    </g>
    <g
       id="g5833"
       class="leaf">
      <path
         sodipodi:nodetypes="cscsc"
         inkscape:connector-curvature="0"
         id="path4811-5-8-3-0"
         d="m 181.15888,483.20822 c 0,0 -6.98706,3.10533 -14.51567,1.58418 -7.52861,-1.52115 -10.11199,-6.56016 -10.11199,-6.56016 0,0 4.33711,-3.64073 11.86573,-2.11959 7.52861,1.52115 12.76193,7.09557 12.76193,7.09557 z"
         style="fill:#2da537;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         sodipodi:nodetypes="ccccccccccccccccccccccccccccccccccccccc"
         inkscape:connector-curvature="0"
         id="path4820-3-1-87-6"
         d="m 176.97404,480.964 0.78474,1.55725 -1.3465,1.22305 m -0.90582,-3.07682 0.78474,1.55724 -1.34651,1.22306 m -0.90582,-3.07681 0.78474,1.55723 -1.3465,1.22305 m -1.28769,-4.14608 1.16661,2.62649 -2.23597,2.0933 m -0.0163,-3.94704 0.78474,1.55723 -1.3465,1.22306 m -0.90582,-3.07682 0.78475,1.55723 -1.3465,1.22305 m -0.90583,-3.07681 0.78474,1.55724 -1.3465,1.22305 m -0.90583,-3.07682 0.78475,1.55724 -1.34652,1.22306 m -1.28768,-4.14606 1.16661,2.62648 -2.23597,2.0933 m -0.0164,-3.94706 0.78474,1.55724 -1.3465,1.22305 m -0.90583,-3.07681 0.78475,1.55724 -1.34651,1.22306 m -0.90582,-3.07682 0.78474,1.55724 -1.3465,1.22305 m -0.90583,-3.07682 0.78476,1.55725 -1.34651,1.22304"
         style="fill:none;fill-rule:evenodd;stroke:#00810b;stroke-width:0.29944685px;stroke-linecap:round;stroke-linejoin:round;stroke-opacity:1" />
      <path
         inkscape:connector-curvature="0"
         id="path4851-1-5-0"
         d="m 183.47888,483.19692 -12.70198,-2.37549 -12.69669,-2.4017 a 0.13903683,0.13903683 0 1 0 -0.0551,0.27256 l 12.63314,2.71617 12.62785,2.74238 a 0.48660112,0.48660112 0 0 0 0.19274,-0.95392 z"
         style="fill:#00810b;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
    </g>
    <g
       id="g5828"
       class="leaf">
      <path
         sodipodi:nodetypes="cscsc"
         inkscape:connector-curvature="0"
         id="path4811-5-8-3-0-3"
         d="m 174.32893,488.39288 c 0,0 0.74467,6.1058 -2.19719,11.53948 -2.94184,5.4337 -7.42622,6.23525 -7.42622,6.23525 0,0 -1.78014,-4.19322 1.16171,-9.62692 2.94184,-5.43369 8.4617,-8.14781 8.4617,-8.14781 z"
         style="fill:#2da537;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         sodipodi:nodetypes="ccccccccccccccccccccccccccccccccccccccc"
         inkscape:connector-curvature="0"
         id="path4820-3-1-87-6-4"
         d="m 171.61769,491.0841 1.38263,-0.23724 0.62402,1.32366 m -2.58011,-0.0272 1.38263,-0.23724 0.62402,1.32367 m -2.58012,-0.0272 1.38263,-0.23724 0.62401,1.32365 m -3.49254,0.015 2.29505,-0.27938 1.08417,2.2127 m -3.04024,-0.91629 1.38262,-0.23724 0.62403,1.32367 m -2.58012,-0.0272 1.38263,-0.23723 0.624,1.32365 m -2.5801,-0.0272 1.38263,-0.23723 0.62401,1.32366 m -2.58011,-0.0272 1.38263,-0.23724 0.62401,1.32367 m -3.49252,0.015 2.29504,-0.27938 1.08416,2.21269 m -3.04027,-0.91621 1.38263,-0.23724 0.62402,1.32366 m -2.58011,-0.0272 1.38263,-0.23723 0.62402,1.32366 m -2.58012,-0.0272 1.38263,-0.23723 0.62402,1.32365 m -2.58013,-0.0272 1.38264,-0.23723 0.62401,1.32365"
         style="fill:none;fill-rule:evenodd;stroke:#00810b;stroke-width:0.240897px;stroke-linecap:round;stroke-linejoin:round;stroke-opacity:1" />
      <path
         inkscape:connector-curvature="0"
         id="path4851-1-5-0-8"
         d="m 174.86618,486.60547 -4.8165,9.21245 -4.83542,9.2022 a 0.11184924,0.11184924 0 1 0 0.19672,0.1065 l 5.06238,-9.07932 5.0813,-9.06907 a 0.39145761,0.39145761 0 0 0 -0.68848,-0.37276 z"
         style="fill:#00810b;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
    </g>
    <g
       id="g5823"
       class="leaf">
      <path
         sodipodi:nodetypes="cscsc"
         inkscape:connector-curvature="0"
         id="path4811-5-8-3-0-5"
         d="m 322.02357,651.42713 c 0,0 3.14869,6.96763 1.67435,14.50556 -1.47434,7.5379 -6.4972,10.15255 -6.4972,10.15255 0,0 -3.66761,-4.31441 -2.19329,-11.85233 1.47434,-7.53791 7.01614,-12.80578 7.01614,-12.80578 z"
         style="fill:#2da537;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         sodipodi:nodetypes="ccccccccccccccccccccccccccccccccccccccc"
         inkscape:connector-curvature="0"
         id="path4820-3-1-87-6-3"
         d="m 319.80539,655.62584 1.55235,-0.7944 1.23141,1.33887 m -3.07114,0.92492 1.55233,-0.7944 1.23141,1.33888 m -3.07113,0.92493 1.55232,-0.7944 1.2314,1.33887 m -4.138,1.31343 2.61918,-1.18291 2.10717,2.22292 m -3.94688,0.0408 1.55233,-0.7944 1.23141,1.33886 m -3.07115,0.92494 1.55233,-0.79442 1.23141,1.33888 m -3.07114,0.92492 1.55234,-0.7944 1.2314,1.33888 m -3.07114,0.92492 1.55233,-0.7944 1.23142,1.33888 m -4.13799,1.31342 2.61918,-1.1829 2.10716,2.22293 m -3.94688,0.0409 1.55233,-0.7944 1.23139,1.33886 m -3.07112,0.92493 1.55234,-0.79441 1.2314,1.3389 m -3.07114,0.92491 1.55234,-0.7944 1.23139,1.33887 m -3.07113,0.92494 1.55235,-0.79443 1.23138,1.33889"
         style="fill:none;fill-rule:evenodd;stroke:#00810b;stroke-width:0.29944685px;stroke-linecap:round;stroke-linejoin:round;stroke-opacity:1" />
      <path
         inkscape:connector-curvature="0"
         id="path4851-1-5-0-2"
         d="m 321.99785,649.10725 -2.29651,12.71649 -2.32275,12.71135 a 0.13902889,0.13902889 0 0 0 0.27288,0.0534 l 2.63762,-12.64978 2.66386,-12.64464 a 0.48660112,0.48660112 0 0 0 -0.9551,-0.1868 z"
         style="fill:#00810b;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
    </g>
    <g
       id="g5803"
       class="leaf">
      <path
         sodipodi:nodetypes="cscsc"
         inkscape:connector-curvature="0"
         id="path4811-5-8-3-0-4"
         d="m 214.28335,648.04094 c 0,0 -14.98812,-12.65065 -19.90423,-31.72979 -4.9161,-19.07913 3.82258,-30.68204 3.82258,-30.68204 0,0 13.25766,5.93512 18.17381,25.01427 4.9161,19.07913 -2.09216,37.39756 -2.09216,37.39756 z"
         style="fill:#2da537;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         sodipodi:nodetypes="ccccccccccccccccccccccccccccccccccccccc"
         inkscape:connector-curvature="0"
         id="path4820-3-1-87-6-9"
         d="m 214.77892,635.87005 -2.71584,3.55432 -4.33005,-1.73882 m 6.08756,-5.53466 -2.71581,3.5543 -4.33008,-1.73881 m 6.08753,-5.53466 -2.71578,3.55428 -4.33006,-1.7388 m 8.12804,-7.6129 -4.75627,5.63251 -7.33424,-2.81766 m 9.09177,-4.45561 -2.7158,3.55428 -4.33007,-1.73879 m 6.08757,-5.53467 -2.71578,3.5543 -4.33005,-1.73879 m 6.08754,-5.53467 -2.71583,3.55428 -4.33004,-1.73879 m 6.08755,-5.5347 -2.7158,3.55432 -4.3301,-1.73883 m 8.128,-7.61286 -4.75624,5.63249 -7.33425,-2.81764 m 9.09167,-4.45596 -2.71582,3.55429 -4.33004,-1.7388 m 6.08752,-5.53468 -2.7158,3.55432 -4.33009,-1.73882 m 6.08757,-5.53466 -2.71581,3.55428 -4.33005,-1.73879 m 6.08754,-5.53469 -2.71581,3.55435 -4.33004,-1.73882"
         style="fill:none;fill-rule:evenodd;stroke:#00810b;stroke-width:0.76812828px;stroke-linecap:round;stroke-linejoin:round;stroke-opacity:1" />
      <path
         inkscape:connector-curvature="0"
         id="path4851-1-5-0-4"
         d="m 216.90629,653.38299 -8.73496,-31.97587 -8.66854,-31.99298 a 0.35663124,0.35663124 0 1 0 -0.6907,0.17798 l 7.87158,32.19833 7.80516,32.21544 a 1.2482104,1.2482104 0 1 0 2.41746,-0.6229 z"
         style="fill:#00810b;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
    </g>
    <g
       id="g5785"
       class="flower">
      <path
         inkscape:connector-curvature="0"
         id="path4734-0"
         d="m 269.59669,521.40757 c -4.77121,6.57743 -0.6221,16.41208 -8.22368,19.17544 -7.60207,2.76332 -11.28057,-7.0377 -19.0162,-9.23706 -7.73563,-2.19937 -14.05493,3.2594 -19.01473,-3.18554 -4.9598,-6.44493 3.12127,-11.95685 3.17764,-19.99126 0.0564,-8.03441 -8.82039,-13.10165 -4.21082,-19.67143 4.60957,-6.56979 12.76656,-1.01358 20.35442,-3.58663 7.58785,-2.57305 9.33425,-12.42142 17.05779,-9.99058 7.72353,2.43084 5.55233,12.67371 10.23031,19.292 4.67799,6.61831 13.32881,5.40575 13.51763,13.39408 0.18881,7.98835 -9.10115,7.22355 -13.87236,13.80098 z"
         inkscape:transform-center-y="2.8539885"
         inkscape:transform-center-x="-0.5523603"
         style="fill:#ffd870;fill-opacity:1;fill-rule:nonzero;stroke:#fff5a2;stroke-width:10.07331371;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:90;stroke-opacity:1" />
      <path
         inkscape:connector-curvature="0"
         id="path4738-3"
         d="m 262.67448,507.6027 a 12.492045,10.539741 2.1934756 0 1 -12.88629,10.0539 12.492045,10.539741 2.1934756 0 1 -12.0795,-11.01014 12.492045,10.539741 2.1934756 0 1 12.8863,-10.05389 12.492045,10.539741 2.1934756 0 1 12.07949,11.01013 z"
         style="fill:#a16c3f;fill-opacity:1;fill-rule:nonzero;stroke:#bd901f;stroke-width:2.92923498;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:90;stroke-opacity:1" />
    </g>
    <g
       id="g5789"
       class="flower">
      <path
         inkscape:connector-curvature="0"
         id="path4734-2"
         d="m 196.57851,538.86156 c 1.9214,4.23904 7.99235,4.96145 7.21316,9.52817 -0.77935,4.56696 -6.70018,3.61985 -9.98742,6.84667 -3.28725,3.22682 -2.36143,7.9193 -6.97502,8.56117 -4.6136,0.64187 -5.06652,-4.94256 -9.04945,-7.24787 -3.98294,-2.30532 -9.02104,0.6766 -10.98444,-3.47982 -1.96341,-4.15642 3.11405,-6.6415 3.98407,-11.14746 0.87003,-4.50595 -3.53674,-8.16658 -0.13771,-11.32177 3.39903,-3.15519 7.88174,0.82869 12.50174,0.37623 4.62001,-0.45246 6.46846,-5.10186 10.49796,-2.93164 4.0295,2.17022 1.01571,6.57728 2.93711,10.81632 z"
         inkscape:transform-center-y="2.5425327"
         inkscape:transform-center-x="-1.7967114"
         style="fill:#ffd870;fill-opacity:1;fill-rule:nonzero;stroke:#fff5a2;stroke-width:5.76969385;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:90;stroke-opacity:1" />
      <path
         inkscape:connector-curvature="0"
         id="path4738-0"
         d="m 187.7455,538.39407 a 6.0368495,7.1550717 31.853681 0 1 1.35159,9.26347 6.0368495,7.1550717 31.853681 0 1 -8.90379,2.89155 6.0368495,7.1550717 31.853681 0 1 -1.3516,-9.26347 6.0368495,7.1550717 31.853681 0 1 8.9038,-2.89155 z"
         style="fill:#a16c3f;fill-opacity:1;fill-rule:nonzero;stroke:#bd901f;stroke-width:1.6777786;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:90;stroke-opacity:1" />
    </g>
  </g>
</svg>

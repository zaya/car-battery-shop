<?php
$title = 'Home';
$current = 'home';
include ("header.php");
include ("data.php");
?>
<link href="css/jssor.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jssor.slider.min.js"></script>

<script>
        jssor_1_slider_init = function() {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 1,
                $Align: 0
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 800);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>

<div style="margin: 20 0 20 0;">
	<div id="jssor_1"
		style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 800px; height: 300px; overflow: hidden; visibility: hidden;">
		<!-- Loading Screen -->
		<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
			<div
				style="filter: alpha(opacity = 70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
			<div
				style="position: absolute; display: block; background: url('img/loading.gif') no-repeat center center; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
		</div>
		<div data-u="slides"
			style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 300px; overflow: hidden;">
			<div data-p="112.50" style="display: none;">
				<img data-u="image" src="img/banner-1.jpg" />
			</div>
			<div data-p="112.50" style="display: none;">
				<img data-u="image" src="img/banner-2.jpg" />
			</div>
			<div data-p="112.50" style="display: none;">
				<img data-u="image" src="img/banner-3.jpg" />
			</div>
			<div data-p="112.50" style="display: none;">
				<img data-u="image" src="img/banner-4.jpg" />
			</div>
		</div>
		<!-- Bullet Navigator -->
		<div data-u="navigator" class="jssorb01"
			style="bottom: 16px; right: 16px;">
			<div data-u="prototype" style="width: 12px; height: 12px;"></div>
		</div>
		<!-- Arrow Navigator -->
		<span data-u="arrowleft" class="jssora05l"
			style="top: 0px; left: 8px; width: 40px; height: 40px;"
			data-autocenter="2"></span> <span data-u="arrowright"
			class="jssora05r"
			style="top: 0px; right: 8px; width: 40px; height: 40px;"
			data-autocenter="2"></span> <a href="http://www.jssor.com"
			style="display: none">Slideshow Maker</a>
	</div>
</div>

<script>
	jssor_1_slider_init();
</script>

<h3 style="margin: 0px 20px 10px 0px;">Store Locators</h3>
<?php
foreach ( $store_list as $store ) {
	if ($store ['id'] < 4) {
		echo "<div class='img' style='margin-right: 10px;'>";
	} else {
		echo "<div class='img'>";
	}
	echo "<a href=store.php?store_id=", urlencode ( $store ['id'] ), ">";
	echo "<img src='", $store ['img'], "' alt='", $store ['name'], "'>";
	echo "</a>";
	echo "<div class='desc'>", $store ['name'], "</div>";
	echo "</div>";
}
?>

<br style="clear: both" />

<?php include("footer.html");?>
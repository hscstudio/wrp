<?php
# http://www.hafidmukhlasin.com #
# modified from https://almsaeedstudio.com/preview #

require "config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?= $title_app; ?></title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <style>
        html, body {
            min-height: 100%;
            padding: 0;
            margin: 0;
            font-family: 'Source Sans Pro', "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
        iframe {
            display: block;
            overflow: auto;
            border: 0;
            margin: 0;
            padding: 0;
            margin: 0 auto;
        }
        .frame {
            height: 49px;
            margin: 0;
            padding: 0;
            border-bottom: 1px solid #ddd;
        }
        .frame a {
            color: #666;
        }
        .frame a:hover {
            color: #222;
        }
        .frame .buttons a {
            height: 49px;
            line-height: 49px;
            display: inline-block;
            text-align: center;
            width: 50px;
            border-left: 1px solid #ddd;
        }
        .frame .brand {
            color: #444;
            font-size: 20px;
            line-height: 49px;
            display: inline-block;
            padding-left: 10px;
        }
        .frame .brand small {
            font-size: 14px;
        }
        a,a:hover {
            text-decoration: none;
        }
        .container-fluid {
            padding: 0;
            margin: 0;
        }
        .text-muted {
            color: #999;
        }
    </style>
</head>
<body>
<header>
    <nav class="frame" role="navigation">
        <div class="container-fluid">
            <a href="index.php" class="brand">
                <?= $app; ?>
                <small class="text-muted hidden-xs"><?= $title_app; ?></small>
            </a>
            <div class="buttons pull-right">
				<?php
				foreach($devices as $device){
					echo "<a href='#' class='".$device['show']."' data-toggle='tooltip' data-placement='bottom' title='".$device['title']."' id='display-".$device['size']."'>";
					echo "<i class='".$device['icon']."'></i>";
					echo "</a>\n";
				}
				
				foreach($links as $link){
					echo "<a href='".$link['link']."' data-toggle='tooltip' data-placement='bottom' title='".$link['title']."' id='display-".$link['id']."'>";
					echo "<i class='".$link['icon']."'></i>";
					echo "</a>\n";
				}
				?>
            </div>
        </div><!-- /.container -->
    </nav><!--/.navbar-->
</header>
<iframe src="<?= $link_preview ?>" id="preview-iframe"></iframe>

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(function() {
        function _fix() {
            var h = $(window).height();
            var w = $(window).width();
            $("#preview-iframe").css({
                width: w + "px",
                height: (h - 50) + "px"
            });
        }
        _fix();
        $(window).resize(function() {
            _fix();
        });
        $('[data-toggle="tooltip"]').tooltip();

        function iframe_width(width) {
            $("#preview-iframe").animate({width: width}, 500);
        }
		
	<?php
	foreach($devices as $device){
		?>	
		$("#display-<?= $device['size'] ?>").click(function(e){
			e.preventDefault();
			iframe_width("<?= $device['size'] ?>px");
		});
		<?php
	}
	?>

        $("#remove-frame").click(function(e){
            e.preventDefault();
            window.location.href = "<?= $link_preview ?>";
        });

    });

</script>
</body>
</html>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>sourceMakeup - File <?php echo $file; ?></title>

	<meta name="viewport" content="width=1280, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />

	<link rel="shortcut icon" type="image/x-icon" href="http://jquery-jkit.com/favicon.ico" />

	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.jkit.1.1.28.min.js"></script>
	<script src="js/sourcemakeup.js"></script>

	<script type="text/javascript" src="libs/google-code-prettify/prettify.js"></script>
	<link href="libs/google-code-prettify/prettify.css" type="text/css" rel="stylesheet" />

	<link href="css/sourcemakeup.css" type="text/css" rel="stylesheet" />

</head>
<body>
	
	<div id="options" data-jkit="[tooltip:text=Show compiler instructions?]"><input type="checkbox" id="showinstructions" value="1"></div>
	<div id="search" data-jkit="[filter:global=yes;by=text;affected=tr.docu]"><input class="jkit-filter" placeholder="search ..." type="text" value=""></div>
	<div id="overview" data-jkit="[summary:what=headers;linked=yes;from=table.container;scope=all;style=select;indent=yes]"></div>
	
	<?php echo $output; ?>
	
</body>
</html>
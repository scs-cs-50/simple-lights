<?php

$repeat = 2;
$br = '/usr/bin/br -r ' . $repeat;

$lights = array(
	"A1" => "Kid's Lamp",
	"A2" => "Pink Lights"
);

foreach ($_REQUEST as $code => $state) {
	if (   ($state === 'ON' || $state === 'OFF')
		&& array_key_exists($code, $lights)
	) {
	  /*		system("$br " . $code . ' ' . $state); */
	}
}

?>
<!DOCTYPE html> 
<html> 
	<head> 
		<title>Lights</title> 
		<link rel="stylesheet" href="themes/lights.min.css" />
		<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
		<link rel="stylesheet" href="//code.jquery.com/mobile/1.4.0/jquery.mobile.structure-1.4.0.min.css" />
		<link rel=apple-touch-icon href="lights.png" />
		<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
	</head> 
	<body>
		<div data-role="page">
			<div data-role='header' data-nobackbtn='true'>
       	<h1>Lights</h1>
     	</div>
			<div data-role="content">
				<form method="POST">
<?php
	foreach ($lights as $code => $name) {
?>
					<fieldset>
						<div data-role="fieldcontain">
						<label for="sw-<?php echo $code; ?>"><?php echo $name; ?></label>
							<input type="checkbox" name="sw-<?php echo $code; ?>" id="sw-<?php echo $code; ?>" data-role="flipswitch">
					  </div>
					</fieldset>
<?php
	}
?>
					<fieldset class="ui-grid-a">
						<div class="ui-block-b">
							<input type="submit" data-theme="a" value="Submit">
						</div>
					</fieldset>
				</form>
			</div> 
		</div>
	</body>
</html>

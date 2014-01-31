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
		<link rel="stylesheet" href="//code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
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
				<form data-ajax='false'>
					<ul data-role="listview">
<?php
	foreach ($lights as $code => $name) {
?>
						<li data-role="fieldcontain">
				    	<label for="<?php echo $code; ?>"><?php echo $name; ?>:</label>
							<select name="<?php echo $code; ?>" id="<?php echo $code; ?>" data-role="slider">
								<option selected="selected" value="OFF">Off</option>
								<option value="ON">On</option>
							</select>
						</li>
<?php
	}
?>
						<li class="ui-body ui-body-b">
							<fieldset class="ui-grid-a">
								<div class="ui-block-b">
									<button type="submit" data-theme="a">Submit</button>
								</div>
							</fieldset>
						</li>
					</ul>
				</form>
			</div> 
		</div>
	</body>
</html>

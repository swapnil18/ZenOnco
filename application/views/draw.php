<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	<div>
		<a href='<?php echo site_url('examples')?>'>Ajax based CRUD</a> |
		<a href='<?php echo site_url('examples/draw')?>'>Program to draw</a>
		
	</div>
	<div style='height:20px;'></div>  
    <div style="padding: 10px">
		<?php 
		$var = ['N','I','T','I','N'];

		$crossPoint = 3;
		$_inc = 1;
		foreach ($var as $val) {	
			if($_inc == $crossPoint){
				echo implode('', $var)."<br>";
			} else{				
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$val<br>";
			}
			$_inc++;	
		}

		?>
    </div>
</body>
</html>

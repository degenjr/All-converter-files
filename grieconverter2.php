<html>

	<style>
		body
		{
			background-color:blue;
		}
		h1
		{
			color:white;
			text-align:center;
		}
		p
		}
			color:white;
			font-size;35px;
			text-align:center
		}
	</style>
	
	<head>
	
		<title>(S)Miles Per Gallon
		</title>
	</head>

	<body>
		<form name="conversionForm" >
			MPG: <input type="text" name="mpgbox"><br>
			KPL: <input type="text" name="kplbox"><br>
			<input id="convert" type="button" value="Convert!" onClick="convMath()"/>
		</form>

	<script type="text/javascript">
	function convMath() {
	var mpg = conversionForm.mpgbox.value;
	var kpl = +mpg * .425;
	conversionForm.kplbox.value = (kpl);
	}


	</script>


</body>

	</body>
</html>
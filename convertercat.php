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
            text-align: center
        }
        p
        {
        	color: white;
            font-family:"helvetica";
            font-size:35px;
            text-align: center
        }
        form
        {
        	color:white;
        	font-family:"helvetica";
        	text-align: center
        }
    </style>

    <head>
        <script>
            function converter()
            {
                mpg = Number(document.con.mpg.value);
                alert(""+mpg+" mpg equals " + (.425 * mpg)+" kpl");
            }
        </script>
    </head>
    <body>
        <p> Please enter MPG and click Convert</p>
        <form name="con">
            MPG: <input type="number" name="mpg"><br>
            <input type="button" onClick = converter() value="Convert">
        </form>

    </body>
</html>
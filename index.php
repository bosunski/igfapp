
<html>
<head>

</head>
<body>
<div id="app">

</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
	function loadNames()
	{
        $("#app").load("name.php");
	}
	$(function() {
        loadNames();

        setInterval(loadNames, 2000);
    });


</script>
</body>
</html>

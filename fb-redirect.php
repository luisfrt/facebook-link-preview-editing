<!DOCTYPE html>
<html>
<head>
	

	<meta property="og:url"           content="<?=$_GET['link']?>" />

	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="<?=$_GET['title']?>" />

	<meta property="og:description"   content="<?=$_GET['description']?>" />
	<meta property="fb:app_id" 		  content="xxxxxxxxxxxxxxx" />


</head>
<body>
<?php
    if (isset($_GET['link'])) {
        echo $_GET['link'];
    }else{
        // Fallback behaviour goes here
    }
?>



<script language="JavaScript">
    window.location.replace("http://<?=$_GET['link']?>");</script>
<noscript> 
Click <a href="<?=$_GET['link']?>">here</a>.
</noscript>



Click <a href="http://<?=$_GET['link']?>">here</a>.
</body>
</html>



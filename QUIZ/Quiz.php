<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
$val=$_POST["b"];
echo"<script>
var val=".$val;
?>
</script>
<script>
    
var url="https://opentdb.com/api.php?amount=10&category="+val;
$(document).ready(function(){
    console.log(url);
    
    
});
});
</script>


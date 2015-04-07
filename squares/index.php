<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Squares</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"><p>Display squares</p>
<table>
<tr><td>Starting from:</td>
<td><input type="number" name="startnumber"></td>
<td>to:</td>
<td><input type="number" name="stopnumber"></td>
<td>&nbsp;</td><td><input type="submit" name="getsquares" value="Get squares"></td></tr>
</table>
</form>
<?php
if(isset($_POST['getsquares']))
{
  if( trim(strip_tags($_POST['startnumber'])) == '' || trim(strip_tags($_POST['startnumber'])) == NULL
   || trim(strip_tags($_POST['stopnumber'])) == '' || trim(strip_tags(   $_POST['stopnumber'])) == NULL )
	{
		echo '<span style="color:red;"> Both numbers are required </span>';
	}	
	else
	{		
		$start = $_POST['startnumber'];			
		$stop = $_POST['stopnumber'];		
		if($start < $stop)
		{			
			while($start <= $stop)
			{
				echo $start * $start .' is the square of '.$start.'<br/>';				
				$start ++;				
			}			
		}		
		else
		{
				while($stop <= $start)
			{
				echo $stop * $stop .' is the square of '.$stop.'<br/>';				
				$stop ++;
				//end of loop				
			}
		}
	}
}
?>
</body>
</html>
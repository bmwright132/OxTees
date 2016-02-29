<?php
require_once("html_funcs.php");
html_header("Revenue Report");
echo<<<_END
<div id="main">
			<div class="container">
				<div class="row"> 
					
					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>Admin Revenue Summary</h2>
							</header>
_END;
	$date = $_POST['datepicker'];
	$query = "SELECT SUM(total) FROM `Orders` WHERE date = '$date'";
$result = mysql_query($query);
if(!$result) die("Unable to access Orders table: " .mysql_error());
	$row = mysql_fetch_row($result);
	if($row[0]>0)
		echo "<p> Total sales for $date: $ $row[0]</p>";
	else
		echo"<p> Total sales for $date: $ 0</p>";	  
	echo "</div><br>";
echo<<<_END
						</section>
					</div>
				</div>
			</div>
		</div>
_END;
html_adminfooter2();
?>
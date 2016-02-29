<?php
require_once("html_funcs.php");
html_header("Customer Review");
echo<<<_END
		<div id="main">
			<div class="container">
				<div class="row"> 
					
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>Customers</h2>
							</header>
_END;
$query = "Select * FROM Customers";
$result = mysql_query($query);
if(!$result) die("Unable to access Customers");
$num_rows = mysql_num_rows($result);

     echo "<table id='customers'>"; // start a table tag in the HTML
    echo '<th>ID</th><th>Name</th><th>Phone Number</th><th>Address</th><th>email</th>';

	for($i=0; $i<$num_rows;$i++)
	{  
        $row = mysql_fetch_row($result);
        echo '<tr><td>'. $row[0] . "</td><td>" . $row[1] ." ". $row[2] . "</td><td>" . $row[3]."</td><td>". $row[4]." ". $row[5]. ", ".$row[6]. " ". $row[7] . "</td><td>" . $row[8] . "</td></tr>";
	}
	echo "</table>";
    echo <<<_END
                            </div>
						</section>
					</div>
				</div>
			</div>
		</div>
_END;
html_adminfooter2();
?>
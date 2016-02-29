<?php
require_once("html_funcs.php");
html_header("Revenue Report");
echo<<<_END
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
    dateFormat: 'yy-mm-dd'
    });
  });
  </script>
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
echo<<<_END
<div>
<form action="totalrevenue.php" method="post" align="center">
Order Date: <input type="text" id="datepicker" name="datepicker">
<br><br>
<input type="submit" value="Submit">
</form>	
</div>	  
_END;
echo<<<_END
						</section>
					</div>
				</div>
			</div>
		</div>
_END;
echo <<<_END

_END;
html_adminfooter2();
?>
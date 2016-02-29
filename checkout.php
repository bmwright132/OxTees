<?php
require_once 'html_funcs.php';
html_header("Order Confirmation");

$user = $_SESSION['username'];
$query = "SELECT custID FROM Login WHERE Login.username = '$user'";
$result = mysql_query($query);
$custID = mysql_fetch_row($result);
$cust = (int)$custID[0];
$total = null;
	foreach ($_SESSION['cart'] as $item)
{
	$q = (int) $item['quantity'];
	$s = $item['size'];
	$prod = (int)$item['productID'];
    $total = $item['price'] * $item['quantity'];
	//order query
	$query = "INSERT INTO `Orders`(custID, productID, size, quantity, date, total) VALUES('$cust', '$prod', '$s', '$q', CURDATE(),'$total')";
	$result = mysql_query($query);
	if(!$result) die("Unable to access databse: " .mysql_error());
}
$user = $_SESSION['username'];
$query = "SELECT custID FROM Login WHERE Login.username = '$user'";
$result = mysql_query($query);
$row = mysql_fetch_row($result);

if(!$result) die("Unable to access databse: " .mysql_error());

echo<<<_END
		<div id="main">
			<div class="container">
				<div class="row"> 
					
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>Order Summary</h2>
							</header>
_END;

echo '<table id="cart">';

  	echo'<th class="product">Product</th>';

  	echo'<th class="product">Quantity</th>';
    
    echo'<th class="product">Total</th>';

  	

  	if(isset ($_SESSION['cart']))
    {

  	foreach($_SESSION['cart'] as $item)

  	{

	   echo"<tr>";

		echo'<td class="product">'.$item['shirtName'].'<img id= "cart" src="images/'.$item['image'].'"><br>';

		echo $item['size'].'<br>';
        
        echo "$".$item['price']."</td>";

        echo'<td class="quantity">'.$item['quantity']."</td>";
        
        echo '<td class="quantity">$'.$item['price'] * $item['quantity'].'</td>';


	echo"</tr>";

  	}

  	echo"</table>";
        
  	echo'<p id="total" style="float:right;">Total for your order: $'. $_SESSION['totalP'].'</p>';
  	$_SESSION['cart'] = array();
  	$_SESSION['totalP']= 0;
    }
    else
    {
     echo "You currently have no items in your cart!";   
    }
  	echo<<<_END
  	<form action="shopNow.php">
	<input name="menu" type="submit" id="button" value="Back to Menu"/>
	</form>
_END;
 echo <<<_END
                            </div>
						</section>
					</div>
				</div>
			</div>
		</div>
_END;
?>
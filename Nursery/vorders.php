<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CLEAN AND GREEN | VIEW ORDERS</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css">
<!--
.style1 {
	font-size: 12px;
	color: #555555;
}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
    </style>
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><h1>CLEAN AND GREEN</h1></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li  ><a href="epwa.php">Edit Password</a></li>
                        <li  ><a href="addproduct.php">Add Product</a></li>
						 <li ><a href="editproduct.php">Edit Product</a></li>
						<li class="active"  ><a href="vorders.php">View Orders</a></li> 
						<li  ><a href="vfeedback.php">View Feedback</a></li> 
						 <li  ><a href="index.php">Signout</a></li>    
                        
                      
                                           
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header>
    <!--/header-->


  
    <!--/#main-slider-->
    <!--/#feature-->
<section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2 align="center" class="style1"><strong>Orders Placed </strong></h2>
                <span class="feature">
                
                <?php include "dbcon.php" ?>
                <?php



$db = new mysqli("localhost", "root", "root", "nursery2021");

if ($db->connect_errno) {
echo "Failed to connect to MySQL: (" 
. $db->connect_errno . ") " . $db->connect_error;
}
echo "<h1 align=center> Order History</h1>";

$sql="select * from payment2  "; 
//echo $sql;
$result_db = $db->query($sql) or die("Error!");
$all_result = $result_db->fetch_all();

$table =
'<table id="customers" align=center border="1";width="70%"; >
<tr>
<td>Invoice No</td>
<td>Invoice Date</td>
<td>Amount</td>
<td>Full Name</td>
<td>Shipping Address</td>
<td>Phone Number</td>
<td>Status</td>

</tr>';

$a="";
$b="";
$c="";
$d="";
$e="";
$f="";
$g="";
$h="";



$count=0;
//$sum=0;
foreach ($all_result as $row) 
{
$count++;
$a=$row[0];
$b=$row[1];
$c=$row[2];
$d=$row[3];
$e=$row[4];
$f=$row[5];
$g=$row[6];
$h=$row[7];

//$sum=$sum+$c;
//$f=$row[6];
//$fi=$row[5];
	$table .= '<tr>'
	
	  . '<td>' .$a. '</td>'
  	. '<td>' . $b . '</td>'
  	. '<td>' . $c . '</td>'
	. '<td>' . $e . '</td>'
	. '<td>' . $f . '</td>'
    . '<td>' . $g . '</td>'
    . '<td>' . $h . '</td>'
	
	
	
	  . '</tr>';


}


$table .='</table>';
echo $table;
if($count==0)
	echo("<h3 align=center>No Items in the cart yet....</h3>");
else
/*echo("<h3 align=center>Total value of the Cart ....Rs.".$sum."</h3>");
echo("<h3 align=center>Total Items in the Cart ....".$count."</h3>");
echo("<h3 align=center><a href=confirm.php?amt=".$sum.">Confirm Order</a></h3>");*/
$db->close();
?>
                </span>
                <p align="center"></p>
                <p align="justify" class="lead"><br>
                </p>
            </div>

            <!--/.row-->
        </div>
        <!--/.container-->
</section>
<!--/#recent-works-->

<!--/.container-->
<!--/#services-->
<!--/#middle-->
<section id="content">
  <!--/.container-->
</section>
<!--/#content-->
<!--/#partner-->
<!--/#conatcat-info-->
<!--/#bottom-->
<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                <p style="text-align:right;">&copy; 2021 All Rights Reserved</p></div>
            
            </div>
        </div>
</footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
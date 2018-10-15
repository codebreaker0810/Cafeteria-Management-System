<?php
include('../dbconn.php');
$cid;
$no_of_items;
session_start();
if(isset($_POST['pno']))
{echo "<center><div class='main1'>";
 	$query=mysqli_query($con, "SELECT * FROM customer WHERE pno=".$_POST['pno']);
	$row=mysqli_fetch_assoc($query);
	$cid=$row['cid'];
	$cname=$row['name'];
	$cpno=$row['pno'];
	$cadd=$row['address'];
	//echo $cid;

$query=mysqli_query($con, "SELECT name,address FROM `cafe` WHERE cfid =( SELECT cfid from manager WHERE mid= (SELECT mid from employee where eid= ".$_SESSION['eid']."))");

	$row=mysqli_fetch_assoc($query);
	echo "<a1>".$row['name']."</a1><br><a2>  Address:".$row['address']."</a2>";
	$query=mysqli_query($con, "SELECT pno,email FROM `contact` WHERE cfid =( SELECT cfid from manager WHERE mid= (SELECT mid from employee where eid= ".$_SESSION['eid']."))");
	$row=mysqli_fetch_assoc($query);

	echo "<center><br><a2>Phone No:".$row['pno']."</a2> &nbsp&nbsp&nbsp&nbsp; <a2>  Address:".$row['email']."</a2></center>";
	echo "<div class ='a3'><br>Customer Name:".$cname."<br>Customer Contact:".$cpno."<br>Address:".$cadd."</div>";
	echo "<div class ='a3'><br>Bill Date & Time:".date("m/d/y G.i:s<br>", time())."</div>";
?>

<br>
<br>
<table  border='1'  id="t01">
    <thead>
        <tr>
            <th>SR.NO</th>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Price</th>
       </tr>
    </thead>

    <tbody>
       <?php 
       $count=1;
       $total=0;
       	$query=mysqli_query($con, "SELECT * FROM `contains` NATURAL JOIN ord HAVING cid= ".$cid." AND status='unpaid'");
       //	echo "SELECT * FROM `contains` NATURAL JOIN ord HAVING cid= ".$cid." AND status='unpaid'";
            while (  $row =  mysqli_fetch_assoc($query)    )
            {	
				//$row1=mysqli_fetch_assoc($query);
				$q1=mysqli_query($con, "SELECT * FROM `item` where iid = ".$row['iid']);
				$row2=mysqli_fetch_assoc($q1);
				$idesc=$row2['idesc'];
				$price=$row2['price']*$row['quantity'];
				$total=$total+$price;
                
      ?>
        <tr><td><?php echo $count; ?></td>
            
            <td><?php echo $idesc; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td><?php echo $price; ?></td>
        </tr>

      <?php //endforeach; 
           $count++;}
      
      
      ?>
      <?php  if ($total>200) { echo "<tr><td></td>"; ?>
            
            <td style="border-right: none;"><?php  ?></td>
            <td ><?php echo "Voila You Got Discount 10% OFF"?></td>
            <td><?php  echo "-".$total*0.1; $total= ($total-$total*0.1);?></td>
        </tr>
      <?php } ?>
        <tr><td><?php ?></td>
            
            <td style="border-right: none;"><?php  ?></td>
            <td ><?php echo "Total"?></td>
            <td><?php  echo $total; ?></td>
        </tr>


    </tbody>        
</table>



<?php
if($total!=0){
$query=mysqli_query($con, "INSERT INTO `bill`(`cid`, `amount`) VALUES (".$cid.",".$total.")");
$query=mysqli_query($con, "UPDATE `ord` SET `status`='paid' where cid= ".$cid); }
//echo "UPDATE `ord` SET `status`='paid' where cid= ".$cid."";

/*




	foreach ($variable as $key => $value) {
		# code...
	}
	for($i=0;$i<$no_of_items;i++)
	$row=mysqli_fetch_assoc($query);
	





*/
  echo "<h3>Thank You !! Visit Again</h3> <button onclick=window.close() >Close</button><br><br>";
}
else
{ 	echo "Direct Accees Prohibited";
}

?>
<style>
table { align-content: center;
    width:90%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    align-content: center;
}
th, td {
    padding: 10px;
    text-align: center;

}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color: #fff;
}
table#t01 th {
    background-color: #ddd;
    
}
a1
{
	font-size: 50;
	text-align: center;


}
a2
{
	font-size: 20;
	font-family: times-new-roman;
}

.a3
{
	padding-left: 60%;
			text-align: justify;
			font-size: 16;
			padding-bottom: 0px;
			margin-bottom: -20px; 



}



.main1
{
  border:solid 1px; 
  width:75%;
}
</style>

<script type="text/javascript">
var css = '@page { size: landscape; }',
    head = document.head || document.getElementsByTagName('head')[0],
    style = document.createElement('style');

style.type = 'text/css';
style.media = 'print';

if (style.styleSheet){
  style.styleSheet.cssText = css;
} else {
  style.appendChild(document.createTextNode(css));
}

head.appendChild(style);
 window.print();

  </script>
</div>
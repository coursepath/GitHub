<?php
require_once 'include/config.php';
require_once 'include/opendb.php';
?>
<?php
if(isset($_POST['model'])){ //This is for the third and final drop down menu. It allows you to submit and go to new page.
    $link="index.php";
}else{ //This is for the third and final drop down menu. It allows you to submit and go to new page.
    $link="#"; 
}
?>
<form method="post" action="<?php echo $link;?>" name="admin"> //Straight Forward
<select name="value1" onChange="this.form.submit();"> // 1Ste Drop Down Menu Starts here
<?php

$result = mysql_query("SELECT * from table");
echo("<option value=''>---Select---</option>");
if(mysql_num_rows($result)) {
while($row = mysql_fetch_row($result))
{
echo("<option value='$row[0]'>$row[0]</option>");
}
} else {
echo("<option value=''>No</option>");
}
echo "</select>";
?>
<?php
if(isset($_POST['value1'])){ // Checks if 1Ste Drop Down menu has a value.
$value1=$_POST['value1']; 
?>
<select name="value1" onChange="this.form.submit();"> <!--2nd Drop Down Menu Starts here-->
<?php
$result = mysql_query("SELECT * from table where table='$value1'");
echo("<option value=''>---Select---</option>");
if(mysql_num_rows($result)) {
while($row = mysql_fetch_row($result))
{
echo("<option value='$row[0]'>$row[0]</option>");
}
} else {
echo("<option value=''>No Data</option>");
}
echo "</select>";    
?>  
<?php
}else{
    echo "\n";
}
?>
<?php
if(isset($_POST['value2'])){ // Checks if 2nd Drop Down menu has a value.
$value2=$_POST['value2'];
?>
    <select name="value3"> //3nd Drop Down Menu Starts here
<?php
$result = mysql_query("SELECT * from table where table='$value2'");
echo("<option value=''>---Select---</option>");
if(mysql_num_rows($result)) {
while($row = mysql_fetch_row($result))
{
echo("<option value='$row[0]'>$row[0]</option>");
}
} else {
echo("<option value=''>No Data</option>");
}
echo "</select>";    
?>
<?php
}else{
    echo "\n";
}
?>
<input type='submit' value='Select'>

<!--http://www.javascriptkit.com/javatutors/selectcontent.shtml-->
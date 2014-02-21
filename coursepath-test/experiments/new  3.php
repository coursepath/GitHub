<form method="post">
<select name="sortOrder" onchange="form.submit()">
<option value="0">-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</select>
</form>
<?php


function create_dropdown($input_array,$string){//$string will be the name attribute for select tag in every form.
				echo'<form action="#"'.' method="POST">'."\n";
				echo'<select name="'. $string.'"'. 'onchange="this.form.submit()">'."\n";
							echo'<option value="0" selected="selected">Select a Category </option>'."\n";
										foreach($input_array as $key=>$value)
										{
												echo"\n<option value=" . $key  . " ".">". $value . "</option>";
										}
										echo"\n".'</select>'."\n"; //close select tag
												echo"\n".'<input type="submit" name="submit" value="Click me" />';
			echo"\n".'</form>'."\n";
										}

$course_list = array('1'=>'Primary Education','secondary_education','UG','PG','Diploma','Research');
	$school_ed=array(1=>'physics','chemistry','botany','zoology','biology','maths','commerce');		
				$school_cmb = array('1'=>'PCMB','CMAE','CSAE','PCMC','BZPC');
		$course_cmb=array('secondary_education'=>$school_cmb);
create_dropdown($course_list,'course');
if(!isset($_POST['course'])){
 $course = 1;
} else {
 $course = $_POST['course'];
}
switch($course){
case '1':

//execute this
break;
case '2':
echo'case1';
//execute this
break;
case '3':
echo'case4';
//execute this
break;
}
?>
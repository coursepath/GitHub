<html>
<head>

<body>
<?php
$course_list = array('1'=>'Primary Education','secondary_education','UG','PG','Diploma','Research');
	$school_ed=array(1=>'physics','chemistry','botany','zoology','biology','maths','commerce');		
				$school_cmb = array('1'=>'PCMB','CMAE','CSAE','PCMC','BZPC');
		$course_cmb=array('secondary_education'=>$school_cmb);

		
		
	
		
	echo'<form action="testdropdown.php"'.' method="POST onchange="submit()">'."\n";
				echo'<select name="course">'."\n";
							echo'<option value=" " selected="selected">Select a Category </option>'."\n";
		foreach ($course_cmb as $course =>$lists) {
echo"\n".'<option value="'. $course. '".>'. $course. '</option>';
		foreach ($lists as $number => $list) {
		if ($list =='secondary_education'){
				echo'<select name="course">'."\n";
							echo'<option value=" " selected="selected">Select a Category </option>'."\n";
				echo"\n".'<option value="'. $list. '".>'. $list. '</option>';
				}
				}
echo'</select>';
}

?>
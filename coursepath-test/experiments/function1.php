<?php


function dropdown($inputArray,$key,$lookup_value){

//	array for subjects in 12th group

$course= $inputArray();
if($_SERVER['REQUEST_METHOD']='GET'){
					$course_selected=isset($_GET[$key]);
					foreach($course as $course_selected=>$value){
						if (@$value== $lookup_value){
							return second_dropdown();
								}
							else{
									return 'error';									
										}							
								}
					}
					}

function second_dropdown(){

$school_ed=array(1=>'physics','chemistry','botany','zoology','biology','maths','commerce');

	print'<form action="index.php" method="get">';
					print'<select name="subject">';
							foreach($school_ed as $key1=>$subject){
							print'\n<option value="'. $key1 . '"> ' . $subject . ' </option>';
							}
					print'</select>'; //close select tag
					print'</form>';
					}
	
	
?>
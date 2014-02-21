<?php
//include header file
include("html\header.html");
?>
<!-- Actual Content-->

<h1>What Am I?</h1>
    <img width = "280px" src="images/whatami.png" alt="whatiam"/>                					
<?php
					// array for what_am_i_liste with $key as key and $course as the value in the array
			$course_list = array(1=>'Primary Education','Secondary Education','UG','PG','Diploma','Research');
	$school_ed=array('Subjects List','physics','chemistry','botany','zoology','biology','maths','commerce');		
				$school_cmb = array('Group List','PCMB','CMAE','CSAE','PCMC','BZPC');
			$none = array('--','---');
				
				
				//lets make a function that creates a drop down list out of an array.
				
function create_dropdown($input_array,$string){//$string will be the name attribute for select tag in every form.
				
				echo'<select name="'.$string.'"'. 'onchange="this.form.submit()"'.'>'."\n";
						echo'<option value="0">Select a Category </option>'."\n";
										foreach($input_array as $key=>$value){
												echo"\n".'<option value="'.$key.'">';
												echo $value.'</option>'."\n";
										}
										echo"\n".'</select>'."\n";
}

function create_dropdown2($input_array,$string){//$string will be the name attribute for select tag in every form.
				
				echo'<select name="'.$string.'" onchange="selectchange"'.'>'."\n";
						//echo'<option value="" selected="selected">Select a Category </option>'."\n";
										foreach($input_array as $key=>$value){
											echo"\n".'<option value="'.$key.'">';
												//if (isset($_POST['edu_list'])==$key){
											///	echo'selected ="selected">';
												//}else{
														echo $value.'</option>'."\n";
														}		
										
										echo"\n".'</select>'."\n";
										}
										
										
echo'<form action="index.php"'.' method="POST">'."\n";
$create = create_dropdown($course_list,'edu_list');
				
if(empty($_POST['edu_list'])){

$course=NULL;
}else{

$course = ($_POST['edu_list']);
$_SESSION['edu_list']=$_POST['edu_list'];
}

switch($course){
case'0':
$create=create_dropdown2($none,'none');
$_SESSION['none']=$_POST['none'];
break;
case '1':
$create= create_dropdown2($school_ed,'subject');
echo $create;
break;
case '2':
$create = create_dropdown2($school_cmb,'cmb');																	
echo $create;
break;
default:
$create=create_dropdown2($none,'none');
break;
}
echo"\n".'</form>'."\n";
//ob_end_flush();

?>
									               
                </div>
            </div> 
            <div id="block2">
            
            	<div class="block_content">
                	<select name="career_option">
                		<option value=''>Select a Category</option>
                    	<option value='job'>Job</option>
                        <option value='course'>Course</option>
                    </select>
                </div>
            </div>
            <div id="block3">
            	<div class="block_content">
                	<h1>What I Want?</h1>
                	<img width = "280px"src="images/iwanttobe.png" alt="whatiam"/>
                    <select name>
                    	<option>School (1-10)</option>
              			<option>PUC / (1st / 2nd) / (11th or 12th)</option>
              			<option>Diploma</option>
              			<option>BE</option>
              			<option>B.Sc.</option>
              			<option>BCA</option>
                    </select>
                </div>
                <div class="submit">
                	<div id="submit_button">
                	<input type="button" class="submit_button" name="submit" value="Go"/>
                    </div>
                </div>
            </div>   
        </div>

<?php
		include("html/footer.html");
?>           
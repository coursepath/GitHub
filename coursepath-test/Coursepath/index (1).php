<?php
//include header file
include("common\header.php");
?>
<!-- Actual Content-->

<h1>What Am I</h1>
    <img src="images/whatami.png" alt="whatiam"/>                					
<?php
					// array for what_am_i_liste with $key as key and $course as the value in the array
				$course_list = array('1'=>'Primary Education','Secondary Education','UG','PG','Diploma','Research');
				$school_ed=array(1=>'physics','chemistry','botany','zoology','biology','maths','commerce');				
	
		
					//lets make a function that creates a drop down list out of an array.
				
function create_dropdown($input_array,$string){//$string will be the name attribute for select tag in every form.
				echo'<form action="index.php"'.' method="POST">'."\n";
				echo'<select name="'. $string.'"'. 'onchange="this.form.submit()">'."\n";
							echo'<option value=" " selected="selected">Select a Category </option>'."\n";
										foreach($input_array as $key=>$value)
										{
												echo"\n<option value=" . $key  . " ".">". $value . "</option>";
										}
										echo"\n".'</select>'."\n"; //close select tag
												echo"\n".'<input type="submit" name="submit" value="Click me" />';
			echo"\n".'</form>'."\n";
										}
										
		//' onchange="this.form.submit()"
		
		//echo'<form action=# method="POST">'."\n";
			//echo'<input type="submit" name="dropdown" value="Start Here" method="POST">';
			$create=create_dropdown($course_list, 'course');	
		if($_SERVER['REQUEST_METHOD']=='POST'){
							print $create;
							}
					
					if($_SERVER['REQUEST_METHOD']=='POST'){
			if(($_POST['course'])==' '){
					echo"<p>please select an option</p>";
					}
					elseif($_POST['course']==2){
				header('location:dropdown_index.php');
							}
					else{$create;
					}				
						}				

					
					
	?>				
					
										
					
					
				
											               
                </div>
            </div> 
            <div id="block2">
            
            	<div class="block_content">
                	<select>
                		<option value=''>Select a Category</option>
                    	<option value='job'>Job</option>
                        <option value='course'>Course</option>
                    </select>
                </div>
            </div>
            <div id="block3">
            	<div class="block_content">
                	<h1>What I Want</h1>
                	<img src="images/iwanttobe.png" alt="whatiam"/>
                    <select>
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
		include("common/footer.php");
?>           
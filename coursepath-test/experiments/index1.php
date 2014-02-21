<?php
//include header file
include("html\header.html");
?>
<!-- Actual Content-->

<h1>What Am I</h1>
    <img src="images/whatami.png" alt="whatiam"/>                					
<?php
					// array for what_am_i_liste with $key as key and $course as the value in the array
				$course_list = array('1'=>'Primary Education','Secondary Education','UG','PG','Diploma','Research');
				$school_cmb = array('1'=>'PCMB','CMAE','CSAE','PCMC','BZPC');
				$school_ed=array(1=>'physics','chemistry','botany','zoology','biology','maths','commerce');				
	
		
					//lets make a function that creates a drop down list out of an array.
				
function create_dropdown($input_array,$string){//$string will be the name attribute for select tag in every form.
				echo'<form action="index1.php"'.' method="POST">'."\n";
				echo'<select id="'. $string.'"'. 'onchange="windows.getNewArray()">'."\n";
							echo'<option value=" " selected="selected">Select a Category </option>'."\n";
										foreach($input_array as $key=>$value)
										{
												echo"\n<option value=" . $key  . " ".">". $value . "</option>";
										}
										echo"\n".'</select>'."\n"; //close select tag
												echo"\n".'<input type="submit" name="submit" value="Click me" />';
			echo"\n".'</form>'."\n";
										}
		
			?>
	<!--		<form action="index1.php" method="post">
    <select id="searchType">
        <option value="sessions">Sessions</option>
        <option value="files">Files</option>
        <option value="clients">Clients</option>
    </select>

    <select id="sessions">
        <option value="conf">Config ID</option>
        <option value="length">Length</option>
        <option value="date">Date</option>
    </select>

    <select id="files">
        <option value="id">File ID</option>
        <option value="length">Length</option>
        <option value="sent">Sent</option>
        <option value="sessionId">Session ID</option>
    </select>

    <select id="clients">
        <option value="name">Client Name</option>
        <option value="organization">Organization</option>
        <option value="specialty">Specialty</option>
        <option value="sessionId">Session ID</option>
    </select>

    <fieldset id="textAreaSearchBox">
        <legend>Search:</legend>
        <textarea></textarea>
    </fieldset>
</form>
var select1 = document.getElementById('searchType');
var selects = document.getElementsByTagName('select');

select1.onchange = function() {
    var select2 = this.value.toLowerCase();
    for (i = 0; i < selects.length; i++) {
        if (selects[i].id != this.id) {
            selects[i].style.display = 'none';
        }
    }
    document.getElementById(select2).style.display = 'block';
    document.getElementById('textAreaSearchBox').style.display = 'block';
};


frmvalidator.addValidation("city_other","req","Please fill-in the city name",
        "VWZ_IsListItemSelected(document.forms['myform'].elements['city_list'],'Other')");-->
<?php
$dropdown1= create_dropdown($course_list,'course');
$dropdown2= create_dropdown($school_cmb,'cmb');

?>
<script type="text/javascript">

var dropdown1 = document.getElementById('course');
var selects = document.getElementsByTagName('select');

select1.onchange = function cascade.dropdown(){
    var dropdown2 =  create_dropdown($school_cmb,'cmb');             //this.value.toLowerCase();
    for (i = 0; i < selects.length; i++) {
        if (selects[i].id != this.id) {
            selects[i].style.display = 'none';
        }
    }
    document.getElementById(select2).style.display = 'block';
    //document.getElementById('textAreaSearchBox').style.display = 'block';
};
</script>

<?php			
		//' onchange="this.form.submit()"
		
		//echo'<form action=# method="POST">'."\n";
			//echo'<input type="submit" name="dropdown" value="Start Here" method="POST">';
		
		
		if($_SERVER['REQUEST_METHOD']=='POST'){
	
		$create=create_dropdown($course_list, 'course');	
						print $create;
							}
					
					if($_SERVER['REQUEST_METHOD']=='POST'){
			if(($_POST['course'])==' '){
					echo"<p>please select an option</p>";
					}
					elseif($_POST['course']==2){
				$create=create_dropdown($school_ed, 'school');
							print $create;
							}
					else{$create;
					}				
						}				
						/*
function second_dropdown(){

					$school_ed=array(1=>'physics','chemistry','botany','zoology','biology','maths','commerce');

								print'<form action="index.php" method="post">';
											print'<select name="subject">';
							foreach($school_ed as $key1=>$subject){
										print'\n<option value="'. $key1 . '"> ' . $subject . ' </option>';
									}
									print'</select>'; //close select tag
									print'</form>';
									}
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		if(isset($_POST['course'])=={
		echo second_dropdown();
	}
	}*/
					
					
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
		include("html/footer.html");
?>           
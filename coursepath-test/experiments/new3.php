<?php				

// first ccomplete the database
//create connection to the database
//		
	

$edu_cat = array(1=>'Primary Education','Secondary Education','UG','PG','Diploma','Research');
	$school_ed=array('Select a Category','physics','chemistry','botany','zoology','biology','maths','commerce');		
				$school_cmb = array('Select a Category','PCMB','CMAE','CSAE','PCMC','BZPC');
				$none = array('--','---');
print_r($edu_cat);
echo'<form action="#" method="POST">'."\n";				
echo'<select name="edu_cat" id="1" onchange="this.form.submit()">'."\n";
echo'<option >Select a Category</option>';
		foreach($edu_cat as $key =>$value){
echo'<option value ="'. $key.'">'.$value.'</option>'."\n";
}
echo"</select>\n";
$category = isset($_REQUEST['edu_cat']);
if($_SERVER['REQUEST_METHOD']=='POST'){
$category;
		if($category=='1'){
				echo'<select name="school_ed" id="2">'."\n";
					foreach($school_ed as $k1=>$v1){
				echo'<option value ="'. $k1.'">'.$v1.'</option>'."\n";
		}
echo'</select>';

}elseif($category=='2'){
	echo'<select name="school_cmb" id="3">'."\n";
		foreach($school_cmb as $k3 =>$v3){
echo'<option value ="'. $k3.'">'.$v3.'</option>'."\n";
}
echo'</select>';

echo'the cat number is'.$category;
}else{
echo'<select name="none" id="0">'."\n";
		foreach($none as $k0=>$v0){
echo'<option value ="'. $k0.'">'.$v0.'</option>'."\n";
}
echo'</select>';

}
}else{
echo'Could not connect to server';

}
echo"</form>\n";	
?>

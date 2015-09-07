<?php

		// annan väärtuse sõnale "georg"
		$first_name ="georg";
		$last_name = "kivi";

		//trükib välja
		echo $first_name." ".$last_name;

?>

<br>

<?php

	$age = 20;
	
	// if(loogikatehe){tõene} else{väär}
	if($age < 18){ 
		echo "sa oled alaealine";
		
	}else{
		echo "oled täisealine";
	}

?>
<br>
<?php

	for($i = 0; $i < $age; $i = $i +1){
		//se mida korratakse
		echo"palju, ";
		
	}
	echo "õnne";
?>
<br>

<?php
//kuupäev
echo date("l, j F Y e");

?>
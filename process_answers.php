<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<meta name = "viewport" content="width=device-width, initial-scale=1">
		<title>Assessment</title>
	</head>
	<body>   
		<div>
<?php

	include "http://staceypegram.work/Survey/inc/dbconn.php";   
   
	$cosize = $_POST["select-cosize"];
	if ($cosize=="1") $cosize = '1-50'; 
	else if ($cosize=="2") $cosize = '51-100'; 
	else if ($cosize=="3") $cosize = '101-500'; 
	else if ($cosize=="4") $cosize = '501-1000'; 
	else  $cosize = '1001 or more'; 
	
?>
			Survey: <?php echo $_POST["survey"] ?><br />			
			_____________________________________________________________________________________________________________<br />
			Name: <?php echo $_POST["name"] ?><br />
			_____________________________________________________________________________________________________________<br />
			Email: <?php echo $_POST["email"] ?><br />
			_____________________________________________________________________________________________________________<br />
			Company Size: <?php echo $cosize ?><br />
			_____________________________________________________________________________________________________________<br />
			Contact: <?php echo $_POST["contact"] ?><br />
			1 = yes<br />
			2 = no<br />
			_____________________________________________________________________________________________________________<br />
<?php

	$answers = array();
	foreach($_POST as $key => $val)
	{
		if (substr($key, 0, 1) == "o")
		{
			$q = substr($key, -1);
			
?>
			Question <?php echo $q ?> - Option Selected: <?php echo $val ?><br />	
<?php

			array_push($answers, $val);
		}   
	}
   
?>
			Combined answer values: <?php echo implode(",", $answers) ?><br />
			*******<br />
			Answer Key:<br />
			1=We have not utilized this practice<br />
			2=We utilize this practice on an ad-hoc, or case-by-case, basis<br />
			3=We utilize this practice and have documentation for this practice<br />
			4=We utilize this practice, have documentation for this practice, and have implemented this practice within our policies<br />
			*******<br />
			<!-- array values for options selected on page begin with an o
					created array that finds posted values beginning with an o 
					variable found before 0 index is associated with the question
					variable found at index is associated with an answer value
					value variable is appended to array values -->
			_____________________________________________________________________________________________________________<br />
			Industry: <?php echo $_POST["industry"] ?><br />
			_____________________________________________________________________________________________________________<br />
			Location: <?php echo $_POST["select-state"] ?><br />
			_____________________________________________________________________________________________________________<br />
			Session: <?php echo $_POST["token"]	//$_SESSION['token'] = $token; ?><br />
			_____________________________________________________________________________________________________________<br />

<?php

    $stmt = $conn->prepare('INSERT INTO answers (SurveyID, Email, Cosize, Answer, Contact, Industry, State) VALUES (?,?,?,?,?,?,?)');
	$stmt->bind_param("isissss", $survey,$email,$cosize,$answers_list,$contact,$industry,$state); 
	$stmt->execute();
	$stmt->close(); 
	$conn->close();

?>
	</body>
</html>
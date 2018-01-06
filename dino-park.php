<?php

if (array_key_exists("highSatisfactionManagers", $_POST)) {
	
	setcookie("printSatisfaction", $_POST['minSatisfaction']);
	
} else {
		
	setcookie("printSatisfaction", '', time() - 3600);
}	
 

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<div style='background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Feathered_Tyrannosaurus_model.jpg/1280px-Feathered_Tyrannosaurus_model.jpg')>
<div class='container'>
<div class="jumbotron"><h1>WELCOME TO DINO PARK!</h1></div>
</div>
<div class='container' style='background: #f7ffd1cf'>

<p>Hire A New Trainer:</p>
<form method="POST" action="dino-park.php">

	<p>
   		<input type="text" name="trainerID" placeholder = "Trainer ID" size="12">
   		<input type="text" name="trainerName" placeholder = "Trainer Name" size="12">
   		<input type="text" name="trainerAge" placeholder = "Trainer Age" size="16">
   		<input type="text" name="trainerDinoType" placeholder = "Trainer Dino Type" size="20">
   		<input type="text" name="trainerPay" placeholder = "Trainer Pay" size="12">
   		<input type="text" name="trainerManagerID" placeholder="Trainer's Manager ID" size="22">
      
		<input type="submit" value="insert" name="insertTrainer">
    </p>
</form>

<p>Hire A New Security Guard:</p>
<form method="POST" action="dino-park.php">

	<p>
   		<input type="text" name="securityID" placeholder = "Security ID" size="12">
   		<input type="text" name="securityName" placeholder = "Security Name" size="12">
   		<input type="text" name="securityAge" placeholder = "Security Age" size="16">
   		<input type="text" name="securityPay" placeholder = "Security Pay" size="12">
   		<input type="text" name="securityManagerID" placeholder="Security's Manager ID" size="22">
      
		<input type="submit" value="insert" name="hireSecurity">
    </p>
</form>



<p>Tell Security Guard to Terminate a Dinosaur:</p>
<form method="POST" action="dino-park.php">

	<p>
   		<input type="text" name="securityKillerID" placeholder = "Security ID" size="12">
   		<input type="text" name="DinoDieID" placeholder = "Dino ID" size="16">
      
		<input type="submit" value="update" name="killDino">
    </p>
</form>

<p>Trainer Gives Dinosaur an Item: </p>
<form method="POST" action="dino-park.php">

	<p>
		<input type="text" name="trainerGivesID" placeholder = "Trainer ID" size="16">
   		<input type="text" name="itemGivenID" placeholder = "Item ID" size="12">
   		<input type="text" name="DinoRecieveID" placeholder = "Dino ID" size="16">
   		<input type="text" name="Amount" placeholder = "How Many?" size="16">
      
		<input type="submit" value="update" name="giveItem">
    </p>
</form>

<p>Feed Dinosaur Food</p>
<form method="POST" action="dino-park.php">

	<p>
   		<input type="text" name="foodGivenID" placeholder = "Food ID" size="12">
   		<input type="text" name="DinoRecieveID" placeholder = "Dino ID" size="16">
      
		<input type="submit" value="Give Food" name="giveFood">
    </p>
</form>


<p>Fire Security: </p>
<form method="POST" action="dino-park.php">
	<p>
		<input type="text" name="securityFiredID" placeholder = "Security ID" size="16">
   		
		<input type="submit" value="update" name="fireSecurity">
       </p>
</form>

<p>Fire Trainer: </p>
<form method="POST" action="dino-park.php">
	<p>
		<input type="text" name="trainerFiredID" placeholder = "Trainer ID" size="16">
   		
		<input type="submit" value="update" name="fireTrainer">
       </p>
</form>



<p>Customer Watches Dinosaur Type: </p>
<form method="POST" action="dino-park.php">
	<p>
		<input type="text" name="customerID" placeholder = "customerID" size="16">
		<input type="text" name="dinoType" placeholder = "Dinosaur Type" size="16">
   		
		<input type="submit" value="update" name="customerWatch">
       </p>
</form>

<p> Pay Trainer: </p>
<form method="POST" action="dino-park.php">
	<p>
		<input type="text" name="trainerID" placeholder = "Trainer ID" size="16">
   		
		<input type="submit" value="Pay" name="payTrainer">
       </p>
</form>
</p>


<p> Pay Security: </p>
<form method="POST" action="dino-park.php">
	<p>
		<input type="text" name="securityID" placeholder = "Security ID" size="16">
   		
		<input type="submit" value="Pay" name="paySecurity">
       </p>
</form>
</p>

<p> Fire Expensive Trainers</p>
<form method="POST" action="dino-park.php">
	<p>
		<input type="text" name="maxPay" placeholder = "Max Trainer Pay" size="16">
   		
		<input type="submit" value="Fire" name="fireExpensive">
       </p>
</form>
</p>

<p> Find Happy Managers</p>
<form method="POST" action="dino-park.php">
	<p>
		<input type="text" name="minSatisfaction" placeholder = "Minimum Manager Satisfaction" size="16">
   		
		<input type="submit" value="Search" name="highSatisfactionManagers">
       </p>
</form>
</p>


<?php

//this tells the system that it's no longer just parsing 
//html; it's now parsing PHP
$success = True; //keep track of errors so it redirects the page only if there are no errors
$db_conn = OCILogon("ora_i0u0b", "a32713166", "dbhost.ugrad.cs.ubc.ca:1522/ug");

function executePlainSQL($cmdstr) { //takes a plain (no bound variables) SQL command and executes it
	//echo "<br>running ".$cmdstr."<br>";
	global $db_conn, $success;
	$statement = OCIParse($db_conn, $cmdstr); //There is a set of comments at the end of the file that describe some of the OCI specific functions and how they work

	if (!$statement) {
		echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
		$e = OCI_Error($db_conn); // For OCIParse errors pass the       
		// connection handle
		echo htmlentities($e['message']);
		$success = False;
	}

	$r = OCIExecute($statement, OCI_DEFAULT);
	if (!$r) {
		echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
		$e = oci_error($statement); // For OCIExecute errors pass the statementhandle
		echo htmlentities($e['message']);
		$success = False;
	} else {

	}
	return $statement;

}

function executeBoundSQL($cmdstr, $list) {
	/* Sometimes the same statement will be executed for several times ... only
	 the value of variables need to be changed.
	 In this case, you don't need to create the statement several times; 
	 using bind variables can make the statement be shared and just parsed once.
	 This is also very useful in protecting against SQL injection.  
      See the sample code below for how this functions is used */

	global $db_conn, $success;
	$statement = OCIParse($db_conn, $cmdstr);

	if (!$statement) {
		echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
		$e = OCI_Error($db_conn);
		echo htmlentities($e['message']);
		$success = False;
	}

	foreach ($list as $tuple) {
		foreach ($tuple as $bind => $val) {
			//echo $val;
			//echo "<br>".$bind."<br>";
			OCIBindByName($statement, $bind, $val);
			unset ($val); //make sure you do not remove this. Otherwise $val will remain in an array object wrapper which will not be recognized by Oracle as a proper datatype

		}
		$r = OCIExecute($statement, OCI_DEFAULT);
		if (!$r) {
			echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
			$e = OCI_Error($statement); // For OCIExecute errors pass the statement handle
			echo htmlentities($e['message']);
			echo "<br>";
			$success = False;
		}
	
	}
	
}

function printManagerResult($result) { //prints results from a select statement
	echo "<br>Got data from table Manager:<br>";
	echo "<table class='table table-hover table-responsive'>";
	echo "<thead class='thead-dark'> <tr><th>ID</th><th>Name</th><th>MoneyMade</th><th>Satisfaction</th></tr> </thead>";

	while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
		echo 
		"<tr><td>" . $row["ID"] . 
		"</td><td>" . $row["NAME"] . 
		"</td><td>" . $row["MONEYMADE"] .
		"</td><td>" . $row["SATISFACTION"] . "</td></tr>";
	}
	echo "</table>";

}

function printTrainerResult($result) { //prints results from a select statement
	echo "<br>Got data from table Trainer:<br>";
	echo "<table class='table table-hover table-responsive'>";
	echo "<thead class='thead-dark'><tr><th>ID</th><th>Name</th><th>Age</th><th>DinoType</th><th>Pay</th><th>Money Made</th><th>ManagerID</th></tr></thead>";

	while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
		echo 
		"<tr><td>" . $row["ID"] . 
		"</td><td>" . $row["NAME"] . 
		"</td><td>" . $row["AGE"] .
		"</td><td>" . $row["DINOTYPE"] .
		"</td><td>" . $row["PAY"] .
		"</td><td>" . $row["MONEYMADE"] .
		"</td><td>" . $row["MANAGERID"]. "</td></tr>";
	}
	echo "</table>";

}

function printSecurityResult($result) { //prints results from a select statement
	echo "<br>Got data from table Security:<br>";
	echo "<table class='table table-hover table-responsive'>";
	echo "<thead class='thead-dark'><tr><th>ID</th><th>Name</th><th>Pay</th><th>Money Made</th><th>Age</th><th>Dinos Terminated</th><th>ManagerID</th></tr></thead>";

	while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
		echo 
		"<tr><td>" . $row["ID"] . 
		"</td><td>" . $row["NAME"] . 
		"</td><td>" . $row["PAY"] .
		"</td><td>" . $row["MONEYMADE"] .
		"</td><td>" . $row["AGE"] .
		"</td><td>" . $row["DINOSTERMINATED"] .
		"</td><td>" . $row["MANAGERID"]. "</td></tr>";
	}
	echo "</table>";

}

function printCustomerResult($result) { //prints results from a select statement
	echo "<br>Got data from table Customer:<br>";
	echo "<table class='table table-hover table-responsive'>";
	echo "<thead class='thead-dark'><tr><th>ID</th><th>Name</th><th>Age</th><th>Satisfaction</th><th>ManagerID</th></tr></thead>";

	while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
		echo 
		"<tr><td>" . $row["ID"] . 
		"</td><td>" . $row["NAME"] . 
		"</td><td>" . $row["AGE"] .
		"</td><td>" . $row["SATISFACTION"] .
		"</td><td>" . $row["MANAGERID"]. "</td></tr>";
	}
	echo "</table>";

}

function printItemsResult($result) { //prints results from a select statement
	echo "<br>Got data from table Item:<br>";
	echo "<table class='table table-hover table-responsive'>";
	echo "<thead class='thead-dark'><tr><th>ID</th><th>Name</th><th>Effect</th></tr></thead>";

	while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
		echo 
		"<tr><td>" . $row["ID"] . 
		"</td><td>" . $row["NAME"] . 
		"</td><td>" . $row["EFFECT"] . "</td></tr>";
	}
	echo "</table>";

}

function printFoodResult($result) { //prints results from a select statement
	echo "<br>Got data from table Food:<br>";
	echo "<table class='table table-hover table-responsive'>";
	echo "<thead class='thead-dark'><tr><th>ID</th><th>Name</th><th>Type</th><th>Cost</th><th>Health</th></tr></thead>";

	while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
		echo 
		"<tr><td>" . $row["ID"] . 
		"</td><td>" . $row["NAME"] . 
		"</td><td>" . $row["TYPE"] .
		"</td><td>" . $row["COST"] .
		"</td><td>" . $row["HEALTH"] . "</td></tr>";
	}
	echo "</table>";

}

function printDinosaurResult($result) { //prints results from a select statement
	echo "<br>Got data from table Dinosaur:<br>";
	echo "<table class='table table-hover table-responsive'>";
	echo "<thead class='thead-dark'><tr><th>ID</th><th>Name</th><th>Food</th><th>Health</th><th>Happiness</th><th>Type</th></tr></thead>";

	while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
		echo 
		"<tr><td>" . $row["ID"] . 
		"</td><td>" . $row["NAME"] . 
		"</td><td>" . $row["FOOD"] . 
		"</td><td>" . $row["HEALTH"] .
		"</td><td>" . $row["HAPPINESS"] . 
		"</td><td>" . $row["TYPE"] . "</td></tr>";
	}
	echo "</table>";

}
function printDinoTypes($dinoTypes) {

		echo "<br>Number of Dinosaurs by type: <br>";
		echo "<table class='table table-hover table-responsive'>";
		echo "<thead class='thead-dark'><tr><th>Type</th><th>Count</th></tr></thead>";

		while ($row = OCI_Fetch_Array($dinoTypes, OCI_BOTH)) {
			echo 
			"<tr><td>" . $row["TYPE"] . 
			"</td><td>" . $row["COUNT(*)"] . 
			"</td></tr>";
		}
		echo "</table>";

}

function printHappyManagers($result, $satisfaction){
	echo "<br>Managers with satisfaction above: " . $satisfaction . " <br>";
	echo "<table class='table table-hover table-responsive'>";
	echo "<thead class='thead-dark'> <tr><th>ID</th><th>Name</th><th>MoneyMade</th><th>Satisfaction</th></tr> </thead>";

	while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
		echo 
		"<tr><td>" . $row["ID"] . 
		"</td><td>" . $row["NAME"] . 
		"</td><td>" . $row["MONEYMADE"] .
		"</td><td>" . $row["SATISFACTION"] . "</td></tr>";
	}
	echo "</table>";



}



// Connect Oracle...
if ($db_conn) {
 if (array_key_exists('insertTrainer', $_POST)) {
		//Getting the values from user and insert data into the table
		$tuple = array (
			":bind1" => $_POST['trainerID'],
			":bind2" => $_POST['trainerName'],
			":bind3" => $_POST['trainerAge'],
			":bind4" => $_POST['trainerDinoType'],
			":bind5" => $_POST['trainerPay'],
			":bind6" => $_POST['trainerManagerID']
		);
		$alltuples = array (
			$tuple
		);
		executeBoundSQL("insert into trainer values (:bind1, :bind2, :bind3, :bind4, :bind5, 0, :bind6)", $alltuples);
		OCICommit($db_conn);

	} else if (array_key_exists('killDino', $_POST)) {
				// Update tuple using data from user
				$tuple = array (
					":bind1" => $_POST['securityKillerID'],
					":bind2" => $_POST['DinoDieID']
				);
				$alltuples = array (
					$tuple
				);
				executeBoundSQL("update security set dinosTerminated=dinosTerminated+1 where ID=:bind1", $alltuples);
				executeBoundSQL("delete from dinosaur where ID=:bind2", $alltuples);
				OCICommit($db_conn);

	} else if (array_key_exists('giveItem', $_POST)) {
				// Update tuple using data from user
				$tuple = array (
					":bind1" => $_POST['trainerGivesID'],
					":bind2" => $_POST['itemGivenID'],
					":bind3" => $_POST['DinoRecieveID'],
					":bind4" => $_POST['Amount']
				);
				$alltuples = array (
					$tuple
				);
				executeBoundSQL("INSERT INTO gives(timestamp,Item_ID,Trainer_ID,Dinosaur_ID,amount) 
						 VALUES(to_char(current_timestamp, 'YYYY-MM-DD HH24:MI'),:bind2,:bind1,:bind3,:bind4)", $alltuples);
				
				executeBoundSQL("UPDATE dinosaur 
						set dinosaur.happiness = :bind4*(SELECT items.effect
									 	 FROM items
									 	 WHERE items.ID = :bind2)
						WHERE dinosaur.ID=:bind3", $alltuples);

				OCICommit($db_conn);

	} else if (array_key_exists('giveFood', $_POST)) {
				// Update tuple using data from user
				$tuple = array (
					":bind2" => $_POST['foodGivenID'],
					":bind3" => $_POST['DinoRecieveID']
				);
				$alltuples = array (
					$tuple
				);
				
				executeBoundSQL("UPDATE dinosaur 
						set dinosaur.health = (SELECT food.health 
									 	 FROM food
									 	 WHERE food.ID = :bind2)
						WHERE dinosaur.ID=:bind3", $alltuples);

				OCICommit($db_conn);

	} else if (array_key_exists('fireTrainer', $_POST)) {
				// Update tuple using data from user
				$tuple = array (
					":bind1" => $_POST['trainerFiredID'],
					
				);
				$alltuples = array (
					$tuple
				);
				executeBoundSQL("delete from trainer where ID=:bind1", $alltuples);

				OCICommit($db_conn);

	} else if (array_key_exists('fireSecurity', $_POST)) {
				// Update tuple using data from user
				$tuple = array (
					":bind1" => $_POST['securityFiredID'],
					
				);
				$alltuples = array (
					$tuple
				);
				executeBoundSQL("delete from security where ID=:bind1", $alltuples);

				OCICommit($db_conn);

	} else if (array_key_exists('customerWatch', $_POST)) {
				// Update tuple using data from user
				$tuple = array (
					":cid" => $_POST['customerID'],
					":dtype" => $_POST['dinoType']
					
				);
				$alltuples = array (
					$tuple
				);
				executeBoundSQL("UPDATE customer
						set customer.satisfaction = customer.satisfaction + 10
						WHERE customer.id=:cid", $alltuples);
				//not working	
				executeBoundSQL("UPDATE manager
						set manager.satisfaction = manager.satisfaction + 5,
						    manager.moneyMade = manager.moneyMade + 500
						WHERE manager.ID = ( SELECT customer.managerID FROM customer WHERE customer.id=:cid)", $alltuples);
				
				executeBoundSQL("UPDATE dinosaur
						set dinosaur.happiness =  dinosaur.happiness + 1
						WHERE dinosaur.type=:dtype", $alltuples);


				OCICommit($db_conn);

	} else if (array_key_exists('payTrainer', $_POST)) {
				// Update tuple using data from user
				$tuple = array (
					":trainerID" => $_POST['trainerID'],
					
				);
				$alltuples = array (
					$tuple
				);
				executeBoundSQL("UPDATE trainer
						 set trainer.moneyMade = trainer.moneyMade + trainer.pay
						 WHERE trainer.id = :trainerID", $alltuples);
				
				executeBoundSQL("UPDATE manager
						 set manager.satisfaction = manager.satisfaction - 5, manager.moneyMade = manager.moneyMade - (SELECT trainer.pay FROM trainer WHERE trainer.id = :trainerID)
						 WHERE manager.ID= (SELECT trainer.managerID FROM trainer WHERE trainer.id = :trainerID)", $alltuples);

				OCICommit($db_conn);
	} else if (array_key_exists('paySecurity', $_POST)) {
				echo("test0");
				// Update tuple using data from user 
				$tuple = array (
					":securityID" => $_POST['securityID'],
					
				);
				$alltuples = array (
					$tuple
				);
				echO("test");
				executeBoundSQL("UPDATE security
						 set security.moneyMade = security.moneyMade + security.pay
						 WHERE security.id = :securityID", $alltuples);
				echo("test2");
				executeBoundSQL("UPDATE manager
						 set manager.satisfaction = manager.satisfaction - 5, manager.moneyMade = manager.moneyMade - (SELECT security.pay FROM security WHERE security.id = :securityID)
						 WHERE manager.ID = (SELECT security.managerID FROM security WHERE security.id = :securityID)", $alltuples);
				echo("test3");
				OCICommit($db_conn);
				echo("test4");
	} else if (array_key_exists('hireSecurity', $_POST)) {

		//Getting the values from user and insert data into the table
		$tuple = array (
			":id" => $_POST['securityID'],
			":name" => $_POST['securityName'],
			":age" => $_POST['securityAge'],
			":pay" => $_POST['securityPay'],
			":managerID" => $_POST['securityManagerID']
		);
		$alltuples = array (
			$tuple
		);
		executeBoundSQL("insert into security values (:id, :name, :pay, :age, 0, 0, :managerID)", $alltuples);
		OCICommit($db_conn);



	} else if (array_key_exists('fireExpensive', $_POST)) {

		//Getting the values from user and insert data into the table
		$tuple = array (
			":maxPay" => $_POST['maxPay'],
		);
		$alltuples = array (
			$tuple
		);
		executeBoundSQL("DELETE FROM trainer
				 WHERE trainer.pay > :maxPay", $alltuples);
		OCICommit($db_conn);
	} 



	if ($_POST && $success ) {
		echo '<meta http-equiv="refresh" content="0; url=dino-park.php">';
					
		//POST-REDIRECT-GET -- See http://en.wikipedia.org/wiki/Post/Redirect/Get
		//header("location: dino-park.php");
		
	} else {
		if(isset($_COOKIE['printSatisfaction'])){
			$query = "select * from manager where manager.satisfaction > " . $_COOKIE['printSatisfaction'];	
			$satisfiedManagerResult = executePlainSQL( $query );
			printHappyManagers($satisfiedManagerResult, $_COOKIE['printSatisfaction']);
		}


		// Select data...
		$trainerResult = executePlainSQL("select * from trainer");
		$managerResult = executePlainSQL("select * from manager");
		$securityResult = executePlainSQL("select * from security");
		$customerResult = executePlainSQL("select * from customer");
		$itemResult = executePlainSQL("select * from items");
		$dinosaurResult = executePlainSQL("select * from dinosaur");
		$foodResult = executePlainSQL("select * from food");

		$dinoTypes = executePlainSQL("SELECT type, COUNT(*) FROM dinosaur GROUP BY type");
		printDinoTypes($dinoTypes);

		printManagerResult($managerResult);
		printTrainerResult($trainerResult);
		printSecurityResult($securityResult);
		printCustomerResult($customerResult);
		printItemsResult($itemResult);
		printFoodResult($foodResult);
		printDinosaurResult($dinosaurResult);
		echo '</div>';
		echo '</div>';
	}

	//Commit to save changes...
	OCILogoff($db_conn);
	exit();
} else {
	echo "cannot connect";
	$e = OCI_Error(); // For OCILogon errors pass no handle
	echo htmlentities($e['message']);
}

/* OCILogon() allows you to log onto the Oracle database
     The three arguments are the username, password, and database.
     You will need to replace "username" and "password" for this to
     to work. 
     all strings that start with "$" are variables; they are created
     implicitly by appearing on the left hand side of an assignment 
     statement */
/* OCIParse() Prepares Oracle statement for execution
      The two arguments are the connection and SQL query. */
/* OCIExecute() executes a previously parsed statement
      The two arguments are the statement which is a valid OCI
      statement identifier, and the mode. 
      default mode is OCI_COMMIT_ON_SUCCESS. Statement is
      automatically committed after OCIExecute() call when using this
      mode.
      Here we use OCI_DEFAULT. Statement is not committed
      automatically when using this mode. */
/* OCI_Fetch_Array() Returns the next row from the result data as an  
     associative or numeric array, or both.
     The two arguments are a valid OCI statement identifier, and an 
     optinal second parameter which can be any combination of the 
     following constants:

     OCI_BOTH - return an array with both associative and numeric 
     indices (the same as OCI_ASSOC + OCI_NUM). This is the default 
     behavior.  
     OCI_ASSOC - return an associative array (as OCI_Fetch_Assoc() 
     works).  
     OCI_NUM - return a numeric array, (as OCI_Fetch_Row() works).  
     OCI_RETURN_NULLS - create empty elements for the NULL fields.  
     OCI_RETURN_LOBS - return the value of a LOB of the descriptor.  
     Default mode is OCI_BOTH.  */
?>

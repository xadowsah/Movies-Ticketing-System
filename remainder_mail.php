<?php

$db = mysqli_connect("localhost" , "", "") or die("Check connection parameters!"); 
// Optionally skip select_db and use: mysqli_connect(host,user,pass,dbname)  
mysqli_select_db($db,"") or die(mysqli_error($db));

if (mysqli_connect_error()) {
    die ('Failed to connect to MySQL');
} else {
	/*SUCCESS MSG*/
	echo '';
}

$sqlCommand = "SELECT 
        u.id
        , domain_name_owner
        , url
        , DATE_FORMAT(domain_expiry_date, '%e %M %Y') as domain_expiry_date
        , domain_owner_email
        FROM websites u
        WHERE domain_expiry_date BETWEEN CURDATE() AND CURDATE()+INTERVAL 7 DAY
        ";

$query = mysqli_query($db, $sqlCommand) or die (mysqli_error($db));

$current_visitor=0;
$current_email = '';
$headers = "From: shaedow65@gmail.com";    
$subject = "You have booked your Movies Ticket Sucessfully";
$message = '';

//fetch the data from the database 
while ($row = mysqli_fetch_array($query)) {
	
	$arr_ids[] = $row['id'];
	
	// has visitor_id changed
	if ($row['id'] != $current_visitor) {
		// send email to current visitor
		if ($current_visitor != 0) {
			$to = $current_email;
			$sendmail = mail($to, $subject, $message, $headers);
			if ($sendmail) {
				echo nl2br($message);
			    echo "<b>Email Successfully Sent</b><br><br>";
			} else { 
			    echo "<b>Error in Sending of Email to $to</b><br><br>";
			}
		}
		$current_visitor = $row['id'];
		$current_email = $row['domain_owner_email'];
		$message = "Domain Name Owner: {$row['domain_name_owner']} \n\n";
		
	}
	$message .= "Your Domain Name {$row['url']} expiry date is: {$row['domain_expiry_date']}\n";

}
// send email to final visitor
if ($current_visitor != 0) {
	$to = $current_email;
	$sendmail = mail($to, $subject, $message, $headers);
	if ($sendmail) {
		echo nl2br($message);
		
		echo "<b>Email Successfully Sent</b><br><br>";
	} else { 
		echo "<b>Error in Sending of Email to $to</b><br><br>";
	}
	
	if (isset($arr_ids)){
$sql = "UPDATE websites SET date_notified_of_domain_expiry = NOW() WHERE id IN (";
$sql .= implode("," , $arr_ids);
$sql .= ");";
	print $sql;
	
}

//$db->query($sql);
$db->query($sql) or die(mysqli_error($db));

// Free the results  
mysqli_free_result($query);

//close the connection
mysqli_close($db);
}
?>
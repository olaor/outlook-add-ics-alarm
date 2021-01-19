<?php
$url = $_SERVER["QUERY_STRING"];
$pat = "/https:\/\/outlook.office365.com\/owa\/calendar\/.*\.ics$/i";

if ( ! preg_match($pat, $url)) {
	echo "Nice try.";
	exit(0);
}

$ical = file($url);

foreach($ical as $line) {
	$line = trim($line);
	if ( "$line" == "END:VEVENT"){
	echo "BEGIN:VALARM
ACTION:DISPLAY
DESCRIPTION:REMINDER
TRIGGER:-PT15M
END:VALARM\n";
	}	
	echo "$line\n";
}	

?>

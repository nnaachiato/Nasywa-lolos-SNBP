<?php

$jam = "24:01" ;

if ($jam > "24:00")
    echo "$jam = Dunia Lain" ;

elseif ($jam >= "00:00" && $jam < "04:00")
    echo "$jam = Dini Hari" ;
 
elseif ($jam >= "04:00" && $jam < "10:00")
    echo "$jam = Pagi Hari" ;

elseif ($jam >= "10:00" && $jam < "15:00")
    echo "$jam = Siang Hari" ;

elseif ($jam >= "15:00" && $jam < "17:30")
    echo "$jam = Sore Hari" ;

elseif ($jam >= "17:30" && $jam < "18:30")
    echo "$jam = Petang" ;

elseif ($jam >= "18:30" && $jam < "24:00")
    echo "$jam = Malam Hari" ;

else
    echo "$jam = Dunia Lain" ;

?>
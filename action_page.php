<?php
    $Communication=$_GET["Communication"];
    //   $GSM=$_GET["GSM"];
    //     $Ethernet=$_GET["Ethernet"];
    //     $WiFi=$_GET["WiFi"];
    
    $myfile = fopen("data.txt", "w") or die("Unable to open file!");
$txt = $Communication; 
//",".$GSM.",".$Ethernet.",".$WiFi;
fwrite($myfile, $txt);
fclose($myfile);
?>
<html>
    <title>
        This is Action Page
    </title>
    <head>
        
    </head>
    <body>
        <h1><center>Your Communication Mod is : <?php echo "$Communication"; ?></center></h1>
    </body>
</html>
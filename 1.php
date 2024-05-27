<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?php

    if(isset($_POST['pretrazi'])) {
//        session_start();
        $ime =  $_POST['ime'];  // $ime=$_SESSION['ime']=$_POST['ime'];
        $grad = $_POST['grad']; // $ime=$_SESSION['grad']=$_POST['grad'];       

    
        $konekcija = mysqli_connect('localhost','root','','preduzece');
        
//        if($konekcija){
//            echo "Yes";
//        } else{
//            die('404');
//        }
        
        $query = "SELECT * FROM zaposleni";
            
        $rezultat = mysqli_query($konekcija, $query);
            
        if(!$rezultat){
            die('404' . mysqli_error());
        }
    

    echo "<table border='1'>";
    
    while($red = mysqli_fetch_assoc($rezultat)){
        if($red['ime']==$_POST['ime'] && $red['grad']==$_POST['grad']){
            echo "<tr>";
            echo "<td>" . $red['ime'] . "</td>";
            echo "<td>" . $red['grad'] . "</td>";
            echo "<td>" . $red['godiste'] . "</td>";
            echo "<td>" . $red['zanimanje'] . "</td>";
            echo "</tr>";
        }
    }
    
    echo "</table>";
 
    }

?>  
    

</body>
</html>
    


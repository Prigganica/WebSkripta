<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
<?php
    
    if(isset($_POST['posalji'])){
        session_start();
        $vrsta=$_SESSION['vrsta']=$_POST['vrsta'];
        $kolicina=$_SESSION['kolicina']=$_POST['kolicina'];
        $dobavljac=$_SESSION['dobavljac']=$_POST['dobavljac'];
        
        $konekcija = mysqli_connect('localhost','root','','artikli');
        
//        if($konekcija){
//            echo "Yes";
//        } else {
//            echo "404";
//        }
        
        $query = "SELECT dobavljac,adresa FROM osnovni_podaci, dobavljac WHERE osnovni_podaci.id=dobavljac.id_dob AND vrsta='" . $vrsta . "' AND kolicina>='" . $kolicina . "'"; 
        
        $rezultat=mysqli_query($konekcija, $query);
        
        if(!$rezultat){
            die("404" . mysqli_error());
        }
    
    
    echo "<table border='1'
            <tr>
                <th>Dobavljac</th>
                <th>Andresa</th>
            </tr>";
    
    while($red=mysqli_fetch_assoc($rezultat)){
            echo "<tr>";
            echo "<td>" . $red['dobavljac'] . "</td>";
            echo "<td>" . $red['adresa'] . "</td>";
            echo "</tr>";
        
    }
    
    echo "</table>";
    
    }
    
    
    
?>
    
</body>
</html>
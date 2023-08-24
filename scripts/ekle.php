<?php
$baglan = mysqli_connect("localhost", "root", "", "hospital_db");

if(isset($_POST["kaydet"]))
{
    
    // $sql = "INSERT INTO 'doctor_information' ('d_snn', 'd_name','d_surname', 'd_age', 'd_birth_date') VALUES ( ?, ?, ?, ?, ?);";
    // $dizi =[
    //     $_POST["d_snn"],
    //     $_POST["d_name"],
    //     $_POST["d_surname"],
    //     $_POST["d_age"],
    //     $_POST["d_birth_date"]
        
    // ];
 
    $d_snn=$_POST[d_snn];
    $d_name=$_POST['d_name'];
    $d_surname=$_POST['d_surname'];
    $d_age=$_POST[d_age];
    $d_birth_date=$_POST['d_birth_date'];


    $sql="insert into doctor_information (d_snn,d_name,d_surname,d_age,d_birth_date) values('$d_snn', '$d_name', '$d_surname','$d_age','$d_birth_date')";
    $sonuc=mysqli_query($baglan,$sql) ;

//     $sth = $baglan->prepare($sql);
//     if (!$sth) {
//         echo "\nPDO::errorInfo():\n";
//         print_r($dbh->errorInfo());
//       }
//    $sonuc = $sth->execute($dizi);


   header("Location:index.php");
}
 
 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-1 text-center">Hospital Management System</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="btn-group">
                        <a href="index.php" class="btn btn-outline-primary">All Doctors</a>
                        <a href="ekle.php" class="btn btn-outline-primary">Add Doctor</a>
                    </div>
                </div>
            </div>
        </div>
    
    </header>
    <main>
    <div class="container">
        <form action="" method="post" class="row mt-4 g-3">
            <div class="col-6">
                <label for="d_snn" class="form-label">SSN</label>
                <input type="number" class="form-control" name="d_snn">
            </div>
            <div class="col-6">
                <label for="d_name" class="form-label">Name</label>
                <input type="text" class="form-control" name="d_name">
            </div>
            <div class="col-6">
                <label for="d_surname" class="form-label">Surname</label>
                <input type="text" class="form-control" name="d_surname">
            </div>
            <div class="col-6">
                <label for="d_age" class="form-label">Age</label>
                <input type="number" class="form-control" name="d_age">
            </div>
            <div class="col-6">
                <label for="d_birth_date" class="form-label">Birth Date</label>
                <input type="text" class="form-control" name="d_birth_date">
            </div>
           
            <button type="submit" name="kaydet" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </main>
    <footer></footer>
</body>
</html>
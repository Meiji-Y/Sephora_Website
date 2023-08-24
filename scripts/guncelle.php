<?php
 
include "baglan.php";
 
if(isset($_POST['guncelle'])){
 
    $sql = "UPDATE 'doctor_information'
        SET 'd_snn' = ?, 
            'd_name' = ?, 
            'd_surname' = ?, 
            'd_age' = ?, 
            'd_birth_date' = ? 
            WHERE 'doctor_information'.'d_ssn' = ?";
    $dizi=[
        $_POST['d_snn'],
        $_POST['d_name'],
        $_POST['d_surname'],
        $_POST['d_age'],
        $_POST['d_birth_date']
    ];
    $sorgu = $baglan->prepare($sql);
    $sorgu->execute($dizi);
 
    header("Location:index.php");
}
 
$sql ="SELECT * FROM doctor_information WHERE d_ssn = ?";
$sorgu = $baglan->prepare($sql);
$sorgu->execute([
    $_GET['d_ssn']
]);
$satir = $sorgu->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
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
            <input type="hidden" name="ogrno" value="<?=$satir['d_ssn']?>">
            <div class="col-6">
                <label for="ad" class="form-label">Name</label>
                <input type="text" class="form-control" name="ad" value="<?=$satir['d_name']?>">
            </div>
            <div class="col-6">
                <label for="sad" class="form-label">Surname</label>
                <input type="text" class="form-control" name="sad" value="<?=$satir['d_surname']?>">
            </div>
            <div class="col-6">
                <label for="sinif" class="form-label">Age</label>
                <input type="number" class="form-control" name="sinif" value="<?=$satir['d_age']?>">
            </div>
            <div class="col-6">
                <label for="dtarih" class="form-label">Birth Date</label>
                <input type="date" class="form-control" name="dtarih" value="<?=$satir['d_birth_date']?>">
            </div>
            <button type="submit" name="guncelle" class="btn btn-primary">Update</button>
        </form>
    </div>
    </main>
    <footer></footer>
</body>
</html>
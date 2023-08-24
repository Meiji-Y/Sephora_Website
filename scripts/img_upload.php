
<?php

error_reporting(0);
 

$msg = "";
 
// If upload button is clicked . ..

if (isset($_POST['upload'])) {
 

    $filename = $_FILES["uploadfile"]["name"];

    $tempname = $_FILES["uploadfile"]["tmp_name"];

    $folder = "./products/" . $filename;
 

    $db = mysqli_connect("localhost", "root", "", "sephoradb");
 

   
    $name=$_POST['name'];
    $category=$_POST['category'];
    $price=$_POST['price'];
    $stok=$_POST['stok'];

    $query="insert into products (name,category,price,filename,stok) values('$name', '$category', '$price','$filename','$stok')";

    
    $run=mysqli_query($db,$query);

    

    // Execute query

    

    // Now let's move the uploaded image into the folder: image

    if (move_uploaded_file($tempname, $folder)) {

        echo "<h3>  Image uploaded successfully!</h3>";

    } else {

        echo "<h3>  Failed to upload image!</h3>";

    }
}
?>
 
<!DOCTYPE html>
<html>
 
<head>

    <title>Image Upload</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
    <p> image upload php </p>
    <div id="content">

        <form method="POST" action="" enctype="multipart/form-data">

            <div class="form-group">

                <input class="form-control" type="file" name="uploadfile" value="" />

            
                <label>Product Name: </label> <input type="text" name="name"> <br><br>
                <label>Product Category: </label> <input type="text" name="category"> <br><br>
                <label>Product Price: </label> <input type="text" name="price"> <br><br>
                <label>Product Stock: </label> <input type="text" name="stok"> <br><br>

            </div>


            <div class="form-group">

                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>

            </div>

        </form>

    </div>

    <div id="display-image">

        <?php

        $query = " select * from products";

        $result = mysqli_query($db, $query);
 

        while ($data = mysqli_fetch_assoc($result)) {

        ?>

            <img src="./products/<?php echo $data['filename']; ?>">

        <?php

        }

        ?>

    </div>
</body>
 
</html>
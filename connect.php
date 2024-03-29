<?php
$conn = mysqli_connect('localhost','root','','hotel');


function insertdata($conn){

    if(isset($_POST['Submit'])){
        $userName = $_POST['userName'];
        $userEmail = $_POST['userEmail'];
        $userPhone = $_POST['userPhone'];
        $userMsg = $_POST['userMsg'];
    
        $sql = "INSERT INTO contacts (userName,userEmail,userPhone,userMsg) VALUES ('$userName','$userEmail','$userPhone','$userMsg')";
    
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location: index.php");
            exit();
           
        }	

    }
		

}
//inserting images and content into the database

function insertgalleryimage($conn){

    if(isset($_POST['addimage'])){
       
        $image_title = $_POST['title'];
        $image_desc = $_POST['image_desc'];

        // inserting image into the database
        $image_photo = $_FILES['image_photo']['name'];
        //store the image in a temporary memory location
        $image_temp = $_FILES['image_photo']['tmp_name'];
        //give your image a unique name
        $rename_image = uniqid().$image_photo;
        //storing the image
        $directory = "images/".$rename_image;
        //uploading 
        move_uploaded_file($image_temp,$directory);

        $sql = "INSERT INTO gallery(image_photo,image_title,image_desc) VALUES ('$rename_image','$image_title','$image_desc')";
        //execute the sql
        $result = mysqli_query($conn,$sql);
            
        if($result){
            header("Location: index.php");
        }
    }
}
   
//accessing the images and content from the database and displayning them in the databse

function getgallerycontent($conn){

    $sql = "SELECT * FROM gallery ORDER BY image_id";

    //execute the sqli statement
    $result = mysqli_query($conn, $sql);
    //check if there are any rows returned
    if(mysqli_num_rows($result) > 0){
        //initialize an empty array
        $images = [];
        //itterate through the result
        while($row = mysqli_fetch_assoc($result)){
            //store content in the array
            $images[] =[
                'image_id' => $row['image_id'],
                'image_photo' => $row['image_photo'],
                'image_title' => $row['image_title'],
                'image_desc' => $row['image_desc'],
            ];
        }
               
    }
    return[
        'photos' => $images
    ];

}

    ?>
  

  

  

<?php
    include_once 'DBconnection.php';

    session_start();
    if (isset($_SESSION["email"]))
    {
    $email=$_SESSION['email'];
    //exit();
    }

    



    if(isset($_POST['submit'])){

        $insert1=null;
        $insert2=null;
        $insert3=null;
        $insert4=null;
        $insert5=null;



        $titre = $_POST['titre'];
        $description = $_POST['description'];
        $categorie = $_POST['categorie'];
        //$image = $_POST['$target_file'];
        $prix = $_POST['prix'];
        $emplacement = $_POST['emplacement'];
        $numtel = $_POST['numtel'];
      

        $uploadsDir = "assets/img/";
        $allowedFileType = array('jpg','png','jpeg');
        
        // Velidate if files exist
        if (!empty(array_filter($_FILES['fileUpload']['name']))) {
        
        // Loop through file items
            $i=0;
            foreach($_FILES['fileUpload']['name'] as $id=>$val){
                $i++;
                echo $i;
                // Get files upload path
                $fileName        = $_FILES['fileUpload']['name'][$id];
                $tempLocation    = $_FILES['fileUpload']['tmp_name'][$id];
                $targetFilePath  = $uploadsDir . $fileName;
                $fileType        = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                $uploadDate      = date('Y-m-d H:i:s');
                $uploadOk = 1;

                if(in_array($fileType, $allowedFileType)){
                        if(move_uploaded_file($tempLocation, $targetFilePath)){
                            $sqlVal = "('".$fileName."', '".$uploadDate."')";
                        } else {
                            $response = array(
                                "status" => "alert-danger",
                                "message" => "File coud not be uploaded."
                            );
                        }
                    
                } else {
                    $response = array(
                        "status" => "alert-danger",
                        "message" => "Only .jpg, .jpeg and .png file formats allowed."
                    );
                }
                // Add into MySQL database
                if(!empty($sqlVal)) {



                    //$insert = $conn->query("INSERT INTO user (imagefileUpload, date_time) VALUES $sqlVal");
                    if($i==1){
                        $insert1 = $fileName;
                        if($insert1) {
                            $response = array(
                                "status" => "alert-success",
                                "message" => "Files successfully uploaded."
                            );
                        } else {
                            $response = array(
                                "status" => "alert-danger",
                                "message" => "Files coudn't be uploaded due to database error."
                            );
                        }
                    }
                    if($i==2){
                        $insert2 = $fileName;
                        if($insert2) {
                            $response = array(
                                "status" => "alert-success",
                                "message" => "Files successfully uploaded."
                            );
                        } else {
                            $response = array(
                                "status" => "alert-danger",
                                "message" => "Files coudn't be uploaded due to database error."
                            );
                        }
                    }
                    if($i==3){
                        $insert3 = $fileName;
                        if($insert3) {
                            $response = array(
                                "status" => "alert-success",
                                "message" => "Files successfully uploaded."
                            );
                        } else {
                            $response = array(
                                "status" => "alert-danger",
                                "message" => "Files coudn't be uploaded due to database error."
                            );
                        }
                    }
                    if($i==4){
                        $insert4 = $fileName;
                        if($insert4) {
                            $response = array(
                                "status" => "alert-success",
                                "message" => "Files successfully uploaded."
                            );
                        } else {
                            $response = array(
                                "status" => "alert-danger",
                                "message" => "Files coudn't be uploaded due to database error."
                            );
                        }
                    }
                    if($i==5){
                        $insert5 = $fileName;
                        if($insert5) {
                            $response = array(
                                "status" => "alert-success",
                                "message" => "Files successfully uploaded."
                            );
                        } else {
                            $response = array(
                                "status" => "alert-danger",
                                "message" => "Files coudn't be uploaded due to database error."
                            );
                        }
                    }

                }
            }



            mysqli_query($conn,"INSERT INTO demandesdevente (titre, description, categorie, image1, image2, image3, image4, image5, prix, emplacement,email,numtel)
            VALUES ('$titre', '$description', '$categorie', '$insert1', '$insert2', '$insert3', '$insert4', '$insert5', '$prix', '$emplacement','$email','$numtel');");



        } else {
            // Error
            $response = array(
                "status" => "alert-danger",
                "message" => "Please select a file to upload."
            );
        }
        





    }
    header("Location: htmlAjouterAnnonce.php?");

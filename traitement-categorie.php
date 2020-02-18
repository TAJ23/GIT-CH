<?php



include 'db.php' ;
if(isset($_POST['ajouter']) ) {
          
     
    $url =  "imgs/categories/".$_FILES['t']['name'] ;
   
    //print_r($_FILES);
    if ($_FILES["t"]["error"]) {
    $err = "file not found";
     } else {
    move_uploaded_file($_FILES["t"]["tmp_name"], $url);
    }
    // $req = $conn->prepare("INSERT INTO categorie SET name = ?, image = ?");
    // $req->execute($_POST['nomC'],$_POST['t']);
    $nom=$_POST['nomC'];
    $image=$_FILES["t"]["name"];
    $req = $conn->prepare("INSERT INTO categorie  (name, image) 
    
    VALUES ('$nom', '$image')");
    $req->execute();

    
    // echo "Ok";
    header('location:SHcategorie.php') ;
}




if(isset($_GET['categorie-del-id'])){

    $pdostat = $conn->prepare('DELETE FROM categorie where Id=:num LIMIT 1');
    $pdostat->bindValue(':num', $_GET['categorie-del-id'], PDO::PARAM_INT);
    $executeISOk = $pdostat->execute();
    header('location:SHcategorie.php');}
  
        //         $idd= $_GET['categorie-del-id'];
        //         echo $idd;

        //    $sql = "DELETE FROM categorie  WHERE Id='$idd'";
        //    echo $sql;

        //    // use exec() because no results are returned
        //    $conn->execute($sql);
        //    echo "Record deleted successfully";
        //    header('location:SHcategorie.php') ;
        //     }

            
            
            if(isset($_POST['modifier'])){
                echo "test";
                $idd= $_POST['id-modif'];
                echo $idd;

                $url =  "imgs/categories/".$_FILES['t']['name'] ;
   
    //print_r($_FILES);
    if ($_FILES["t"]["error"]) {
    $err = "file not found";
     } else {
    move_uploaded_file($_FILES["t"]["tmp_name"], $url);
    }
   
    $nom=$_POST['nomC'];
    $image=$_FILES["t"]["name"];
                

           $sql =$conn->prepare("UPDATE categorie SET name=?, image=? where Id=?"); 
           $sql->execute([$nom,$image,$idd]);
          


           
           echo "Record update successfully";
           header('location:SHcategorie.php') ;
            }

            ?>


<?php



include 'db.php' ;
            if(isset($_GET['Auteur-del-id'])){
                $idd= $_GET['Auteur-del-id'];

           $sql = "DELETE FROM auteur  WHERE IdAuteur='$idd'";

           // use exec() because no results are returned
           $conn->exec($sql);
           echo "Record deleted successfully";
           header('location:SHauteur.php') ;

            }









            if(isset($_GET['Auteur-update-id'])){

                $pdostat = $conn->prepare('DELETE FROM auteur where Id=:num LIMIT 1');
                $pdostat->bindValue(':num', $_GET['Auteur-update-id'], PDO::PARAM_INT);
                $executeISOk = $pdostat->execute();
                header('location:SHauteur.php');}
              
                    //         $idd= $_GET['Auteur-update-id'];
                    //         echo $idd;
            
                    //    $sql = "DELETE FROM auteur  WHERE Id='$idd'";
                    //    echo $sql;
            
                    //    // use exec() because no results are returned
                    //    $conn->execute($sql);
                    //    echo "Record deleted successfully";
                    //    header('location:SHauteur.php') ;
                    //     }
            
                        
                        
                        if(isset($_POST['modifier'])){
                            echo "test";
                            $idd= $_POST['id-modif'];
                            echo $idd;
            
                            $url =  "imgs/auteurs/".$_FILES['t']['name'] ;
               
                //print_r($_FILES);
                if ($_FILES["t"]["error"]) {
                $err = "file not found";
                 } else {
                move_uploaded_file($_FILES["t"]["tmp_name"], $url);
                }
               
                $nom=$_POST['nom'];
                $email=$_POST['email'];
                $image=$_FILES["t"]["name"];
                            
            
                       $sql =$conn->prepare("UPDATE auteur SET Fullname=?,Email=?, avatar=? where IdAuteur=?"); 
                       $sql->execute([$nom,$email,$image,$idd]);
                      
            
            
                       
                       echo "Record update successfully";
                       header('location:SHauteur.php') ;
                        }
            
                        
            ?>
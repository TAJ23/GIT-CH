<?php 

 require 'db.php' ;

// ***********************ajouter article******************************************************

if(isset($_POST['ajouter'])) {
             
        
             $url =  "imgs/articles/".$_FILES['t']['name'] ;
            
             //print_r($_FILES);
             if ($_FILES["t"]["error"]) {
             $err = "file not found";
              } else {
             move_uploaded_file($_FILES["t"]["tmp_name"], $url);
             }
             // $req = $conn->prepare("INSERT INTO categorie SET name = ?, image = ?");
             // $req->execute($_POST['nomC'],$_POST['t']);
             $titre=$_POST['titre'];
             $article=$_POST['textArticle'];
             $image=$_FILES["t"]["name"];
             $categorie=$_POST['categorie'];
             $auteur=$_POST['auteur'];
             $req = $conn->prepare("INSERT INTO article  (Title,Contenue,Image,Date,IdCategorie,IdAuteur) 
             
             VALUES ('$titre','$article', '$image',NOW(),'$categorie','$auteur')");
             $req->execute();
     
             
             // echo "Ok";
              header('location:SHarticle.php') ;
           }


// ***********************Supprimer article******************************************************
       
            if(isset($_GET['del-art'])){
                $idd= $_GET['del-art'];

           $sql = "DELETE FROM article  WHERE Id='$idd'";

           // use exec() because no results are returned
           $conn->exec($sql);
           echo "Record deleted successfully";
           header('location:SHarticle.php') ;
            }

            





// ***********************Modifier article******************************************************



            if(isset($_POST['modifier'])){
                echo "test";
                $idd= $_POST['id-modif'];
                echo $idd;

                $url =  "imgs/articles/".$_FILES['t']['name'] ;
   
    // print_r($_FILES);
    if ($_FILES["t"]["error"]) {
    $err = "file not found";
     } else {
    move_uploaded_file($_FILES["t"]["tmp_name"], $url);
    }
   
    $titre=$_POST['titre'];
    $textArticle=$_POST['textArticle']; 
    $image=$_FILES["t"]["name"];
    $date=$_POST['date'];
    $categorie=$_POST['categorie'];
    $auteur=$_POST['auteur'];             

           $sql =$conn->prepare("UPDATE article SET Title=?,Contenue=?, Image=?,date=?,IdCategorie=?,IdAuteur=? where Id=?"); 
          print_r($sql);
          
           $sql->execute([$titre,$textArticle,$image,$date,$categorie,$auteur,$idd]);
          
       

           
           echo "Record update successfully";
           header('location:SHarticle.php') ;
            }
// ***********************ajouter Commentaire******************************************************


if(isset($_GET['comment'])) {


    $idcomment=$_GET['comment'];
    $nom=$_GET['Nickname'];
    $contenu=$_GET['Contenue'];
   
    
    $req = $conn->prepare("INSERT INTO commentaire SET Nickname = ? , Contenue = ?, IdArticle =?");
    $req->execute([$nom,$contenu,$idcomment]);
    header('location: UnseulArticle.php?lireplus='.$idcomment);

    
    

}
// ***********************Supprimer commentaire******************************************************
       
if(isset($_GET['del-comt'])){
    $idd= $_GET['del-comt'];
    $idArticle= $_GET['idarticles'];
    

// $sql = "DELETE FROM commentaire  WHERE IdCommentaire='$idd'";

// // use exec() because no results are returned
// $conn->exec($sql);

$req = $conn->prepare("DELETE FROM commentaire WHERE IdCommentaire = ? ");
$req->execute([$idd]);

echo "Record deleted successfully";

header('location: UnseulArticle.php?lireplus='.$idArticle) ;
}

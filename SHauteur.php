
<?php require "db.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include 'header.php'; ?>

<a href="../blogCH/SingleAuteur.php" class="btn btn-primary mb-1">ajouter un auteur</a>






<?php


  

   

    try {

        $stmt = $conn->prepare("SELECT * FROM auteur");
        $stmt->execute();
        $auteurs=$stmt->fetchAll();
        // print_r($auteurs);

    
        
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
        if (isset($_POST['ajouter'])){
          
     
        $url =  "imgs/auteurs/".$_FILES['t']['name'] ;
       
        // print_r($_FILES);
        if ($_FILES["t"]["error"]) {
        $err = "file not found";
         } else {
        move_uploaded_file($_FILES["t"]["tmp_name"], $url);
        }
        $req = $conn->prepare("INSERT INTO auteur SET Fullname = ?, Email = ?,Avatar = ?");
        $req->execute([$_POST['nom'],$_POST['email'],$_FILES['t']['name']]);
        echo "Ok";
        header('location:Cauteur.php') ;
    }


    $conn = null;
    echo "</table>";
    ?>
  
    </form>
    <table>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>email</th>
                <th>avatar</th>
                <th>Action</th>
            
            </tr>
            <?php foreach ($auteurs as $auteur) :; ?>
                <tr>
                    <td><?= $auteur['IdAuteur'] ?></td>
                    <td><?= $auteur['Fullname'] ?></td>
                    <td><?= $auteur['Email'] ?></td>
                    <td ><img src="imgs/auteurs/<?= $auteur['Avatar'] ?>" alt="" width="100px" height="100px"></td>
                   
                    <td>
                        <div>
                            <div> <a href="ModifAuteur.php?Auteur-update-id=<?= $auteur['IdAuteur'] ?>" class="btn btn-success col-md-5">Edit</a>
                                <a href="traitement-auteur.php?Auteur-del-id=<?= $auteur['IdAuteur'] ?>" class="btn btn-danger col-md-5">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>




</body>
<link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/blog/">

<!-- Bootstrap core CSS -->
<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- Custom styles for this template -->
<link href="blog.css" rel="stylesheet">
</html>
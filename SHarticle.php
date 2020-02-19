<!DOCTYPE html>
<html lang="en">
<?php include 'db.php' ;?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include 'header.php'; ?> 



<?php
    
    try {
        
        $stmt = $conn->prepare("SELECT * FROM article");
        $stmt->execute();
        $articles=$stmt->fetchAll();
        // print_r($auteurs);

    
        
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    
    
        
      
  


    echo "</table>";
    ?>
   
   <table>
            <tr class="text-center">					
                <th>Id</th>
                <th style="margin-left:10px">Title</th>
                <th>Contenue</th>
                <th>Image</th>
                <th>date</th>
                <th>IdCategorie</th>
                <th>IdAuteur</th>
                <th style="margin-left:10px">Action</th>
            </tr>
            <?php foreach ($articles as $article) :; ?>
                <tr>
                    <td><?= $article['Id'] ?></td>
                    <td><?= $article['Title'] ?></td>
                    <td><?= $article['Contenue'] ?></td>
                    <td ><img src="imgs/articles/<?= $article['Image'] ?>" alt="" width="100px" height="100px"></td>
                    <td><?= $article['date'] ?></td>
                    <td><?= $article['IdCategorie'] ?></td>
                    <td><?= $article['IdAuteur'] ?></td>
                    <td>
                        <div>
                            <div> <a href="ModifArticle.php?update-art=<?= $article['Id'] ?>" class="btn btn-success col-md-5">Edit</a>
                                <a href="traitement-article.php?del-art=<?= $article['Id'] ?>" class="btn btn-danger col-md-6">Delete</a>
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</html>
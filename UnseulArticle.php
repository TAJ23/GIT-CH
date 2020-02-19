<?php include 'db.php';
//afficher un seul article
$idarticle = $_GET['lireplus'];

$quer = $conn->prepare('SELECT * FROM article , auteur , categorie
         WHERE article.IdAuteur = auteur.IdAuteur AND article.IdCategorie = categorie.Id AND article.Id=?');
$quer->execute([$idarticle]);
$data = $quer->fetch();


//requette commentaires :
$comm = $conn->prepare('SELECT * FROM commentaire WHERE IdArticle = ?');
$comm->execute([$idarticle]);
$commentaires = $comm->fetchAll();


?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #img_comment {
            width: 100px;
            height: auto;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>


    <h1 class="text-center text-dark mt-5">MON BLOG</h1>
    <main class="container">



        <image></image>









        <!------------------******************afficher un seul article***************-------------------->
        <div style="margin-left:300px">



            <div class="card col-8 my-5 ">
                <img src="imgs/articles/<?= htmlentities($data['Image']) ?>" width="100%" height="200px" class="card-img-top ">
                <div class="card-body text-center">
                    <h5 class="card-title"><?= htmlentities($data['Title']) ?></h5>
                    <p class="card-text"><?= htmlentities($data['Contenue'])   ?></p>
                    <div class="row d-flex justify-content-between">
                        <!---->
                        <p class="text-muted"><?= htmlentities($data['name']) ?></p>
                        <p class="text-muted"><?= htmlentities($data['Fullname']) ?></p>
                    </div>
                    <p class="text-muted"><?= htmlentities($data['date']) ?></p>

                </div>
            </div>
        </div>




<!------------------******************Ajouter Commentaire***************************-------------------->



        <div style="margin-left:290px" class="col-md-6">
            <form action="traitement-article.php" method="GET" class="border 1px solid bg-light mx-2 my-2 ">

                <h3 class="text-center my-5">Ajouter un commentaire:</h3>

                <label for="fname" class="ml-3">Nom:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" id="fname" name="Nickname" style="border:0; border-bottom:1px solid" class="bg-light"><br><br>

                <div class="row"> <label for="lname" class="ml-3">Numero article:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                    <input type="text" id="id" name="comment" value="<?= $idarticle ?>" style="border:0" class="bg-light "><br><br>

                </div><br><br>
                <label for="w3mission" class="ml-3">Votre commentaire:</label>

                <textarea id="w3mission" name="Contenue" rows="4" cols="50" style="margin-left:60px" class="bg-light"></textarea><br><br>
                <input type="submit" value="Ajouter" class="col-md-4" style="margin-left:300px"><br><br>


            </form>
        </div>

        <!-- afficher commentaire -->
        <div class="container m-5">
            <?php foreach ($commentaires as $commentaire) : ?>
                <div class="row border border-primary p-3 mb-3">
                    <div class="col-md-2 border-primary">
                        <img src="imgs/user.png" alt="" id="img_comment">
                    </div>
                    <div class="col-md-10">
                        <p><strong><?= $commentaire['Nickname'];  ?></strong></p>
                        <p><?= $commentaire['Contenue'];  ?></p>
                    </div>
                </div>
            <?php endforeach;  ?>
        </div>
    </main>
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
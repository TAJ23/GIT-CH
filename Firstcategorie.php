<!DOCTYPE html>
<html lang="en">
<?php include 'db.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'header.php'; ?>



    <h1 class="text-center text-dark mt-5">MON BLOG</h1>
    <main class="container">



        <image></image>


        <?php
        $quer = "SELECT * FROM categorie;";

        $result = $conn->query($quer);
        $datas = $result->fetchAll();




        ?>


        <div class="row ml-5">



            <?php foreach ($datas as $data) : ?>


                <!-- <div class="row  ml-5 "> -->
                <div class="col-md-5 mt-5"><a href="articleCategorie.php?lireplus=<?= $data['Id'] ?>"><img src="imgs/categories/<?= htmlentities($data['image']) ?>" width="400px" height="400px"></a></div>

                <!-- </div> -->


            <?php endforeach; ?>

        </div>
        <div class="text-center">
            <a href="../blogCH/CCategorie.php" class="btn btn-primary ">Ajouter</a>
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
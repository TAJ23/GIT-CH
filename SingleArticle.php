<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php include 'header.php'; ?>
    <main class="container">


        <form method="post" action="index.php">

            <div class="form-group">
                <label for="exampleFormControlInput1">Titre</label>
                <input type="text" class="form-control bg-light" id="titre" placeholder="Titre">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Article</label>
                <textarea class="form-control bg-light" id="textArticle" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">image</label>
                <input type="text" class="form-control bg-light" id="image" placeholder="url image ici">
            </div>
            
            <div><input type="file" accept="image/*" />importer une image</div>

            <div class="form-group">
                <label for="exampleFormControlInput1">date</label>
                <input type="text" class="form-control bg-light" id="exampleFormControlInput1">
            </div>





            <div class="form-group">
                <label for="exampleFormControlSelect1">Catégorie</label>
                <select class="form-control bg-light " id="exampleFormControlSelect1">
                    <option>-cuisine</option>
                    <option>-santé</option>
                    <option>-sport</option>
                    <option>-voyage</option>
                    <option>-bébé</option>
                </select>

            </div>



                <div class="form-group">
                    <label for="exampleFormControlSelect1">Nom d'auteur</label>
                    <select class="form-control bg-light" id="exampleFormControlSelect1">
                        <option>Mary black</option>
                        <option>Pierre leGrand</option>
                        <option>Dupont jack</option>
                        <option>Elisabeth nice</option>

                    </select>
                </div>
            <button type="submit" class="btn btn-primary"id="ajouter">Ajouter</button>
            <button type="submit" class="btn btn-primary"id="modifier">Modifier</button>
            <button type="submit" class="btn btn-primary"id="supprimer">Supprimer</button>
        </form>










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
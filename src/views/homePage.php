<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="script.js"></script>
    <title>My To-Do-List</title>
</head>
<body>
    <nav class="nav">
        <div class="logo-todolist">
            <img src="images/TODO.png" alt="">
            <p>TO-DO-LIST</p>
        </div>
        <div class="flex"></div>
        <div class="profil">
            <div class="avatar"><img src="" alt=""></div>
            <div class="username"><?=$user?></div>
        </div>
    </nav>
    <section class="re-todo">
        <div class="re-content">
            <article class="re-box-todo">
                <h1>INSCRIPTION </h1>
                <form class="form-content" method="POST" id="form">
                      <input type="text" name="nom" id="lastname" placeholder="Entrer votre nom" class="box-content">
                      <p id="errorlastname"></p>
                      <input type="text" name="prenom" id="firstname" placeholder="Entrer votre prénom" class="box-content">
                      <p id="errorfirstname"></p>
                      <input type="email" name="email" id="email" placeholder="Entrer votre adresse mail" class="box-content">
                      <p id="errormail"></p>
                      <input type="password" name="password" id="password" placeholder="Entrer votre mot de passe" class="box-content">
                      <p id="errorpassword"></p>
                      <input type="password" name="cpassword" id="cpassword" placeholder="Confirmer votre mot de passe" class="box-content">
                      <p id="errorcpassword"></p>
                      <input type="submit" name="submit" id="submit" value="Envoyer" class="button">
                </form>
            </article>
        </div>
        <div class="re-content">
            <article class="re-box-todo">
                <h1>CONNEXION </h1>
                <form action="todolist.php" class="form-content" method="POST" id="login">
                      <input type="email" name="email" placeholder="Entrer votre adresse mail" class="box-content">
                      <input type="password" name="password"  placeholder="Entrer votre mot de passe" class="box-content">
                      <input type="submit" name="submit" value="Envoyer" class="button">
                </form>
            </article>
        </div>
    </section>
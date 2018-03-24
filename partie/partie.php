<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome!</title>


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<main class="col-sm-9">
    <div class="col-xs-12 plateau" style="background: black; height: 100vh;padding: 0 !important;">
        <div class="logo">
            <img src="./assets/img/logo.png" alt="logo">
        </div>
        <div class="des">
            <img src="assets/img/dice.png" alt="">

        </div>
    </div>

</main>
<div class="onglets col-sm-3" style="height: 100vh;">
    <div id="tabs">
        <ul>
            <li onclick="ongletchat()" class="ongletchat">Tchat</li>
            <li onclick="ongletperso()" class="ongletpageperso">Fiches perso</li>
        </ul>
    </div>
    <div class="tchat">
        <h2>Messagerie : </h2>
        <div id="tchat">

        </div>
        <div id="tchatForm" style="position: fixed;bottom: 0;width: 24%; ">
            <form action="#" method="post">
                <div style="margin-right: 0;">
                    <textarea name="message" style="width: 100%;"></textarea>
                </div>
                <div style="position: absolute;top: 12px;right: 25px;">
                    <input type="submit" value="Envoyer">
                </div>
            </form>
        </div>
    </div>
    <div class="Perso">
        <h2>Fiches Perso : </h2>
        <div id="Perso">

        </div>
    </div>
</div>


<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>

</body>
</html>

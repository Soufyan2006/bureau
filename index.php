<?php
require_once('db_connect.php'); // Ensure this is used to avoid redeclaration
$sql = "SELECT naam FROM banen";
$result = $con->query($sql);
?>


<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bij Het BUREAU leer en werk je tegelijkertijd!">

    <title>Het Bureau vacatures</title>
    <link rel="shortcut icon" href="">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/screen.css">
    <link rel="stylesheet" href="assets/css/job-list.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <div class="job-blocks">
        <div class="image block small" id="block-0" style="padding-top: 80px; padding-bottom: 20px;">
            <aside class="mask" style="opacity: 1;"></aside>
            <div class="image-container"><img src="assets/images/logo-small.png" alt=""></div>
        </div>
    </div>
    <div class="job-blocks" style="background-color: #020000;">
    </div>
    <div class="job-blocks">
        <div class="quote block" id="block-2" style="padding-top: 40px; padding-bottom: 0px;">
            <aside class="mask" style="opacity: 1;"></aside>
            <div class="body" style="text-align: center;">
                <div class="quote " data-medium-editor-element="" style="color: #000;">
                    <p>Join&nbsp;<span style="font-size: 100px; background-color: rgb(255, 255, 255);">the
                            club.&nbsp;</span><br></p>
                </div>
            </div>
        </div>
    </div>
    <div class="job-blocks">
        <div class="text block" id="block-3" style="padding-top: 30px; padding-bottom: 80px;">
            <aside class="mask" style="opacity: 1;"></aside>
            <div class="body" data-columns="1">
                <div class="article" data-medium-editor-element="" style="color: #000;">
                    <h1 class="center">Je zult een leuke, leerzame en enthousiaste werkplek krijgen bij ons!</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="job-blocks">
        <div class="text block" id="block-5" style="padding-top: 100px; padding-bottom: 50px;">
            <aside class="mask" style="opacity: 1;"></aside>
            <div class="body" data-columns="1">
                <div class="article" data-medium-editor-element="" style="color: #000;">
                    <div class="center">
                        <h1 class="center">&#128075; <span
                                style="color: inherit; font-family: GT-Walsheim-Bold; font-size: 32px; font-weight: 400; background-color: rgb(255, 255, 255);">Hi,
                                wij zijn Het Bureau.</span>
                        </h1>
                        <p class="center">
                            Onze missie is om jonge mensen te leren hoe de wereld online werkt. Je gaat leren hoe je met
                            klanten kan communiceren en voor deze klanten opdrachten maken. De opbrengsten gaan naar <a
                                href="https://www.actievoorsos.nl/actie/creative-identity" target="_blank">S.O.S.
                                kinderdorpen.</a><br />
                            Het gaat om samenwerken, creativiteit en met veel plezier werken aan uitdagende projecten!
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="job-blocks" style="background-color: #0099FF;">
        <div class="text block" id="block-10" style="padding-top: 50px; padding-bottom: 50px;">
            <aside class="mask" style="background-color: #0099FF; opacity: 1;"></aside>
            <div class="body" data-columns="1">
                <div class="article" data-medium-editor-element="" style="color: #fcfafa;">
                    <h2 class="center">Sollicitatie Procedure</h2>
                    <p>
                        Nu vraag je jezelf waarschijnlijk af; <b><u>HOE kom ik bij het Bureau?</u></b><br>
                        Allereerst vragen wij om te solliciteren op 1 van de vacatures die hieronder zijn te vinden.
                        Hiervoor heb je in ieder geval het volgende nodig:
                    </p>
                    <ul>
                        <li>Sollicitatie brief (Motivatie brief)</li>
                        <li>Curriculum Vitea (C.V.)</li>
                        <li>Een portfolio met eigen werk</li>
                    </ul>
                    <p>
                        Bij het starten van Het Bureau zit je in een bepaald Level.<br>
                        <a
                            href="https://www.notion.so/het-bureau/173d01d06c2d456fbeb91833926d83e5?v=b063d96a2e3f4579aec6584dcbdb1b15">Lees
                            hier over verdere levels!</a>
                    </p>
                    <p>
                        Nadat je je sollicitatie in orde hebt gemaakt ga je werken aan een ON-BOARDING opdracht in een
                        groep. Deze opdracht zal door de coaches van Het Bureau worden toegewezen.
                    </p>
                    <p>
                        Deze opdracht kan 2 a 3 weken (1 dag per week) duren.
                    </p>
                    <p>
                        Na het afronden van deze opdracht zit je met coaches en/of medewerkers van het Bureau om tafel
                        om te kijken wat je ervan gebakken hebt! Neem dan ook alles mee van je sollicitatie!
                    </p>
                    </p>
                </div>
            </div>
            </aside>
        </div>
    </div>
    <div class="job-blocks" style="background-color: #fff;">
        <img class="img-fluid" src="assets/images/banner-bureau.jpg"
            alt="Het Bureau studenten werken voor echte klanten" />
    </div>


    <div class="job-blocks" style="background-color: #0099FF; ">
        <div class="text block" id="block-10" style="padding-top: 50px; padding-bottom: 50px;">
            <aside class="mask" style="background-color: #0099FF; opacity: 1;"></aside>
            <div class="body" data-columns="1">
                <div class="article" data-medium-editor-element="" style="color: #fcfafa;">
                    <h1 class="center">Wij zoeken altijd naar nieuwe talenten!<br />Staat jouw talent hieronder?</h1>
                    <div class="list-group bg-black">
                        <?php
                        require_once('db_connect.php'); // Ensure this is used to avoid redeclaration
                        
                        // Fetch job names and IDs
                        $sql = "SELECT Baan_id, naam FROM banen";
                         $result = $con->query($sql);

                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo '<a href="detail.php?Baan_id=' . $row["Baan_id"] . '" class="list-group-item list-group-item-action text-white" style="background-color: #0099FF;">' . $row["naam"] . '</a>';
                            }
                        } else {
                            echo "0 results";
                        }
                        $con->close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="job-blocks">
        <div class="text block" id="block-14" style="padding-top: 100px; padding-bottom: 25px;">
            <aside class="mask" style="opacity: 1;"></aside>
            <div class="body" data-columns="1">
                <div class="article" data-medium-editor-element="" style="color: #000;">
                    <h1 class="center">Balance is everything</h1>
                    <p class="center">Naast een leuke werkplek en gezellige collega's vinden wij het belangrijk dat je
                        als lerende professional een goede balans vindt tussen werken en plezier. Dan ben je als
                        professional een stuk creatiever. De volgende punten zullen je kunnen helpen;</p>
                </div>
            </div>
        </div>
    </div>
    <div class="job-blocks" style="background-color: #3;">
        <div class="grid block" id="block-15" data-fullwidth="false" style="padding-top: 40px; padding-bottom: 60px;">
            <aside class="mask" style="background-color: #3; opacity: 1;"></aside>
            <div class="grid__container" data-columns="6" data-seamless="false">
                <div class="grid__item grid-colleagues" style="color: #000;">
                    <div class="grid-image-container"><img src="assets/images/icon-laptop.png" alt="">
                    </div>
                    <h1 class="grid-title"><span data-medium-editor-element="">
                            <p>Gebruik eigen laptop</p>
                        </span></h1>
                </div>
                <div class="grid__item grid-colleagues" style="color: #000;">
                    <div class="grid-image-container"><img src="assets/images/icon-train.png" alt="">
                    </div>
                    <h1 class="grid-title"><span data-medium-editor-element="">
                            <p>Makkelijk te bereiken met OV</p>
                        </span></h1>
                </div>
                <div class="grid__item grid-colleagues" style="color: #000;">
                    <div class="grid-image-container"><img src="assets/images/icon-vacation.png" alt="">
                    </div>
                    <h1 class="grid-title"><span data-medium-editor-element="">
                            <p>Flexibele werktijden</p>
                        </span></h1>
                </div>
                <div class="grid__item grid-colleagues" style="color: #000;">
                    <div class="grid-image-container"><img src="assets/images/icon-sport.png" alt="">
                    </div>
                    <h1 class="grid-title"><span data-medium-editor-element="">
                            <p>Sportieve activeiten</p>
                        </span></h1>
                </div>
                <div class="grid__item grid-colleagues" style="color: #000;">
                    <div class="grid-image-container"><img src="assets/images/icon-music.png" alt="">
                    </div>
                    <h1 class="grid-title"><span data-medium-editor-element="">
                            <p>Spotify playlist aanvullen</p>
                        </span></h1>
                </div>
                <div class="grid__item grid-colleagues" style="color: #000;">
                    <div class="grid-image-container"><img src="assets/images/icon-holiday.png" alt=""></div>
                    <h1 class="grid-title"><span data-medium-editor-element="">
                            <p>Veel vakantiedagen</p>
                        </span></h1>
                </div>
                <div class="grid__clearfix"></div>
            </div>
        </div>
    </div>
    <div class="job-blocks" style="background-color: #0f1837;">
        <div class="embed block" id="block-16" data-service="Spotify"
            style="padding-top: 100px; padding-bottom: 100px; background-image: none;">
            <aside class="mask" style="background-color: #0f1837; opacity: 1;"></aside>
            <div class="body">
                <h2><span data-medium-editor-element="" style="color: #f5f4f4;">Office Tunes&nbsp;&#128264;</span></h2>
            </div>
            <iframe src="https://open.spotify.com/embed/playlist/37i9dQZF1DX4pUKG1kS0Ac" width="300" height="380"
                frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        </div>
    </div>
    <div class="job-blocks">
        <div class="workplace block" id="block-17" style="padding-top: 0px; padding-bottom: 0px;">
            <aside class="mask" style="opacity: 1;"></aside>
        </div>
    </div>
    <div class="job-blocks" style="background-color: #000;">
        <div class="text block" id="block-18" style="padding-top: 50px; padding-bottom: 50px;">
            <aside class="mask" style="background-color: #000; opacity: 1;"></aside>
            <div class="body" data-columns="1">
                <div class="article" data-medium-editor-element="" style="color: #fff;">
                    <p class="center">We zitten in het hart van Utrecht, precies in het <a
                            href="https://goo.gl/maps/3qv5Hvy95N8amNCv9" target="_blank">creatieve gedeelte</a>
                        &#128070;</p>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
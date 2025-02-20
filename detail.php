<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bij Het BUREAU leer en werk je tegelijkertijd!">

    <title>Junior front-end developer - Het Bureau</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="shortcut icon" href="/favicon.ico?v=1599575003">
    <link rel="stylesheet" href="assets/css/screen.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/main-detail.css">

</head>

<body>


    <?php
    require_once('db_connect.php'); // Ensure this is used to avoid redeclaration

    // Check if 'number' is set in the URL
    if (isset($_GET['Baan_id'])) {
        $Baan_id = $_GET['Baan_id'];

        // Execute the query to retrieve the details
        $sql = "SELECT * FROM banen WHERE Baan_id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("i", $Baan_id);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if there are results
        if ($result->num_rows > 0) {
            // Fetch data from the first row
            $row = $result->fetch_assoc();
            ?>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 g-1 projects">
            <div id="project1" class="project card shadow-sm card-body m-2">
                <div class="card-text">
                    <h2></h2>

                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>

                </div>
            </div>
        </div>
    </div>
    <?php
        } else {
            echo "Geen resultaten gevonden.";
        }
        
        // Close the statement and the database connection
        $stmt->close();
        $con->close();
    } else {
        echo "Geen project-ID opgegeven.";
    }
    ?>
    <a href="index.php" class="back-to-career-site genericon-collapse light covid-19"></a>
    <header class="job-header"><i></i>
        <h1> <?php echo $row['Naam']. "<br>"; ?></h1>
        <!-- <div class="header-right">
            <div class="share-job">
                <h3>Share job</h3>
                <a class="social-icon-btn genericon-twitter"
                    href="javascript:window.open('https://twitter.com/home?status=Head+of+Growth+%28temporarily+paused%29+at+Homerun+https%3A%2F%2Fjobs.homerun.co%2Fhead-of-growth',%20'twitter_share',%20'height=320,%20width=640,%20toolbar=no,%20menubar=no,%20scrollbars=no,%20resizable=no,%20location=no,%20directories=no,%20status=no');"><span>Share
                        this job on Twitter</span></a><a class="social-icon-btn genericon-facebook-alt"
                    href="javascript:window.open('https://www.facebook.com/dialog/share?app_id=141328795925138&amp;display=popup&amp;href=https%3A%2F%2Fjobs.homerun.co%2Fhead-of-growth&amp;redirect_uri=https://homerun.co/sink',%20'facebook_share',%20'height=380,%20width=640,%20toolbar=no,%20menubar=no,%20scrollbars=no,%20resizable=no,%20location=no,%20directories=no,%20status=no');"><span>Share
                        this job on Facebook</span></a><a class="social-icon-btn genericon-linkedin"
                    href="javascript:window.open('https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fjobs.homerun.co%2Fhead-of-growth&amp;title=Head+of+Growth+%28temporarily+paused%29&amp;summary=Job+at+Homerun',%20'linkedin_share',%20'height=460,%20width=372,%20toolbar=no,%20menubar=no,%20scrollbars=no,%20resizable=no,%20location=no,%20directories=no,%20status=no');"><span>Share
                        this job on LinkedIn</span></a>
            </div>
        </div> -->
    </header><a class="button btn-apply" href="mailto:het-bureau@glu.nl"><span>Solliciteer nu</span></a>
    <div class="job-blocks" style="background-color: #1E2029;">
        <div class="intro block" id="block-0" style="padding-top: 75px; padding-bottom: 50px;">
            <aside class="mask" style="background-color: #1E2029; opacity: 1;"></aside>
            <div class="body" style="">
                <div class="overlay-text c">
                    <div>
                        <figure class="company-logo"><img src="assets/images/logo-small-black.png" alt="Homerun">
                        </figure>
                        <h1><span data-medium-editor-element=""></span><?php echo $row['Naam']. "<br>"; ?></h1>
                        <h2><span data-medium-editor-element="">
                                <p><?php echo $row['Beschrijving']. "<br>"; ?><br></p>
                                <p></p>
                            </span></h2>
                        <div class="about" data-medium-editor-element="">FULL-TIME &middot; UTRECHT</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="job-blocks" style="">
    </div>
    <div class="job-blocks" style="">
    </div>
    <!-- <div class="job-blocks" style="background-color: #1E2029;">
        <div class="video block regular" id="block-3" style="padding-top: 0px; padding-bottom: 0px;">
            <aside class="mask" style="background-color: #1E2029; opacity: 1;"></aside>
            <div class="video-container">
                <div style="padding-bottom: 56.25%"><iframe
                        src="https://player.vimeo.com/video/276831111?dnt=1&amp;title=0&amp;byline=0&amp;portrait=0&amp;badge=0"
                        frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                </div>
            </div>
            <style>
                @media only screen and (max-width: 767px) {
                    #block-3 {
                        padding-top: 0px !important;
                        padding-bottom: 0px !important;
                    }
                }
            </style>
        </div>
    </div> -->
    <div class="job-blocks" style="background-color: #fff;">
        <div class="text block" id="block-9" style="padding-top: 50px; padding-bottom: 75px;">
            <aside class="mask" style="background-color: #fff; opacity: 1;"></aside>
            <div class="body" data-columns="1">
                <div class="article text-center" data-medium-editor-element="" style="color: #333333;">
                    <h1><?php echo $row['Tussentitel']. "<br>"; ?></h1>
                    <p></p>
                </div>
            </div>
            <style>
            #block-9 h1 {
                color: #333333;
            }
            </style>
            <style>
            @media only screen and (max-width: 767px) {
                #block-9 {
                    padding-top: 50px !important;
                    padding-bottom: 25px !important;
                }
            }
            </style>
        </div>
    </div>
    <div class="job-blocks" style="">
        <div class="image block regular" id="block-10" style="padding-top: 0px; padding-bottom: 0px;">
            <aside class="mask" style="opacity: 1;"></aside>
            <div class="image-container"><img src="assets/images/banner2.jpg" alt=""></div>
            <style>
            @media only screen and (max-width: 767px) {
                #block-10 {
                    padding-top: 0px !important;
                    padding-bottom: 0px !important;
                }
            }
            </style>
        </div>
    </div>
    <div class="job-blocks" style="">
    </div>
    <div class="job-blocks" style="background-color: #1E2029;">
        <div class="text block" id="block-4" style="padding-top: 75px; padding-bottom: 100px;">
            <aside class="mask" style="background-color: #1E2029; opacity: 1;"></aside>
            <div class="body" data-columns="1">
                <div class="article" data-medium-editor-element="" style="color: #f4f4ff;">
                    <p class=""></p>
                    <h1 class="center"></h1>
                    <p class="center"><?php echo $row['Tussentekst']. "<br>"; ?></p>
                    <p class="center">!</p>
                </div>
            </div>
            <style>
            #block-4 h1 {
                color: #f4f4ff;
            }
            </style>
            <style>
            @media only screen and (max-width: 767px) {
                #block-4 {
                    padding-top: 75px !important;
                    padding-bottom: 100px !important;
                }
            }
            </style>
        </div>
    </div>
    <div class="job-blocks" style="">
        <div class="workplace block" id="block-5" style="padding-top: 0px; padding-bottom: 0px;">
            <aside class="mask" style="opacity: 1;"></aside>
            <div class="body">
                <div class="carousel-container">
                    <ul class="carousel" data-width="377.04716501316" style="width: 377.04716501316%">
                        <li data-width="15.250081511154"
                            style="background-image: url(assets/images/slider/slide1.png); width: 15.250081511154%">
                        <li data-width="10.20061007746"
                            style="background-image: url(assets/images/slider/slide2.png); width: 10.20061007746%">
                        <li data-width="15.242414300741"
                            style="background-image: url(assets/images/slider/slide3.png); width: 15.242414300741%">
                        <li data-width="15.242414300741"
                            style="background-image: url(assets/images/slider/slide4.png); width: 15.242414300741%">
                        <li data-width="15.242414300741"
                            style="background-image: url(assets/images/slider/slide5.png); width: 15.242414300741%">
                        <li data-width="6.7812233681387"
                            style="background-image: url(assets/images/slider/slide6.png); width: 6.7812233681387%">
                        <li data-width="6.7812233681387"
                            style="background-image: url(assets/images/slider/slide7.png); width: 6.7812233681387%">
                        <li data-width="15.259618772887"
                            style="background-image: url(assets/images/slider/slide8.png); width: 15.259618772887%">
                    </ul>
                    <span class="control prev"></span><span class="control next"></span>
                </div>
            </div>
            <style>
            @media only screen and (max-width: 767px) {
                #block-5 {
                    padding-top: 0px !important;
                    padding-bottom: 0px !important;
                }
            }
            </style>
        </div>
    </div>
    <div class="job-blocks" style="background-color: #0f724c;">
        <div class="text block" id="block-6" style="padding-top: 75px; padding-bottom: 75px;">
            <aside class="mask" style="background-color: #0f724c; opacity: 1;"></aside>
            <div class="body" data-columns="1">
                <div class="article" data-medium-editor-element="" style="color: #fff;">
                    <h3>
                        <ul><?php echo $row['Vraag-tekst']. "<br>"; ?>
                        </ul>
                    </h3>
                </div>
            </div>
            <style>
            #block-6 h1 {
                color: #fff;
            }
            </style>
            <style>
            @media only screen and (max-width: 767px) {
                #block-6 {
                    padding-top: 75px !important;
                    padding-bottom: 75px !important;
                }
            }
            </style>
        </div>
    </div>
    <div class="job-blocks" style="">
        <div class="text block" id="block-7" style="padding-top: 50px; padding-bottom: 50px;">
            <aside class="mask" style="opacity: 1;"></aside>
            <div class="body" data-columns="1">
                <div class="article" data-medium-editor-element="" style="color: #333333;">
                    <h3>
                        <ul>
                            <?php echo $row['Bieden-tekst']. "<br>"; ?>
                        </ul>
                    </h3>
                </div>
            </div>
            <style>
            #block-7 h1 {
                color: #333333;
            }
            </style>
            <style>
            @media only screen and (max-width: 767px) {
                #block-7 {
                    padding-top: 50px !important;
                    padding-bottom: 50px !important;
                }
            }
            </style>
        </div>
    </div>

    <div class="job-blocks" style="background-color: #1E2029;">
        <div class="vacancy-text block" id="block-19" style="padding-top: 75px; padding-bottom: 50px;">
            <aside class="mask" style="background-color: #1E2029; opacity: 1;"></aside>
            <div class="body" data-columns="1" style="color: #f4f4ff;">
                <div class="article" data-medium-editor-element="">
                    <h1><b>Ge&iuml;nteresseerd?</b></h1>
                    <p><span
                            style="font-size: 20px; letter-spacing: -0.1px;"><?php echo $row['Solliciteer-knop']. "<br>"; ?></span>
                    </p>
                </div>
            </div>
            <div class="body "><a class="button btn-apply" href="mailto:het-bureau@glu.nl"><span>Sollicteer of stel
                        een
                        vraag</span></a>
            </div>
            <style>
            #block-19 h1 {
                color: #f4f4ff;
            }
            </style>
            <style>
            @media only screen and (max-width: 767px) {
                #block-19 {
                    padding-top: 75px !important;
                    padding-bottom: 50px !important;
                }
            }
            </style>
        </div>
    </div>


    <script src="assets/js/main.js"></script>
</body>

</html>
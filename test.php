<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Pagina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
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
                    <h2><?php echo $row['Baan_id'] . "<br>"; ?></h2>
                    <div><?php echo $row['Naam']. "<br>"; ?></div>
                    <div><?php echo $row['Beschrijving']. "<br>"; ?></div>
                    <div><?php echo $row['Tussentitel']. "<br>"; ?></div>
                    <div><?php echo $row['Tussentekst']. "<br>"; ?></div>
                    <div><?php echo $row['Vraag-tekst']. "<br>"; ?></div>
                    <div><?php echo $row['Bieden-tekst']. "<br>"; ?></div>
                    <div><?php echo $row['Solliciteer-knop']. "<br>"; ?></div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
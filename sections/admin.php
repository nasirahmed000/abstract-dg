<?php
// db connection 
include "db/connection.php";

// data insert 
$result = null;
if (isset($_POST['c_submit'])) {
    $icon = isset($_POST['icon']) ? $_POST['icon'] : '';
    $title = isset($_POST['title']) ? $_POST['title'] : '';
 
    
   
    $insert_sql = "INSERT INTO capabilities(icon, title) VALUES (?, ?)";
    $stmt = $conn->prepare($insert_sql);
    $stmt->bind_param("ss", $icon, $title);

    if ($stmt->execute()) {
        $result = "<h3 class='text-success'>Data inserted successfully</h3>";
    } else {
        $result = "<h3 class='text-danger'>Error: " . $conn->error . "</h3>";
    }
    $stmt->close();
}

// select sql 
$select_sql = "SELECT * FROM capabilities";
$s_sql = $conn->query($select_sql);
?>

<!doctype html>
<html lang="en">



<head>

    <!-- meta -->


    <!-- icons -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <title>Abstractdg Website</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">

</head>


<body>

    <div class="container-fluid px-4">
        <h1 class="mt-4">Capabilities</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
        </ol>

        <div class="card mb-4">
            <h4 class="mb-4">Insert Value</h4>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                <div class="mb-3">
                    <label for="c_name" class="form-label">Icon</label>
                    <input type="text" class="form-control c_name" id="" name="icon" required>
                </div>

                <div class="mb-3">
                    <label for="c_icon" class="form-label">title</label>
                    <input type="text" class="form-control c_icon" id="" name="title" required>
                </div>

                <div class="mb-2">
                    <button class=" btn btn-dark" type="submit" name="c_submit">Submit</button>
                    <button class="btn btn-danger" type="reset">Reset</button>
                </div>

            </form>

            <div class="result">
                <?php
                echo  $result;
                ?>
            </div>
        </div>

    </div>




    <!-- js links -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>

</body>


</html>
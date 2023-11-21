<!DOCTYPE html>
<?php
require './Connection.php';
include './Projects.php';

$project = new Projects();

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn -->

    <title>dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/edit.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="flex-container">
        <div class="item"><a href="#">SKYE8</a></div>
        <div class="item ml-auto"><a href="#">
                <h4 style="color:blue">
                    <?php
                    if (session_status() !== PHP_SESSION_ACTIVE) {
                        session_start();
                    }
                    if ($_SESSION) {
                        echo "Hi " . $_SESSION['username'];
                    }
                    ?>
                </h4>
            </a></div>
    </div>

    <?php
    if (isset($_SESSION['error'])) {  ?>
        <div class="alert alert-danger">
            <?php echo $_SESSION['error']; ?>
        </div>
    <?php }
    unset($_SESSION['error']);

    if (isset($_SESSION['message'])) {  ?>
        <div class="alert alert-success text-center">
            <?php echo $_SESSION['message']; ?>
        </div>
    <?php }
    unset($_SESSION['message']);

    ?>

    <?php
    $id = htmlspecialchars($_GET['id']);
    $project = $project->getProjectById($id);
    ?>


    <h2 class="row justify-content-center mt-3">Admin : EDIT- <?php echo $project['title']; ?></h2>
    <div class="container">
        <div class="row justify-content-center m-3">
            <div class="col-md-12">
                <h1>Update Project</h1>
                <form action="useraction.php" method="post" class="form m-auto justify-content-center text-white">
                    <div class="form-group">
                        <label for="title">Image URL:</label>
                        <input type="hidden" name="id" value="<?php echo $project['id']; ?>">
                        <input type="text" class="form-control" id="title" name="image_url" value="<?php echo $project['image_url']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo $project['title']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="title">Short Description</label>
                        <input type="text" class="form-control" id="title" name="short_desc" value="<?php echo $project['short_desc']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="title">Heading</label>
                        <input type="text" class="form-control" id="title" name="heading" value="<?php echo $project['heading']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="content">Project Details</label>
                        <textarea class="form-control" id="content" name="details" rows="3" required><?php echo $project['details']; ?></textarea>
                    </div>


                    <div class="row justify-content-center">
                        <button type="submit" class="row btn btn-success mt-5 col-md-5 justify-content-center " name="project-update" style="background: #112c66; transition:0.5s; cursor:pointer; border:none">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>
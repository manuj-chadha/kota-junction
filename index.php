<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kota Junction</title>
    <?php include 'css/style.php'; ?>
    <?php include 'links/links.php'; ?>
    <!-- <?php include 'js/javascript.php'; ?> -->

</head>
<body>
    <header id="navbar">
        <div class="contain">
            <a class="navbar-brand" href="#"id="heading">
                <img src="images/upload.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Kota Junction
            </a> 
            <ul id="actions">
                <li class="listItem">
                    <i class="fa-solid fa-house" style="color: #ffffff;"></i>
                    <a href="#" class="colorChange">Home</a>
                </li>
                <li class="listItem">
                    <i class="fa-solid fa-upload" style="color: #ffffff;"></i>
                    <a href="view.php" class="colorChange"> Uploads</a>
                </li>
            </ul>  
            <ul id="media">
                <li style="display: inline;">
                    <a href="" class="media" style="margin: 5px; text-decoration: none">
                        <i class="fa-brands fa-facebook" style="color: #ffffff;"></i>
                    </a>
                </li>
                <li style="display: inline;">
                    <a href="https://www.instagram.com/kota_junction/" class="media" style="margin: 5px; text-decoration: none">
                        <i class="fa-brands fa-instagram" style="color: #ffffff;"></i>
                    </a>
                </li>
                <li style="display: inline;">
                    <a href="" class="media" style="margin: 5px; text-decoration: none">
                        <i class="fa-brands fa-twitter" style="color: #ffffff;"></i>
                    </a>
                </li>
            </ul> 
        </div>
    </header>
    <div>
        <?php if(isset($_GET['error'])): ?>
            <p><?php echo $_GET['error']; ?></p>
        <?php endif ?>
        <form id="form" action="upload.php" enctype="multipart/form-data" method="post">
            <h1 id="slogan">Hello! Welcome to image uploading website.</h1>
            <p id="mainContent">
                <label for="value">Upload here: </label>
                <input type="file" value="label" name="iStart" id="inputFile">
            </p>
    
            <input type="submit" name="submit" id="submit">
            <!-- <button id="submit">Submit</button> -->
        </form>
        </div>

    <script type="module" src="js/javascript.js"></script>
</body>
</html>
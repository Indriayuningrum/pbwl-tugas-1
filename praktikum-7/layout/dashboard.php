<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Musisi dan Album</title>
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/style.css">
</head>
<body>

    <main>
        <header>
            <img src="<?php echo ASSET; ?>images/fixheader.jpg" alt="img">
        </header>
        <nav>
            <ul>
                <li>
                    <a href="index.php">Dashboard</a>
                </li>  
                <li>
                    <a href="index.php?page=artis_tampil">Artis</a>
                </li> 
                <li>
                    <a href="index.php?page=album_tampil">Album</a>
                </li> 
                <li>
                    <a href="index.php?page=track_tampil">Track</a>
                </li>
                <li>
                    <a href="index.php?page=played_tampil">Played</a>
                </li>
                <li>
                    <a href="login_logout.php">Logout</a>
                </li>
               

            </ul>
            
        </nav>
        <section>
            <?php 
            
            if (isset($_GET['page'])){
                    include $_GET['page']. ".php";
            } else{
                    include "main_dashboard.php";
            }


            ?>
        </section>
        <footer>
            Copyright &copy; 2022
        </footer>
    </main>
</body>
</html>
<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <header>
        <div class="container-fluid cont">
            <nav class="navbar navbar-expand-lg">
                <div class="logo">
                    <a href="dashboard.php" class="button"><span>Jey_CarHire</span></a>
                </div>
                <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="dashboard.php">Administrative Dashboard</a></li>
                        
                        
                        <?php
                        session_start();
                        if(isset($_SESSION['email'])){
                                          ?>
                                <div class="col login">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <?php echo "<label style='color: white'>".$_SESSION['email']."</label"; ?>
                                            </a>
                                        <div class="dropdown-menu dropmenu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">My Profile</a>
                                            <a class="dropdown-item" href="#">Settings</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="logout.php">Logout</a>
                                        </div>
                                    </li>
                                </div>
                               <?php }else{ ?>

                                <div class="col login">
                                    <li class="nav-item"><a class="nav-link" href='../login.php' style="color: white">Click here to login.</a></li>
                                </div>

                            <?php   } ?>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
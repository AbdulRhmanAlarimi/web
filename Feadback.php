<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feadback</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="header.css">
    <style>
        label{
             margin-right: 20px;
        }
        form{
            margin-left: 20px;
        }
        .contantOfForm{
            margin-left: 30px;
        }
    </style>
</head>
<body>
    <!--Header of the page-->
    <div class="container-fluid g1 bg-primary text-white p-2">
        <div class="d-flex align-items-center justify-content-between">
            
            <a href="index.html" class="text-white d-flex align-items-center">
                <img src="img/logo.png" width="50px" alt="Cloud Pharmacy Logo">
                <span class="ms-2 h5">Cloud Pharmacy</span>
            </a>
            
            <ul class="nav y4 k2">
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="news.html">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="funpage.html">Memory Matching Game</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="pharmacyDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pharmacies
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="pharmacyDropdown">
                        <li><a class="dropdown-item" href="Pharmacy.html">Pharmacy</a></li>
                        <li><a class="dropdown-item" href="AlHarrasi.html">AlHarrasi</a></li>
                        <li><a class="dropdown-item" href="Alarimi.html">AlAmri</a></li>
                        <li><a class="dropdown-item" href="AlShamsi.html">AlShamsi</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="consultations.php">Consultations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="Contact us.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="Aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="Feadback.php">Feadback</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link text-white" href="calculater.html">carlculater</a>
                </li>
                </ul>
    
            <div class="d-flex align-items-center">
                <a href="login.html" class="text-white me-2">
                    <img src="img/zz-removebg-preview.png" style="width: 40px;">
                </a>
                <a href="sign_up.html" class="text-white">
                    <img src="img/xx-removebg-preview.png" style="width: 30px;">
                </a>
            </div>
        </div>
    </div>
    <!--Title of the page -->
    <div class="container-fluid p-5 bg-primary text-white text-center" style="height: 200px;" >
        <h1>Feadback</h1>
    </div>
    <!--Form to include the feadback-->
    <div class="container">
        </br>
        <form action="Feadback.php" method="post"  name="feadbackForm">
            <h2>Feadback Form</h2>
            <div class="contantOfForm">
                <h6 for="name">Name:</h6>
                    <input type="text" name="Name" value="" id="name">
                <h6 for="username">Username:</h6>
                    <input type="text" name="Username" value="" id="username">

                <h6 for="imageUpload">Upload an image:</h6>
                    <input type="file" id="imageUpload" name="imageUpload" accept="image/*">
                <h6 for="Email">Email:</h6>
                    <input type="text" name="Email" value="" id="Email">
                <h6>Review by select number of star:</h6>
                    <label><input type="checkbox" name="star" value="1" > One</label>
                    <label><input type="checkbox" name="star" value="2"> Two</label>
                    <label><input type="checkbox" name="star" value="3"> Three</label>
                    <label><input type="checkbox" name="star" value="4"> Four</label>
                    <label><input type="checkbox" name="star" value="5"> Five</label>
                <h6 for="comment">Comment:</h6>
                <textarea name="Comment" rows="3" cols="50">write your Comment her</textarea><br/>

                <input type="submit" name="submit" value="Submit"> <input type="reset" value="Clear"><br/><br/>
            </div>
        </form>
    </div>
    <?php
        if(isset($_POST['submit'])){
            $name = $_POST["Name"];
            $Username = $_POST["Username"];
            $imageUpload = $_POST["imageUpload"];
            $Email = $_POST["Email"];
            $star = $_POST["star"];
            $Comment = $_POST["Comment"];
            echo "<table class='table'>
                <tr>
                    <th>Name:</th>
                    <td> {$name}</td>
               </tr>
                <tr>
                    <th>Username:</th>
                    <td> {$Username}</td>
                </tr>
                <tr>
                    <th>image:</th>
                    <td> {$imageUpload}</td>
                </tr>
                 <tr>
                    <th>Email:</th>
                    <td> {$Email}</td>
                </tr>
                 <tr>
                    <th>Number of star:</th>
                    <td> {$star}</td>
                </tr>
                <tr>
                    <th>Comment:</th>
                    <td> {$Comment}</td>
                </tr>
                
            </table>";
        }
        
            ?>

    <!--Footer of the page-->
    
    <div class="container-fluid g1 bg-primary text-white p-2">
        <div class="d-flex align-items-center justify-content-between">
                    <div style="float: left;">
                        <a href="index.html" class="text-white d-flex align-items-center">
                            <img src="img/logo.png" width="200px" alt="Cloud Pharmacy Logo">
                            <span class="ms-2 h5">Cloud Pharmacy</span>
                        </a>
                    
                            <p style="margin-left: 10px;">Email:<a href= "mailto:cloudpharmacy.om@hotmail.com">cloudpharmacy.om@hotmail.com</a></p>
                            <p style="margin-left: 10px;">Phone:<a href="tel:+96877611569">+968 77611569</a></p>
                            <p style="margin-left: 10px;">Post mail:<a href="https://www.google.com/maps/place/Sultan+Qaboos+University/@23.5912214,58.1695517,17z/data=!3m1!4b1!4m6!3m5!1s0x3e8de2c15540870d:0x2ce06efa9952a6e!8m2!3d23.5912214!4d58.1721266!16zL20vMDcybmgx?entry=ttu&g_ep=EgoyMDI0MTAyMy4wIKXMDSoASAFQAw%3D%3D">Al Seeb Al Khoudh SQU</a></p>
            
                    </div>
                    <div >
                            <li>
                                <a class="text-white" href="index.html">Home</a>
                            </li>
                            <li >
                                <a class="text-white" href="news.html">News</a>
                            </li>
                            <li >
                                <a class="text-white" href="Pharmacy.html">Pharmacies</a>
                            </li>
                            <li >
                                <a class="text-white" href="consultations.html">Consultations</a>
                            </li>
                            <li >
                                <a class="text-white" href="Contact us.html">Contact Us</a>
                            </li>
                            <li >
                                <a class=" text-white" href="Aboutus.html">About Us</a>
                            </li>
                        </ul>
                    </div>
                    
                </tr>
            <div style="float: right a" >
                <iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3656.37980534945!2d58.174824!3d23.590708!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e8de2c15540870d%3A0x2ce06efa9952a6e!2sSultan%20Qaboos%20University!5e0!3m2!1sen!2sus!4v1731170249248!5m2!1sen!2sus"  width="600"  height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</body>
</html>
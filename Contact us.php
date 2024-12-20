<!DOCTYPE html>
<html>
    <head >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="header.css">
        
        <style>
            form {
                width: 500px;
                border: dashed ;
                padding: 5px;
                margin-bottom: 5px;
                
            }
            input, textarea{
                margin-bottom: 10px;
            }
            .table {
                width: 100%;
                margin-top: 20px;
                border-collapse: collapse;
                border: 1px solid #ddd;
            }

            .table th, .team-table td {
                padding: 15px;
                text-align: left;
                border: 1px solid #ddd;
            }

            .table th {
                background-color: #f4f4f4;
                color: #333;
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
        <!------->
        <div class="container-fluid p-5 bg-primary text-white text-center" style="height: 200px;">
            <h1>Contact us</h1>
        </div>
        <div class="container">
            <h2 style="margin-top: 10px;">Email</h2>
            <p style="margin-left: 10px;">
                <a href= "mailto: cloudpharmacy.om@hotmail.com">cloudpharmacy.om@hotmail.com</a>
            </p>
            <h2>Phone</h2>
            <p style="margin-left: 10px;">
                <a href="tel:+96877611569">+968 77611569</a>
            </p>
            <h2>Post mail:</h2>
            <p style="margin-left: 10px;">
                <a href="https://www.google.com/maps/place/Sultan+Qaboos+University/@23.5912214,58.1695517,17z/data=!3m1!4b1!4m6!3m5!1s0x3e8de2c15540870d:0x2ce06efa9952a6e!8m2!3d23.5912214!4d58.1721266!16zL20vMDcybmgx?entry=ttu&g_ep=EgoyMDI0MTAyMy4wIKXMDSoASAFQAw%3D%3D">Al Seeb Al Khoudh SQU</a>
               
            </p>

            <form action="Contact us.php" method="post" >
                <h2>Get in Touch</h2>
                <table >
                    <tr>
                        <th colspan="2">Name:
                            <input type="text" name="name">
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">phone:
                            <input type="text" name="phone" maxlength="8">
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <textarea name="Question" rows="3" cols="50">write your questions her</textarea><br/>
                            
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="submit" value="Send">
                        </td>
                        <td>
                            <input type="reset" value="Reset">
                        </td>
                    </tr>
                </table>
                
                
                

            </form>

            <?php
                if(isset($_POST['submit'])){
                    echo "<table class='table'>
                        <tr>
                            <th>User Name</th>
                            <th>User Phone</th>
                            <th>User Question</th>
                        </tr>
                        <tr>
                            <td> {$_POST["name"]}</td>
                            <td> {$_POST["phone"]}</td>
                            <td> {$_POST["Question"]}</td>
                        </tr>
                    </table>";
                }
        
            ?>
         
        
         
         </div>
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
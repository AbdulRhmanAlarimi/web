<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Consultations</title>
        <link rel="stylesheet" href="header.css">
        
        <style>
            table {
                width: 100%;
                margin-bottom: 20px;
            }
            th, td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            .img {
                height: 100px;
                width: 100px;
            }
            .search-form {
                margin-bottom: 20px;
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
                    <a class="nav-link text-white" href="calculator.html">Calculator</a>
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
        
    <!-- Main Content Section -->
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>Consultations</h1>
    </div>
    
    <div class="container">
        <p style="color: blue; font-size: 20px;">We offer consultations with specialists who can help guide you in finding the right medicine and treatment.</p>
        
        <!-- Search form for doctors -->
        <form class="search-form" method="GET" action="consultations.php">
            <input type="text" name="doctorSearch" id="doctorSearch" placeholder="Search for a doctor or specialty...">
            <button type="submit">Search</button>
        </form>
        
        <?php
        class Doctor {
            private $name;
            private $specialty;
            private $hospital;
            private $email;
            private $phone;
            private $workingHours;
            private $img;

            function __construct($name, $specialty, $hospital, $email, $phone, $workingHours, $img) {
                $this->name = $name;
                $this->specialty = $specialty;
                $this->hospital = $hospital;
                $this->email = $email;
                $this->phone = $phone;
                $this->workingHours = $workingHours;
                $this->img = $img;
            }

            function get_name() {
                return $this->name;
            }

            function get_specialty() {
                return $this->specialty;
            }

            function get_hospital() {
                return $this->hospital;
            }

            function rowDoctor() {
                echo "<tr>
                <td> <img class='img' src='{$this->img}' alt='Doctor image'></td>
                <td> {$this->name}</td>
                <td> {$this->specialty}</td>
                <td> {$this->hospital}</td>
                <td> {$this->email}</td>
                <td> {$this->phone}</td>
                <td> {$this->workingHours}</td>
                <td> <a href='https://meet.google.com/landing'>
                <button style='background-color: blue; color: white; border-radius: 9px;'>Book Now</button>
                </a></td>
                </tr>";
            }
        }

        // List of doctors
        $doctors = array(
            new Doctor("Dr. James Evan Wilson", "Oncology", "Oman International Hospital", "xxxx@hotmail.com", "+968 xxxxxxxx", "7:00 am - 3:00 pm", "img/Dr. James Evan Wilson.jpeg"),
            new Doctor("Dr. Gregory House", "Diagnostic Medicine", "Sultan Qaboos University Hospital", "xxxx@hotmail.com", "+968 xxxxxxxx", "11:00 pm - 7:00 am", "img/Dr. Gregory House.jpg"),
            new Doctor("Dr. Eric Foreman", "Neurology", "The Royal Hospital", "xxxx@hotmail.com", "+968 xxxxxxxx", "3:00 pm - 11:00 pm", "img/Dr. Eric Foreman.jpg"),
            new Doctor("Dr. Chris Taub", "Dermatology", "Sultan Qaboos University Hospital", "xxxx@hotmail.com", "+968 xxxxxxxx", "6:00 am - 6:00 pm", "img/Dr. Chris Taub.jpg"),
            new Doctor("Dr. Allison Cameron", "Fitness", "Oman International Hospital", "xxxx@hotmail.com", "+968 xxxxxxxx", "1:00 am - 1:00 am", "img/Dr. Allison Cameron.jpg")
        );

        // Handle search
        $searchTerm = isset($_GET['doctorSearch']) ? strtolower(trim($_GET['doctorSearch'])) : '';

        echo '<table><thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Specialty</th>
                <th>Hospital</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Working Hours</th>
                <th>Booking</th>
            </tr>
        </thead><tbody>';

        // Filter doctors based on the search term
        foreach ($doctors as $doctor) {
            if (empty($searchTerm) || 
                strpos(strtolower($doctor->get_name()), $searchTerm) !== false || 
                strpos(strtolower($doctor->get_specialty()), $searchTerm) !== false ||
                strpos(strtolower($doctor->get_hospital()), $searchTerm) !== false) {
                $doctor->rowDoctor();
            }
        }

        echo '</tbody></table>';
        ?>

    </div>

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
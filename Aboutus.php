<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="header.css">
    <style>
        h2, table {
            margin-left: 20px;
        }

        h2 {
            color: blue;
            margin-bottom: 25px;
        }

        #member {
            margin-left: 30px;
        }

        .element {
            margin-left: 30px;
        }

        .img {
            height: 100px;
            width: 100px;
            border-radius: 50%;
        }

        .search-form {
            margin-bottom: 20px;
        }

        .team-table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }

        .team-table th, .team-table td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .team-table th {
            background-color: #f4f4f4;
            color: #333;
        }

        .search-form input {
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .search-form button {
            padding: 10px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .img {
            border: 2px solid #ddd;
            padding: 5px;
        }

        .body1 {
            padding: 20px;
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
    
    <!-- Main Content Section -->
    <div class="container-fluid p-5 bg-primary text-white text-center" style="height: 200px; padding: 20px;">
        <h1>About Us</h1>
    </div>

    <div class="body1">
        <h2>About Us</h2>
        <p style="margin-left: 50px; margin-bottom: 30px; padding: 20px;">
            We are a team of developers who built this website to make it easy to buy and get your medicine from many pharmacies near you.
        </p>

        <!-- Company Information Section -->
        <table>
            <tr>
                <td>
                    <img src="img/Logo.jpg" alt="Logo of website" height="290">
                </td>
                <td style="padding-left: 50px;">
                    <h2 class="company">Company</h2>
                    <ul class="aboutcompany">
                        <li class="element">Thirty Seven Company</li>
                        <li class="element">CEO: AbdulRhman Abdulh Alarimi</li>
                        <li class="element">Company email: <a href="mailto:cloudpharmacy.om@hotmail.com">cloudpharmacy.om@hotmail.com</a></li>
                        <li class="element">Company Location: <a href="https://www.google.com/maps/dir//Sultan+Qaboos+University,+Al+Seeb+Al+Khoudh+SQU+SEPS+Muscat+OM,+123/@23.591357,58.0897232,19277m/data=!3m2!1e3!4b1!4m8!4m7!1m0!1m5!1m1!1s0x3e8de2c15540870d:0x2ce06efa9952a6e!2m2!1d58.1721266!2d23.5912214?entry=ttu&g_ep=EgoyMDI0MTAyNy4wIKXMDSoASAFQAw%3D%3D">Sultan Qaboos University</a></li>
                        <li class="element">Mailing Address:
                            <ul style="margin-left: 10;">
                                <li class="element">Zip code: 123</li>
                                <li class="element">Box no: 300</li>
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
        </table>
        
        <br><br><br/><br><br>

        <!-- Team Members Section -->
        <h2>Team Members</h2>
        
        <!-- Search form for team members -->
        <form class="search-form" method="POST" action="">
            <input type="text" name="searchQuery" placeholder="Search for a team member...">
            <button type="submit">Search</button>
        </form>

        <?php
        class Team {
            private $name;
            private $Role;
            private $email;
            private $phone;
            private $img;

            function __construct($name, $Role, $email, $phone, $img) {
                $this->name = $name;
                $this->Role = $Role;
                $this->email = $email;
                $this->phone = $phone;
                $this->img = $img;
            }

            function get_name() {
                return $this->name;
            }

            function get_Role() {
                return $this->Role;
            }

            function get_email() {
                return $this->email;
            }

            function get_phone() {
                return $this->phone;
            }

            function get_img() {
                return $this->img;
            }

            function rowMembers() {
                echo "<tr>
                        <td><img class='img' src='$this->img'></td>
                        <td>{$this->name}</td>
                        <td>{$this->Role}</td>
                        <td>{$this->email}</td>
                        <td>{$this->phone}</td>
                      </tr>";
            }
        }

        // Array of team members
        $teamMembers = array(
            new Team("AbdulRhman Alarimi", "CEO", "+968 12345678", "abdelrhman@cloudpharmacy.om", "img/member.jpg"),
            new Team("Muadh Al Harrasi", "Developer", "+968 98765432", "muadh@cloudpharmacy.om", "img/member.jpg"),
            new Team("Abdullah Al Shamsi", "Developer", "+968 87654321", "abdullah@cloudpharmacy.om", "img/member.jpg"),
        );

        // Check if search query is provided
        $filteredMembers = $teamMembers; // Default to showing all members

        if (isset($_POST['searchQuery'])) {
            $searchQuery = strtolower(trim($_POST['searchQuery']));
            if (!empty($searchQuery)) {
                $filteredMembers = array_filter($teamMembers, function($member) use ($searchQuery) {
                    return (stripos($member->get_name(), $searchQuery) !== false) || 
                           (stripos($member->get_Role(), $searchQuery) !== false) || 
                           (stripos($member->get_email(), $searchQuery) !== false) || 
                           (stripos($member->get_phone(), $searchQuery) !== false);
                });
            }
        }

        // Display team members
        echo '<table class="team-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>';

        if (!empty($filteredMembers)) {
            foreach ($filteredMembers as $Member) {
                $Member->rowMembers();
            }
        } else {
            echo "<tr><td colspan='5'>No team members found.</td></tr>";
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
<?php
// connect to DB
$con = mysqli_connect("localhost", "root", "", "cloud_pharmacy_db");

//error massege for mis connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


$show_insert_area = isset($_POST['toggle_insert']);

//insert  data 
if (isset($_POST['insert_btn'])) {
    $name = $_POST['name'];
    $location = $_POST['location'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $working_hours = $_POST['working_hours'];
    $state = $_POST['state'];

    $insert_query = "INSERT INTO pharmacies (Name, Location, Email, Phone, Working_Hours, State) 
                     VALUES ('$name', '$location', '$email', '$phone', '$working_hours', '$state')";
    $insert_run = mysqli_query($con, $insert_query);

    if ($insert_run) {
        echo "<div class='alert alert-success'>Pharmacy added successfully!</div>";
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SoonPharmacy</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="header.css">
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
<div class="container-fluid p-5 bg-primary text-white text-center" style="height: 200px;">
        <h1>Soon Pharmacy</h1>
  </div>
   <div class="container">
       <div class="row">
           <!-- Heading -->
           <div class="col-md-12">
               <div class="card mt-4">
                   <h4>Soon Pharmacies will join us</h4>
               </div>
           </div>

           <!-- Search and Delete buttom -->
           <div class="col-md-12">
               <div class="card-body">
                   <form action="" method="GET">
                      <div class="input-group">
                          <input type="text" name="search" required value="<?php if (isset($_GET['search'])) { echo $_GET['search']; } ?>" class="form-control" placeholder="Pharmacy Name">
                          <button class="btn btn-primary" type="submit" name="search_btn">Search</button>
                          <button class="btn btn-danger" type="submit" name="delete_btn">Delete</button>
                      </div>
                   </form>
               </div>
           </div>

           <!-- Handle Delete Operation -->
           <?php
           if (isset($_GET['delete_btn']) && isset($_GET['search'])) {
               $filter = $_GET['search'];
               $delete_query = "DELETE FROM pharmacies WHERE CONCAT(Name, Location, Email) LIKE '%$filter%'";
               $delete_run = mysqli_query($con, $delete_query);
           }
           ?>

           <!-- Results Table -->
           <div class="col-md-12">
               <div class="card mt-4">
                   <div class="card-body">
                       <table class="table table-bordered">
                           <thead>
                               <tr>
                                   <th>Name</th>
                                   <th>Location</th>
                                   <th>Email</th>
                                   <th>Phone</th>
                                   <th>Working Hours</th>
                                   <th>State</th>
                               </tr>
                           </thead>
                           <tbody>
                               <?php
                               if (isset($_GET['search_btn'])) {
                                   $filter = $_GET['search'];
                                   $query = "SELECT * FROM pharmacies WHERE CONCAT(Name, Location, Email) LIKE '%$filter%'";
                                   $query_run = mysqli_query($con, $query);

                                   if (mysqli_num_rows($query_run) > 0) {
                                       foreach ($query_run as $item) {
                                           echo "<tr>
                                                   <td>{$item['Name']}</td>
                                                   <td>{$item['Location']}</td>
                                                   <td>{$item['Email']}</td>
                                                   <td>{$item['Phone']}</td>
                                                   <td>{$item['Working_Hours']}</td>
                                                   <td>{$item['State']}</td>
                                                 </tr>";
                                       }
                                   } else {
                                       echo "<tr><td colspan='6'>No Record Found</td></tr>";
                                   }
                               }
                               ?>
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>

           <!-- Insert Pharmacy -->
           <div class="col-md-12">
               <form action="" method="POST">
                   <button type="submit" name="toggle_insert" class="btn btn-success">Insert Pharmacy</button>
               </form>
           </div>

           <?php if ($show_insert_area): ?>
           <div class="col-md-12">
               <div class="card mt-4">
                   <div class="card-body">
                       <h5>Insert New Pharmacy</h5>
                       <form action="" method="POST">
                           <div class="mb-3">
                               <label for="pharmacyName" class="form-label">Name</label>
                               <input type="text" name="name" class="form-control" id="pharmacyName" required>
                           </div>
                           <div class="mb-3">
                               <label for="pharmacyLocation" class="form-label">Location</label>
                               <input type="text" name="location" class="form-control" id="pharmacyLocation" required>
                           </div>
                           <div class="mb-3">
                               <label for="pharmacyEmail" class="form-label">Email</label>
                               <input type="email" name="email" class="form-control" id="pharmacyEmail" required>
                           </div>
                           <div class="mb-3">
                               <label for="pharmacyPhone" class="form-label">Phone</label>
                               <input type="text" name="phone" class="form-control" id="pharmacyPhone" required>
                           </div>
                           <div class="mb-3">
                               <label for="pharmacyHours" class="form-label">Working Hours</label>
                               <input type="text" name="working_hours" class="form-control" id="pharmacyHours" required>
                           </div>
                           <div class="mb-3">
                               <label for="pharmacyState" class="form-label">State</label>
                               <input type="text" name="state" class="form-control" id="pharmacyState" required>
                           </div>
                           <button type="submit" name="insert_btn" class="btn btn-primary">Save Pharmacy</button>
                       </form>
                   </div>
               </div>
           </div>
           <?php endif; ?>
       </div>
   </div>
</body>
</html>

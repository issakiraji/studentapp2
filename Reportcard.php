<?php include('connection.php')?>
<body>
<div class="container-fluid py-3">
<div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-md-8 col-lg-6">
            
    <div class="text-center">
        <div class="d-flex align-items-center">
            <a href="Dashboard.php" class="text-dark text-decoration-none me-3">
            <i class="bi bi-chevron-double-left fs-3"></i>
            </a>
            <h2 class="mb-3 flex-grow-1 mt-2">Reportcard</h2>
        </div>
    </div>
    
    <img src="image/reportcard1.gif" alt="reportcard" class="img-fluid rounded-circle mb-3 w-50  header-img">

</div>
        
</div>
</div>

            <div class="card shadow-lg p-3  report">
                    <div class="card-body">
                        <h5 class="card-title text-center text-warning">Student Information</h5>
                        <table class="table table-bordered text-center">
                            <tr>
                                <th>Name</th>
                                <td>John Doe</td>
                            </tr>
                            <tr>
                                <th>Class</th>
                                <td>10th Grade</td>
                            </tr>
                            <tr>
                                <th>Roll Number</th>
                                <td>12345</td>
                            </tr>
                        </table>
                        <h5 class="card-title text-center mt-5 text-warning">Subjects & Marks</h5>
                        <table class="table table-bordered table-striped text-center">
                            <thead class="table report-table">
                                <tr>
                                    <th>Subject</th>
                                    <th>Marks</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mathematics</td>
                                    <td>95</td>
                                    <td>A+</td>
                                </tr>
                                <tr>
                                    <td>Science</td>
                                    <td>88</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>English</td>
                                    <td>92</td>
                                    <td>A+</td>
                                </tr>
                                <tr>
                                    <td>History</td>
                                    <td>85</td>
                                    <td>B+</td>
                                </tr>
                                <tr>
                                    <td>Geography</td>
                                    <td>89</td>
                                    <td>A</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
<br>
<br>
<br>
<br>

<?php include('Footer.php')?>  
</body>
</html>
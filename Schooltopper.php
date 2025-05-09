<?php include('connection.php')?>
<body>
<div class="container-fluid py-3">
<div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-md-8 col-lg-6">
            
    <div class="text-center">
        <div class="d-flex align-items-center">
            <a href="Dashboard.php" class="text-dark text-decoration-none">
            <i class="bi bi-chevron-double-left fs-3"></i>
            
            </a>
            
            <h2 class="mb-3 flex-grow-1 mt-2">School topper</h2>
        </div>
    </div>
    
    <img src="image/schooltopper.gif" alt="schooltopper" class="img-fluid rounded-circle  mb-3 w-50 header-img">
    
</div>
        
</div>
</div>

</div>
<div class="shadow-lg schooltopper-table p-4">
    <h4 class="text-center mb-4 text-warning">Top Students</h4>
    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead class="table timetable-table table-bordered">
                <tr>
                    <th>Standard</th>
                    <th>Student Image</th>
                    <th>Student Name</th>
                    <th>Math</th>
                    <th>Commerce</th>
                    <th>Physics</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>10th</td>
                    <td><img src="image/student1.png" class="img- rounded-circle" width="50" alt="defaultimage"></td>
                    <td>Rahul S.</td>
                    <td>98%</td>
                    <td>99%</td>
                    <td>96%</td>
                </tr>
                <tr>
                    <td>11th</td>
                    <td><img src="image/student2.png" class="img-fluid rounded-circle" width="50" alt="defaultimage"></td>
                    <td>Anjali P.</td>
                    <td>95%</td>
                    <td>97%</td>
                    <td>94%</td>
                </tr>
                <tr>
                    <td>12th</td>
                    <td><img src="image/student3.png" class="img-fluid rounded-circle" width="50" alt="defaultimage"></td>
                    <td>Vikram R.</td>
                    <td>99%</td>
                    <td>98%</td>
                    <td>97%</td>
                </tr>
            </tbody>
        </table>
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
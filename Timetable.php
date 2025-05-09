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
            <h2 class="mb-3 flex-grow-1 mt-2">Time table</h2>
        </div>
    </div>
    
    <img src="image/classtimetable.gif" alt="timetable" class="img-fluid rounded-circle mb-3 w-50 header-img">

</div>
        
</div>
</div>
</div>

<div class="timetable-card shadow-lg p-4">
            <h4 class="text-center mb-4 text-warning">Weekly Schedule</h4>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="table timetable-table table-bordered">
                        <tr>
                            <th class="day-header">Day</th>
                            <th>8:00 - 9:00 </th>
                            <th>9:00 - 10:00 </th>
                            <th>10:30 - 11:30 </th>
                            <th>11:30 - 12:30 </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="day-header">Monday</td>
                            <td>Math</td>
                            <td>Science</td>
                            <td>English</td>
                            <td>Tamil</td>
                        </tr>
                        <tr>
                            <td class="day-header">Tuesday</td>
                            <td>Tamil</td>
                            <td>Social Science</td>
                            <td>English</td>
                            <td>ComputerLab</td>
                        </tr>
                        <tr>
                            <td class="day-header">Wednesday</td>
                            <td>Computerscience</td>
                            <td>Games</td>
                            <td>Math</td>
                            <td>English</td>
                        </tr>
                        <tr>
                            <td class="day-header">Thursday</td>
                            <td>History</td>
                            <td>Physics</td>
                            <td>Math</td>
                            <td>Science</td>
                        </tr>
                        <tr>
                            <td class="day-header">Friday</td>
                            <td>English</td>
                            <td>Tamil</td>
                            <td>Computerscience</td>
                            <td>ComputerLab</td>
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
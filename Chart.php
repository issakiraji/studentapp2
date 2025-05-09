<?php include('connection.php')?>
<body>
<div class="container-fluid py-4">
<div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-md-8 col-lg-6">
            
    <div class="text-center">
        <div class="d-flex align-items-center">
            <a href="Dashboard.php" class="text-dark text-decoration-none me-3">
            <i class="bi bi-chevron-double-left fs-3"></i>
            </a>
            <h2 class="mb-3 flex-grow-1 mt-2">Chart Report</h2>
        </div>
    </div>
    
    <img src="image/chart.gif" alt="chart" class="img-fluid rounded-circle  mb-3 w-50 header-img">

    </div>
        
</div>
</div>

<div class="chart-card shadow-lg p-3 mb-2">
    <!-- Chart Section -->
    <div class="row mt-4">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-warning">Performance Chart</h5>
            <div class="d-flex justify-content-center align-items-center bg-light rounded" id="chart">
              <p class="text-muted">Chart will appear here (use Chart.js or other libraries)</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Report Table -->
    <div class="row mt-4">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-warning">Detailed Report</h5>
            <div class="table-responsive">
              <table class="table table-bordered table-striped mt-3">
                <thead class="table chart-table">
                  <tr>
                    <th>Subject</th>
                    <th>Marks Obtained</th>
                    <th>Total Marks</th>
                    <th>Percentage</th>
                    <th>Grade</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tamil</td>
                    <td>85</td>
                    <td>100</td>
                    <td>85%</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Science</td>
                    <td>78</td>
                    <td>100</td>
                    <td>78%</td>
                    <td>B</td>
                  </tr>
                  <tr>
                    <td>English</td>
                    <td>92</td>
                    <td>100</td>
                    <td>92%</td>
                    <td>A+</td>
                  </tr>
                  <tr>
                    <td>Maths</td>
                    <td>88</td>
                    <td>100</td>
                    <td>88%</td>
                    <td>A</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
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
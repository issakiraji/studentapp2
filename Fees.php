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
            <h2 class="mb-3 flex-grow-1 mt-2"> School fees</h2>
        </div>
    </div>
    
    <img src="image/schoolfees.gif" alt="schoolfees" class="img-fluid rounded-circle  mb-3 w-50  header-img">

</div>
        
</div>
</div>
</div>
<div class="card shadow-lg p-3 fees">
<div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                 <div class="card-body">
                        <h4 class="card-title text-center text-warning">All School Fees</h4>
                        <table class="table table-striped text-center table-bordered">
                            <thead class="table table-fees">
                                <tr>
                                    <th>Fee Type</th>
                                    <th>Amount (INR)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tuition Fees</td>
                                    <td>₹30,000</td>
                                </tr>
                                <tr>
                                    <td>Library Fees</td>
                                    <td>₹2,000</td>
                                </tr>
                                <tr>
                                    <td>Sports Fees</td>
                                    <td>₹3,000</td>
                                </tr>
                                <tr>
                                    <td>Lab Fees</td>
                                    <td>₹5,000</td>
                                </tr>
                                <tr>
                                    <td>Other Charges</td>
                                    <td>₹10,000</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th>₹50,000</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-4 mt-5">
  <div class="card shadow-lg p-3">
    <div class="card-body">
      <h4 class="card-title text-center text-warning">Installment History</h4>
      <p class="text-muted text-center">Breakdown of each installment paid</p>
      <div class="table-responsive">
        <table class="table table-bordered text-center table-striped">
          <thead class="table table-fees">
            <tr>
              <th>Installment No.</th>
              <th>Amount Paid (INR)</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>1</td><td>₹10,000</td><td>2025-01-10</td></tr>
            <tr><td>2</td><td>₹10,000</td><td>2025-02-15</td></tr>
            <tr><td>3</td><td>₹10,000</td><td>2025-03-20</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<!-- Payment Summary Section (Table Format) -->
<div class="container mb-4">
  <div class="card shadow-lg p-3">
    <div class="card-body">
      <h4 class="card-title text-center text-warning">Payment History</h4>
      <div class="table-responsive">
        <table class="table table-bordered text-center">
          <thead class="table table-fees">
            <tr>
              <th>Total Fees (INR)</th>
              <th>Already Paid (INR)</th>
              <th>Remaining Balance (INR)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-primary fw-bold">₹50,000</td>
              <td class="text-success fw-bold">₹30,000</td>
              <td class="text-danger fw-bold">₹20,000</td>
            </tr>
          </tbody>
        </table>
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
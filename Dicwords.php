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
            
            <h2 class="mb-3 flex-grow-1 mt-2">Dictionary</h2>
            </div>
    </div>
    <img src="image/dictionary.gif" alt="dictionary" class="img-fluid rounded-circle mb-3 w-50 header-img">
    </div>
        
</div>
</div>
</div>
<div class="container mt-5">
<div class="mb-3">
            <input type="text" class="form-control" placeholder="Search for a word...">
        </div>
</div>
<div class="mt-3 shadow-lg p-4  dicwords-table">
     <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="table dic-table table-bordered">
                        <tr>
                            <th>Word</th>
                            <th>English Meaning</th>
                            <th>Tamil Meaning</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Happy</td>
                            <td>Feeling of joy</td>
                            <td>மகிழ்ச்சி</td>
                        </tr>
                        <tr>
                            <td>Brave</td>
                            <td>Showing courage</td>
                            <td>துணிச்சல்</td>
                        </tr>
                        <tr>
                            <td>Kind</td>
                            <td>Being nice to others</td>
                            <td>அன்பான</td>
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
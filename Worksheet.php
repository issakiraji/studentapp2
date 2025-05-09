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
            <h2 class="mb-3 flex-grow-1 mt-2">Worksheet</h2>
        </div>
    </div>
    <img src="image/worksheet1.gif" alt="worksheet" class="img-fluid rounded-circle  mb-3 w-50 header-img">
    </div>
        
</div>
</div>
</div>
  
<div class="card worksheetcard p-3 shadow-lg">
    <div class="row">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">
            
                <div class="d-flex align-items-center">
                    <i class="bi bi-calculator fs-1 text-primary me-3"></i>
                    <div>
                        <h6 class="mb-1">Mathematics</h6>
                        <p class="mb-0 text-muted small">Algebra & Geometry</p>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <a href="worksheets/math.pdf" class="btn btn-sm btn-outline-warning">
                        <i class="bi bi-download"></i> Download
                    </a>
                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#uploadModal">
                        <i class="bi bi-upload"></i> Upload
                    </button>
                </div>
            
        </div>
    </div>
</div>


<!-- Upload Worksheet Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-3">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Upload Worksheet</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="upload_worksheet.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Select Subject</label>
                        <select class="form-select" name="subject">
                             <option value="Mathematics">Mathematics</option>
                             <option value="English">Tamil</option>
                            <option value="Science">Science</option>
                            <option value="English">English</option>
                            <option value="Social science">Social science</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select File (PDF, DOC, JPG, PNG)</label>
                        <input type="file" name="worksheet_file" class="form-control" accept=".pdf, .doc, .docx, .jpg, .png" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-warning">Upload Worksheet</button>
                    </div>
                </form>
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
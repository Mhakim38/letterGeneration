<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, viewport-fit=cover, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>MyGaji - Add Staff</title>
    <link rel="icon" href="/src/APB.png">
    <link rel="apple-touch-icon" href="/src/APB.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/css/css/all.min.css">
    <script src="https://kit.fontawesome.com/b9ae426220.js" crossorigin="anonymous"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="/css/adminlte.min.css">
    <link rel="stylesheet" href="../css/custom.css">

    <script src="MS_letter/MS_JS.js/pizzip.min.js"></script>
    <script src="MS_letter/MS_JS.js/doxctemplater.js"></script>
    <script src="MS_letter/MS_JS.js/fileSaver.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>
<body class="hold-transition sidebar-collapse layout-top-nav">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white border-0" style="background-image: url('/src/soft-yellowbg.jpg');">
        <div class="container justify-content-center"> <!-- Center the container content -->
            <!-- Logo -->
            <a href="../../index.html" class="navbar-brand">
                <img src="/src/APB.png" alt="APB Logo" class="Logo-container" style="opacity: .8 ; width: 400px; height: 100px; object-fit: contain;">
            </a>
            <!-- end logo -->
        </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper border-0" style="background-color: white;">
    <!-- Main content container-->
    <div class="content">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12 text-center">
                    <div class="form">
                        <div class="title">Letter Generation</div>
                        <div class="subtitle">Fill out the form</div>

                        <form id="letterGeneration">
                            <!-- Updated form fields -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="input-container ic1">
                                                <select id="designation" class="input" required>
                                                    <option value="" selected hidden>select</option>
                                                    <option value="Tuan">Tuan</option>
                                                    <option value="Puan">Puan</option>
                                                    <option value="Cik">Cik</option>
                                                </select>
                                                <div class="cut cut-short"></div>
                                                <label for="designation" class="placeholder">Prefix</label>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-container ic1">
                                                <select id="employeeDropdown" class="input" onchange="populateEmployeeDetails()" required>
                                                    <option value=""  selected hidden>Select Employee</option>
                                                    <!-- Options will be dynamically populated -->
                                                </select>
                                                <div class="cut cut-short"></div>
                                                <label for="employeeDropdown" class="placeholder">Employee</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="subtitle mt-4"><strong>Information</strong></div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-container ic1 mt-4">
                                                <input id="name" class="input" type="text" placeholder=" "/>
                                                <div class="cut cut-short"></div>
                                                <label for="name" class="placeholder">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-container ic1 mt-4">
                                                <input id="position" class="input" type="text" placeholder=" "/>
                                                <div class="cut cut-short"></div>
                                                <label for="position" class="placeholder">Position</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input-container ic1 mt-4">
                                                <input id="id" class="input" type="text" placeholder=" "/>
                                                <div class="cut cut-short"></div>
                                                <label for="id" class="placeholder">Staff ID</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-container ic1 mt-4">
                                                <input id="ic" class="input" type="text" placeholder=" "/>
                                                <div class="cut cut-short"></div>
                                                <label for="ic" class="placeholder">IC</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="subtitle mt-3"><strong>Reasons</strong></div>
                            <div class="input-container ic1 mt-3">
                                <textarea id="fault" class="input" placeholder=" " style="min-height: 50px; min-width: 100%; resize: vertical;"></textarea>
                                <div class="cut cut-short"></div>
                                <label for="id" class="placeholder">Wrong Doings</label>
                            </div>
                            
                            <div class="subtitle mt-4"><strong>Generate Letter</strong></div>
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="submit mr-2 mt-0" onclick="processData('warningLetter')">Warning Letter</button>
                                <button type="button" class="submit mt-0" onclick="processData('ReasonLetter')">Reason Letter</button>
                            </div>
                            <button
                            type="button"
                            onclick="location.href='StaffList.html'"
                            onmouseover="this.style.backgroundColor='#a8101a';"
                            onmouseout="this.style.backgroundColor='var(--danger)';"
                            class="submit mt-4"
                            style="background-color: var(--danger);">
                            Cancel
                          </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    
    <!-- Main Footer -->
    <footer class="main-footer border-0 text-center" style="background-image: url('/src/soft-yellowbg.jpg');
"> <!-- Add text-center class -->
        <!-- Default to the left -->
        &copy; 2025 Ayam Penyet Mayang Sdn Bhd. All rights reserved.<br>Developed by <a href="https://github.com/Mhakim38" target="_blank">Hakim.</a>
    </footer>

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

<script>

function processData(input){
    var prefix = $('#designation').val();
    var name = $('#name').val();
    var position = $('#position').val();
    var id = $('#id').val();
    var ic = $('#ic').val();
    var fault = $('#fault').val();

    $.ajax({
        url: 'ajax/index.php',
        type: 'POST',
        data: {
            type: input,
            prefix: prefix,
            name: name,
            position: position,
            id: id,
            ic: ic,
            fault: fault
        },
        
        xhrFields: {
            responseType: 'blob'
        },
        success: function(blob) {
            // Create a link to download the file
            var link = document.createElement('a');
            link.href = window.URL.createObjectURL(blob);
            link.download = "Generated_Letter.docx";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        },
    })
}


</script>
</body>
</html>
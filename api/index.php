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

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/css/css/all.min.css">
    <script src="https://kit.fontawesome.com/b9ae426220.js" crossorigin="anonymous"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="/css/adminlte.min.css">
    <script src="MS_letter/MS_JS.js/pizzip.min.js"></script>
    <script src="MS_letter/MS_JS.js/doxctemplater.js"></script>
    <script src="MS_letter/MS_JS.js/fileSaver.min.js"></script>

    <style>

        html, body {
            height: 100%;
            margin: 0;
            background-color: #fae7c3;
            overflow-x: hidden;
        }

        :root {
          --primary: #ffcc09;
          --secondary: #808097;
          --accent: #8bc53f;
          --highlight: #2f5e2c;
          --danger: #d1121f;
          --soft: #f5a391;
          --light: #f5f6f9;
          --dark: #212529;
          --card-shadow: 0 3px 8px rgba(0,0,0,0.08);
          --transition-speed: 0.3s;
        }
        .content-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: auto;
            padding: 0; /* Remove padding that might restrict width */
            background-image: url('/src/soft-yellowbg.jpg');
        }

        .content {
            width: 100%;
            padding: 0; /* Remove padding to allow full-width content */
        }

        .btn-custom {
            background-color: #8bc53f; /* Lime Green */
            color: white;
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 16px;
        }

        /* Start from form CSS */
        .form {
            background-color: #f5a391; /* Peachy Light Orange */
            color: #212529; /* Adjust text color for contrast */
            border-radius: 20px;
            box-sizing: border-box;
            height: auto;
            padding: 20px;
            width: 1200px !important; /* Ensure this width takes precedence */
            max-width: 100%; /* Prevent overflow on smaller screens */
        }

        @media (max-width: 768px) {
            .form {
                width: 90%; /* Adjust width for smaller screens */
                height: auto; /* Allow height to adjust based on content */
            }
        }

        @media (max-width: 480px) {
            .form {
                padding: 15px; /* Reduce padding for very small screens */
            }

            .title {
                font-size: 28px; /* Adjust title size */
            }

            .subtitle {
                font-size: 14px; /* Adjust subtitle size */
            }
        }

        .title {
            color: #46453a; /* Dark Gray */
            font-family: sans-serif;
            font-size: 36px;
            font-weight: 600;
            margin-top: 30px;
            letter-spacing: 2px;
        }

        .subtitle {
            color: #46453a; /* Dark Gray */
            font-family: sans-serif;
            font-size: 16px;
            margin-top: 10px;
            letter-spacing: 2px;
        }

        .input-container {
            height: 50px;
            position: relative;
            width: 100%;
        }

        .ic1 {
            margin-top: 40px;
        }

        .ic2 {
            margin-top: 30px;
        }

        .input {
            background-color: #ffffff; /* White */
            border-radius: 12px;
            border: 0;
            box-sizing: border-box;
            color: #212529; /* Adjust text color */
            font-size: 18px;
            height: 100%;
            outline: 0;
            padding: 4px 20px 0;
            width: 100%;
        }

        select.input {
            color: #6c757d; /* Adjust placeholder color for better visibility */
            font-family: sans-serif; /* Apply sans-serif font */
            appearance: none; /* Remove default dropdown styling */
            font-size: 18px;
            font-weight: bold;
        }

        .cut {
            background-color: #f5a391; /* Dark Gray */
            border-radius: 10px;
            height: 20px;
            left: 20px;
            position: absolute;
            top: -20px;
            transform: translateY(0);
            transition: transform 200ms;
            width: 495px;
        }

        .cut-short {
            width: 65px;
        }

        .cut-medium {
            width: 120px;
        }
        
        .cut-long {
            width: 180px;
        }


        .input:focus ~ .cut,
        .input:not(:placeholder-shown) ~ .cut {
            transform: translateY(8px);
        }

        .placeholder {
            color: #6c757d; /* Adjust placeholder color for better visibility */
            font-family: sans-serif;
            left: 20px;
            line-height: 14px;
            pointer-events: none;
            position: absolute;
            transform-origin: 0 50%;
            transition: transform 200ms, color 200ms;
            top: 20px;
        }

        .input:focus ~ .placeholder,
        .input:not(:placeholder-shown) ~ .placeholder {
            transform: translateY(-30px) translateX(10px) scale(0.75);
        }

        .input:not(:placeholder-shown) ~ .placeholder {
            color: #808097;
        }

        .input:focus ~ .placeholder {
            color: #495057; /* Adjust focus color */
        }

        .submit {
            background-color: #2f5e2c; /* Red */
            border-radius: 12px;
            border: 0;
            box-sizing: border-box;
            color: #ffffff; /* Ensure text is readable */
            cursor: pointer;
            font-size: 18px;
            height: 50px;
            margin-top: 38px;
            outline: 0;
            text-align: center;
            width: 100%;
        }

        .submit:hover {
            background-color: #234720; /* Darker Red on hover */
        }
        .submit:active {
            background-color: #234720; /* Darker Red on active */
        }
        /* End form CSS */

        /* Remove the up and down buttons for number inputs */
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .header-under-cover {
            padding-top: constant(safe-area-inset-top, 20px);
            padding-top: env(safe-area-inset-top, 20px);
        }

        .navbar {
            padding-top: calc(env(safe-area-inset-top, 0px) + 5px); /* Add safe area inset for iPhone notch */
        }

    </style>
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
                                                    <option value="" disabled selected hidden>select</option>
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
                                                    <option value="" disabled selected hidden>Select Employee</option>
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
                                                <input id="name" class="input" type="text" placeholder=" " disabled style="background-color: #cfcfcf;"/>
                                                <div class="cut cut-short"></div>
                                                <label for="name" class="placeholder">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-container ic1 mt-4">
                                                <input id="position" class="input" type="text" placeholder=" " disabled style="background-color: #cfcfcf;"/>
                                                <div class="cut cut-short"></div>
                                                <label for="position" class="placeholder">Position</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input-container ic1 mt-4">
                                                <input id="id" class="input" type="text" placeholder=" " disabled style="background-color: #cfcfcf;"/>
                                                <div class="cut cut-short"></div>
                                                <label for="id" class="placeholder">Staff ID</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-container ic1 mt-4">
                                                <input id="ic" class="input" type="text" placeholder=" " disabled style="background-color: #cfcfcf;"/>
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
                                <button type="button" class="submit mr-2 mt-0" onclick="generateWarningLetter()">Warning Letter</button>
                                <button type="button" class="submit mt-0" onclick="generateReasonLetter()">Reason Letter</button>
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
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Medico - Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link href="vendor/fullcalendar/css/fullcalendar.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        th {
            background-color: #007bff;
            color: white;
            font-weight: 600;
            padding: 1rem;
            text-align: left;
            border: 1px solid #ddd;
        }
        .nav-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #333;
        }
        .brand-logo {
            width: 125px;
            height: 21px;
            font-size: 12px;
            color: white;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            display: inline-block;
        }
        @media (max-width: 768px) {
            .brand-logo {
                font-size: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Preloader start -->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- Preloader end -->

    <!-- Main wrapper start -->
    <div id="main-wrapper">
        <!-- Nav header start -->
        <div class="nav-header">
            <a href="#" class="brand-logo">
                Welcome Dr. Samar!
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!-- Nav header end -->

        <!-- Header start -->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left"></div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="images/profile/pic1.jpg" width="20" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" id="logout-link" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ml-2">Logout</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Header end -->

        <!-- Sidebar start -->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <svg id="icon-user-doctors" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        <span class="nav-text">Classes</span>
                    </a>
                        <ul aria-expanded="false">
                            <li><a href="all-classes">All Classes</a></li>
                            <li><a href="current-classes">Current Term Classes</a></li>
                            <li><a href="add-class">Add New Class</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <svg id="icon-users" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span class="nav-text">Students</span>
                    </a>
                        <ul aria-expanded="false">
                            <li><a href="all-students">All Students</a></li>
                            <li><a href="add-student">Add New Student</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <svg id="icon-file-text" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        <span class="nav-text">Schedule</span>
                    </a>
                        <ul aria-expanded="false">
                            <li><a href="doctor-schedule">My Schedule</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Sidebar end -->

        <!-- Content body start -->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Edit Student</h4>
                        </div>
                    </div>
                </div>
                <form id="addStudentForm" method="POST">
                    @csrf
                    
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="full_name">Full Name</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="university_id">University Id</label>
                                <input type="text" class="form-control" id="university_id" name="university_id" required>
                            </div>
                            <div class="mb-3">
                                <label for="study_mode">Study Mode</label>
                                <input type="text" class="form-control" id="study_mode" name="study_mode" required>
                            </div>
                            <div class="mb-3">
                                <label for="nationality">Nationality</label>
                                <input type="text" class="form-control" id="nationality" name="nationality" required>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="gender">Gender</label>
                                <input type="text" class="form-control" id="gender" name="gender" required>
                            </div>
                            <div class="mb-3">
                                <label for="age">Age</label>
                                <input type="number" class="form-control" id="age" name="age" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Edit Student</button>
                            <p id="responseMessage" class="mt-3"></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Content body end -->

        <!-- Footer start -->
        <div class="footer">
            <div class="copyright"></div>
        </div>
        <!-- Footer end -->

    </div>
    <!-- Main wrapper end -->

    <!-- Scripts -->
    <script src="vendor/global/global.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
    <script src="vendor/jqueryui/js/jquery-ui.min.js"></script>
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/fullcalendar/js/fullcalendar.min.js"></script>
    <script src="js/plugins-init/fullcalendar-init.js"></script>
    <script>
        async function logout() {
            const authToken = sessionStorage.getItem('authToken');
            try {
                const response = await fetch('http://localhost:8000/api/logout', {
                    method: 'POST',
                    headers: {
                        'Authorization': `Bearer ${authToken}`,
                        'Content-Type': 'application/json'
                    }
                });
                if (response.ok) {
                    sessionStorage.removeItem('authToken');
                    window.location.href = '/';
                } else {
                    console.error('Logout failed:', response.statusText);
                }
            } catch (error) {
                console.error('Error during logout:', error);
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            const logoutLink = document.getElementById('logout-link');
            if (logoutLink) {
                logoutLink.addEventListener('click', (event) => {
                    event.preventDefault();
                    logout();
                });
            }
        });

        function getStudentId() {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get('id');
        }

        document.addEventListener('DOMContentLoaded', () => {
            const authToken = sessionStorage.getItem('authToken');
            const studentId = getStudentId();
            if (studentId && authToken) {
                fetchStudentData(studentId, authToken);
            }

            async function fetchStudentData(studentId, authToken) {
                try {
                    const response = await fetch(`http://localhost:8000/api/show-student/${studentId}`, {
                        method: "GET",
                        headers: {
                            "Authorization": `Bearer ${authToken}`
                        }
                    });
                    if (!response.ok) {
                        throw new Error("Failed to fetch student data. Please try again.");
                    }
                    const data = await response.json();
                    const studentData = data.student;
                    document.getElementById("full_name").value = studentData.fullname;
                    document.getElementById("university_id").value = studentData.university_id;
                    document.getElementById("study_mode").value = studentData.study_mode;
                    document.getElementById("nationality").value = studentData.nationality;
                    document.getElementById("email").value = studentData.email;
                    document.getElementById("gender").value = studentData.gender;
                    document.getElementById("age").value = studentData.age;
                    document.getElementById("phone_number").value = studentData.phone_number;
                } catch (error) {
                    alert(error.message);
                }
            }
        });

        document.addEventListener("DOMContentLoaded", function () {
            const authToken = sessionStorage.getItem('authToken');
            if (!authToken) {
                window.location.href = "/";
                return;
            }
            const studentId = getStudentId();

            document.querySelector("form").addEventListener("submit", async function (event) {
                event.preventDefault();
                const formData = {
                    fullname: document.getElementById("full_name").value,
                    university_id: document.getElementById("university_id").value,
                    study_mode: document.getElementById("study_mode").value,
                    nationality: document.getElementById("nationality").value,
                    email: document.getElementById("email").value,
                    gender: document.getElementById("gender").value,
                    age: document.getElementById("age").value,
                    phone_number: document.getElementById("phone_number").value,
                };
                try {
                    const response = await fetch(`http://localhost:8000/api/edit-student/${studentId}`, {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "Authorization": `Bearer ${authToken}`
                        },
                        body: JSON.stringify(formData)
                    });
                    if (!response.ok) {
                        throw new Error("Failed to edit student. Please try again.");
                    }
                    const result = await response.json();
                    alert("Student edited successfully!");
                    window.location.href = "all-students";
                } catch (error) {
                    alert(error.message);
                }
            });
        });
    </script>
</body>
</html>
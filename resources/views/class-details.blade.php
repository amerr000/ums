<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from medico.dexignzone.com/admin/doctor-schedule.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jan 2025 09:01:33 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Class Details</title>
    <!-- Favicon icon -->
    <link href="vendor/fullcalendar/css/fullcalendar.min.css" rel="stylesheet">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />


    <style>


.card-header {
            background-color: #007bff;
            color: white;
        }
        .course-info {
            margin-bottom: 30px;
        }
        .enrolled-students-table th {
            background-color: #f8f9fa;
        }
        .student-card {
            margin-bottom: 10px;
        }
        .enroll-btn {
            margin-top: 20px;
        }
  .nav-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #333;
}

.brand-logo {
    width: 125px;      /* Set the exact width */
    height: 21px;      /* Set the exact height */
    font-size: 12px;   /* Adjust font size to fit content */
    color: white;
    overflow: hidden;  /* Hide content if it overflows */
    white-space: nowrap; /* Prevent text wrapping */
    text-overflow: ellipsis; /* Show "..." if text is too long */
    display: inline-block;
}

.nav-control {
    /* Styling for the hamburger or any control in the navigation */
}

@media (max-width: 768px) {
    .brand-logo {
        font-size: 10px;  /* Optionally adjust the font size for smaller screens */
    }
}






        /* Custom styles */
        .course-table,
        .student-list-table {
            border-collapse: collapse;
            width: 100%;
        }

        .course-table th,
        .course-table td,
        .student-list-table th,
        .student-list-table td {
            padding: 1rem;
            text-align: left;
            border: 1px solid #ddd;
        }
        

        /* Blue background for table headers */
        .course-table th, 
        .student-list-table th {
            background-color: #007bff;  /* Blue background */
            color: white;               /* White text color */
            font-weight: 600;           /* Bold text */
        }

        .course-table td,
        .student-list-table td {
            background-color: #fff;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
        }
    </style>


    </style>
	
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="#" class="brand-logo">
                
              Welcome Dr. Samar !
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            
                        </div>

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
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
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

        <!--**********************************
            Sidebar end
        ***********************************-->

		
		
        <!--**********************************
            Content body start
        ***********************************-->
    <!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4 id="title"></h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">All Classes</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">specific</a></li>
                </ol>
            </div>
        </div>
        <div class="row mt-4">
    <div class="col-12 mb-4">
        
        <a href="take-attendance?" id="attendanceLink" class="btn btn-primary">Take Attendance</a>
    </div>
    <div class="col-12">
        <a href="#" id="viewAttendaceLink">
            <button class="btn btn-info">View Attendance</button>
        </a>
    </div>
</div>


        






 <!-- Course Information Table -->
 <div class="row mt-4">
                <div class="col-12">
                    <div class="section-title mb-4">
                        <h5>Course Information</h5>
                    </div>
                    <table class="table table-bordered table-striped course-table">
                        <thead>
                            <tr>
                            <th>Course Code</th>
                    <th>Class Name</th>
                    <th>Course Description</th>
                    <th>Section</th>
                    <th>Instructor</th>
                    <th>Room Number</th>
                    <th>Type of Class</th>
                    <th>Schedule</th>
                    <th>Semester</th>
                    <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="class-data">
                        
                            <!-- here the data should be added each in tr -->
                        </tbody>
                    </table>
                </div>
            </div>










            <div class="search-students">
    <div class="card">
        <div class="card-header">
            <h5>Search for Students to Enroll</h5>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="studentSearch" class="form-label">Search and Select Student:</label>
                <input type="text" class="form-control" id="studentSearch" placeholder="Search by name or ID" autocomplete="off">
                <ul class="list-group mt-2" id="studentResults" style="max-height: 200px; overflow-y: auto; display: none;"></ul>
            </div>
            <button class="btn btn-success enroll-btn mt-3" id="enrollBtn" disabled>Enroll Selected Student</button>
        </div>
    </div>
</div>





            <!-- Enrolled Students List -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="section-title mb-4">
                        <h5>Enrolled Students</h5>
                    </div>
                    <table class="table table-bordered table-striped student-list-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Student Name</th>
                                <th>Email</th>
                                <th>nationality</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="student-data">
                            <!-- here the data should be added each in tr -->


                        </tbody>
                    </table>
                </div>
            </div>













        

        

    </div>
</div>
<!--**********************************
    Content body end
***********************************-->

        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <!--removeIf(production)-->

	<!-- Svganimation scripts -->
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
	
    <script src="vendor/jqueryui/js/jquery-ui.min.js"></script>
    <script src="vendor/moment/moment.min.js"></script>

    <script src="vendor/fullcalendar/js/fullcalendar.min.js"></script>
    <script src="js/plugins-init/fullcalendar-init.js"></script>


    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

      <!-- Delete confirmation script -->
      <script>




   



           // Retrieve the token from sessionStorage
           const authToken = sessionStorage.getItem('authToken');
           const urlParams = new URLSearchParams(window.location.search);
           const id = urlParams.get('id'); // Get the 'id' parameter from the URL

           document.getElementById("viewAttendaceLink").href = `view-attendance?id=${id}`;

// Get the value of the 'id' parameter
if (authToken) {
    const id = urlParams.get('id'); // Get the 'id' parameter from the URL
    const apiUrl = `http://localhost:8000/api/specific-class/${id}`; // Use template literal for the API URL
     // Update the <a> tag's href dynamically
     if (id) {
        document.getElementById('attendanceLink').href = `take-attendance?id=${id}`;
    }

    fetch(apiUrl, {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${authToken}`, // Include the auth token
        }
    })
    .then(response => response.json())
    .then(data => {
        // Class Data
        const uniclass = data.uniclass;
        const classDataTbody = document.getElementById('class-data');
        document.getElementById('title').innerText = uniclass.class_name;
        classDataTbody.innerHTML = `
            <tr>
                <td>${uniclass.code}</td>
                <td>${uniclass.class_name}</td>
                <td>${uniclass.description}</td>
                <td>${uniclass.section}</td>
                <td>${uniclass.teacher_name}</td>
                <td>${uniclass.room_number}</td>
                <td>${uniclass.class_type}</td>
                <td>${uniclass.schedule}</td>
                <td>${uniclass.semester}</td>
                <td>
                <a href="edit-class?id=${uniclass.id}" class="btn btn-warning btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm" onclick="confirmDelete()">Delete</button>
                                    ${uniclass.archived == 1 
        ? `<button class="btn btn-success btn-sm" onclick="unarchive(${uniclass.id})">Unarchive</button>` 
        : `<button class="btn btn-info btn-sm" onclick="archive(${uniclass.id})">Archive</button>`}
                </td>

            </tr>
        `;

        // Student Data
        const students = data.uniclass.student_enrolled;
        const studentDataTbody = document.getElementById('student-data');
        studentDataTbody.innerHTML = ''; // Clear existing rows
        let index=1;
        students.forEach(student => {
            studentDataTbody.innerHTML += `
                <tr>
                    <td>${index}</td>
                    <td>${student.fullname}</td>
                    <td>${student.email}</td>

                    <td>${student.nationality}</td>
                    
<td>
                                    <a href="specific-student?id=${student.id}" class="btn btn-info view-btn">View Full Student Information</a>
                                </td>
                </tr>
            `;
            index++;
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

























      function getCourseIdFromUrl() {
    const params = new URLSearchParams(window.location.search);
    return params.get('id'); // Extracts 'id' from the URL
}

function confirmDelete() {
    const courseId = getCourseIdFromUrl();
    
    if (!courseId) {
        alert("Course ID not found in the URL.");
        return;
    }

    const confirmation = confirm("Are you sure you want to delete this course?");
    if (!confirmation) {
        alert("Course deletion cancelled.");
        return;
    }

    // Retrieve auth token from session storage
    const authToken = sessionStorage.getItem('authToken');
    
    if (!authToken) {
        alert("Unauthorized: No authentication token found.");
        return;
    }

    // Backend API URL with course ID
    const apiUrl = `http://localhost:8000/api/delete-specific-class/${courseId}`;

    // Make the API request
    fetch(apiUrl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${authToken}`
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert("Course deleted successfully!");
            // Optionally, redirect or update UI
            window.location.href = "/all-classes";
        } else {
            alert("Failed to delete course: " + (data.message || "Unknown error"));
        }
    })
    .catch(error => {
        console.error("Error deleting course:", error);
        alert("An error occurred while deleting the course.");
    });
}








function archive() {
    const classId = getCourseIdFromUrl(); // Function to extract class ID from URL
    
    if (!classId) {
        alert("Class ID not found in the URL.");
        return;
    }

    const confirmation = confirm("Are you sure you want to archive this class?");
    if (!confirmation) {
        alert("Class archiving cancelled.");
        return;
    }

    // Retrieve authentication token
    const authToken = sessionStorage.getItem('authToken');
    
    if (!authToken) {
        alert("Unauthorized: No authentication token found.");
        return;
    }

    // Backend API URL
    const apiUrl = `http://localhost:8000/api/archive-class/${classId}`;

    // Make the API request
    fetch(apiUrl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${authToken}`
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert("Class archived successfully!");
            // Optionally, redirect or update UI
            window.location.href = "http://localhost/ums/public/all-classes";
        } else {
            alert("Failed to archive class: " + (data.message || "Unknown error"));
        }
    })
    .catch(error => {
        console.error("Error archiving class:", error);
        alert("An error occurred while archiving the class.");
    });
}







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
            // Logout was successful
            sessionStorage.removeItem('authToken'); // Clear the token from storage
            window.location.href = '/'; // Redirect to the desired page after logout
        } else {
            // Handle errors, e.g., token invalid or server issues
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
            event.preventDefault(); // Prevent the default link behavior
            logout();
        });
    }
});














































document.addEventListener("DOMContentLoaded", function () {
    const studentSearch = document.getElementById("studentSearch");
    const studentResults = document.getElementById("studentResults");
    const enrollBtn = document.getElementById("enrollBtn");
    let selectedStudentId = null;

    const classId = new URLSearchParams(window.location.search).get("id"); // Get class ID from URL

    studentSearch.addEventListener("input", async function () {
        const searchQuery = studentSearch.value.trim();
        if (searchQuery.length < 2) {
            studentResults.style.display = "none";
            return;
        }

        const token = sessionStorage.getItem("authToken");
        if (!token) {
            console.error("No auth token found!");
            return;
        }

        try {
            const response = await fetch(`http://localhost:8000/api/getNotRegisteredStudentsByName/${searchQuery}/${classId}`, {
                headers: {
                    "Authorization": `Bearer ${token}`,
                    "Accept": "application/json"
                }
            });

            if (!response.ok) {
                throw new Error("Failed to fetch students");
            }

            const data = await response.json();
            displayStudentResults(data.students);
        } catch (error) {
            console.error("Error fetching students:", error);
        }
    });

    function displayStudentResults(students) {
        studentResults.innerHTML = "";
        if (students.length === 0) {
            studentResults.style.display = "none";
            return;
        }

        students.forEach(student => {
            const li = document.createElement("li");
            li.classList.add("list-group-item", "list-group-item-action");
            li.textContent = `${student.fullname} (ID: ${student.university_id})`;
            li.dataset.id = student.id;

            li.addEventListener("click", function () {
                studentSearch.value = student.fullname;
                selectedStudentId = student.id;
                studentResults.style.display = "none";
                enrollBtn.disabled = false;
            });

            studentResults.appendChild(li);
        });

        studentResults.style.display = "block";
    }
});

















//here is the js to enroll the student 

document.addEventListener("DOMContentLoaded", function () {
    const enrollBtn = document.getElementById("enrollBtn");
    const studentSearch = document.getElementById("studentSearch");
    const studentResults = document.getElementById("studentResults");
    let selectedStudentId = null;

    const classId = getClassIdFromURL(); // Function to extract class ID from URL

    enrollBtn.addEventListener("click", async function () {
        if (!selectedStudentId) {
            alert("Please select a student to enroll.");
            return;
        }

        try {
            const authToken = sessionStorage.getItem('authToken'); // Retrieve auth token
            if (!authToken) {
                alert("You are not authenticated.");
                return;
            }

            const response = await fetch("http://localhost:8000/api/enrollStudent", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": `Bearer ${authToken}`
                },
                body: JSON.stringify({
                    student_id: selectedStudentId,
                    class_id: classId
                })
            });

            const data = await response.json();

            if (response.ok) {
                alert("Student successfully enrolled!");
                document.getElementById("studentSearch").value = "";
            } else {
                alert(`Error: ${data.message || "Could not enroll student."}`);
            }
        } catch (error) {
            console.error("Error enrolling student:", error);
            alert("Something went wrong. Please try again.");
        }
    });

    studentSearch.addEventListener("input", async function () {
        const searchQuery = studentSearch.value.trim();
        if (searchQuery.length < 2) {
            studentResults.style.display = "none";
            return;
        }

        const token = sessionStorage.getItem("authToken");
        if (!token) {
            console.error("No auth token found!");
            return;
        }

        try {
            const response = await fetch(`http://localhost:8000/api/getNotRegisteredStudentsByName/${searchQuery}/${classId}`, {
                headers: {
                    "Authorization": `Bearer ${token}`,
                    "Accept": "application/json"
                }
            });

            if (!response.ok) {
                throw new Error("Failed to fetch students");
            }

            const data = await response.json();
            displayStudentResults(data.students);
        } catch (error) {
            console.error("Error fetching students:", error);
        }
    });

    function displayStudentResults(students) {
        studentResults.innerHTML = "";
        if (students.length === 0) {
            studentResults.style.display = "none";
            return;
        }

        students.forEach(student => {
            const li = document.createElement("li");
            li.classList.add("list-group-item", "list-group-item-action");
            li.textContent = `${student.fullname} (ID: ${student.university_id})`;
            li.dataset.id = student.id;

            li.addEventListener("click", function () {
                studentSearch.value = student.fullname;
                selectedStudentId = student.id;
                studentResults.style.display = "none";
                enrollBtn.disabled = false;
            });

            studentResults.appendChild(li);
        });

        studentResults.style.display = "block";
    }

    function getClassIdFromURL() {
        const params = new URLSearchParams(window.location.search);
        return params.get("id"); // Assumes URL is like `?id=1`
    }
});















































function unarchive() {
    const classId = getCourseIdFromUrl(); // Function to extract class ID from URL

    if (!classId) {
        alert("Class ID not found in the URL.");
        return;
    }

    const confirmation = confirm("Are you sure you want to unarchive this class?");
    if (!confirmation) {
        alert("Class unarchiving cancelled.");
        return;
    }

    // Retrieve authentication token
    const authToken = sessionStorage.getItem('authToken');

    if (!authToken) {
        alert("Unauthorized: No authentication token found.");
        return;
    }

    // Backend API URL for unarchive
    const apiUrl = `http://localhost:8000/api/unarchive-class/${classId}`;

    // Make the API request
    fetch(apiUrl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${authToken}`
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert("Class unarchived successfully!");
            // Optionally, redirect or update UI
            window.location.href = "http://localhost/ums/public/all-classes";
        } else {
            alert("Failed to unarchive class: " + (data.message || "Unknown error"));
        }
    })
    .catch(error => {
        console.error("Error unarchiving class:", error);
        alert("An error occurred while unarchiving the class.");
    });
}


    </script>

</body>

<!-- Mirrored from medico.dexignzone.com/admin/doctor-schedule.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jan 2025 09:01:34 GMT -->
</html>
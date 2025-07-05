<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from medico.dexignzone.com/admin/doctor-schedule.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jan 2025 09:01:33 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ums </title>
    <!-- Favicon icon -->
    <link href="vendor/fullcalendar/css/fullcalendar.min.css" rel="stylesheet">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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
    width: 125px;      /* Set the exact width */
    height: 21px;      /* Set the exact height */
    font-size: 12px;   /* Adjust font size to fit content */
    color: white;
    overflow: hidden;  /* Hide content if it overflows */
    white-space: nowrap; /* Prevent text wrapping */
    text-overflow: ellipsis; /* Show "..." if text is too long */
    display: inline-block;
}

@media (max-width: 768px) {
    .brand-logo {
        font-size: 10px;  /* Optionally adjust the font size for smaller screens */
    }
}


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
        <div class="container-fluid">
        <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Edit Class</h4>
                        </div>
                    </div>
                </div>
            <form id="editClassForm" method="POST">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="class_name">Course Name</label>
                            <input type="text" class="form-control" id="class_name" name="class_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="code">Course Code</label>
                            <input type="text" class="form-control" id="code" name="code" required>
                        </div>
                        <div class="mb-3">
                            <label for="description">Course Description</label>
                            <input type="text" class="form-control" id="description" name="description" required>
                        </div>
                        <div class="mb-3">
                            <label for="section">Section</label>
                            <input type="text" class="form-control" id="section" name="section" required>
                        </div>
                        <div class="mb-3">
                            <label for="class_type">Class Type</label>
                            <input type="text" class="form-control" id="class_type" name="class_type" required>
                        </div>
                        <div class="mb-3">
                            <label for="semester">Semester</label>
                            <input type="text" class="form-control" id="semester" name="semester" required>
                        </div>
                        <div class="mb-3">
                            <label for="schedule">Schedule</label>
                            <input type="text" class="form-control" id="schedule" name="schedule" required>
                        </div>
                        <div class="mb-3">
                            <label for="room_number">Room Number</label>
                            <input type="text" class="form-control" id="room_number" name="room_number" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Class</button>
                        <p id="responseMessage" class="mt-3"></p>
                    </div>
                </div>
            </form>
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


    <script>






async function logout() {

const authToken = sessionStorage.getItem('authToken');

try {
const response = await fetch('http://13.53.198.104/api/logout', {
method: 'POST',
headers: {
    'Authorization': `Bearer ${authToken}`,
    'Content-Type': 'application/json'
}
});

if (response.ok) {
// Logout was successful
sessionStorage.removeItem('authToken'); // Clear the token from storage
window.location.href = "{{ url('/') }}"; // Redirect to the desired page after logout
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





















document.addEventListener("DOMContentLoaded", async function () {
            const authToken = sessionStorage.getItem('authToken');
            if (!authToken) {
                window.location.href = "{{ url('/') }}"; // Redirect to login page
                return;
            }

            // Get the class ID from the URL
            const urlParams = new URLSearchParams(window.location.search);
            const classId = urlParams.get('id');
            if (!classId) {
                alert("No class ID found in URL.");
                return;
            }

            try {
                // Fetch class data from API
                const response = await fetch(`http://13.53.198.104/api/specific-class/${classId}`, {
                    method: 'GET',
                    headers: {
                        'Authorization': `Bearer ${authToken}`,
                        'Content-Type': 'application/json'
                    }
                });

                if (!response.ok) {
                    throw new Error("Failed to fetch class data");
                }

                const data = await response.json();
                const uniclass = data.uniclass;

                // Populate form fields with the fetched class data
                document.getElementById("class_name").value = uniclass.class_name;
                document.getElementById("code").value = uniclass.code;
                document.getElementById("description").value = uniclass.description;
                document.getElementById("section").value = uniclass.section;
                document.getElementById("class_type").value = uniclass.class_type;
                document.getElementById("semester").value = uniclass.semester;
                document.getElementById("schedule").value = uniclass.schedule;
                document.getElementById("room_number").value = uniclass.room_number;

            } catch (error) {
                console.error("Error fetching class data:", error);
                alert("Failed to fetch class data.");
            }

            // Handle form submission
            document.getElementById("editClassForm").addEventListener("submit", async function (event) {
                event.preventDefault(); // Prevent default form submission

                const formData = {
                    class_name: document.getElementById("class_name").value,
                    code: document.getElementById("code").value,
                    description: document.getElementById("description").value,
                    section: document.getElementById("section").value,
                    class_type: document.getElementById("class_type").value,
                    semester: document.getElementById("semester").value,
                    schedule: document.getElementById("schedule").value,
                    room_number: document.getElementById("room_number").value,
                    archived: 0 // Assuming archived is required
                };

                try {
                    const response = await fetch(`http://13.53.198.104/api/edit-class/${classId}`, {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "Authorization": `Bearer ${authToken}`
                        },
                        body: JSON.stringify(formData)
                    });

                    if (!response.ok) {
                        throw new Error("Failed to update class. Please try again.");
                    }

                    const result = await response.json();
                    alert("Class updated successfully!");
                    window.location.href = "all-classes"; // Redirect to class list
                } catch (error) {
                    alert(error.message);
                }
            });
        });















    </script>

</body>

<!-- Mirrored from medico.dexignzone.com/admin/doctor-schedule.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jan 2025 09:01:34 GMT -->
</html>
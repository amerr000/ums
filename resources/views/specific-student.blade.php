<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from medico.dexignzone.com/admin/patient-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 16:13:02 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ums </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="vendor/jqvmap/css/jqvmap.min.css">
	<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
	<link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <style>

        /* Styling the 'Teacher's Note' label */
.teacher-note-label {
    font-size: 1.2rem; /* Slightly larger font size */
    color: #007bff; /* Bootstrap's blue color */
    font-weight: bold; /* Making the label bold */
    margin-bottom: 10px; /* Adding some space below the label */
    display: block; /* Making the label a block element for better alignment */
}

/* Optional: Adding a custom focus effect for the textarea */
#teacher-note:focus {
    border-color: #007bff; /* Blue border on focus */
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Optional blue shadow on focus */
}

.table-blue tr {
    transition: background-color 0.3s ease;
}

.table-blue tr:hover {
    background-color: #0056b3; /* Light blue color on hover */
    cursor: pointer;
}


.table-blue {
            background-color: #007bff;
            color: white;
        }
        .table-blue th {
            color: white;
        }
        .table-blue td {
            color: white;
        }



.DZ-bt-support-now {
    display: none !important; /* Hides the button */
}


.DZ-bt-buy-now {
    display: none !important; /* Hides the button */
}



.header-right {
    margin-left: auto; /* Pushes the header-right to the right */
}

#profileImage {
    display: flex; /* Ensures the image is treated as a flex item */
    justify-content: center; /* Center the image within its container */
}

#profileImage img {
    width: 60px; /* Adjust width as needed */
    height: 60px; /* Adjust height as needed */
}

        #edit-button{
            color: white;
            text-decoration: none;
        }
        .text-blue{
            color:rgb(54, 149, 235);
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
            side bar start
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
            side bar end
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
                            <h4>Student Profile</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Professor</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Specific Student</a></li>
                        </ol>
                    </div>
                </div>
               
				
                <div class="row">
					<div class="col-xl-4 col-xxl-4 col-lg-4 col-md-12">
						<div class="card">
							<div class="text-center py-4 px-5 overlay-box" style="background-image: url(images/big/img1.jpg);">
								<div class="profile-photo">
									<img src="images/patients/patient_avatar.png" width="100" class="img-fluid rounded-circle" alt="">
								</div>
								<h3 class="mt-3 mb-1 text-white"></h3>
							</div>
							<ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Student ID</span> <strong class="text-muted"></strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Study Mode</span> <strong class="text-muted"></strong></li>

                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Nationality</span> <strong class="text-muted"></strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Email</span> <strong class="text-muted"></strong></li>

								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Gender</span> <strong class="text-muted"></strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Years Old</span> 		<strong class="text-muted"></strong></li>
                                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Phone Number</span> <strong class="text-muted"></strong></li>

                                




							</ul>
                           
                        </div>
					</div>
                    <div class="col-xl-8 col-xxl-8 col-lg-8 col-md-12">
						<div class="row">
							
							<div class="col-xl-6 col-xxl-6 col-lg-6 col-md-6">
								
									
								</div>
							</div>
                            <div class="container mt-5">
    <table class="table table-bordered table-blue">
        <thead>
            <tr>
                <th>Course ID</th>
                <th>Course Name</th>
                <th>Absences</th>
                <th>Total Classes Conducted</th>
                <th>Attendance Percentage</th>
            </tr>
        </thead>
        <tbody>
        
        </tbody>
    </table>
</div>










							
						</div>
					</div>

           
   

                    <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#" id="" method="POST">
                    <div class="form-group">
                        <label for="teacher-note" class="teacher-note-label">Teacher's Note</label>
                        <textarea class="form-control" id="teacher-note" rows="4" placeholder="Enter your notes for the student here..."></textarea>
                    </div>

                    <!-- Save Button -->
                    <button type="button" class="btn btn-primary" id="save-button">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>





<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#" id="" method="POST">
                    <div class="form-group">
                        <label for="teacher-note" class="teacher-note-label">Edit This Student Information</label>
                    </div>

                    <!-- Save Button -->
                    <a href="edit-student" class="btn btn-primary" id="edit-button">Edit</a>
                    </form>
            </div>
        </div>
    </div>
</div>




				






        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Amer Reslan</a> 2024</p>
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

    <!-- Vectormap -->
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
    
    <!-- Counter Up -->
    <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"></script>
		
	<!-- Chart sparkline plugin files -->
    <script src="vendor/jquery-sparkline/jquery.sparkline.min.js"></script>
	
		<!-- Demo scripts -->
    <script src="js/dashboard/dashboard-2.js"></script>
	
	<!-- Svganimation scripts -->
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>


<script>


  document.addEventListener('DOMContentLoaded', function () {
        const authToken = sessionStorage.getItem('authToken');

        if (!authToken) {
            // Redirect to login page if no token is found
            window.location.href = "{{ url('/') }}";
        
        }
    });


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

















document.addEventListener('DOMContentLoaded', () => {
    document.getElementById("edit-button").href = `edit-student?id=${getClassIdFromURL()}`;
    const id=getClassIdFromURL();
    const apiUrl = `http://localhost:8000/api/get-student-summary/${id}`; // Update with the actual student ID

    async function fetchStudentData() {
        try {
            const response = await fetch(apiUrl, {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${sessionStorage.getItem('authToken')}`,
                    'Content-Type': 'application/json'
                }
            });

            if (response.ok) {
                const data = await response.json();
                populateStudentProfile(data.student);
                populateClassesTable(data.classes);
            } else {
                console.error('Failed to fetch student data:', response.statusText);
            }
        } catch (error) {
            console.error('Error fetching student data:', error);
        }
    }

    function populateStudentProfile(student) {
        document.querySelector('.profile-photo img').src = 'images/patients/patient_avatar.png'; // Update with actual image if available
        document.querySelector('.text-center h3').textContent = student.fullname;
        document.querySelector('.list-group-item:nth-child(1) strong').textContent = student.university_id;
        document.querySelector('.list-group-item:nth-child(2) strong').textContent = student.study_mode;
        document.querySelector('.list-group-item:nth-child(3) strong').textContent = student.nationality;
        document.querySelector('.list-group-item:nth-child(4) strong').textContent = student.email;
        document.querySelector('.list-group-item:nth-child(5) strong').textContent = student.gender;
        document.querySelector('.list-group-item:nth-child(6) strong').textContent = student.age;
        document.querySelector('.list-group-item:nth-child(7) strong').textContent = student.phone_number;
       document.getElementById("teacher-note").value = student.note;

    }

    function populateClassesTable(classes) {
        const tbody = document.querySelector('.table-blue tbody');
        tbody.innerHTML = ''; // Clear existing rows

        classes.forEach(classData => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${classData.course_id}</td>
                <td>${classData.class_name}</td>
                <td>${classData.absences}</td>
                <td>${classData.total_classes_conducted}</td>
                <td>${classData.attendance_percentage.toFixed(2)}%</td>
            `;
            tbody.appendChild(row);
        });
    }

    fetchStudentData();
});












function getClassIdFromURL() {
        const params = new URLSearchParams(window.location.search);
        return params.get("id"); // Assumes URL is like `?id=1`
    }

    document.getElementById("save-button").href = `edit-student?id=${getClassIdFromURL()}`;
















    document.getElementById('save-button').addEventListener('click', async function() {
    // Get the note from the textarea
    const note = document.getElementById('teacher-note').value;
    
    // Get the student ID from the URL
    const studentId = getClassIdFromURL();
    const url = `http://localhost:8000/api/update-student-note/${studentId}`;

    // Prepare the request payload
    const data = {
        note: note
    };

    // Get the auth token from sessionStorage
    const authToken = sessionStorage.getItem('authToken');

    try {
        // Send the request
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${authToken}`
            },
            body: JSON.stringify(data)
        });

        const responseData = await response.json();

        if (response.ok) {
            alert(responseData.message);
        } else {
            alert('An error occurred while updating the note: ' + responseData.message);
        }
    } catch (error) {
        console.error('Error:', error);
        alert('An error occurred while updating the note.');
    }
});











    </script>
  

</body>

<!-- Mirrored from medico.dexignzone.com/admin/patient-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 16:13:02 GMT -->
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All-Students</title>
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
        .DZ-bt-support-now,
        .DZ-bt-buy-now {
            display: none !important;
        }
        .header-right {
            margin-left: auto;
        }
        #profileImage {
            display: flex;
            justify-content: center;
        }
        #profileImage img {
            width: 60px;
            height: 60px;
        }
        #searchResults {
            padding-left: 1.5em;
            border-radius: 10px;
            width: 20%;
            margin-top: 1em;
            margin-left: 6em;
            background-color: rgb(180, 220, 255);
            color: white;
            z-/: 9999999999999;
            position: absolute;
        }
        .resultBack {
            padding-top: 0.5em;
        }
        #view-profile-button {
            font-size: 1em;
            font-weight: bold;
            color: white;
            text-decoration: none;
            line-height: 1;
            margin: 0;
            display: inline-block;
        }
        .header-left {
            margin-left: 10px;
            margin-top: 10px;
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
    

        <!-- Content body start -->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>All Students</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Professor</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">All Students</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6 text-right">
                        <input type="search" class="form-control w-50" placeholder="Search for a student ...">
                    </div>
                </div>
                <div class="row" id="students-list">
                    <!-- Student cards will be inserted here dynamically -->
                </div>
            </div>
        </div>
        <!-- Content body end -->

        <div class="footer">
            <div class="copyright">
            </div>
        </div>

    </div>

    <script src="vendor/global/global.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>

    <script>
        // Fetching student data and displaying it on the page
        async function fetchStudents() {
            const token = sessionStorage.getItem('authToken');
            const response = await fetch('http://localhost:8000/api/view-all-students', {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${token}`
                }
            });

            const data = await response.json();
            if (data && data.students) {
                const studentsList = document.getElementById('students-list');
                studentsList.innerHTML = ''; // Clear existing content

                data.students.forEach(student => {
                    const studentCard = document.createElement('div');
                    studentCard.classList.add('col-xl-4', 'col-lg-4', 'col-md-6');
                    studentCard.innerHTML = `
                        <div class="card">
                            <div class="text-center py-4 px-5 overlay-box" style="background-image: url(images/big/img1.jpg);">
                                <div class="profile-photo">
                                    <img src="images/patients/patient_avatar.png" width="100" class="img-fluid rounded-circle" alt="">
                                </div>
                                <h3 class="mt-3 mb-1 text-white">${student.fullname}</h3>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="mb-0">Student Id</span> 
                                    <strong class="text-muted">${student.university_id}</strong>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="mb-0">Student Nationality</span> 		
                                    <strong class="text-muted">${student.nationality}</strong>
                                </li>
                            </ul>
                            <div class="card-footer border-0 mt-0">
                                <a href="specific-student?id=${student.id}" class="btn btn-primary btn-lg btn-block text-white text-decoration-none">
                                    <h4 class="m-0 text-white">View Profile</h4>
                                </a>
                            </div>
                        </div>
                    `;
                    studentsList.appendChild(studentCard);
                });
            } else {
                console.error('Failed to fetch students');
            }
        }

        // Call the function to fetch students
        fetchStudents();





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
    const searchInput = document.querySelector('input[type="search"]');
    const authToken = sessionStorage.getItem('authToken');

    if (!authToken) {
        console.error("No authentication token found.");
        return;
    }

    // Fetch students by search query
    async function fetchStudents(query) {
        try {
            const response = await fetch(`http://localhost:8000/api/getStudentIdName/${query}`, {
                method: "GET",
                headers: {
                    "Authorization": `Bearer ${authToken}`,
                    "Content-Type": "application/json",
                },
            });

            if (!response.ok) {
                throw new Error("Failed to fetch students");
            }

            const data = await response.json();
            return data.students || []; // Extracting students from the response
        } catch (error) {
            console.error(error.message);
            return [];
        }
    }

    // Update the search results display
    function updateSearchResults(students) {
        let resultsContainer = document.getElementById("search-results");
        
        // Create results container if it doesn't exist
        if (!resultsContainer) {
            resultsContainer = document.createElement("div");
            resultsContainer.id = "search-results";
            resultsContainer.className = "dropdown-menu show";
            searchInput.parentNode.appendChild(resultsContainer);
        }

        resultsContainer.innerHTML = ""; // Clear previous results

        if (students.length === 0) {
            resultsContainer.innerHTML = '<p class="dropdown-item text-muted">No results found.</p>';
            return;
        }

        // Display the students in the dropdown
        students.forEach(student => {
            const link = document.createElement("a");
            link.href = `student-details?id=${student.id}`; // Assuming this is how you'll link to student details
            link.className = "dropdown-item";
            link.textContent = `${student.fullname} - ID: ${student.university_id}`;
            resultsContainer.appendChild(link);
        });
    }

    let debounceTimeout;
    searchInput.addEventListener("input", function () {
        const query = this.value.trim();

        // Only proceed if the query length is 3 or more characters
        if (query.length >= 3) {
            clearTimeout(debounceTimeout);

            debounceTimeout = setTimeout(() => {
                fetchStudents(query).then(updateSearchResults);
            }, 300); // Debounced to prevent excessive API calls
        } else {
            // Remove the search results if less than 3 characters
            document.getElementById("search-results")?.remove();
        }
    });

    // Hide results when clicking outside the search input or results
    document.addEventListener("click", function (event) {
        if (!searchInput.contains(event.target) && !document.getElementById("search-results")?.contains(event.target)) {
            document.getElementById("search-results")?.remove();
        }
    });
});




    </script>
</body>

</html>

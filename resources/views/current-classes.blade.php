<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ums</title>
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

        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Current Term Classes</h4>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6 text-right">
                        <input type="search" class="form-control w-50" placeholder="Search Classes...">
                    </div>
                </div>

                <!-- Table to list all classes -->
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Course Code</th>
                            <th>Class Name</th>
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
                        <!-- Data will be populated here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="vendor/global/global.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="vendor/jqueryui/js/jquery-ui.min.js"></script>
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/fullcalendar/js/fullcalendar.min.js"></script>
    <script src="js/plugins-init/fullcalendar-init.js"></script>

    <script>
        // Retrieve the token from sessionStorage
        const authToken = sessionStorage.getItem('authToken');

        if (authToken) {
            const apiUrl = 'https://webbogo.org/api/view-current-term-classes'; // Replace with your API URL

            fetch(apiUrl, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${authToken}`
                }
            })
            .then(response => response.json())
            .then(data => {
                const classes = data.uniclasses;

                if (Array.isArray(classes)) {
                    const classDataElement = document.getElementById('class-data');
                    classDataElement.innerHTML = ''; // Clear existing data

                    classes.forEach((classItem, index) => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${index + 1}</td>
                            <td>${classItem.code}</td>
                            <td>${classItem.class_name}</td>
                            <td>${classItem.section}</td>
                            <td>${classItem.teacher_name}</td>
                            <td>${classItem.room_number}</td>
                            <td>${classItem.class_type}</td>
                            <td>${classItem.schedule}</td>
                            <td>${classItem.semester}</td>
                            <td>
                                <a href="class-details?id=${classItem.id}" class="btn btn-info btn-sm">View</a>
                                
                            </td>
                        `;
                        classDataElement.appendChild(row);
                    });
                } else {
                    console.error('Error: Response is not an array.', data);
                }
            })
            .catch(error => {
                console.error('Error fetching class data:', error);
            });
        } else {
            // Redirect to login page if no token is found
            window.location.href = "{{ url('/') }}";
        }



        async function logout() {

            const authToken = sessionStorage.getItem('authToken');

    try {
        const response = await fetch('https://webbogo.org/api/logout', {
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













document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.querySelector('input[type="search"]');
    const authToken = sessionStorage.getItem('authToken');

    if (!authToken) {
        console.error("No authentication token found.");
        return;
    }

    async function fetchCourses(query) {
        try {
            const response = await fetch(`https://webbogo.org/api/getCourseIdNameSection/${query}`, {
                method: "GET",
                headers: {
                    "Authorization": `Bearer ${authToken}`,
                    "Content-Type": "application/json",
                },
            });

            if (!response.ok) {
                throw new Error("Failed to fetch courses");
            }

            const data = await response.json();
            return data.uniclasses || []; // Extracting `uniclasses` from the response
        } catch (error) {
            console.error(error.message);
            return [];
        }
    }

    function updateSearchResults(courses) {
        let resultsContainer = document.getElementById("search-results");
        if (!resultsContainer) {
            resultsContainer = document.createElement("div");
            resultsContainer.id = "search-results";
            resultsContainer.className = "dropdown-menu show";
            searchInput.parentNode.appendChild(resultsContainer);
        }

        resultsContainer.innerHTML = ""; // Clear previous results

        if (courses.length === 0) {
            resultsContainer.innerHTML = '<p class="dropdown-item text-muted">No results found.</p>';
            return;
        }

        courses.forEach(course => {
            const link = document.createElement("a");
            link.href = `class-details?id=${course.id}`;
            link.className = "dropdown-item";
            link.textContent = `${course.class_name} - Section ${course.section}`;
            resultsContainer.appendChild(link);
        });
    }

    let debounceTimeout;
    searchInput.addEventListener("input", function () {
        const query = this.value.trim();

        // Make sure there are at least 3 characters before triggering the search
        if (query.length >= 3) {
            clearTimeout(debounceTimeout);

            debounceTimeout = setTimeout(() => {
                fetchCourses(query).then(updateSearchResults);
            }, 300); // Debounce to prevent excessive API calls
        } else {
            // Remove the search results if less than 3 characters
            document.getElementById("search-results")?.remove();
        }
    });

    // Hide results when clicking outside
    document.addEventListener("click", function (event) {
        if (!searchInput.contains(event.target) && !document.getElementById("search-results")?.contains(event.target)) {
            document.getElementById("search-results")?.remove();
        }
    });
});

    </script>
</body>
</html>

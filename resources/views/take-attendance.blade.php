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

    <style>



.cause {
    width: 100%;  /* Make the text box take up full width of the parent cell */
    padding: 8px;  /* Add some space inside the input */
    border: 1px solid #ccc;  /* Light border */
    border-radius: 4px;  /* Rounded corners */
    background-color: #f9f9f9;  /* Light background color */
    font-size: 14px;  /* Text size */
    color: #333;  /* Text color */
    transition: all 0.3s ease;  /* Smooth transition for focus effect */
}
.cause:focus {
    border-color: #007bff;  /* Highlight border color when focused */
    background-color: #e6f7ff;  /* Light blue background when focused */
    outline: none;  /* Remove default outline */
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

        /* Custom switch styles */
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            border-radius: 50%;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #4CAF50;
        }

        input:checked + .slider:before {
            transform: translateX(26px);
        }

        /* Round sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
        th{
             background-color: #007bff;  /* Blue background */
            color: white;               /* White text color */
            font-weight: 600; 
            padding: 1rem;
            text-align: left;
            border: 1px solid #ddd; 
        }
    </style>
</head>

<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">

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

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell ai-icon" href="#" role="button" data-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                    </svg>
                                    <div class="pulse-css"></div>
                                </a>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="images/profile/pic1.jpg" width="20" alt="" />
                                </a>
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
                            <h4>Take attendance</h4>
                        </div>
                    </div>
                </div>

                <!-- Content starts here -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>introduction to computer science</h4>
                                <form action="#" id="attendanceForm" method="POST">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Student ID</th>
                                                <th scope="col">Student Name</th>
                                                <th scope="col">Attendance</th>
                                                <th scope="col">Cause of Absence (optional)</th>
                                            </tr>
                                        </thead>
                                        <tbody class="student-data">
                                            
                                        </tbody>
                                    </table>
                                    <button type="submit" class="btn btn-primary">Submit Attendance</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content ends here -->

            </div>
        </div>

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










// Function to fetch student data from the API and populate the form
async function fetchStudentData() {
    // Get the authentication token from session storage
    const authToken = sessionStorage.getItem('authToken');
    
    if (!authToken) {
        alert('Authentication token not found!');
        return;
    }

    // URL to fetch data from
    const apiUrl = 'http://localhost:8000/api/view-students-in-class/1';

    try {
        // Fetch student data from the API
        const response = await fetch(apiUrl, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${authToken}`,
                'Content-Type': 'application/json'
            }
        });

        const data = await response.json();

        // Check if the API returns students data
        if (data && data.students && Array.isArray(data.students)) {
            const studentDataContainer = document.querySelector('.student-data');
            studentDataContainer.innerHTML = ''; // Clear any existing data in the table body

            // Iterate through the students and populate the table
            data.students.forEach(student => {
                const row = document.createElement('tr');

                // Add student ID
                const studentIdCell = document.createElement('td');
                studentIdCell.textContent = student.university_id;
                row.appendChild(studentIdCell);

                // Add student name
                const studentNameCell = document.createElement('td');
                studentNameCell.textContent = student.fullname;
                row.appendChild(studentNameCell);

                // Add attendance checkbox with label and switch styling
                const attendanceCell = document.createElement('td');
                const attendanceLabel = document.createElement('label');
                attendanceLabel.classList.add('switch');

                const attendanceCheckbox = document.createElement('input');
                attendanceCheckbox.type = 'checkbox';
                attendanceCheckbox.name = `attendance[${student.id}]`; // Dynamic name for each student

                const slider = document.createElement('span');
                slider.classList.add('slider', 'round');

                attendanceLabel.appendChild(attendanceCheckbox);
                attendanceLabel.appendChild(slider);
                attendanceCell.appendChild(attendanceLabel);
                row.appendChild(attendanceCell);

                // Add cause of absence text input
                const causeCell = document.createElement('td');
                const causeInput = document.createElement('input');
                causeInput.type = 'text';
                causeInput.classList.add('cause');
                causeCell.appendChild(causeInput);
                row.appendChild(causeCell);

                // Append the row to the table body
                studentDataContainer.appendChild(row);
            });
        } else {
            console.error('No student data found.');
        }
    } catch (error) {
        console.error('Error fetching student data:', error);
    }
}

// Run the fetchStudentData function when the page is loaded
document.addEventListener('DOMContentLoaded', () => {
    fetchStudentData();
});









// now we will write the function in which we can record the attendance 
document.addEventListener('DOMContentLoaded', () => {
    const attendanceForm = document.getElementById('attendanceForm');

    if (attendanceForm) {
        attendanceForm.addEventListener('submit', async (event) => {
            event.preventDefault(); // Prevent default form submission

            // Get the class ID from the URL
            const urlParams = new URLSearchParams(window.location.search);
            const classId = urlParams.get('id');
            
            if (!classId) {
                alert('Class ID not found in the URL.');
                return;
            }

            // Get the authentication token from sessionStorage
            const authToken = sessionStorage.getItem('authToken');

            if (!authToken) {
                alert('Authentication token not found. Please log in again.');
                return;
            }

            // Prepare attendance data
            const studentsData = [];
            document.querySelectorAll('.student-data tr').forEach(row => {
                const studentId = row.cells[0].textContent.trim(); // Get student ID from table
                const isPresent = row.querySelector('input[type="checkbox"]').checked;
                const absenceCause = row.querySelector('.cause').value.trim();

                studentsData.push({
                    student_id: studentId,
                    status: isPresent ? 'present' : 'absent',
                    absence_cause: isPresent ? null : absenceCause // Only store cause if absent
                });
            });

            // Send API request
            try {
                const response = await fetch(`http://localhost:8000/api/create-attendance/${classId}`, {
                    method: 'POST',
                    headers: {
                        'Authorization': `Bearer ${authToken}`,
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ students: studentsData })
                });

                const data = await response.json();

                if (response.ok) {
                    alert('Attendance recorded successfully!');
                    window.location.reload(); // Refresh the page after submission
                } else {
                    alert(`Error: ${data.message || 'Failed to record attendance'}`);
                }
            } catch (error) {
                console.error('Error submitting attendance:', error);
                alert('An error occurred while submitting attendance.');
            }
        });
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



    </script>

</body>

</html>

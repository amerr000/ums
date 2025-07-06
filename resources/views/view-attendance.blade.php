<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ums</title>
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

.custom-date-input {
      border-color: #007bff;
      color: #007bff;
    }
    .custom-date-input:focus {
      border-color: #0056b3;
      box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
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

        th {
            background-color: #007bff;
            color: white;
            font-weight: 600;
            padding: 1rem;
            text-align: left;
            border: 1px solid #ddd;
        }

        td.status {
            text-align: center;
            font-weight: bold;
            color: white;
        }

        .bg-success {
            background-color: #28a745 !important; /* Green background for Present */
        }

        .bg-danger {
            background-color: #dc3545 !important; /* Red background for Absent */
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
                          
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="images/profile/pic1.jpg" width="20" alt="" />
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
                            <h4>View attendance</h4>
                        </div>
                    </div>
                </div>

                <!-- Content starts here -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 align="center"></h4>
                                
                    <div class="mb-3">
                    <label for="attendanceDate" class="form-label">Select Date</label>
                    <input type="date" class="form-control custom-date-input col-12 col-sm-4 col-md-3 col-lg-2" id="attendanceDate" aria-label="Select Date" max="" required>
                    </div>
               
                                <form action="class-details" method="POST">
                                    <table class="table table-striped" id="attendance-table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Student ID</th>
                                                <th scope="col">Student Name</th>
                                                <th scope="col">Attendance Status</th>
                                                <th scope="col">Cause of Absence (optional)</th>
                                                <th scope="col">Change Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="text-center bg-warning">
    <td colspan="5" class="py-3 text-dark font-weight-bold" style="font-size: 1.25rem;">Please select a date to view the attendance for that day</td>
</tr>
                                        </tbody>
                                    </table>
                                    <button type="submit" id="submitAttendance" class="btn btn-primary">Submit Attendance</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Statistics Table starts here -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>Student Attendance Overview</h4>
                                <table class="table table-striped" id="summary-table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Student ID</th>
                                            <th scope="col">Student Name</th>
                                            <th scope="col">Present Count</th>
                                            <th scope="col">Absent Count</th>
                                            <th scope="col">Total Classes Conducted</th>
                                            <th scope="col">Attendance Percentage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Statistics Table ends here -->

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


  document.addEventListener('DOMContentLoaded', function () {
        const authToken = sessionStorage.getItem('authToken');

        if (!authToken) {
            // Redirect to login page if no token is found
            window.location.href = "{{ url('/') }}";
        
        }
    });

  // Set the max attribute to today's date dynamically
  document.getElementById('attendanceDate').setAttribute('max', new Date().toISOString().split('T')[0]);



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





























document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const classId = urlParams.get('id'); 
    const apiUrl = `https://webbogo.org/api/get-class-summary/${classId}`;

    async function fetchClassSummary() {
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
                populateClassSummary(data.summary);
            } else {
                console.error('Failed to fetch class summary:', response.statusText);
            }
        } catch (error) {
            console.error('Error fetching class summary:', error);
        }
    }

    function populateClassSummary(summary) {
        const tbody = document.getElementById('summary-table').getElementsByTagName('tbody')[0];
        tbody.innerHTML = ''; // Clear existing rows

        summary.forEach(student => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${student.university_id}</td>
                <td>${student.fullname}</td>
                <td>${student.present_count}</td>
                <td>${student.absent_count}</td>
                <td>${student.total_count}</td>
                <td>${((student.present_count / student.total_count) * 100).toFixed(2)}%</td>
            `;
            tbody.appendChild(row);
        });
    }

    fetchClassSummary();
});






// now i will write the code to update the attendance status and cause if any is changed and the api endpoint is https://webbogo.org/api/edit-attendance/${classId} knowing that the table that has the attendace has an id of attendance-table and the submit button has an id of submitAttendance
document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const classId = urlParams.get('id'); 
    const apiUrl = `https://webbogo.org/api/edit-attendance/${classId}`;
    const attendanceDateInput = document.getElementById('attendanceDate');
    const submitBtn = document.getElementById('submitAttendance');
    const attendanceTable = document.querySelector('form table'); // or use an id for more specificity

    if (!attendanceDateInput || !submitBtn || !attendanceTable) return;

    async function fetchAttendanceDetails(date) {
        try {
            const response = await fetch(`https://webbogo.org/api/get-attendance-details/${classId}?date=${date}`, {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${sessionStorage.getItem('authToken')}`,
                    'Content-Type': 'application/json'
                }
            });

            if (response.ok) {
                const data = await response.json();
                populateAttendanceTable(data.attendance_details);
            } else {
                console.error('Failed to fetch attendance details:', response.statusText);
            }
        } catch (error) {
            console.error('Error fetching attendance details:', error);
        }
    }

    function populateAttendanceTable(details) {
        const tbody = attendanceTable.querySelector('tbody');
        tbody.innerHTML = ''; // Clear existing rows

        details.forEach(detail => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${detail.university_id}</td>
                <td>${detail.fullname}</td>
                <td class="${detail.status === 'present' ? 'bg-success' : 'bg-danger'} status">${detail.status.charAt(0).toUpperCase() + detail.status.slice(1)}</td>
                <td><input type="text" class="cause" value="${detail.absence_cause || ''}"></td>
                <td>
                    <label class="switch">
                        <input type="checkbox" class="attendance" name="attendance[${detail.university_id}]" ${detail.status === 'present' ? 'checked' : ''}>
                        <span class="slider round"></span>
                    </label>
                    <input type="hidden" name="student_id" value="${detail.student_id}">
                </td>
            `;
            tbody.appendChild(row);
        });
    }

    submitBtn.addEventListener('click', async (event) => {
        event.preventDefault();

        const selectedDate = attendanceDateInput.value; // Get date from the input
        if (!selectedDate) {
            alert('Please select a date!');
            return;
        }

        const attendanceData = [];
        const rows = attendanceTable.querySelectorAll('tbody tr');

        rows.forEach(row => {
            const studentId = row.querySelector('input[name="student_id"]')?.value.trim();
            const universityId = row.querySelector('td:nth-child(1)')?.textContent.trim();
            const statusCheckbox = row.querySelector('.attendance');
            const causeInput = row.querySelector('.cause');

            if (studentId && universityId && statusCheckbox && causeInput) {
                attendanceData.push({
                    student_id: studentId,           // important: send student_id for backend
                    university_id: universityId,     // optional if needed
                    status: statusCheckbox.checked ? 1 : 0, // 1 = present, 0 = absent
                    absence_cause: causeInput.value.trim(),
                    date: selectedDate
                });
            }
        });

        console.log('Attendance Data:', attendanceData);

        try {
            const response = await fetch(apiUrl, {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${sessionStorage.getItem('authToken')}`,
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ updates: attendanceData }) // backend expects 'updates'
            });

            const result = await response.json();
            if (response.ok) {
                alert('Attendance updated successfully!');
                location.reload();
            } else {
                console.error('Failed:', result);
                alert(result.message || 'Failed to update attendance.');
            }
        } catch (error) {
            console.error('Error updating attendance:', error);
            alert('An error occurred while updating attendance.');
        }
    });

    attendanceDateInput.addEventListener('change', (event) => {
        const selectedDate = event.target.value;
        if (selectedDate) {
            fetchAttendanceDetails(selectedDate);
        }
    });
});








</script>
</body>

</html>

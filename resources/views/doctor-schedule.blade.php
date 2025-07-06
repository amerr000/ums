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




.fc-time-grid .fc-slats td {
    height: 50px !important; /* Adjust as needed */
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
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>My Schedule</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Schedule</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">My Schedule</a></li>
                        </ol>
                    </div>
                </div>
				
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-intro-title">Calendar</h4>

                                <div class="">
                                    <div id="external-events" class="my-3">
                                        <p>Drag and drop your event or click in the calendar</p>
                                        <div class="external-event" data-class="bg-danger"><i class="fa fa-move"></i>High Priority</div>
                                        <div class="external-event" data-class="bg-warning"><i class="fa fa-move"></i>Normal Priority</div>
                                        <div class="external-event" data-class="bg-primary"><i class="fa fa-move"></i>Low Priority</div>

                                     </div>
                                    <!-- checkbox -->
									 
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <div id="calendar" class="app-fullcalendar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN MODAL -->
                    <div class="modal fade none-border" id="event-modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><strong>Add New Event</strong></h4>
                                </div>
                                <div class="modal-body"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success save-event waves-effect waves-light">Create
                                        event</button>

                                    <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Add Category -->
                 
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
                < 
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





















$(document).ready(function() {
    var authToken = sessionStorage.getItem('authToken');

    var calendar = $('#calendar').fullCalendar({
        slotDuration: "00:15:00",
        slotLabelInterval: "00:15:00", // Labels every 30 minutes (prevents splitting)

        minTime: "08:00:00",
        maxTime: "19:00:00",
        defaultView: "month",
        handleWindowResize: true,
        height: $(window).height() - 100,
        
        header: {
            left: "prev,next today",
            center: "title",
            right: "month,agendaDay"
        },
      events: function(start, end, timezone, callback) {
    $.ajax({
        url: 'https://webbogo.org/api/view-all-events',
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${authToken}`
        },
        success: function(data) {
            var events = [];
            $(data.events).each(function() {
                // Convert to ISO format with "T"
                var startISO = this.event_start_date_and_time.replace(' ', 'T');
                var endISO = this.event_end_date_and_time.replace(' ', 'T');
                // Check if time is present
                var hasTime = /\d{2}:\d{2}:\d{2}/.test(startISO);
                events.push({
                    id: this.id,
                    title: this.event_name,
                    start: startISO,
                    end: endISO,
                    className: this.category,
                    description: this.description,
                    allDay: !hasTime ? true : false // force allDay false if time exists
                });
            });
            callback(events);
        },
        error: function(xhr, status, error) {
            console.error('Error fetching events:', error);
        }
    });
},
        editable: true,
        droppable: true,
        eventLimit: true,
        selectable: true,
        drop: function(date) {
            onDrop($(this), date);
        },
        select: function(start, end) {
            onSelect(start, end);
        },
        eventClick: function(event) {
            onEventClick(event);
        }
    });

    function onDrop(event, date) {
        var eventObject = event.data('eventObject');
        var categoryClass = event.attr('data-class');
        var newEvent = $.extend({}, eventObject);
        newEvent.start = date;
        if (categoryClass) {
            newEvent.className = [categoryClass];
        }
        $('#calendar').fullCalendar('renderEvent', newEvent, true);
        if ($('#drop-remove').is(':checked')) {
            event.remove();
        }
    }

function onSelect(start, end) {
        let realStart = start;
        let realEnd = end;
        // If both times are midnight, it's a month view selection
        if (start.format('HH:mm:ss') === '00:00:00' && end.format('HH:mm:ss') === '00:00:00') {
            realStart = start.clone().set({ hour: 8, minute: 0, second: 0 });
            // Set end to the same day as start, not end!
            realEnd = start.clone().set({ hour: 8, minute: 15, second: 0 });
        }

        // Debug log
        console.log('Event Start:', realStart.format('YYYY-MM-DD HH:mm:ss'));
        console.log('Event End:', realEnd.format('YYYY-MM-DD HH:mm:ss'));

        var modal = $('#event-modal');
        var form = $("<form></form>");
        form.append("<div class='row'></div>");
        form.find(".row")
            .append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Event Name</label><input class='form-control' placeholder='Enter Event Name' type='text' name='title'/></div></div>")
            .append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Category</label><select class='form-control' name='category'></select></div></div>")
            .append("<div class='col-md-12'><div class='form-group'><label class='control-label'>Description</label><textarea class='form-control' placeholder='Enter Description' name='description'></textarea></div></div>");
        form.find("select[name='category']")
            .append("<option value='bg-danger'>High Priority</option>")
            .append("<option value='bg-warning'>Normal Priority</option>")
            .append("<option value='bg-primary'>Low Priority</option>");
        modal.find(".delete-event").hide().end().find(".save-event").show().end().find(".modal-body").empty().prepend(form).end().find(".save-event").unbind("click").on("click", function() {
            form.submit();
        });
        modal.find("form").on("submit", function() {
            var title = form.find("input[name='title']").val();
            var category = form.find("select[name='category'] option:checked").val();
            var description = form.find("textarea[name='description']").val();
            if (title) {
                $.ajax({
                    url: 'https://webbogo.org/api/create-event',
                    method: 'POST',
                    headers: {
                        'Authorization': `Bearer ${authToken}`,
                        'Content-Type': 'application/json'
                    },
                    data: JSON.stringify({
                        event_name: title,
                        description: description,
                        event_start_date_and_time: realStart.format('YYYY-MM-DD HH:mm:ss'),
                        event_end_date_and_time: realEnd.format('YYYY-MM-DD HH:mm:ss'),
                        category: category,
                        allDay: false
                    }),
                    success: function() {
                        $('#calendar').fullCalendar('refetchEvents');
                        modal.modal('hide');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error creating event:', error);
                    }
                });
            } else {
                alert("You have to give a title to your event");
            }
            return false;
        });
        modal.modal({
            backdrop: "static"
        });
        $('#calendar').fullCalendar('unselect');
    }

    function onEventClick(event) {
        var modal = $('#event-modal');
        var form = $("<form></form>");
        form.append("<label>Change event name</label>");
        form.append("<div class='input-group'><input class='form-control' type='text' value='" + event.title + "' /><span class='input-group-btn'><button type='submit' class='btn btn-success waves-effect waves-light'><i class='fa fa-check'></i> Save</button></span></div>");
        form.append("<label>Change event description</label>");
        form.append("<div class='form-group'><textarea class='form-control' name='description'>" + (event.description || '') + "</textarea></div>");
        modal.find(".delete-event").show().end().find(".save-event").hide().end().find(".modal-body").empty().prepend(form).end().find(".delete-event").unbind("click").on("click", function() {
            $.ajax({
                url: 'https://webbogo.org/api/delete-event/' + event.id,
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${authToken}`
                },
                success: function() {
                    $('#calendar').fullCalendar('removeEvents', event.id);
                    modal.modal('hide');
                },
                error: function(xhr, status, error) {
                    console.error('Error deleting event:', error);
                }
            });
        });
        modal.find("form").on("submit", function() {
            event.title = form.find("input[type=text]").val();
            event.description = form.find("textarea[name='description']").val();
            $.ajax({
                url: 'https://webbogo.org/api/edit-event/' + event.id,
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${authToken}`,
                    'Content-Type': 'application/json'
                },
                data: JSON.stringify({
                    event_name: event.title,
                    description: event.description,
                    category: event.className[0]
                }),
                success: function() {
                    $('#calendar').fullCalendar('updateEvent', event);
                    modal.modal('hide');
                },
                error: function(xhr, status, error) {
                    console.error('Error updating event:', error);
                }
            });
            return false;
        });
        modal.modal({
            backdrop: "static"
        });
    }
});




    </script>

</body>

<!-- Mirrored from medico.dexignzone.com/admin/doctor-schedule.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jan 2025 09:01:34 GMT -->
</html>
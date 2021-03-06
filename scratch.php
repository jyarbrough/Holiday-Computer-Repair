
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Community Lifeline Ministries</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="styles/side-nav-styles.css"/>
</head>
<body>

<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">

        <div class="navbar-btn">
            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                <i class="glyphicon glyphicon-align-left"></i>
            </button>
        </div>


        <div class="sidebar-header">
            <h3>Designer Rejects</h3>
            <strong>DR</strong>
        </div>

        <ul class="list-unstyled components">

            <li class="active">
                <a href="../index-login/menu.php">
                    <i class="glyphicon glyphicon-home"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#studentSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="glyphicon glyphicon-user"></i>
                    Students
                </a>
                <ul class="collapse list-unstyled" id="studentSubmenu">
                    <li><a href="../new/NewStudent.php">Add</a></li>
                    <li><a href="../edit/EditStudent.php">Update</a></li>
                    <li><a href="../show/ShowStudents.php">Display All</a></li>
                    <li><a href="../new/NewStudentToClass.php">Add To Class</a></li>
                    <li><a href="../new/NewStudentToProgram.php">Add To Program</a></li>
                    <li><a href="../new/NewTestScores.php">New Test Score</a></li>
                    <li><a href="../edit/EditTestScores.php">Update Test Score</a></li>
                </ul>
            </li>
            <li>
                <a href="#contactSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="glyphicon glyphicon-earphone"></i>
                    Contacts
                </a>
                <ul class="collapse list-unstyled" id="contactSubmenu">
                    <li><a href="../new/NewContact.php">Add</a></li>
                    <li><a href="../edit/EditContact.php">Update</a></li>
                    <li><a href="../show/ShowContacts.php">Display All</a></li>
                </ul>
            </li>
            <li>
                <a href="#volunteerSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="glyphicon glyphicon-briefcase"></i>
                    Volunteers
                </a>
                <ul class="collapse list-unstyled" id="volunteerSubmenu">
                    <li><a href="../new/NewVolunteerEmployee.php">Add</a></li>
                    <li><a href="../edit/EditVolunteerEmployee.php">Update</a></li>
                </ul>
            </li>
            <li>
                <a href="#classSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="glyphicon glyphicon-pencil"></i>
                    Classes & Programs
                </a>
                <ul class="collapse list-unstyled" id="classSubmenu">
                    <li><a href="../new/NewClass.php">New Class</a></li>
                    <li><a href="../edit/EditClass.php">Update Class</a></li>
                    <li><a href="../show/ShowClasses.php">Display Classes</a></li>
                    <li><a href="../new/NewProgram.php">New Program</a></li>
                    <li><a href="../edit/EditProgram.php">Update Program</a></li>
                    <li><a href="../show/ShowPrograms.php">Display Programs</a></li>
                    <li><a href="#">Attendance</a></li>
                </ul>
            </li>
            <li>
                <a href="#reportsSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="glyphicon glyphicon-duplicate"></i>
                    Reports
                </a>
                <ul class="collapse list-unstyled" id="reportsSubmenu">
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
            </li>
            <li>
                <a href="#searchSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="glyphicon glyphicon-search"></i>
                    Search
                </a>
                <ul class="collapse list-unstyled" id="searchSubmenu">
                    <li><a href="../search/SearchStudentInfo.php">Student Info</a></li>
                    <li><a href="../search/SearchVolunteerEmployee.php">Volunteer Info</a></li>
                    <li><a href="../search/SearchSchedule.php">Schedules</a></li>
                </ul>
            </li>
            <li>
                <a href="#adminSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="glyphicon glyphicon-cog"></i>
                    Admin
                </a>
                <ul class="collapse list-unstyled" id="adminSubmenu">
                    <li><a href="../new/NewUser.php">New User</a></li>
                </ul>
            </li>
            <li>
                <a href="../index-login/UserDocumentation.php">
                    <i class="glyphicon glyphicon-question-sign"></i>
                    Help
                </a>
            </li>
            <li>
                <a href="../index-login/logout.php">
                    <i class="glyphicon glyphicon-off"></i>
                    Logout
                </a>
            </li>
    </nav>




    <div id="content">

        <div class="container">
            <div class="row">
                <div class="span"></div>
                <div class="span"><img class="center-block" src="../../images/Lifeline.png" /></div>
                <div class="span"></div>
                <br><br><br>



                <!-- jQuery CDN -->
                <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
                <!-- Bootstrap Js CDN -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#sidebarCollapse').on('click', function () {
                            $('#sidebar').toggleClass('active');
                        });
                    });
                </script>
</body>
</html>
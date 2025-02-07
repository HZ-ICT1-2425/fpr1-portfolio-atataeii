<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/cssFiles/style.css">
    <script src="/javaScriptFiles/sideBar.js"></script>
    <link rel="stylesheet" href="/cssFiles/styleDashboard.css">
    <title>DashboardPage</title>
</head>

<body>
    <!--Header Nav + Side bar-->
<header>
    <!--Navigation Bar-->
    <nav>
        <div class="topnav">
        <a href="../index.html">Home</a>
        <a href="profile.blade.php">Profile</a>
        <a class="active" href="dashboard.html">Dashboard</a>
        <a href="blog.blade.php">Blog</a>
        <a href="faq.blade.php">FAQ</a></div>
    </nav>

    <!--Side Bar-->
        <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Important Information</button>
        <div id="myDropdown" class="dropdown-content">
        <a href="https://oer.hz.nl/?_gl=1*swtmpf*_gcl_aw*R0NMLjE3MjU4OTUzNjkuQ2owS0NRandpdUMyQmhEU0FSSXNBTE9WZkJKamE5NDd0VmtKWmZmUUJKYjhpRW9nLVpvT2lRQlZLQ09ZakpXVkhOSnlPLXl4d0xJOXcwQWFBdGpuRUFMd193Y0I" class="p2" target="_blank">Course and Examination Regulations</a>
        <a href="https://oer.hz.nl/6978cdea-fb31-430b-9bf9-63206aa07754" class="p2" target="_blank">Implementation Regulations</a>
        <a href="https://learn.hz.nl/" class="p2" target="_blank">Learn environment</a>
        <a href="https://hz.osiris-student.nl/home" class="p2" target="_blank">study progress</a>
        <a href="https://github.com/atataeii" class="p2" target="_blank">GitHub</a></div>
        </div>
</header>

<main>
    <!--Dashboard Page, First Section-->
    <section>
        <div class="h1">
        <h1>Dashboard Page</h1></div>
    </section>

    <!--Box Style-->
        <div class="boxDash">
    <!--Table Design-->
    <section>
        <table class="styledTable">
        <thead>
        <tr>
            <th>Quarter</th>
            <th>Course</th>
            <th>Credit</th>
            <th>Exam</th>
            <th>Grade</th>
            <th>Status</th></tr></thead>
        <tbody>
        <tr>
            <td>Q1</td>
            <td>Program & Career Orientation</td>
            <td>2.5</td>
            <td>Presentation (individual)</td>
            <td>-</td>
            <td>Not-Taken</td></tr>
        <tr class="activeRow">
            <td>Q1</td>
            <td>Computer Science Basics</td>
            <td>5</td>
            <td>Written</td>
            <td>-</td>
            <td>Not-Taken</td></tr>
        <tr>
            <td>Q1</td>
            <td>Programming Basics</td>
            <td>5</td>
            <td>Case Study Exam</td>
            <td>-</td>
            <td>Not-Taken</td></tr>
        <tr>
            <td>Q1</td>
            <td>Object Oriented Programming</td>
            <td>5</td>
            <td>Presentation (Group) - portfolio - portfolio</td>
            <td>-</td>
            <td>Not-Taken</td></tr>
        <tr>
            <td>Q1</td>
            <td>Framework Project 2</td>
            <td>10</td>
            <td>Portfolio</td>
            <td>-</td>
            <td>Not-Taken</td></tr>
        <tr>
            <td>Q2</td>
            <td>IT Personality Project Week 1</td>
            <td>1.25</td>
            <td>Portfolio</td>
            <td>-</td>
            <td>Not-Taken</td></tr>
        <tr>
            <td>Q3</td>
            <td>IT Personality Project International Week</td>
            <td>1.25</td>
            <td>Portfolio</td>
            <td>-</td>
            <td>Not-Taken</td></tr>
        <tr>
            <td>Q3</td>
            <td>IT Personality 1</td>
            <td>1.25</td>
            <td>Portfolio</td>
            <td>-</td>
            <td>Not-Taken</td></tr>
        <tr>
            <td>Q3</td>
            <td>IT Personality 2</td>
            <td>1.25</td>
            <td>Portfolio</td>
            <td>-</td>
            <td>Not-Taken</td></tr>
        <tr>
            <td>Q4</td>
            <td>Personal Professional Development Exploration</td>
            <td>1.25</td>
            <td>Criterion Referenced Assessment</td>
            <td>-</td>
            <td>Not-Taken</td></tr>
        <tr>
            <td>Q4</td>
            <td>Framework Project 1</td>
            <td>10</td>
            <td>Written - Written - Presentation (Group) - Portfolio</td>
            <td>-</td>
            <td>Not-Taken</td></tr>
        <tr>
            <td>Q4</td>
            <td>Business IT Consultancy Basics</td>
            <td>2.5</td>
            <td>Assignment (individual)</td>
            <td>-</td>
            <td>Not-Taken</td>
        </tr>
        </tbody>
        </table>
    </section>
</main>

    <!--Footer-->
    <br>
<footer>
        <img src="/photos/hz-logo.png" alt="HZ University Logo" class="logo">
        <img src="/photos/hz-logo.png" alt="HZ University Logo" class="logo1">
        <div class="tfooter">
        <h1>Contacts</h1></div>
        <table>
            <tr>
            <th><img src="/photos/phone.png" alt="A Phone Icon" class="Ifooter"></th>
            <th><img src="/photos/address.png" alt="An Address Icon" class="Ifooter"></th>
            <th><img src="/photos/email.png" alt="An Email Icon" class="Ifooter"></th></tr>
            <tr>
            <td>- +31 0 6 13 18 67 62 ---</td>
            <td>4335 JA Middelburg ---</td>
            <td>Matin.ataei377@gmail.com -</td></tr></table>
</footer>
</body>
</html>

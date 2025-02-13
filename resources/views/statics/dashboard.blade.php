@include('layouts.header')

    <link rel="stylesheet" href="{{asset('css/styleDashboard.css')}}">
    <title>Dashboard Page</title>

<body>
<x-sidebar />

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
        <br>
        <br>
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
            <td>7.9</td>
            <td>PASS</td></tr>
        <tr class="activeRow">
            <td>Q1</td>
            <td>Computer Science Basics</td>
            <td>5</td>
            <td>Written</td>
            <td>5.5</td>
            <td>PASS</td></tr>
        <tr>
            <td>Q1</td>
            <td>Programming Basics</td>
            <td>5</td>
            <td>Case Study Exam</td>
            <td>-</td>
            <td>FAILED</td></tr>
        <tr>
            <td>Q1</td>
            <td>Object Oriented Programming</td>
            <td>5</td>
            <td>Presentation (Group) - portfolio - portfolio</td>
            <td>5.5</td>
            <td>PASS</td></tr>
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
    <br>
@include('layouts.footer')
</body>
</html>

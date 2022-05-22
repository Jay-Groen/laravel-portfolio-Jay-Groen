@extends('layout')

@section('content')
    <main>
        <h1 class="dashheader1">Study progress</h1>
        <div class="opleiding-informatie-punten">
            <table>
                <tr>
                    <th>Quartile</th>
                    <th>Course</th>
                    <th>Ec</th>
                    <th>Exam</th>
                    <th>Grade</th>
                </tr>
                <tr>
                    <td rowspan="3">1</td>
                    <td>Program and Career Orientation</td>
                    <td>2,5</td>
                    <td>Assesment</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Computer Science Basics</td>
                    <td>7,5</td>
                    <td>Written</td>
                    <td>0</td>
                </tr>
                <td>Programming basics</td>
                <td>5</td>
                <td>Case study</td>
                <td>0</td>
                </tr>
                <tr>
                    <td rowspan="2">2</td>
                    <td rowspan="2">Object Oriented Programming</td>
                    <td rowspan="2">10</td>
                    <td>Case study</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Project</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td rowspan="4">3</td>
                    <td>Framework Development 1</td>
                    <td>5</td>
                    <td>Case study</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td rowspan="3">Framework Project 1</td>
                    <td rowspan="3">7,5</td>
                    <td>Project</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Assesment</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Report</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td rowspan="3">4</td>
                    <td rowspan="3">Framework Project 2</td>
                    <td rowspan="3">10</td>
                    <td>Portfolio</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Project</td>
                    <td>0</td>
                <tr>
                    <td>Assesment</td>
                    <td>0</td>
                </tr>
            </table>
        </div>
    </main>
    <h2 class="dashboard-header-progres">progress</h2>

    <div class="container">
        <div class="ui-widgets">
            <div class="ui-values">0%</div>
            <!-- <div class="ui-labels">NBSA</div> -->
        </div>
    </div>
@endsection

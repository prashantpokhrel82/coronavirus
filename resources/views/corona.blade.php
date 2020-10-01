<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- CSS DataTables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">


        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


        <!-- JS Data Tables -->
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <!-- Formatting Table -->
        <script>
            $(document).ready( function () {
                $('#myTable').DataTable();
            } );
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Corona Cases
                </div>
                <div>
                    <table id="myTable" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Country, Other	</th>
                            <th>Total Cases</th>
                            <th>New Cases</th>
                            <th>Total Deaths</th>
                            <th>New Deaths</th>
                            <th>Total Recovered</th>
                            <th>Active Cases</th>
                            <th>Serious, Critical</th>
                            <th>Tot Cases/ 1M pop</th>
                            <th>Deaths/1M pop</th>
                            <th>Total Tests</th>
                            <th>Tests/1M pop</th>
                            <th>Population</th>

                        </tr>
                        </thead>
                        <tbody>

                            @foreach($corona_data as $corona)
                                <tr>
                                    <td> {{$corona->id}} </td>
                                    <td> {{$corona->country}} </td>
                                    <td> {{$corona->total_cases}} </td>
                                    <td> {{$corona->new_cases}} </td>
                                    <td> {{$corona->total_deaths}} </td>
                                    <td> {{$corona->new_deaths}} </td>
                                    <td> {{$corona->total_recovered}} </td>
                                    <td> {{$corona->active_cases}} </td>
                                    <td> {{$corona->critical}} </td>
                                    <td> {{$corona->top_cases_m}} </td>
                                    <td> {{$corona->deaths_m}} </td>
                                    <td> {{$corona->total_tests}} </td>
                                    <td> {{$corona->tests_m}} </td>
                                    <td> {{$corona->population}} </td>
                                </tr>

                            @endforeach

                        </tbody>
                    </table>


                </div>


            </div>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css" media="all" />
    <title>LarvelPDF</title>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="card">
                <table class="table is-striped">
                    <thead>
                        <tr>
                            <td><b>Show Name</b></td>
                            <td><b>Series</b></td>
                            <td><b>Lead Actor</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{$show->show_name}}
                            </td>
                            <td>
                                {{$show->series}}
                            </td>
                            <td>
                                {{$show->lead_actor}}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="button is-link">Click Me</div>
            </div>
        </div>
    </div>
</body>

</html>

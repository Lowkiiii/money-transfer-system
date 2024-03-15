@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        table th {
            background-color: #f2f2f2;
        }
        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

    </style>


    <title>teller</title>
</head>
<body>
<h2>User Information</h2>
<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Birthdate</th>
                <th>User Type</th>
                <th>Branch Assigned</th>
                <th>Full Address</th>
            </tr>
            
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->middle_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->birth_date }}</td>
                <td>{{ $user->user_type_id }}</td>
                <td>{{ $user->branch_assigned }}</td>
                <td>{{ $user->full_address }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <h2>Branch Information</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Branch Name</th>
                <th>Branch Code</th>
                <th>Branch Country</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($branches as $branch)
                <tr>
                    <td>{{ $branch->id }}</td>
                    <td>{{ $branch->branch_name }}</td>
                    <td>{{ $branch->branch_code }}</td>
                    <td>{{ $branch->country_iso_code }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
@endsection
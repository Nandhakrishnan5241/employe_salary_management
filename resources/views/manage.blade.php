<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Employe</title>
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table th,
    table td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    table th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    table tbody tr:hover {
        background-color: #ddd;
    }

    .btn-edit {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        text-decoration: none;
        border: none;
        border-radius: 4px;
        background-color: #f79c00;
        color: #ffffff;
        margin-bottom: 10px;
        transition: background-color 0.3s ease;
    }

    .btn-edit:hover {
        background-color: #f0ca5a;
    }
</style>

<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Casual Leave</th>
            <th>Permission Leave</th>
            <th>Remain Days</th>
            <th>Total Days</th>
            <th>Base Salary</th>
            <th>Adjust Salary</th>
            <th>Loss of Pay</th>
            <th>Update</th>
        </tr>
        @foreach ($employees as $employe)
            <tr>
                <td>{{ $employe->name }}</td>
                <td>{{ $employe->casual_leave }}</td>
                <td>{{ $employe->permission_leave }}</td>
                <td>{{ $employe->remain_days }}</td>
                <td>{{ $employe->total_days }}</td>
                <td>{{ $employe->salary }}</td>
                <td>{{ $employe->adjust_salary }}</td>
                <td>{{ $employe->loss_of_pay }}</td>
                <td><a href="/edit/{{$employe->id}}" class="btn-edit">Edit</a></td>
            </tr>
        @endforeach
    </table>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Update Employee</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .form-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }

        .form-group input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            padding: 10px;
            border-radius: 4px;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Update Employee</h2>
        <form action="/update/{{ $employee->id }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Employee Name:</label>
                <input type="text" id="name" name="name" value="{{$employee->name}}" required>
            </div>
            <div class="form-group">
                <label for="casual_leave">Casual Leave:</label>
                <input type="text" id="casual_leave" name="casual_leave" value="{{$employee->casual_leave}}" required>
            </div>
            <div class="form-group">
                <label for="permission_leave">Permission Leave:</label>
                <input type="text" id="permission_leave" name="permission_leave" value="{{$employee->permission_leave}}" required>
            </div>
            <div class="form-group">
                <label for="remain_leave">Remaining Days:</label>
                <input type="text" id="remain_leave" name="remain_days" value="{{$employee->remain_days}}" required>
            </div>
            <div class="form-group">
                <label for="remain_leave">Total Days:</label>
                <input type="text" id="remain_leave" name="total_days" value="{{$employee->total_days}}" required>
            </div>
            <div class="form-group">
                <label for="salary">Salary:</label>
                <input type="text" id="salary" name="salary" value="{{$employee->salary}}" required>
            </div>
            <div class="form-group">
                <label for="salary">Adjust Salary:</label>
                <input type="text" id="adjust_salary" name="adjust_salary" value="{{$employee->adjust_salary}}" required>
            </div>
            <div class="form-group">
                <label for="lop">Loss of Pay:</label>
                <input type="text" id="lop" name="loss_of_pay" value="{{$employee->loss_of_pay}}" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>

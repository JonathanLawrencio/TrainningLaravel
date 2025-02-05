<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <style>
        body { font-family: Arial, sans-serif; background-color: #e6f2ff; }
        .container { width: 80%; margin: 20px auto; padding: 20px; background: white; border-radius: 8px; }
        .title { font-size: 24px; color: blue; text-align: center; }
        .button { background: blue; color: white; padding: 10px; text-decoration: none; display: inline-block; margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="title">User Management System</h2>
        <a href="{{ route('users.create') }}" class="button">+ Add User</a>
        <table id="userTable" class="display">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#userTable').DataTable();
        });
    </script>
</body>
</html>

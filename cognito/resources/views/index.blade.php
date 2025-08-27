<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 1.2rem;
            color: #555;
        }
        .card {
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            padding: 20px;
            border-radius: 12px;
            width: 300px;
            margin-top: 20px;
            text-align: center;
        }
        .card h2 {
            margin: 0 0 10px;
            color: #222;
        }
        .card p {
            margin: 5px 0;
            color: #555;
        }
    </style>
</head>
<body>
    <h1>Welcome, {{ $data['email'] ?? 'User' }}!</h1>
    <p>Have a good day! ☀️</p>

    <div class="card">
        <h2>User Information</h2>
        <p><strong>Name:</strong> {{ $data['name'] ?? 'Not provided' }}</p>
        <p><strong>Email:</strong> {{ $data['email'] ?? 'Not provided' }}</p>
        <p><strong>Username:</strong> {{ $data['username'] ?? 'Not provided' }}</p>
    </div>
</body>
</html>

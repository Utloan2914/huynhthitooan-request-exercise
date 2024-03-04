<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
        }

        form {
            width: 400px;
            font-size: 15px;
            background-color: white;
            border: 2px solid red;
            padding: 20px;
            margin-top:40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            margin-bottom: 10px;
            padding: 5px;
            width: 100%;
        }

        button {
            padding: 10px;
            background-color: red; 
            color: white; 
            border: none;
            border-radius: 5px;
            cursor: pointer; /* con trỏ ngón tay */
            margin-left: 180px;

        }
    </style>
</head>
<body>
    <form method="post" action="/register">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>

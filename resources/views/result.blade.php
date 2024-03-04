<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Result</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .result-container {
            width: 500px;
            font-size: 35px;
            color: black; 
            border: 2px solid #000000; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        p {
            margin: 0;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <p>Name: {{ $name }}</p>
        <p>Username: {{ $username }}</p>
        <p>Password: {{ $password }}</p>
    </div>
</body>
</html>

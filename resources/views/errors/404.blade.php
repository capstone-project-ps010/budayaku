<!-- resources/views/errors/404.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            text-align: center;
            padding: 50px;
            color: #495057;
        }

        h1 {
            color: #e44d26;
            font-size: 2em;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        a {
            color: #e44d26;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            color: #333;
            text-decoration: underline;
        }

        .castle-img {
            max-width: 30%;
            height: auto;
        }
    </style>
</head>
<body>
    <div>
        <h1>404 - Not Found</h1>
        <img src="{{ asset('build/assets/error.png') }}" alt="Castle" class="castle-img">
        <p>The page you are looking for might be in another castle!</p>
        <p><a href="{{ url('/') }}">Go Home</a></p>
    </div>
</body>
</html>

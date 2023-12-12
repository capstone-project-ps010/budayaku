<!-- resources/views/errors/custom-null-property.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Error</title>
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
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        .emoji {
            font-size: 2em;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="emoji">😮</div>
        <h1>Oops! Something went wrong.</h1>
        <p>Please check your request and try again.</p>
    </div>
</body>
</html>

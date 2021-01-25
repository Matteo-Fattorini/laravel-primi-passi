<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Dischi</title>
</head>
<body>
    <div class ="container">
        @foreach ($data[0] as $cd )
            <div class = "box">
                <img src="{{ $cd["poster"] }}" alt="">
                <h3>{{ $cd["title"] }}</h3>
                <h3>{{ $cd["author"] }}</h3>
                <h3>{{ $cd["genre"] }}</h3>
                <h3>{{ $cd["year"] }}</h3>
            </div>
            
        @endforeach
    </div>

    
</body>
</html>
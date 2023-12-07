<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
</head>
<body>
    <div>
        <div class="container">
            <h1>shop</h1>
            <div>
                <ul>
                    @foreach($arts as $art)
                        <li>{{ $art }}</li>
                    @endforeach
                    <li>{{ $taglia}}</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
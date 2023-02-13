<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artists</title>
</head>

<body>
    <h1>Artisti</h1>

    <h2>i nostri artisti</h2>
    <ul>
        <!-- @dump($artists) -->
        @forelse($artists as $artist)
            <li>
                <h4>{{ $artist->name }}</h4>
                <h4>{{ $artist->surname }}</h4>
                <h4>{{ $artist->category }}</h4>
            </li>

        @empty
            <li>nessun fil trovato</li>
        @endforelse
    </ul>

    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Users</title>
</head>
<body>
    <h1>Users Liste</h1>
    <ul>
        @forelse($users as $u)
            <li>
                {{ $u->name." | ".$u->email }}
            </li>
        @empty
            empty u
        @endforelse
    </ul>
</body>
</html>
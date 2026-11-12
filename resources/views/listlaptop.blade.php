<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List of Laptops</h1>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>Brand</th>
                <th>Model</th>
                <th>Processor</th>
                <th>RAM</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laptops as $laptop)
                <tr>
                    <td>{{ $laptop->brand }}</td>
                    <td>{{ $laptop->model }}</td>
                    <td>{{ $laptop->processor }}</td>
                    <td>{{ $laptop->ram }} GB</td>
                    <td>
                        <form method="POST" action="{{ route('deletelaptop', $laptop->id) }}">
                            @csrf
                            @method('DELETE')
                            <input style="background: red; color: white;" type="submit" value="Delete">
                        </form>
                    
                        <a href="{{ route('editlaptop', $laptop->id) }}" style="background: blue; color: white; padding: 4px 8px; text-decoration: none;">
                            Update
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
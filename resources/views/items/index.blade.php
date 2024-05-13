<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items List</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color:   #f5d0df;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        .button-small {
            padding: 5px 10px;
            font-size: 14px;
            margin-left: 10px; /* Espacio entre botones */
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: white;
            border: 1px solid #ccc;
            margin-top: 8px;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Items List</h1>
        <a href="{{ route('items.create') }}" class="button">Create New Item</a>
    </div>
    <ul>
        @foreach ($items as $item)
            <li>
                {{ $item->name }} - {{ $item->description }}
                <!-- Botones de acción para cada ítem -->
                <div>
                    <a href="{{ route('items.edit', $item->id) }}" class="button button-small" style="background-color: orange;">Update</a>
                    <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button button-small" style="background-color: red;">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</body>
</html>



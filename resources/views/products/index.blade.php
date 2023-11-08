<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .status {
            background-color: #00cc00;
            color: #fff;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
        }

        .data_add {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 600px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            margin: 0 5px;
            border-radius: 4px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    {{-- Form Alert in the screen --}}
    @if (session('status'))
        <div class="status">
            {{ session('status') }}
        </div>
    @endif

    <div class="data_add">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($forms as $form)
                    <tr>
                        <td>{{ $form->id }}</td>
                        <td>{{ $form->item_type }}</td>
                        <td>{{ $form->item_code }}</td>
                        <td>{{ $form->item_name }}</td>
                        <td>{{ $form->description }}</td>
                        <td>
                            <a href="{{ route('products.edit', ['id' => $form->id]) }}" class="btn">Edit</a>
                            <a href="{{ route('products.delete', ['id' => $form->id]) }}" class="btn">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

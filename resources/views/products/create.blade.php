<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Create</title>
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

        .main_form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 400px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        form {
            margin: 0;
            padding: 0;
        }

        select, input, textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <section class="main_form">
        <h1>New Form</h1>
        <form action="{{ route('forms.store') }}" method="POST">
            @csrf
            <div>
                <select name="item_type" id="type">
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>
            <label>
                <input placeholder="Age" name="item_code" type="number" required>
            </label>
            <br>
            <label>
                <input placeholder="Name" name="item_name" type="text" required>
            </label>
            <div>
                <textarea placeholder="Description" name="description" required></textarea>
            </div>
            <div>
                <button type="submit">Save</button>
            </div>
        </form>
    </section>
</body>
</html>

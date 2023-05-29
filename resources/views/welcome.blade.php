<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/c88a405b1b.js" crossorigin="anonymous"></script>
    <title>Progetto Form</title>
</head>
<body>
    <form method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
                <label for="name">Nome</label>
            </div>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="surname">Cognome</label>
            <input type="text" name="surname" id="surname" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="message">Messaggio</label>
            <textarea name="message" id="message" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="photo">Foto</label>
            <input type="file" name="photo" id="photo" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-primary">Invia</button>
    </form>


    <style>
        in {
            gap: 10px;
        }
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            resize: vertical;
        }

        .form-control-file {
            display: block;
            padding: 5px;
        }

        button {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
        }
    </style>

</body>
</html>

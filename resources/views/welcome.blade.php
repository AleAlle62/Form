<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Progetto Form</title>
</head>
<body>
    <form method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
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

</body>
</html>

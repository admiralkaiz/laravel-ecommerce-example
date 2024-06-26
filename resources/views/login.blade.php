<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body style="width: 95%;">
    <div class="row justify-content-center" style="margin-top: 13%;">
        <div class="col-3 border">
            <form style="margin: 20px;" method="POST" action="/auth">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="em" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="pwd" class="form-control" />
                </div>
                <p>{{ session('msg') }}</p>
                <div style="text-align: center;">
                    <button class="btn btn-success">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
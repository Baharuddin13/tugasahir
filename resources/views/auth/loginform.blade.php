<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="">
    {{-- style="background-image: url(assets/img/background-1.png);" --}}
    <div class="container pt-4">
        <div class="container card  bg-secondary " style="width: 18rem;">

            <h1 class="text-center">LOGIN</h1>


            @if ($errors->any())
                @foreach ($errors->all() as $e)
                    <div class="alert alert-danger">
                        {{ $e }}
                    </div>
                @endforeach
            @endif

            <form action="{{ route('login.proses') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username">Username </label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="">
                </div>
                <div class="form-group">
                    <label for="password">Password </label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="">
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <div>
                        <select name="role" id="role">
                            <option value="admin">Admin</option>
                            <option value="kasir">Kasir</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary my-3">Submit</button>
            </form>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

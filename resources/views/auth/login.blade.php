<!doctype html>
<html lang="pt-BR" data-bs-theme="white" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Master Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/template.css') }}" />
    <style>
        .form-container {
            max-width: 450px;
            padding: 1rem;
        }

        .header-card {
            display: flex;
            justify-content: center;
            flex-direction: row;
            align-items: center;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 10px rgba(102, 123, 219, 0.5);
        }
    </style>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary h-100">
    <main class="w-100 m-auto form-container">
        <form action="{{ route('auth') }}" class="card p-2" method="POST">
            @csrf
            <div class="card-body">

                <div class="header-card">
                    <div
                        class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase">
                        <i class="fas fa-car me-2"></i>Master Car</div>
                </div>

                <div class="header-card">
                    <h2 class="h5">Informe seus dados acesso.</h2>
                </div>

                @if (session('erro'))
                    <div class="alert alert-danger">
                        {{ session('erro') }}
                    </div>
                @endif

                <div class="form-floating mt-1">
                    <input type="email" id="floatingInput" class="form-control auth-email"
                        placeholder="meuemail@gemail.com" name="user">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" id="floatingInput bg-warning" class="form-control auth"
                        placeholder="************" name="password">
                    <label for="floatingInput">Senha</label>
                </div>

                <button class="btn btn-dark w-100 my-3 py-2">Entrar</button>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>

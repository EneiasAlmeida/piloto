<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Eventos')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-neutral-900 min-h-screen text-white">
    <header>
        {{-- Menu --}}
        <nav class="bg-neutral-700 h-20 flex items-center justify-between px-6">
            <h1 class="text-2xl font-bold text-red-500">DebEne Eventos</h1>
            <div class="flex gap-4">
                <a href="{{ route('dashboard') }}" class="hover:text-red-600">Dashboard</a>
                <a href="{{ route('event.create') }}" class="hover:text-red-600">Cadastrar Eventos</a>
                <a href="{{ route('event.index') }}" class="hover:text-red-600">Eventos</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="hover:text-red-600">Sair</button>
                </form>
            </div>
        </nav>
    </header>

    <main class="p-6">
        @yield('content')
    </main>
</body>
</html>

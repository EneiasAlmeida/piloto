<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>DebEne Eventos</title>
</head>

<body class="bg-neutral-900 min-h-screen flex flex-col items-center justify-center px-4">

    <!-- Cabeçalho -->
    <section class="text-center mb-8">
        <img src="img/imagem 1.jpeg" alt="Logo DebEne Eventos" class="mx-auto w-35 h-32 object-cover rounded-full mb-4">
    </section>

    <!-- Formulário -->
    <div class="flex items-center justify-center w-full">
        @if(session('success'))
    <div class="bg-green-500 text-white p-3 rounded mb-4 text-center w-full max-w-md mx-auto">
        {{ session('success') }}
    </div>
    @endif

      {{-- Mensagem de erro --}}
    @if(session('error'))
        <div class="bg-red-500 text-white p-3 rounded mb-4 text-center w-full max-w-md mx-auto">
            {{ session('error') }}
        </div>
    @endif'
        <form method="POST" action="{{ route('login.store') }}"
    class="bg-neutral-800 w-full max-w-md text-white rounded-lg shadow-lg p-6 flex flex-col gap-4 text-center">
    @csrf

    <div>
        <h2 class="text-3xl md:text-4xl font-bold tracking-tighter">
            <span class="text-red-600">DebEne</span>
            <span class="text-white">Eventos</span>
        </h2>
        <h3 class="text-neutral-400 italic text-sm md:text-base">"SEU EVENTO, NOSSA PAIXÃO EM CADA DETALHE"</h3>
    </div>

    <!-- Email -->
    <label for="email" class="cursor-pointer">Digite seu email</label>
    <input type="email" id="email" name="email" required
        class="bg-white rounded p-3 text-black w-full">

    <!-- Senha -->
    <label for="password" class="cursor-pointer">Digite sua senha</label>
    <input type="password" id="password" name="password" required
        class="bg-white rounded p-3 text-black w-full">

    <!-- Botão Entrar -->
    <button type="submit"
        class="bg-neutral-700 rounded py-3 text-white hover:bg-green-800 transition duration-500 w-full">
        Entrar
    </button>

    <!-- Link para Cadastrar -->
    <a href="{{ route('login.create') }}"
        class="bg-neutral-700 rounded py-3 text-white hover:bg-green-800 transition duration-500 w-full text-center block">
        Cadastrar-se
    </a>
</form>
    </div>

</body>

</html>

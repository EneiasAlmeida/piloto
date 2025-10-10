<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Cadastrar Usuário</title>
</head>

<body class="bg-neutral-900 h-screen">
    <section class="text-center">

    </section>
    <div class="flex items-center mt-20 justify-center">
        <form method="POST" action="{{ route('login.register') }}"
            class=" bg-neutral-800 w-full max-w-md text-white rounded-lg shadow-lg p-6 flex flex-col gap-4 text-center">
            @csrf

            {{-- ✅ Mensagens de sucesso ou erro aqui --}}
    @if(session('success'))
        <div class="bg-green-500 text-white p-3 rounded">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="bg-red-500 text-white p-3 rounded text-left">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif


            <div>
                <h2 class="text-4xl font-bold tracking-tighter mt-5 ">
                    <span class="text-red-600">Essa<span><span class="text-white">Veículos</span>
                </h2>
                <h3 class="text-neutral-400 italic"> SEU SONHO MAIS PERTO DE VOCÊ</h3>
            </div>
            <label for="user-name" class="cursor-pointer">Digite seu nome</label>
            <input type="text" id="user-name" name="user-name" class="bg-white rounded p-3 text-black w-full">


            <label for="user-email" class= "cursor-pointer">Digite seu email</label>
            <input type="email" id="user-email"name="user-email" class="bg-white rounded p-3 text-black w-full">

            <label for="user-password"class="cursor-pointer">Digite sua senha</label>
            <input type="password" id="user-password"name="user-password"
                class="bg-white rounded p-3 text-black w-full">

            <label for="confirme"class="cursor-pointer">Confirme sua senha</label>
            <input type="password" id="confirme"name="user-password-confirm" class="bg-white rounded p-3 text-black w-full">

            <button type="submit"
                class="bg-neutral-700 rounded py-3 text-white hover:bg-green-800 transition duration-500 w-full">
                Cadastrar
            </button>
        </form>
    </div>
    </section>
</body>

</html>

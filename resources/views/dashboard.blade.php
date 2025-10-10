<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Dashboard</title>
</head>

<body class="bg-neutral-900 min-h-screen">
    <menu class="bg-neutral-700 h-20 flex items-center justify-between px-6 space-x-4">
        <img src="img/imagem 1-transparente.png" alt="Logo DebEne Eventos"class="w-35 h-16 object-cover rounded">
        <h4 class="text-2xl font-bold tracking-tighter  ">
            <span class="text-red-600">DebEne<span><span class="text-white">Eventos</span>
        </h4>

        <div class="flex justify-end space-x-4">
            <a href="{{ route('dashboard') }}"
                class="bg-neutral-700 text-white px-2 py-2 rounded hover:bg-red-600">
                Dashboard
            </a>
            <a href="{{ route('event.create') }}"
                class="bg-neutral-700 text-white px-4 py-2 rounded hover:bg-red-600">
                Cadastrar Eventos
            </a>
            <a href="{{ route('event.list') }}"
                class="bg-neutral-700 text-white px-4 py-2 rounded hover:bg-red-600">
                Eventos
            </a>
           
            <a href="#" class="bg-neutral-700 text-white px-4 py-2 rounded hover:bg-red-600">Sair</a>
        </div>
    </menu>
    <section class="flex justify-center mt-50 px-4">
        <div class="bg-neutral-800 text-white rounded-lg shadow-lg w-full max-w-6xl p-6">
            <div class="text-center mb-6">
                <h2 class="text-4xl font-bold tracking-tighter mt-8 ">
                    <span class="text-red-600">Debene<span><span class="text-white">Evento</span>
                </h2>
                <h3 class="text-neutral-400 italic">"SEU EVENTO, NOSSA PAIXÃO EM CADA DETALHE"</h3>
            </div>


            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
                

            </div>


        </div>
    </section>
</body>

</html>

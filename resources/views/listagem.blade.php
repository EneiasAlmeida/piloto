<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Lista de Eventos</title>
</head>

<body class="bg-neutral-900 min-h-screen text-white">
    <!-- MENU SUPERIOR -->
    <menu class="bg-neutral-700 h-20 flex items-center justify-between px-6">
        <img src="img/imagem 1-transparente.png" alt="Logo DebEne Eventos" class="w-35 h-16 object-cover rounded" />
        <h4 class="text-2xl font-bold tracking-tighter">
            <span class="text-red-600">DebEne</span><span class="text-white">Eventos</span>
        </h4>
        <div class="flex space-x-4">
            <a href="{{ route('dashboard') }}"
                class="bg-neutral-700 text-white px-4 py-2 rounded hover:bg-red-600">Dashboard</a>
            <a href="{{ route('event.create') }}"
                class="bg-neutral-700 text-white px-4 py-2 rounded hover:bg-red-600">Cadastrar</a>
            <a href="#" class="bg-neutral-700 text-white px-4 py-2 rounded hover:bg-red-600">Relatórios</a>
            <a href="#" class="bg-neutral-700 text-white px-4 py-2 rounded hover:bg-red-600">Sair</a>
        </div>
    </menu>

    <!-- CONTEÚDO -->
    <section class="max-w-7xl mx-auto mt-10 p-6 bg-neutral-800 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-center mb-6">
            <span class="text-red-600">Eventos</span>
            <span class="text-white">Agendados</span>
        </h2>

        <!-- TABELA DE EVENTOS -->
        <div class="overflow-x-auto">
            <table class="w-full border border-neutral-700 rounded-lg">
                <thead>
                    <tr class="bg-neutral-700 text-red-500">
                        <th class="px-4 py-2 text-left">#</th>
                        <th class="px-4 py-2 text-left">Nome do Evento</th>
                        <th class="px-4 py-2 text-left">Data</th>
                        <th class="px-4 py-2 text-left">Local</th>
                        <th class="px-4 py-2 text-left">Status</th>
                        <th class="px-4 py-2 text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-neutral-700 hover:bg-neutral-600">
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">Formatura Débora</td>
                        <td class="px-4 py-2">12/04/2026</td>
                        <td class="px-4 py-2">Salão Marmô</td>
                        <td class="px-4 py-2 text-yellow-400">Agendado</td>
                        <td class="px-4 py-2 text-center space-x-2">
                            <a href="{{ route('event.edit', ['id' => '1']) }}"
                                class="bg-blue-600 px-3 py-1 rounded hover:bg-blue-700">
                                Editar
                            </a>
                            <a href="#" class="bg-red-600 px-3 py-1 rounded hover:bg-red-700">
                                Excluir
                            </a>
                            <a href="{{ route('event.detalhes', ['id' => '1']) }}"
                                class= "bg-green-500 px-3 py-1 rounded hover:bg-green-700">
                                Detalhes
                                <a>
                        </td>
                    </tr>
                    <tr class="border-b border-neutral-700 hover:bg-neutral-600">
                        <td class="px-4 py-2">2</td>
                        <td class="px-4 py-2">Aniversário Débora</td>
                        <td class="px-4 py-2">06/09/1998</td>
                        <td class="px-4 py-2">Restaurante e Pizzaria Portal</td>
                        <td class="px-4 py-2 text-yellow-400">Concluido</td>
                        <td class="px-4 py-2 text-center space-x-2">
                            <a href="{{ route('event.edit', ['id' => '2']) }}"
                                class="bg-blue-600 px-3 py-1 rounded hover:bg-blue-700">
                                Editar
                            </a>
                            <a href="#" class="bg-red-600 px-3 py-1 rounded hover:bg-red-700">
                                Excluir
                            </a>
                            <a href="{{ route('event.detalhes', ['id' => '2']) }}"
                                class= "bg-green-500 px-3 py-1 rounded hover:bg-green-700">
                                Detalhes
                                <a>
                        </td>
                    </tr>
                    <tr class="border-b border-neutral-700 hover:bg-neutral-600">
                        <td class="px-4 py-2">3</td>
                        <td class="px-4 py-2">Casamento João e Aline</td>
                        <td class="px-4 py-2">04/09/2025</td>
                        <td class="px-4 py-2">Salão Paroquial Novo Hamburgo</td>
                        <td class="px-4 py-2 text-yellow-400">Realizados</td>
                        <td class="px-4 py-2 text-center space-x-2">
                            <a href="{{ route('event.edit', ['id' => '3']) }}"
                                class="bg-blue-600 px-3 py-1 rounded hover:bg-blue-700">
                                Editar
                            </a>
                            <a href="#" class="bg-red-600 px-3 py-1 rounded hover:bg-red-700">
                                Excluir
                            </a>
                            <a href="{{ route('event.detalhes', ['id' => '3']) }}"
                                class= "bg-green-500 px-3 py-1 rounded hover:bg-green-700">
                                Detalhes
                                <a>
                        </td>
                    </tr>
                    <tr class="border-b border-neutral-700 hover:bg-neutral-600">
                        <td class="px-4 py-2">4</td>
                        <td class="px-4 py-2">Casamento Rafael e Bruna</td>
                        <td class="px-4 py-2">12/10/2025</td>
                        <td class="px-4 py-2">Salão Paroquial Novo Hamburgo</td>
                        <td class="px-4 py-2 text-yellow-400">Agendado e a Confirmar</td>
                        <td class="px-4 py-2 text-center space-x-2">
                            <a href="{{ route('event.edit', ['id' => '4']) }}"
                                class="bg-blue-600 px-3 py-1 rounded hover:bg-blue-700">
                                Editar
                            </a>
                            <a href="#" class="bg-red-600 px-3 py-1 rounded hover:bg-red-700">
                                Excluir
                            </a>
                            <a href="{{ route('event.detalhes', ['id' => '4']) }}"
                                class= "bg-green-500 px-3 py-1 rounded hover:bg-green-700">
                                Detalhes
                                <a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>

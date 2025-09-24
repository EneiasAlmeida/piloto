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
      <img
        src="img/imagem 1-transparente.png"
        alt="Logo DebEne Eventos"
        class="w-35 h-16 object-cover rounded"
      />
      <h4 class="text-2xl font-bold tracking-tighter">
        <span class="text-red-600">DebEne</span
        ><span class="text-white">Eventos</span>
      </h4>
      <div class="flex space-x-4">
        <a
          href="dashboard.html"
          class="bg-neutral-700 text-white px-4 py-2 rounded hover:bg-red-600"
          >Dashboard</a
        >
        <a
          href="#"
          class="bg-neutral-700 text-white px-4 py-2 rounded hover:bg-red-600"
          >Cadastrar</a
        >
        <a
          href="#"
          class="bg-neutral-700 text-white px-4 py-2 rounded hover:bg-red-600"
          >Relatórios</a
        >
        <a
          href="#"
          class="bg-neutral-700 text-white px-4 py-2 rounded hover:bg-red-600"
          >Sair</a
        >
      </div>
    </menu>

    <!-- CONTEÚDO -->
    <section
      class="max-w-6xl mx-auto mt-10 p-6 bg-neutral-800 rounded-lg shadow-lg"
    >
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
                <button class="bg-blue-600 px-3 py-1 rounded hover:bg-blue-700">
                  Editar
                </button>
                <button class="bg-red-600 px-3 py-1 rounded hover:bg-red-700">
                  Excluir
                </button>
              </td>
            </tr>
            <tr class="border-b border-neutral-700 hover:bg-neutral-600">
              <td class="px-4 py-2">2</td>
              <td class="px-4 py-2">Aniversário Débora</td>
              <td class="px-4 py-2">06/09/1998</td>
              <td class="px-4 py-2">Restaurante e Pizzaria Portal</td>
              <td class="px-4 py-2 text-yellow-400">Concluido</td>
              <td class="px-4 py-2 text-center space-x-2">
                <button class="bg-blue-600 px-3 py-1 rounded hover:bg-blue-700">
                  Editar
                </button>
                <button class="bg-red-600 px-3 py-1 rounded hover:bg-red-700">
                  Excluir
                </button>
              </td>
            </tr>
            <tr class="border-b border-neutral-700 hover:bg-neutral-600">
              <td class="px-4 py-2">3</td>
              <td class="px-4 py-2">Casamento João e Aline</td>
              <td class="px-4 py-2">04/09/2025</td>
              <td class="px-4 py-2">Salão Paroquial Novo Hamburgo</td>
              <td class="px-4 py-2 text-yellow-400">Realizados</td>
              <td class="px-4 py-2 text-center space-x-2">
                <button class="bg-blue-600 px-3 py-1 rounded hover:bg-blue-700">
                  Editar
                </button>
                <button class="bg-red-600 px-3 py-1 rounded hover:bg-red-700">
                  Excluir
                </button>
              </td>
            </tr>
            <tr class="border-b border-neutral-700 hover:bg-neutral-600">
              <td class="px-4 py-2">4</td>
              <td class="px-4 py-2">Casamento Rafael e Bruna</td>
              <td class="px-4 py-2">12/10/2025</td>
              <td class="px-4 py-2">Salão Paroquial Novo Hamburgo</td>
              <td class="px-4 py-2 text-yellow-400">Agendado e a Confirmar</td>
              <td class="px-4 py-2 text-center space-x-2">
                <button class="bg-blue-600 px-3 py-1 rounded hover:bg-blue-700">
                  Editar
                </button>
                <button class="bg-red-600 px-3 py-1 rounded hover:bg-red-700">
                  Excluir
                </button>
              </td>
            </tr>
            <tr class="border-b border-neutral-700 hover:bg-neutral-600">
              <td class="px-4 py-2">5</td>
              <td class="px-4 py-2">Aniversário João</td>
              <td class="px-4 py-2">25/12/2025</td>
              <td class="px-4 py-2">CDL Novo Hamburgo</td>
              <td class="px-4 py-2 text-yellow-400">Agendado e a Confirmar</td>
              <td class="px-4 py-2 text-center space-x-2">
                <button class="bg-blue-600 px-3 py-1 rounded hover:bg-blue-700">
                  Editar
                </button>
                <button class="bg-red-600 px-3 py-1 rounded hover:bg-red-700">
                  Excluir
                </button>
              </td>
            </tr>
            <tr class="border-b border-neutral-700 hover:bg-neutral-600">
              <td class="px-4 py-2">6</td>
              <td class="px-4 py-2">Aniversário Bruna</td>
              <td class="px-4 py-2">31/12/2025</td>
              <td class="px-4 py-2">Salão Paroquial São Leopoldo</td>
              <td class="px-4 py-2 text-yellow-400">Agendado e a Confirmar</td>
              <td class="px-4 py-2 text-center space-x-2">
                <button class="bg-blue-600 px-3 py-1 rounded hover:bg-blue-700">
                  Editar
                  <script>
                    document
                      .querySelectorAll("button.bg-blue-600")
                      .forEach((botao) => {
                        botao.addEventListener("click", function () {
                          let linha = this.closest("tr"); // pega a linha

                          // pega valores atuais
                          let nome = linha.cells[1].innerText;
                          let data = linha.cells[2].innerText;
                          let local = linha.cells[3].innerText;
                          let status = linha.cells[4].innerText;
                          // pede novos valores ao usuário
                          let novoNome = prompt("Editar nome do evento:", nome);
                          let novaData = prompt("Editar data do evento:", data);
                          let novoLocal = prompt(
                            "Editar local do evento:",
                            local
                          );
                          let novoStatus = prompt(
                            "Editar status do evento:",
                            status
                          );

                          // se o usuário digitou algo, atualiza na tabela
                          if (novoNome) linha.cells[1].innerText = novoNome;
                          if (novaData) linha.cells[2].innerText = novaData;
                          if (novoLocal) linha.cells[3].innerText = novoLocal;
                          if (novoStatus) linha.cells[4].innerText = novoStatus;
                        });
                      });
                  </script>
                </button>
                <button class="bg-red-600 px-3 py-1 rounded hover:bg-red-700">
                  Excluir
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </body>
</html>

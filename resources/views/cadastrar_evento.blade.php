<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Cadastrar Evento</title>
</head>
<body class="bg-neutral-900 min-h-screen">
  <!-- MENU -->
  <menu class="bg-neutral-700 h-20 flex items-center justify-between px-6 space-x-4">
    <img src="img/imagem 1-transparente.png" alt="Logo" class="w-35 h-16 object-cover rounded"> 
    <h4 class="text-2xl font-bold tracking-tighter">
      <span class="text-red-500">DebEne</span><span class="text-white">Eventos</span>
    </h4>
    <div class="flex justify-end space-x-4">
      <a href="{{ route('dashboard') }}" class="bg-neutral-700 text-white px-2 py-2 rounded hover:bg-red-600">Dashboard</a>
      <a href="{{ route('event.create') }}" class="bg-neutral-700 text-white px-4 py-2 rounded hover:bg-red-600">Cadastrar Eventos</a>
      <a href="{{ route('event.index') }}" class="bg-neutral-700 text-white px-4 py-2 rounded hover:bg-red-600">Eventos</a>
      <a href="{{ route('relatorios') }}" class="bg-neutral-700 text-white px-4 py-2 rounded hover:bg-red-600">Relatórios</a>
      <a href="#" class="bg-neutral-700 text-white px-4 py-2 rounded hover:bg-red-600">Sair</a>
    </div>
  </menu>

  <!-- CONTEÚDO -->
  <section class="flex justify-center mt-10 px-4">
    <div class="bg-neutral-800 text-white rounded-lg shadow-lg w-full max-w-5xl p-6">
      <!-- Título -->
      <div class="text-center mb-6">
        <h2 class="text-4xl font-bold tracking-tighter mt-5">
          <span class="text-red-500">DebEne</span><span class="text-white">Eventos</span>
        </h2>
        <h3 class="text-neutral-400 italic">"SEU EVENTO, NOSSA PAIXÃO EM CADA DETALHE"</h3>
      </div>

      <!-- FORM -->
      <section class="bg-neutral-900 p-6 rounded">
        <article class="bg-neutral-900 rounded p-4">
          <h1 class="bg-neutral-700 rounded text-white text-center text-lg font-bold mb-6">Cadastrar Evento</h1>

          <!-- FORMULÁRIO QUE ENVIA PARA O CONTROLLER -->
          <form action="{{ route('event.store') }}" method="POST" class="grid grid-cols-12 gap-6">
            @csrf

            <!-- CODE -->
            <div class="col-span-12">
              <label for="code" class="font-bold text-red-500">Code:</label>
              <input type="text" id="code" name="code"
                class="bg-neutral-400 text-black rounded p-2 w-full"
                placeholder="Gerado automaticamente" disabled>
            </div>

            <!-- NAME e LOCATION -->
            <div class="col-span-6">
              <label for="name" class="font-bold text-red-500">Name:</label>
              <input type="text" id="name" name="name"
                class="bg-neutral-400 text-black rounded p-2 w-full"
                placeholder="Ex: Casamento João e Maria" required>
            </div>
            <div class="col-span-6">
              <label for="location" class="font-bold text-red-500">Location:</label>
              <input type="text" id="location" name="location"
                class="bg-neutral-400 text-black rounded p-2 w-full"
                placeholder="Ex: Espaço Grill Eventos" required>
            </div>

            <!-- DESCRIPTION -->
            <div class="col-span-12">
              <label for="description" class="font-bold text-red-500">Description:</label>
              <textarea id="description" name="description" rows="5" maxlength="500"
                class="bg-neutral-400 text-black rounded p-2 w-full resize-none"
                placeholder="Descrição detalhada do evento (máx 500 caracteres)"></textarea>
            </div>

            <!-- STARTDATE e ENDDATE -->
            <div class="col-span-6">
              <label for="startDate" class="font-bold text-red-500">Start Date:</label>
              <input type="date" id="startDate" name="startDate"
                class="bg-neutral-400 text-black rounded p-2 w-full" required>
            </div>
            <div class="col-span-6">
              <label for="endDate" class="font-bold text-red-500">End Date:</label>
              <input type="date" id="endDate" name="endDate"
                class="bg-neutral-400 text-black rounded p-2 w-full" required>
            </div>

            <!-- BOTÃO SALVAR -->
            <div class="col-span-12 flex justify-center mt-6">
              <button type="submit"
                class="bg-red-600 hover:bg-red-700 text-white font-bold px-6 py-2 rounded">
                Salvar Evento
              </button>
            </div>
          </form>
        </article>
      </section>
    </div>
  </section>
</body>
</html>

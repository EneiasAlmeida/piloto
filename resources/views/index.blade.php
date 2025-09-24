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
      <form class="bg-neutral-800 w-full max-w-md text-white rounded-lg shadow-lg p-6 flex flex-col gap-4 text-center">
        
        <div>
            <h2 class="text-3xl md:text-4xl font-bold tracking-tighter">
              <span class="text-red-600">DebEne</span>
              <span class="text-white">Eventos</span>
            </h2>

          <h3 class="text-neutral-400 italic text-sm md:text-base">"SEU EVENTO, NOSSA PAIXÃO EM CADA DETALHE"</h3>
        </div>
        <label for="user-email" class="cursor-pointer">Digite seu email</label>
        <input type="email" id="user-email" name="user-email" class="bg-white rounded p-3 text-black w-full">

        <label for="user-password" class="cursor-pointer">Digite sua senha</label>
        <input type="password" id="user-password" name="user-password" class="bg-white rounded p-3 text-black w-full">

        <button type="submit" class="bg-neutral-700 rounded py-3 text-white hover:bg-green-800 transition duration-500 w-full">
          Entrar
        </button> 
        <button type="button" class="bg-neutral-700 rounded py-3 text-white hover:bg-green-800 transition duration-500 w-full">
          Cadastrar-se
        </button>
      </form>
    </div>
    
  </body>
</html>

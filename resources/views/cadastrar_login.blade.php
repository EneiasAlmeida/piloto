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
            <form class=" bg-neutral-800 w-full max-w-md text-white rounded-lg shadow-lg p-6 flex flex-col gap-4 text-center">
            <h2 class="text-4xl font-bold tracking-tighter mt-5 ">
                <span class="text-red-600">DebEne<span><span class="text-white">Eventos</span>
            </h2>
            <h3 class="text-neutral-400 italic"> SEU EVENTO, NOSSA PAIXÃO EM CADA DETALHE</h3>
            
            <label for="user-email" class= "cursor-pointer">Digite seu email</label>
            <input type="email" id="user-email"name="user-email" class="bg-white rounded p-3 text-black w-full">
          <label for="user-password"class= "cursor-pointer">Digite sua senha</label>
            <input type="password" id="user-password"name="user-password" class="bg-white rounded p-3 text-black w-full">
          <label for="confirme"class= "cursor-pointer">Confirme sua senha</label>
            <input type="password" id="confirme"name="user-password" class="bg-white rounded p-3 text-black w-full">
          <button type="button" class="bg-neutral-700 rounded py-3 text-white hover:bg-green-800 transition duration-500 w-full">
          Cadastrar
        </button>
            

            </form>
        </div>
        </section>
    </body>
</html>


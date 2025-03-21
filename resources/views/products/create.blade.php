<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
   
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
            <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#5f5f5e] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
                <h1 class="mb-1 font-medium text-center">Cadastro de Produto</h1>
                
               
                @if($errors->any())
                    <ul class="text-red-500 mb-4">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                
                <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A] text-center ">Por favor, preencha as informações do produto abaixo.</p>
                
                <form action="{{ route('product.store') }}" method="post">
                    @csrf
                    @method('post')

                    
                    <div class="mb-4">
                        <label for="name" class="block text-sm text-gray-700 dark:text-gray-300">Nome do Produto:</label>
                        <input type="text" id="name" name="name" placeholder="Nome do produto" required class="w-full p-2 mt-2 border border-gray-300 dark:border-gray-600 rounded-md text-gray-900">
                    </div>

                  
                    <div class="mb-4">
                        <label for="qty" class="block text-sm text-gray-700 dark:text-gray-300">Quantidade:</label>
                        <input type="number" id="qty" name="qty" required class="w-full p-2 mt-2 border border-gray-300 dark:border-gray-600 rounded-md text-gray-900">
                    </div>

                  
                    <div class="mb-4">
                        <label for="price" class="block text-sm text-gray-700 dark:text-gray-300">Preço:</label>
                        <input type="text" id="price" name="price" required class="w-full p-2 mt-2 border border-gray-300 dark:border-gray-600 rounded-md text-gray-900">
                    </div>

               
                    <div class="mb-4">
                        <label for="description" class="block text-sm text-gray-700 dark:text-gray-300">Descrição:</label>
                        <textarea id="description" name="description" rows="4" required class="w-full p-2 mt-2 border border-gray-300 dark:border-gray-600 rounded-md text-gray-900"></textarea>
                    </div>

                   
                    <button type="submit" class="w-full py-2 px-4 bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none text-gray-900">Cadastrar Produto</button>
                </form>
            </div>
        </main>
    </div>

</body>
</html>

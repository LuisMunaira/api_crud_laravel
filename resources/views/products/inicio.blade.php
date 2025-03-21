<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gerenciamento de Produtos</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-900">

    
    <header class="bg-white text-gray-900 p-4 shadow-md border-b">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Gerenciamento de Produtos</h1>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="#home" class="hover:text-blue-600">Início</a></li>
                    <li><a href="#produtos" class="hover:text-blue-600">Produtos</a></li>
                    <li><a href="#sobre" class="hover:text-blue-600">Sobre</a></li>
                    <li><a href="#contato" class="hover:text-blue-600">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    


    <section id="sobre" class="bg-gray-50 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-8 text-gray-900">Sobre o Sistema</h2>
            <p class="text-lg text-gray-700 mb-4">Nosso sistema foi desenvolvido para tornar o gerenciamento de produtos simples e intuitivo. Você pode facilmente adicionar, editar e excluir produtos, além de visualizar informações detalhadas sobre cada item.</p>
            <a href="{{ route('product.create') }}" class="bg-blue-600 text-white px-6 py-3 rounded-md text-lg hover:bg-blue-700">Iniciar</a>
        </div>
    </section>

    
    <footer class="bg-white text-gray-900 py-6 mt-16 border-t">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 Sistema de Gerenciamento de Produtos. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>
</html>

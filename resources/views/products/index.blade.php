<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
   
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-900">

   
    <header class="bg-blue-500 text-white p-4 shadow-md">
        <div class="container mx-auto text-center">
            <h1 class="text-2xl font-bold">Lista de Produtos</h1>
        </div>
    </header>

    
    <section class="container mx-auto py-8">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                <thead class="bg-blue-300 text-white">
                    <tr>
                        <th class="py-3 px-4 border-b">ID</th>
                        <th class="py-3 px-4 border-b">Nome</th>
                        <th class="py-3 px-4 border-b">Quantidade</th>
                        <th class="py-3 px-4 border-b">Preço</th>
                        <th class="py-3 px-4 border-b">Descrição</th>
                        <th class="py-3 px-4 border-b">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ( $products as  $product)
                        <tr class="hover:bg-gray-100">
                            <td class="py-3 px-4 border-b text-center">{{ $product->id }}</td>
                            <td class="py-3 px-4 border-b">{{ $product->name }}</td>
                            <td class="py-3 px-4 border-b text-center">{{ $product->qty }}</td>
                            <td class="py-3 px-4 border-b text-center">{{ $product->price }}</td>
                            <td class="py-3 px-4 border-b">{{ $product->description }}</td>
                            <td class="py-3 px-4 border-b text-center">
                              
                                <a href="{{ route('product.edit', $product->id) }}" class="bg-yellow-400 text-white px-4 py-2 rounded-md hover:bg-yellow-600">Editar</a>
                                <form action="{{ route('product.destroy', $product->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-400 text-white px-4 py-2 rounded-md hover:bg-red-600">Deletar</button>
                               
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    
    <footer class="bg-black text-white py-4 mt-8 flex flex-col min-h-screen justify-center">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 Sistema de Gerenciamento de Produtos. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>
</html>

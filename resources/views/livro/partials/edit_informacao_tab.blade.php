<div class="p-6 text-gray-900 dark:text-gray-100">
    @foreach($errors->all() as $error)
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <span class="font-medium">Danger alert!</span> {{$error}}
    </div>
    @endforeach
    <form method="POST" action="{{route('livro.update', $livro->id)}}">
        @method('PUT')
        @csrf
        <div class="mb-5">
            <label for="livro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Título do Livro</label>
            <input type="text" value="{{$livro->titulo}}" id="livro" name="titulo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
        </div>

        <div class="mb-5">
            <label for="resumo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Resumo</label>
            <textarea id="resumo" rows="4" name="resumo" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escreva aqui seu resumo...">{{$livro->resumo}}</textarea>
        </div>

        <div class="mb-5">
            <label for="autor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome do autor</label>
            <input type="text" value="{{$livro->autor}}" id="autor" name="autor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
        </div>
        <div class="mb-5">
            <label for="paginas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantidade de páginas</label>
            <input type="number" value="{{$livro->numero_paginas}}" id="paginas" name="numero_paginas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
        </div>

        <div class="mb-5">
            <label for="ano" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ano de publicação</label>
            <input type="number" value="{{$livro->ano_publicacao}}" id="ano" name="ano_publicacao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
        </div>

        <div class="mb-5">
            <label for="total" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantidade em disponível</label>
            <input type="number" id="total" value="{{$livro->quantidade_disponivel}}" name="quantidade_disponivel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
        </div>

        <div class="mb-5">
            <label for="total" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantidade em estoque</label>
            <input type="number" id="total" value="{{$livro->quantidade_total}}" name="quantidade_total" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
        </div>

        <label for="categorias" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecione uma categoria</label>
        <select id="categorias" name="categoria_livro_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @foreach($categorias as $categoria)
            <option {{$livro->categoria_livro_id == $categoria->id ? 'selected': ''}} value="{{$categoria->id}}">{{$categoria->nome}}</option>
            @endforeach
        </select>
        <button type="submit" class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Enviar</button>
    </form>
</div>
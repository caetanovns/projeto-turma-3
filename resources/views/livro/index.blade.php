<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Livros') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="flex justify-end">
                <button class=" bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 m-4 rounded">
                    Adicionar
                </button> 
            </div>
            <div class="p-6 text-gray-900 dark:text-gray-100">
                
                    <table class="w-full text-sm text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Titulo</th>
                                <th scope="col" class="px-6 py-3 text-center">Autor</th>
                                <th scope="col" class="px-6 py-3 text-center">Nª Páginas</th>
                                <th scope="col" class="px-6 py-3 text-center">Ano</th>
                                <th scope="col" class="px-6 py-3 text-center">Disponível/Total</th>
                                <th scope="col" class="px-6 py-3 text-center">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($livros as $livro)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$livro->titulo}}</td>
                                    <td class="px-6 py-4 text-center">{{$livro->autor}}</td>
                                    <td class="px-6 py-4 text-center">{{$livro->numero_paginas}}</td>
                                    <td class="px-6 py-4 text-center">{{$livro->ano_publicacao}}</td>
                                    <td class="px-6 py-4 text-center">{{$livro->quantidade_disponivel}}/{{$livro->quantidade_total}}</td>
                                    <td class="px-6 py-4 text-center">
                                    <button class="flex items-center justify-center p-2 rounded bg-blue-500 hover:bg-blue-600 text-white">
      <!-- Icon goes here -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
      </svg>
    </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

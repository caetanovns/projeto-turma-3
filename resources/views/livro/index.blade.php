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
                    <a href="{{route('livro.create')}}" class=" bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 m-4 rounded">
                        Adicionar
                    </a>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <table class="w-full text-sm text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Titulo</th>
                                <th scope="col" class="px-6 py-3 text-center">Autor</th>
                                <th scope="col" class="px-6 py-3 text-center">Categoria</th>
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
                                <td class="px-6 py-4 text-center">{{$livro->categoriaLivro->nome}}</td>
                                <td class="px-6 py-4 text-center">{{$livro->numero_paginas}}</td>
                                <td class="px-6 py-4 text-center">{{$livro->ano_publicacao}}</td>

                                <td class="px-6 py-4 text-center">
                                    @if($livro->quantidade_disponivel == 0)
                                    <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-red-900 dark:text-red-300">
                                        {{$livro->quantidade_disponivel}}/{{$livro->quantidade_total}}
                                    </span>
                                    @elseif($livro->quantidade_disponivel == $livro->quantidade_total)
                                    <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-green-900 dark:text-green-300">
                                        {{$livro->quantidade_disponivel}}/{{$livro->quantidade_total}}
                                    </span>
                                    @else
                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-900 dark:text-blue-300">
                                        {{$livro->quantidade_disponivel}}/{{$livro->quantidade_total}}
                                    </span>
                                    @endif
                                </td>

                                <td class="px-6 py-4 text-center flex justify-center gap-4">
                                    <a href="{{route('livro.edit', $livro->id)}}" class="flex items-center justify-center p-2 rounded bg-blue-500 hover:bg-blue-600 text-white">
                                        <!-- Icon goes here -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <form method="POST" action="{{route('livro.destroy', $livro->id)}}">
                                        @method('DELETE')
                                        @csrf
                                        <button class="flex items-center justify-center p-2 rounded bg-red-500 hover:bg-red-600 text-white">
                                            <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                            </svg>
                                        </button>
                                    </form>
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
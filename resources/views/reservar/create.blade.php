<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Adicionar Reserva') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach($errors->all() as $error)
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        <span class="font-medium">Danger alert!</span> {{$error}}
                    </div>
                    @endforeach
                    <form method="POST" action="{{route('reservar.store')}}">
                        @csrf

                        <div class="mb-5">
                            <x-input.select :options="$alunos" label="Selecione um Aluno" name="aluno_id"/>
                        </div>

                        <div class="mb-5">
                            <x-input.select :options="$livros" label="Selecione um Livro" name="livro_id"/>
                        </div>

                        <button type="submit" class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Reservar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
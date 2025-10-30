<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Reservas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end">
                    <a href="{{route('reservar.create')}}" class=" bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 m-4 rounded">
                        Adicionar Reserva
                    </a>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <table class="w-full text-sm text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Livro</th>
                                <th scope="col" class="px-6 py-3 text-center">Aluno</th>
                                <th scope="col" class="px-6 py-3 text-center">Data Reserva</th>
                                <th scope="col" class="px-6 py-3 text-center">Data Devolução</th>
                                <th scope="col" class="px-6 py-3 text-center">Status</th>
                                <th scope="col" class="px-6 py-3 text-center">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reservas as $reserva)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$reserva->livro->titulo}}</td>
                                <td class="px-6 py-4 text-center">{{$reserva->aluno->user->name}}</td>
                                <td class="px-6 py-4 text-center">{{Carbon\Carbon::parse($reserva->data_reserva)->format('d/m/Y')}}</td>
                                <td class="px-6 py-4 text-center">{{Carbon\Carbon::parse($reserva->data_devolucao)->format('d/m/Y')}}</td>
                                <td class="px-6 py-4 text-center">{{$reserva->status->nome}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
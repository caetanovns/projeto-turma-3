<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Matrícula
                </th>
                <th scope="col" class="px-6 py-3">
                    Nome
                </th>
                <th scope="col" class="px-6 py-3">
                    Data de Reserva
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($livro->reservas->sort() as $historico)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $historico->aluno->matricula }}
                </th>
                <td class="px-6 py-4">
                    {{ $historico->aluno->user->name }}
                </td>
                <td class="px-6 py-4">
                    {{ Carbon\Carbon::parse($historico->data_reserva)->format('d/m/Y') }}
                </td>
                <td class="px-6 py-4">
                    {{ $historico->status->nome }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
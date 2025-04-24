<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg font-medium text-gray-700">
            {{ __('Novo Contato') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto px-4">
            <div class="bg-white shadow-md rounded-lg p-6">
                <form action="{{ route('contatos.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label for="tipo_contato_id" class="block text-sm font-medium text-gray-600">Tipo contato:</label>
                        <select name="tipo_contato_id" id="tipo_contato_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                            <option value="">Selecione</option>
                            @foreach ($tipocontatos as $tipocontato)
                                <option value="{{ $tipocontato->id }}">{{ $tipocontato->descricao }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="nome" class="block text-sm font-medium text-gray-600">Nome:</label>
                        <input type="text" name="nome" id="nome" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-600">Email:</label>
                        <input type="email" name="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="telefone" class="block text-sm font-medium text-gray-600">Telefone:</label>
                        <input type="text" name="telefone" id="telefone" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="cidade" class="block text-sm font-medium text-gray-600">Cidade:</label>
                        <input type="text" name="cidade" id="cidade" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="estado" class="block text-sm font-medium text-gray-600">Estado:</label>
                        <input type="text" name="estado" id="estado" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div class="flex justify-end space-x-4">
                        <a href="{{ route('contatos.index') }}" class="text-sm text-gray-500 hover:text-gray-700">Voltar</a>
                        <button type="submit" class="bg-blue-500 text-white text-sm font-medium py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>


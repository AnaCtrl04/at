<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-semibold text-gray-800">
            {{ __('Altera Contato') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white shadow-md rounded-lg">
                <div class="p-6">
                    <form action="{{ route('contatos.update', $contato->id) }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div>
                            <label for="tipo_contato_id" class="block text-sm font-medium text-gray-700">Tipo contato:</label>
                            <select name="tipo_contato_id" id="tipo_contato_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                                <option value="">Selecione</option>
                                @foreach ($tipocontatos as $tipocontato)
                                    <option value="{{ $tipocontato->id }}" {{ $contato->tipo_contato_id == $tipocontato->id ? 'selected' : '' }}>{{ $tipocontato->descricao }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="nome" class="block text-sm font-medium text-gray-700">Nome:</label>
                            <input type="text" name="nome" id="nome" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" required value="{{ $contato->nome }}">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                            <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" required value="{{ $contato->email }}">
                        </div>

                        <div>
                            <label for="telefone" class="block text-sm font-medium text-gray-700">Telefone:</label>
                            <input type="text" name="telefone" id="telefone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ $contato->telefone }}">
                        </div>

                        <div>
                            <label for="cidade" class="block text-sm font-medium text-gray-700">Cidade:</label>
                            <input type="text" name="cidade" id="cidade" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ $contato->cidade }}">
                        </div>

                        <div>
                            <label for="estado" class="block text-sm font-medium text-gray-700">Estado:</label>
                            <input type="text" name="estado" id="estado" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ $contato->estado }}">
                        </div>

                        <div class="flex justify-end space-x-4">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">Salvar</button>
                            <a href="{{ route('contatos.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-medium py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


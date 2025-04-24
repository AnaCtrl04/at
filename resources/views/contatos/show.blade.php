<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg font-medium text-gray-700">
            {{ __('Contato') }} :: {{ $contato->id }} - {{ $contato->nome }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto px-4">
            <div class="bg-white shadow-md rounded-lg">
                <div class="p-6">
                    <ul class="space-y-2 text-gray-600">
                        <li><strong>Id:</strong> {{ $contato->id }}</li>
                        <li><strong>Tipo contato:</strong> {{ $contato->tipoContato ? $contato->tipoContato->descricao : 'N/A' }}</li>
                        <li><strong>Nome:</strong> {{ $contato->nome }}</li>
                        <li><strong>E-mail:</strong> 
                            <a href="mailto:{{ $contato->email }}" class="text-blue-600 hover:underline">
                                {{ $contato->email }}
                            </a>
                        </li>
                        <li><strong>Telefone:</strong> {{ $contato->telefone }}</li>
                        <li><strong>Cidade:</strong> {{ $contato->cidade }}</li>
                        <li><strong>Estado:</strong> {{ $contato->estado }}</li>
                        <li><strong>Data de criação:</strong> {{ $contato->created_at->format('d/m/Y H:i') }}</li>
                        <li><strong>Data de atualização:</strong> {{ $contato->updated_at->format('d/m/Y H:i') }}</li>
                    </ul>
                    <div class="mt-6">
                        <a href="{{ route('contatos.index') }}" class="inline-block bg-blue-500 text-white text-sm font-medium py-2 px-4 rounded hover:bg-blue-600">
                            Voltar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

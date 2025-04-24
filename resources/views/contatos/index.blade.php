<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">
            {{ __('Contatos') }}
        </h2>
        <div class="mt-4 flex items-center space-x-2">
            <a href="{{ route('contatos.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded">
                Novo Contato
            </a>
            <form action="{{ url('contatos/search') }}" method="GET" class="flex items-center space-x-2">
                <input type="text" name="q" placeholder="Pesquisar..." class="border rounded px-2 py-1 focus:outline-none focus:ring focus:border-blue-300">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded">
                    <img src="{{ asset('images/lupa.png') }}" alt="Pesquisar" class="w-4 h-4">
                </button>
            </form>
            @if($q !== null)
                <a href="{{ url('contatos') }}" class="bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded">Limpar</a>
            @endif
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white shadow-md rounded-lg">
                <div class="p-6">
                    @if (session('success'))
                        <div id="success-message" class="bg-green-500 text-white font-medium py-2 px-4 rounded mb-4">
                            {{ session('success') }}
                        </div>
                        <script>
                            setTimeout(() => {
                                document.getElementById('success-message')?.style.display = 'none';
                            }, 5000);
                        </script>
                    @endif
                    @foreach ($contatos as $contato)
                        <div class="flex items-center justify-between border-b py-2">
                            <div>
                                <a href="{{ route('contatos.show', $contato->id) }}" class="text-blue-600 hover:underline font-medium">
                                    {{ $contato->nome }}
                                </a>
                                <span class="text-gray-600">-</span>
                                <a href="mailto:{{ $contato->email }}" class="text-gray-700 hover:underline">
                                    {{ $contato->email }}
                                </a>
                            </div>
                            <div class="flex items-center space-x-2">
                                <a href="{{ url("contatos") }}/{{ $contato->id }}/edit" class="bg-green-500 hover:bg-green-600 text-white font-medium py-1 px-3 rounded">
                                    Alterar
                                </a>
                                <button type="button" class="bg-red-500 hover:bg-red-600 text-white font-medium py-1 px-3 rounded"
                                    onclick="if(confirm('Tem certeza que deseja excluir este contato?')) document.getElementById('form-contatos-excluir-{{$contato->id}}').submit()">
                                    Excluir
                                </button>
                                <form id="form-contatos-excluir-{{$contato->id}}" action="{{route('contatos.destroy',$contato->id)}}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

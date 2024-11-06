<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nova Página Pública
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- Apresentar dados do usuário logado --}}

                    @auth
                    <p>Usuario: <strong>{{ Auth::user()->name }}</strong></p>
                    @else
                        <p>Não existe usuário logado</p>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

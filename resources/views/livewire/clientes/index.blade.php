<div>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <h2 class="text-xl mx-4">Consulta / Creación de Clientes</h2>

                <div class="flex justify-end px-8">
                    @livewire('clientes.crear-cliente')
                </div>

                {{-- Probablemente la busqueda y ver productos sea
                    un componente de Livewire --}}
                <div class="flex justify-center">
                    <div class="w-1/2">
                        <x-jet-label for="name" value="{{ __('Buscar Cliente') }}" />
                        <x-jet-input
                            id="name"
                            class="block mt-1 w-full"
                            type="text"
                            name="name"
                            :value="old('name')"
                            required
                            autofocus
                            autocomplete="name"
                            wire:model="buscar_cliente"
                        />
                    </div>
                </div>

                <div class="container py-8 flex justify-center">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>DUI</th>
                                <th>NIT</th>
                                <th>RUC</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $cliente)
                                <tr>
                                    <td>{{ $cliente->nombre }}</td>
                                    <td>{{ $cliente->dui }}</td>
                                    <td>{{ $cliente->nit }}</td>
                                    <td>{{ $cliente->ruc }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mb-4 mx-16">
                    {{$clientes->links()}}
                </div>

            </div>
        </div>
    </div>
</div>

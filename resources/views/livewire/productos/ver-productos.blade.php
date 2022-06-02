<div>
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <h2 class="text-xl mx-4">Consulta / Creación de Productos</h2>

                <div class="flex justify-end px-8">
                    @livewire('productos.crear-producto')
                </div>

                <div class="flex justify-center">
                    <div class="w-1/2">
                        <x-jet-label for="name" value="{{ __('Buscar producto') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" wire:model="buscar" />
                    </div>
                </div>

                <div class="container py-8 flex justify-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Marca</th>
                                <th>Código</th>
                                <th>SKU</th>
                                <th>Descripción</th>
                                <th>Existencias</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td>{{ $producto->nombre }}</td>
                                    <td>{{ $producto->marca }}</td>
                                    <td>{{ $producto->codigo }}</td>
                                    <td>{{ $producto->sku }}</td>
                                    <td>{{ $producto->descripcion }}</td>
                                    <td>{{ $producto->existencias }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

            {{$productos->links()}}

        </div>

    </div>

</div>

<div>
    <div class="py-6">

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
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr class="leading-3">
                                    <td>{{ $producto->nombre }}</td>
                                    <td>{{ $producto->marca }}</td>
                                    <td>{{ $producto->codigo }}</td>
                                    <td>{{ $producto->sku }}</td>
                                    <td>{{ Str::limit($producto->descripcion,50) }}</td>
                                    <td>{{ $producto->existencias }}</td>
                                    <td>
                                        <a href="/reportes/kardex/{{ $producto->codigo }}" target="_blank" class="btn-xs bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Kardex</a>
                                        <a href="/productos/edit/{{ $producto->codigo }}" class="btn-xs bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">Editar</a>
                                        <a href="/productos/edit/{{ $producto->codigo }}" class="btn-xs bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mb-4 mx-16"">
                    {{$productos->links()}}
                </div>

            </div>


        </div>

    </div>

</div>

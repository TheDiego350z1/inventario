<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="flex justify-center">
                    <div class="w-1/2">
                        <x-jet-label value="{{ __('Buscar Producto') }}" />
                        <x-jet-input class="block mt-1 w-full" type="text" name="Buscar Producto" required autofocus wire:model="buscar_producto" wire:keydown.enter="buscar" />

                        @if ($productos)
                            <select class="w-full select overflow-hidden" size="4">
                                    @foreach($productos as $producto)
                                    <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                                    @endforeach
                            </select>
                        @endif
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
                            {{-- @foreach ($clientes as $cliente)
                                <tr>
                                    <td>{{ $cliente->nombre }}</td>
                                    <td>{{ $cliente->dui }}</td>
                                    <td>{{ $cliente->nit }}</td>
                                    <td>{{ $cliente->ruc }}</td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

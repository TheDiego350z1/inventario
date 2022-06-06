<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="flex justify-center">
                    <div class="w-1/2">
                        <x-jet-label value="{{ __('Buscar Producto') }}" />
                        <x-jet-input
                            class="block mt-1 w-full"
                            type="text"
                            name="Buscar Producto"
                            required
                            autofocus
                            wire:model="buscar_producto"
                            wire:keydown.enter="buscar"
                        />

                        @if (count($productos) > 0)
                            <select class="w-full select select-bordered select-lg" size="10">
                                    @foreach($productos as $producto)
                                    <option value="{{$producto->id}}">
                                        {{$producto->nombre}}
                                    gi</option>
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
                            {{-- @foreach ($productos as $producto)
                                <tr>
                                    <td>{{ $productos->nombre }}</td>
                                    <td>{{ $productos->marca }}</td>
                                    <td>{{ $productos->nit }}</td>
                                    <td>{{ $productos->ruc }}</td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

<div>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                {{-- Seleccion de proveedor --}}
                <div class="mt-4 flex justify-center">
                    <div class="w-1/2">
                        <select
                            class="select select-bordered @error('proveedor') select-error @enderror w-full"
                            wire:model="proveedor"
                        >
                            <option>Seleccione un proveedor</option>
                            @foreach ($proveedores as $proveedor)
                            <option value="{{ $proveedor->id }}">{{$proveedor->nombre}}</option>
                            @endforeach
                          </select>
                    </div>
                </div>
                <div class="my-4 flex justify-center">
                    <div class="w-1/2">
                        <input
                            type="text"
                            placeholder="Numero de factura"
                            class="input input-bordered w-full @error('factura') input-error @enderror"
                            wire:model="factura"
                        />

                    </div>

                </div>

                <div class="my-4 flex justify-center">
                    <div class="w-1/2">
                        <x-jet-label value="{{ __('Buscar Producto') }}" />
                        <x-jet-input
                            class="block mt-1 w-full"
                            type="text"
                            name="Buscar Producto"
                            required
                            autofocus
                            value="{{ old('buscar') }}"
                            wire:model="buscar"
                            wire:keydown.enter="buscar"
                        />

                        @if (count($productos) > 0)
                        <div class="mt-4 flex justify-center">
                            <table class="table table-zebra">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Codigo</th>
                                        <th>SKU</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                    <tr>
                                        <td> {{ $producto->nombre }} </td>
                                        <td> {{ $producto->codigo }} </td>
                                        <td> {{ $producto->sku }} </td>
                                        <td>
                                            <button
                                                class="btn"
                                                wire:click="openModal({{ $producto }})"
                                            >
                                                Agregar
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="flex justify-end mx-4 mb-4">
                    <button
                        class="btn"
                        wire:click="save"
                    >
                        Procesar ingreso
                    </button>
                </div>

                <div class="my-4 flex justify-center">
                    <div class="w-1/2">
                        <table class="table table-zebra w-full">
                            <thead>
                                <tr>
                                  <th>Nombre</th>
                                  <th>Cantidad</th>
                                  <th>Costo</th>
                                  <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < count($lista); $i++)
                                <tr>
                                    <th>{{ $lista[$i]["nombre"] }}</th>
                                    <td>{{ $lista[$i]["cantidad"] }}</td>
                                    <td>${{ $lista[$i]["costo"] }}</td>
                                    <td>${{ $lista[$i]["total"] }}</td>
                                </tr>
                                @endfor

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>
        </div>
    </div>

    {{-- Modal de seleccion de cantidades y proveedor --}}

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Información adicional del producto
        </x-slot>
        <x-slot name="content">
            <div>
                <label for="">
                    <span>¿Cuantos productos ingresan?</span>
                </label>
                <input
                    type="number"
                    placeholder="Cantidad de producto"
                    class="input input-bordered w-full"
                    wire:model="cantidad"
                />
            </div>
            <div>
                <label for="">
                    <span>Cúal es el costo del producto?</span>
                </label>
                <input
                    type="number"
                    placeholder="Costo de producto"
                    class="input input-bordered w-full"
                    wire:model="costo"
                />
            </div>
        </x-slot>
        <x-slot name="footer">
            <button
                class="btn"
                wire:click="add"
            >
                Guardar
            </button>
        </x-slot>
    </x-jet-dialog-modal>

</div>

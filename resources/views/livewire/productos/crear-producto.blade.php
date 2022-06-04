<div>
    <button class="btn" wire:click="$set('open', true)">
        crear producto
    </button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            <h2>Crear nuevo producto</h2>
        </x-slot>

        <x-slot name="content">

            <div class="w-full flex">
                {{-- Nombre del producto --}}
                <div class="mb-4 w-1/2 mx-2">
                    <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
                    <x-jet-input
                        id="nombre"
                        class="block mt-1 w-full"
                        type="text" name="nombre"
                        :value="old('nombre')"
                        required
                        autofocus
                        autocomplete="nombre"
                        wire:model="nombre"
                    />
                </div>

                <div class="mb-4 w-1/2 mx-2">
                    {{-- Marca del producto --}}
                    <x-jet-label for="marca" value="{{ __('Marca') }}" />
                    <x-jet-input
                        id="marca"
                        class="block mt-1 w-full"
                        type="text"
                        name="marca"
                        :value="old('marca')"
                        required
                        autofocus
                        autocomplete="marca"
                        wire:model="marca"
                    />
                </div>
            </div>

            <div class="w-full flex">
                {{-- Codigo del producto --}}
                <div class="mb-4 w-1/2 mx-2">
                    <x-jet-label for="codigo" value="{{ __('Codigo') }}" />
                    <x-jet-input
                        id="codigo"
                        class="block mt-1 w-full"
                        type="text"
                        name="codigo"
                        :value="old('codigo')"
                        required
                        autofocus
                        autocomplete="codigo"
                        wire:model="codigo"
                    />
                </div>

                <div class="mb-4 w-1/2 mx-2">
                    {{-- SKU del producto --}}
                    <x-jet-label for="sku" value="{{ __('SKU') }}" />
                    <x-jet-input
                        id="sku"
                        class="block mt-1 w-full"
                        type="text"
                        name="sku"
                        :value="old('sku')"
                        required
                        autofocus
                        autocomplete="sku"
                        wire:model="sku"
                    />
                </div>
            </div>


            <div class="mb-4">
                {{-- Descripción del prodcuto --}}
                <x-jet-label for="description" value="{{ __('Descripción') }}" />
                <textarea
                    class="textarea textarea-bordered w-full"
                    placeholder="Brebe descripción del producto"
                    name="description"
                    required
                    autofocus
                    autocomplete="descripcion"
                    wire:model="descripcion"
                >
                </textarea>
            </div>

            <div class="mb-4">
                {{-- Costo del producto --}}
                <x-jet-label for="costo" value="{{ __('Costo') }}" />
                <x-jet-input
                    id="costo"
                    class="block mt-1 w-full"
                    type="number"
                    name="costo"
                    :value="old('costo')"
                    required
                    autofocus
                    autocomplete="costo"
                    wire:model="costo"
                />
            </div>

        </x-slot>

        <x-slot name="footer">

            <button class="btn" wire:click="crear">
                Crear
            </button>

        </x-slot>
    </x-jet-dialog-modal>
</div>

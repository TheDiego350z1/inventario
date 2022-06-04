<div>
    <button class="btn" wire:click="$set('open', true)">
        Crear cliente
    </button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            <h2>Creación de nuevo cliente</h2>

        </x-slot>

        <x-slot name="content">

            <div class="flex">
                {{-- Nombre del cliente --}}
                <div class="mb-4 w-full mx-2">
                    <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
                    <x-jet-input
                        id="nombre"
                        class="block mt-1 w-full"
                        type="text"
                        name="nombre"
                        :value="old('nombre')"
                        required
                        autofocus
                        autocomplete="nombre"
                        wire:model="nombre"
                    />
                </div>

                <div class="mb-4 w-full mx-2">
                    {{-- NIT del cliente --}}
                    <x-jet-label for="nit" value="{{ __('NIT') }}" />
                    <x-jet-input
                        id="nit"
                        class="block mt-1 w-full"
                        type="text"
                        name="nit"
                        :value="old('nit')"
                        required
                        autofocus
                        autocomplete="nit"
                        wire:model="nit"
                    />
                </div>
            </div>

            <div class="flex">
                {{-- RUC del cliente --}}
                <div class="mb-4 w-full mx-2">
                    <x-jet-label for="ruc" value="{{ __('RUC') }}" />
                    <x-jet-input
                        id="ruc"
                        class="block mt-1 w-full"
                        type="text"
                        name="ruc"
                        :value="old('ruc')"
                        required
                        autofocus
                        autocomplete="ruc"
                        wire:model="ruc"
                    />
                </div>

                <div class="mb-4 w-full mx-2">
                    {{-- DUI del cliente --}}
                    <x-jet-label for="dui" value="{{ __('DUI') }}" />
                    <x-jet-input
                        id="dui"
                        class="block mt-1 w-full"
                        type="text"
                        name="dui"
                        :value="old('dui')"
                        required
                        autofocus
                        autocomplete="dui"
                        wire:model="dui"
                    />
                </div>
            </div>

            <div>
                {{-- Descripción del cliente --}}
                <x-jet-label for="description" value="{{ __('Descripción') }}" />
                <textarea
                    class="textarea textarea-bordered block mt-1 w-full"
                    rows="5"
                    wire:model="descripcion"
                >
                </textarea>
            </div>

        </x-slot>

        <x-slot name="footer">
            <button
                class="btn btn-sm btn-primary mx-8"
                wire:click="abort"
            >
                cancelar
            </button>

            <button class="btn btn-sm" wire:click="crear">
                crear cliente
            </button>

        </x-slot>
    </x-jet-dialog-modal>
</div>

<div>
    <button class="button-blue" wire:click="$set('open', true)" >
        Crear Proveedor
    </button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">

        </x-slot>

        <x-slot name="content">
            <div classs="mb-4">
                <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
                <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="nombre" wire:model="nombre" />
            </div>

            <div classs="mb-4">
                <x-jet-label for="nit" value="{{ __('NIT') }}" />
                <x-jet-input id="nit" class="block mt-1 w-full" type="text" name="nit" :value="old('nit')" required autofocus autocomplete="nit" wire:model="nit" />
            </div>

            <div classs="mb-4">
                <x-jet-label for="ruc" value="{{ __('RUC') }}" />
                <x-jet-input id="ruc" class="block mt-1 w-full" type="text" name="ruc" :value="old('ruc')" required autofocus autocomplete="ruc" wire:model="ruc" />
            </div>

            <div classs="mb-4">
                <x-jet-label for="dui" value="{{ __('DUI') }}" />
                <x-jet-input id="dui" class="block mt-1 w-full" type="text" name="dui" :value="old('dui')" required autofocus autocomplete="dui" wire:model="dui" />
            </div>

            <div classs="mb-4">
                <x-jet-label for="description" value="{{ __('Descripción') }}" />
                <textarea class="textarea w-full" rows="3" wire:model="descripcion" ></textarea>
            </div>

        </x-slot>

        <x-slot name="footer">

            <button class="button-blue" wire:click="crear">
                Crear
            </button>

        </x-slot>

    </x-jet-dialog-modal>
</div>

<div>
    <x-button label="None" x-on:click="$openModal('blur-none')" primary />

<x-button label="SM" x-on:click="$openModal('blur-sm')" primary />

<x-button label="MD" x-on:click="$openModal('blur-md')" primary />

<x-button label="Base" x-on:click="$openModal('blur-base')" primary />

<x-button label="LG" x-on:click="$openModal('blur-lg')" primary />

<x-button label="XL" x-on:click="$openModal('blur-xl')" primary />

<x-button label="2XL" x-on:click="$openModal('blur-xxl')" primary />

<x-button label="3XL" x-on:click="$openModal('blur-xxxl')" primary />

{{-- CSS: 'backdrop-blur-none' - You can use |blur="none"| too - DEFAULT --}}
<x-modal name="blur-none" blurless>
    <x-card title="Blur SM">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    </x-card>
</x-modal>

{{-- CSS: 'backdrop-blur-sm' --}}
<x-modal name="blur-sm" blur="sm">
    <x-card title="Blur SM">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    </x-card>
</x-modal>

{{-- CSS: 'backdrop-blur' --}}
<x-modal name="blur-md" blur="md">
    <x-card title="Blur SM">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    </x-card>
</x-modal>

{{-- CSS: 'backdrop-blur-md' --}}
<x-modal name="blur-base" blur="base">
    <x-card title="Blur SM">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    </x-card>
</x-modal>

{{-- CSS: 'backdrop-blur-lg' --}}
<x-modal name="blur-lg" blur="lg">
    <x-card title="Blur SM">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    </x-card>
</x-modal>

{{-- CSS: 'backdrop-blur-xl' --}}
<x-modal name="blur-xl" blur="xl">
    <x-card title="Blur SM">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    </x-card>
</x-modal>

{{-- CSS: 'backdrop-blur-2xl' --}}
<x-modal name="blur-xxl" blur="2xl">
    <x-card title="Blur SM">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    </x-card>
</x-modal>

{{-- CSS: 'backdrop-blur-3xl' --}}
<x-modal name="blur-xxxl" blur="3xl">
    <x-card title="Blur SM">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    </x-card>
</x-modal>
    {{ $this->table }}
</div>

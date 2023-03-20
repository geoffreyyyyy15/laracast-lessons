@props(['name', 'type' => 'text'])
<x-form.field >
 <x-form.label name="{{ $name }}"/>
    <input type="{{ $type }}"
    name="{{$name}}" 
    id="title"
    value="{{ old('name') }}"
    class="text-black border border-gray-400 p-2 w-full rounded" required>
</x-form.field>
<x-form.error name="{{ $name }}"/>
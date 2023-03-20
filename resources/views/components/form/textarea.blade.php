@props(['name'])
<x-form.field>
    <x-form.label name="{{ $name }}" />
    <textarea class="text-black border border-gray-400 p-2 w-full rounded"
     name="{{$name}}"
       id="{{$name}}"
        cols="30" rows="10">{{ old($name) }}</textarea>
    <x-form.error name="{{$name}}" />
</x-form.field>


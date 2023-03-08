@if (session()->has('success'))
<div x-data="{ show: true }"
     x-init="setTimeout(() => show = false, 4000)"
     x-show="show"
class="">
    <p class="fixed py-2 px-4 text-white bg-green-500 rounded-xl text-lg bottom-3 right-2">{{ session('success') }}</p>
</div>
@endif
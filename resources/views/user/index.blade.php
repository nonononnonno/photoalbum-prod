<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="flex flex-col justify-center">
        <div class="mx-auto lg:w-4/5 sm:w-5/6">
            @foreach($images as $image)
                <img src="{{Storage::url($image->img_path)}}" class="w-full" style="margin: 2rem 0">
            @endforeach
        </div>
    </div>
</x-app-layout>

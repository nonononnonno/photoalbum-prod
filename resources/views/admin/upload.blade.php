<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Upload
        </h2>
    </x-slot>
    <div>
        <form method="POST" action={{route('admin.upload')}} enctype="multipart/form-data">
            @csrf
            <input type="file" name="image">
            <input type="submit" value="アップロード">
        </form>
    </div>

    <div>
        <a href="{{route('admin.preview')}}">Preview</a>
    </div>

</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Upload
        </h2>
    </x-slot>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: tomato;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="mt-2">
        <form method="POST" action={{route('admin.upload')}} enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" class="form-control block px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
            <input type="submit" value="アップロード" class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
        </form>
    </div>

    <div class="mt-2">
        <a href="{{route('admin.preview')}}" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Preview</a>
    </div>

</x-app-layout>

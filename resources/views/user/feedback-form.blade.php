<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{Auth::user()->name}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
            <b> Feedback form</b>
                <br><br>
                    <form action="{{ route('feedback.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="title"> Title</label>
                        <input type="text" name="title">
</br></br>
                        <label for="text">Message</label>
                        <input type="text" name="text">
                        <br><br>
                        <input type="file" name="file">
                        <br>
                        <br>
                        <button class="border-black-700  border-b border-r border-l border-t " type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

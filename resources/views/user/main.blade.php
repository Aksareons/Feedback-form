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
            <b> Feedback </b>
                <br><br>
                @if (isset($error))
        <div class="font-medium text-red-600">
            {{ __('Application can be sent once a day:') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                <li>{{ $error }} hours</li>
           
        </ul>
    </div>
@endif

                <br><br>
                    <a class=" p-2 border-l border-b border-t border-r   border-gray-400" href="{{route('feedback.create')}}">Сделать заявку</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header"> <b> Feedback </b> </x-slot>
    <br><br>
    <a class="border-l border-b border-t border-r   border-gray-400 "href="{{ route('manager.index')}}"> Back</a>
<br><br>
    <table class="table-auto p-2">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>massage</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>File</th>
                            <th>created_at</th>
                            <th>Viewed</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        
                            <tr class="border-l border-b border-t border-r   border-gray-400 ">
                         <td  >{{ $feedback->getKey() }}</td>
                            <td class="p-2 m-2">{{ $feedback->title}}</td>
                            <td class="p-2 m-2">{{ $feedback->message}}</td>
                            <td class="p-2 m-2">{{ $feedback->user->name }}</td>
                            <td class="p-2 m-2">{{ $feedback->user->email }}</td>
                            <td> <a href="/files/{{$feedback->file}}"> {{$feedback->file}}</a></td>
                            <td class="p-2 m-2">{{ $feedback->created_at }}</td>
                            <td class="p-2 m-2"> @if ($feedback->viewed) viewed @else @endif</td>
                        </tr>
                      
                   </tbody>
                </table>
</x-app-layout>
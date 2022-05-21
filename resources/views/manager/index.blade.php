<x-app-layout>
    <x-slot name="header"> <b> Feedbacks</b> </x-slot>

<table class="table-auto p-2">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>massage</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>created_at</th>
                            <th>Viewed</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($feedbacks as $feedback)
                        
                            <tr class="border-l border-b border-t border-r   border-gray-400 ">
                         <td  >{{ $feedback->getKey() }}</td>
                            <td class="p-2 m-2">{{ $feedback->title}}</td>
                            <td class="p-2 m-2">{{ $feedback->message}}</td>
                            <td class="p-2 m-2">{{ $feedback->user->name }}</td>
                            <td class="p-2 m-2">{{ $feedback->user->email }}</td>
                            <td class="p-2 m-2">{{ $feedback->created_at }}</td>
                            <td class="p-2 m-2"> @if ($feedback->viewed) viewed @else @endif</td>
                            @if ($feedback->viewed == 0)
                            <td>
                                <form action="{{route('manager.update', $feedback->getKey())}}" method="post">
                                    @csrf
                                    <button type="submit" class="border-l border-b border-t border-r   border-gray-400  p-1 m-1 "> View </button>
                                </form> 
                            </td>
                            @else
                            <td><a class="border-l border-b border-t border-r   border-gray-400 "href="{{ route('manager.show', $feedback->getKey())}}">View</a></td>
                            @endif
</tr>
                        @endforeach
                   </tbody>
                </table>
</x-app-layout>
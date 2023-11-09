@extends('layouts.main')

@section('title', 'Contacts')

@section('content')

    <div class="w-full relative overflow-x-auto shadow-md sm:rounded-lg">
        <header class="mb-5">
            <h1 class="w-full text-center text-gray-800 text-4xl font-bold py-3">Contact List</h1>
        </header>
        @if(session('success'))
            <div class="w-2/3 mx-auto bg-indigo-100 border border-indigo-400 text-indigo-400 px-4 py-2 rounded relative" role="alert">
                <p class="text-center text-sm"> {{ session('success') }}</p>
            </div>
        @endif
        <table class="w-full mt-5 text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($arrContacts as $ddContact)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
{{--                        <img class="w-10 h-10 rounded-full" src="https://ui-avatars.com/api/?name={{ $ddContact->name }}&color=7F9CF5&background=EBF4FF"--}}
{{--                             alt="Jese image">--}}
{{--                        {{ $ddContact->id }}--}}
{{--                        <div class="">--}}
{{--                        </div>--}}
                        <div class="text-base font-semibold">{{ $ddContact->id }}</div>
                    </th>
                    <td class="px-6 py-4">{{ $ddContact->name }}</td>
                    <td class="px-6 py-4">
                        {{ $ddContact->email }}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            @php
                                $status = $ddContact->status;
                                $statusColor = ($status == 'active' ? 'green' : 'red');
                            @endphp
                            <div class="h-2.5 w-2.5 rounded-full bg-{{ $statusColor }}-500 mr-2"></div>
                            {{ $status == 'active' ? 'Active' : 'Inactive' }}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex gap-3">


                        <a href="{{ route('contact.edit', ['id' => $ddContact->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <form action="{{ route('contact.destroy', ['id' => $ddContact->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-xs text-red-600">Delete</button>
                            </form>
                        </a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
        <div class="p-5">
            {{ $arrContacts->links('components.paginate')}}
        </div>
    </div>

@endsection

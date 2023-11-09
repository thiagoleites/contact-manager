@extends('layouts.main')

@section('title', 'Contacts')

@section('content')
    @if(session('success'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative" role="alert">
            <p class="text-center text-sm"> {{ session('success') }}</p>
        </div>
    @endif
    <ul role="list" class="divide-y divide-gray-100">
        @foreach($arrContacts as $ddContact)
            <li class="flex justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                         src="https://ui-avatars.com/api/?name={{ $ddContact->name }}&color=7F9CF5&background=EBF4FF"
                         alt="">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">{{ $ddContact->name }}</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $ddContact->email }}</p>
                    </div>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm leading-6 text-gray-900">Action</p>
                    <div class="flex gap-1">
                        <p class="text-xs leading-5 text-gray-500">
                            <a href="{{ route('contact.edit', ['id' => $ddContact->id]) }}">
                                Edit
                            </a>
                        </p>
                        <p class="text-xs leading-5 text-gray-500">'
                            <a href="#">
                                <form action="{{ route('contact.destroy', ['id' => $ddContact->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-xs text-red-600">Delete</button>
                                </form>
                            </a>
                        </p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

    {{ $arrContacts->links('components.paginate')}}

@endsection

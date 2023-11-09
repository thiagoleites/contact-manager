@extends('layouts.main')
@section('content')
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
                    {{--                    <p class="mt-1 text-xs leading-5 text-gray-500">Last seen--}}
                    {{--                        <time datetime="2023-01-23T13:23Z">3h ago</time>--}}
                    <div class="flex gap-1">
                        <p class="text-xs leading-5 text-gray-500">
                            <a href="#">
                                Edit
                            </a>
                        </p>
                        <p class="text-xs leading-5 text-gray-500">'
                            <a href="#">
                                Delete
                            </a>
                        </p>
                    </div>
                    {{--                    </p>--}}
                </div>
            </li>
        @endforeach
    </ul>

@endsection

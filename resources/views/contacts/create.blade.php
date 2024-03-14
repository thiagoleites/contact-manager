@extends('layouts.main')

@section('title', 'Create Contact')

@section('content')
    <div class="container">
        <h1 class="text-3xl font-semibold text-center">Create Contact</h1>
            <div class="max-w-2xl mx-auto mt-10">
            
                <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                            <label for="name" class="block text-gray-600">Name</label>
                            <input name="name" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="name" placeholder="Type your name" value=""
                                   >
                            <div class="invalid-feedback">
                                @error('name')
                                <span class="text-xs leading-5 text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                    </div>
                    <div class="mb-3">
                        <div class="col">
                            <label for="contact" class="block text-gray-600">Contact</label>
                            <input name="contact" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="contact" placeholder="Type your number"
                                   value="" >
                            <div class="invalid-feedback">
                                @error('contact')
                                <span class="text-xs leading-5 text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col">
                            <label for="email" class="block text-gray-600">Email</label>
                            <input name="email" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="email" placeholder="Type your pass" value=""
                                   >
                            <div class="invalid-feedback">
                                @error('email')
                                <span class="text-xs leading-5 text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col">
                            <label for="status" class="block text-gray-600">Status</label>
                            <select class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="status" >
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                            <div class="invalid-feedback">
                                @error('status')
                                <span class="text-xs leading-5 text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="col">
                            <button class="w-full rounded text-white bg-blue-500 hover:bg-blue-800 transition-all py-2 px-4" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            
            </div>

    </div>
@endsection

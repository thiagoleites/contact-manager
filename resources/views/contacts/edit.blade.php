@extends('layouts.main')

@section('title', 'Create Contact')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Create Contact</h1>
        <div class="row">
            <div class="col-md-8 mx-auto">

                <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <div class="col">
                            <label for="name" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="" value="{{ $contact->name }}"
                                   >
                            <div class="invalid-feedback">
                                @error('name')
                                <span class="text-xs leading-5 text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col">
                            <label for="contact" class="form-label">Contact</label>
                            <input name="contact" type="text" class="form-control" id="contact" placeholder=""
                                   value="{{ $contact->contact }}" >
                            <div class="invalid-feedback">
                                @error('contact')
                                <span class="text-xs leading-5 text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="text" class="form-control" id="email" placeholder="" value="{{ $contact->email }}"
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
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" >
                                <option value="active" {{ $contact->status == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ $contact->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
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
                            <button class="w-25 btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@extends('layouts.main')

@section('title', 'Contacts')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Contact manager</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-2">All contacts</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap user-table mb-0">
                            <thead>
                            <tr>
                                <th scope="col" class="border-0 text-uppercase font-medium pl-4 px-5">#</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Name</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Email</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Status</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Manage</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($arrContacts as $ddContact)
                                <tr>
                                    <td class="pl-4 px-5">{{ $ddContact->id }}</td>
                                    <td>
                                        <h5 class="font-medium mb-0">{{ $ddContact->name }}</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{ $ddContact->email }}</span>
                                    </td>
                                    <td>
                                        <span>{{ $ddContact->status }}</span>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('contact.edit', ['id' => $ddContact->id]) }}"
                                               class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i
                                                    class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('contact.destroy', ['id' => $ddContact->id]) }}"
                                                  method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2">
                                                    <i class="fa fa-trash"></i></button>
                                            </form>


                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="mt-2 py-3 px-4">

                            {{ $arrContacts->links('components.paginate')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

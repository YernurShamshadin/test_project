@extends('main')

@section('content')

    <div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <div class="w-100 h-100">

                    <div class="d-flex justify-content-center pt-5 pb-5">Books</div>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Author</th>
                                <th scope="col">Page</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($books as $book)
                            <tr>
                                <th scope="row">{{ $book->id }}</th>
                                <td>{{ $book->name }}</td>
                                <td>{{ $book->author->name }}</td>
                                <td>{{ $book->page_count }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    <div class="d-flex justify-content-center mt-4">
                        <a class="btn btn-primary" href="{{ route('book.create') }}" role="button">Create</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

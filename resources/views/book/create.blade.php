@extends('main')

@section('content')

    <div>
        <!--Grid row-->
        <div class="row d-flex justify-content-center">

            <!--Grid column-->
            <div class="col-md-3">
                <div class="w-100 h-100">
                    <div class="d-flex justify-content-center pt-5 pb-5">Create book</div>

                    <form action="{{ route('book.store') }}" method="post">
                        @csrf

                        <div class="form-group mb-3 row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Name:</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Description:</label>
                            <div class="col-sm-10">
                                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" cols="20" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Page:</label>
                            <div class="col-sm-10">
                                <input type="text" name="page_count" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>

                        <select name="author_id" class="form-select" aria-label="Default select example">
                            <option selected>Select author</option>
                            @foreach($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                            @endforeach
                        </select>


                        <div class="form-group d-flex justify-content-center mt-4">
                            <input type="submit" class="btn btn-primary " value="Add">
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>

@endsection

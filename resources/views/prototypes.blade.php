<x-home-master>

    @section('content')
        <div class="row">
            <div class="col-lg-6">
                <div class="container mt-5">
                    <div class="card mb-4">
                        <div class="card-header">
                            Add Model
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('prototypes.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="col-lg-12">
                                    <label for="name" class="col-md-12 col-form-label">Name</label>
                                    <input id="name" type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                        autocomplete="name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-lg-12">
                                    <label for="brands_id" class="col-md-12 col-form-label">Mark:</label>
                                    <select name="brands_id"
                                            class="form-control @error('brands_id') is-invalid @enderror"
                                            value="{{ old('brands_id') }}" autocomplete="brands_id" autofocus>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('brands_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>



                                <div class="form-group mt-3 d-flex" style="justify-content: center">
                                    <button type="submit" class="btn btn-primary pr-5 pl-5 mt-1">Add Model</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="container p-0 m-0 mt-5 ">

                <div class="card mb-4">

                    <div class="card-header">All Models</div>
                    <div class="card-body">
                        <div class="datatable" style="overflow-x:auto;">
                            <table class="table table-bordered table-hover overflow-auto" style="overflow: auto;"
                                id="dataTable" width="100%" cellspacing="0">
                                <tr>
                                    <th>Name</th>
                                    <th>Mark</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Mark</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($prototypes as $type)
                                        <tr>
                                            <td>{{ $type->name }}</td>
                                            <td>{{ $type->brands->name }}</td>

                                            <td>


                                                <div class="modal fade" id="id{{ $type->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Delete
                                                                    Category
                                                                </h5>
                                                                <button class="close" type="button" data-dismiss="modal"
                                                                    aria-label="Close"><span
                                                                        aria-hidden="true">×</span></button>
                                                            </div>
                                                            <div class="modal-body">This will delete the selected model
                                                                and all
                                                                the data associated with it!</div>
                                                            <div class="modal-footer"><button class="btn btn-secondary"
                                                                    type="button" data-dismiss="modal">Close</button>


                                                                <form method="POST"
                                                                    action="{{ route('prototypes.destroy', $type->id) }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-danger"
                                                                        type="submit">Delete</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a href="" class="btn btn-datatable btn-icon btn-transparent-dark"
                                                    data-toggle="modal" data-target="#id{{ $type->id }}"><i
                                                        data-feather="trash-2"></i></a>

                                            </td>


                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>


    @endsection

</x-home-master>

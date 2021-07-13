<x-home-master>

    @section('content')
        <div class="container mt-5">

            <div class="card mb-4">
                <div class="card-header">
                    Add Client
                </div>

                <div class="card-body">

                    @if (isset($client))
                        <form method="POST" action="{{ route('clients.update', $client->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="col-lg-12">
                                <label for="company" class="col-md-12 col-form-label">Company</label>
                                <input id="company" type="text" name="company"
                                    class="form-control @error('company') is-invalid @enderror"
                                    value="{{ old('company') ?? $client->company }}" autocomplete="company">
                                @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>\n
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="name" class="col-md-12 col-form-label">Name</label>
                                <input id="name" type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') ?? $client->name }}" autocomplete="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>\n
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="email" class="col-md-12 col-form-label">Email</label>
                                <input id="email" type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') ?? $client->email }}" autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>\n
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="phone" class="col-md-12 col-form-label">Phone</label>
                                <input id="phone" type="text" name="phone"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    value="{{ old('phone') ?? $client->phone }}" autocomplete="phone">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>\n
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="address" class="col-md-12 col-form-label">Address</label>
                                <input id="address" type="text" name="address"
                                    class="form-control @error('address') is-invalid @enderror"
                                    value="{{ old('address') ?? $client->address }}" autocomplete="address">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>\n
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="country" class="col-md-12 col-form-label">Country</label>
                                <input id="country" type="text" name="country"
                                    class="form-control @error('country') is-invalid @enderror"
                                    value="{{ old('country') ?? $client->country }}" autocomplete="country">
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>\n
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="street" class="col-md-12 col-form-label">Street</label>
                                <input id="street" type="text" name="street"
                                    class="form-control @error('street') is-invalid @enderror"
                                    value="{{ old('street') ?? $client->street }}" autocomplete="street">
                                @error('street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>\n
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="city" class="col-md-12 col-form-label">City</label>
                                <input id="city" type="text" name="city"
                                    class="form-control @error('city') is-invalid @enderror"
                                    value="{{ old('city') ?? $client->city }}" autocomplete="city">
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>\n
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="zip" class="col-md-12 col-form-label">Zip</label>
                                <input id="zip" type="text" name="zip"
                                    class="form-control @error('zip') is-invalid @enderror"
                                    value="{{ old('zip') ?? $client->zip }}" autocomplete="zip">
                                @error('zip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>\n
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3 d-flex" style="justify-content: center">
                                <button type="submit" class="btn btn-primary pr-5 pl-5 mt-1">Update</button>
                        </form>

                    @else

                        <form method="POST" action="{{ route('clients.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="col-lg-12">
                                <label for="company" class="col-md-12 col-form-label">Company</label>
                                <input id="company" type="text" name="company"
                                    class="form-control @error('company') is-invalid @enderror"
                                    value="{{ old('company') }}" autocomplete="company">
                                @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

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
                                <label for="email" class="col-md-12 col-form-label">Email</label>
                                <input id="email" type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                    autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="phone" class="col-md-12 col-form-label">Phone</label>
                                <input id="phone" type="text" name="phone"
                                    class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}"
                                    autocomplete="phone">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="address" class="col-md-12 col-form-label">Address</label>
                                <input id="address" type="text" name="address"
                                    class="form-control @error('address') is-invalid @enderror"
                                    value="{{ old('address') }}" autocomplete="address">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="country" class="col-md-12 col-form-label">Country</label>
                                <input id="country" type="text" name="country"
                                    class="form-control @error('country') is-invalid @enderror"
                                    value="{{ old('country') }}" autocomplete="country">
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="street" class="col-md-12 col-form-label">Street</label>
                                <input id="street" type="text" name="street"
                                    class="form-control @error('street') is-invalid @enderror"
                                    value="{{ old('street') }}" autocomplete="street">
                                @error('street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="city" class="col-md-12 col-form-label">City</label>
                                <input id="city" type="text" name="city"
                                    class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}"
                                    autocomplete="city">
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="zip" class="col-md-12 col-form-label">Zip</label>
                                <input id="zip" type="text" name="zip"
                                    class="form-control @error('zip') is-invalid @enderror" value="{{ old('zip') }}"
                                    autocomplete="zip">
                                @error('zip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3 d-flex" style="justify-content: center">
                                <button type="submit" class="btn btn-primary pr-5 pl-5 mt-1">Add Client</button>


                        </form>
                    @endif

                </div>
            </div>
        </div>
        <div class="container p-0 m-0 mt-5 ">

            <div class="card mb-4">
                <div class="card-header">All Clients</div>
                <div class="card-body">
                    <div class="datatable" style="overflow-x:auto;">
                        <table class="table table-bordered table-hover overflow-auto" style="overflow: auto;" id="dataTable"
                            width="100%" cellspacing="0">
                            <tr>
                                <th>Name</th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>

                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                        <td>{{ $client->name }}</td>
                                        <td>
                                            <a class="btn btn-datatable btn-icon btn-transparent-dark mr-2"
                                                href="{{ route('clients.edit', $client->id) }}"><i
                                                    data-feather="edit"></i></a>

                                            <div class="modal fade" id="id{{ $client->id }}" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete Category
                                                            </h5>
                                                            <button class="close" type="button" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span></button>
                                                        </div>
                                                        <div class="modal-body">This will delete the selected Client and all
                                                            the data associated with it!</div>
                                                        <div class="modal-footer"><button class="btn btn-secondary"
                                                                type="button" data-dismiss="modal">Close</button>


                                                            <form method="POST"
                                                                action="{{ route('clients.destroy', $client->id) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit">Delete</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <a href="" class="btn btn-datatable btn-icon btn-transparent-dark"
                                                data-toggle="modal" data-target="#id{{ $client->id }}"><i
                                                    data-feather="trash-2"></i></a>

                                        </td>


                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        @endsection

</x-home-master>

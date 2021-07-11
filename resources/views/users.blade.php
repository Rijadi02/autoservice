<x-home-master>

    @section('content')
    <div class="container mt-5">




        <div class="card mb-4">
            <div class="card-header">
                Add user
            </div>

            <div class="card-body">

                @if (isset($user))
                <form method="POST" action="{{ route("user.update", $user->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="col-lg-12">
                <label for="name" class="col-md-12 col-form-label">Name</label>
                <input id="name" type="text" name="name" class="form-control @error("name") is-invalid @enderror" value="{{ old("name") ?? $user->name }}" autocomplete="name">
                @error("name")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="email" class="col-md-12 col-form-label">Email</label>
                <input id="email" type="email" name="email" class="form-control @error("email") is-invalid @enderror" value="{{ old("email") ?? $user->email }}" autocomplete="email">
                @error("email")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>


                <div class="col-lg-12">
                <label for="address" class="col-md-12 col-form-label">Address</label>
                <input id="address" type="text" name="address" class="form-control @error("address") is-invalid @enderror" value="{{ old("address") ?? $user->address }}" autocomplete="address">
                @error("address")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="country" class="col-md-12 col-form-label">Country</label>
                <input id="country" type="text" name="country" class="form-control @error("country") is-invalid @enderror" value="{{ old("country") ?? $user->country }}" autocomplete="country">
                @error("country")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="street" class="col-md-12 col-form-label">Street</label>
                <input id="street" type="text" name="street" class="form-control @error("street") is-invalid @enderror" value="{{ old("street") ?? $user->street }}" autocomplete="street">
                @error("street")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="city" class="col-md-12 col-form-label">City</label>
                <input id="city" type="text" name="city" class="form-control @error("city") is-invalid @enderror" value="{{ old("city") ?? $user->city }}" autocomplete="city">
                @error("city")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="zip" class="col-md-12 col-form-label">Zip</label>
                <input id="zip" type="text" name="zip" class="form-control @error("zip") is-invalid @enderror" value="{{ old("zip") ?? $user->zip }}" autocomplete="zip">
                @error("zip")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="tel" class="col-md-12 col-form-label">Tel</label>
                <input id="tel" type="text" name="tel" class="form-control @error("tel") is-invalid @enderror" value="{{ old("tel") ?? $user->tel }}" autocomplete="tel">
                @error("tel")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="currency" class="col-md-12 col-form-label">Currency</label>
                <input id="currency" type="text" name="currency" class="form-control @error("currency") is-invalid @enderror" value="{{ old("currency") ?? $user->currency }}" autocomplete="currency">
                @error("currency")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="tariff" class="col-md-12 col-form-label">Tariff</label>
                <input id="tariff" type="text" name="tariff" class="form-control @error("tariff") is-invalid @enderror" value="{{ old("tariff") ?? $user->tariff }}" autocomplete="tariff">
                @error("tariff")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="bank" class="col-md-12 col-form-label">Bank</label>
                <input id="bank" type="text" name="bank" class="form-control @error("bank") is-invalid @enderror" value="{{ old("bank") ?? $user->bank }}" autocomplete="bank">
                @error("bank")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>


                <div class="col-lg-12">
                <label for="role_id" class="col-md-12 col-form-label">Role</label>
                <input id="role_id" type="text" name="bank" class="form-control @error("role_id") is-invalid @enderror" value="{{ old("role_id") ?? $user->role_id }}" autocomplete="role_id">
                @error("role_id")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                 <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Update</button>
                </form>

                @else

                <form method="POST" action="{{ route("users.store") }}" enctype="multipart/form-data">
                @csrf

                <div class="col-lg-12">
                <label for="name" class="col-md-12 col-form-label">Full Name</label>
                <input id="name" type="text" name="name" class="form-control @error("name") is-invalid @enderror" value="{{ old("name") }}" autocomplete="name">
                @error("name")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="email" class="col-md-12 col-form-label">Email</label>
                <input id="email" type="email" name="email" class="form-control @error("email") is-invalid @enderror" value="{{ old("email") }}" autocomplete="email">
                @error("email")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="password" class="col-md-12 col-form-label">Password</label>
                <input id="password" type="password" name="password" class="form-control @error("password") is-invalid @enderror" value="{{ old("password") }}" autocomplete="password">
                @error("password")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="password_confirmation" class="col-md-12 col-form-label">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control @error("password_confirmation") is-invalid @enderror" value="{{ old("password_confirmation") }}" autocomplete="password_confirmation">
                @error("password_confirmation")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="address" class="col-md-12 col-form-label">Address</label>
                <input id="address" type="text" name="address" class="form-control @error("address") is-invalid @enderror" value="{{ old("address") }}" autocomplete="address">
                @error("address")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="country" class="col-md-12 col-form-label">Country</label>
                <input id="country" type="text" name="country" class="form-control @error("country") is-invalid @enderror" value="{{ old("country") }}" autocomplete="country">
                @error("country")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="street" class="col-md-12 col-form-label">Street</label>
                <input id="street" type="text" name="street" class="form-control @error("street") is-invalid @enderror" value="{{ old("street") }}" autocomplete="street">
                @error("street")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="city" class="col-md-12 col-form-label">City</label>
                <input id="city" type="text" name="city" class="form-control @error("city") is-invalid @enderror" value="{{ old("city") }}" autocomplete="city">
                @error("city")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="zip" class="col-md-12 col-form-label">Zip</label>
                <input id="zip" type="text" name="zip" class="form-control @error("zip") is-invalid @enderror" value="{{ old("zip") }}" autocomplete="zip">
                @error("zip")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="tel" class="col-md-12 col-form-label">Tel</label>
                <input id="tel" type="text" name="tel" class="form-control @error("tel") is-invalid @enderror" value="{{ old("tel") }}" autocomplete="tel">
                @error("tel")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="currency" class="col-md-12 col-form-label">Currency</label>
                <input id="currency" type="text" name="currency" class="form-control @error("currency") is-invalid @enderror" value="{{ old("currency") }}" autocomplete="currency">
                @error("currency")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="tariff" class="col-md-12 col-form-label">Tariff</label>
                <input id="tariff" type="text" name="tariff" class="form-control @error("tariff") is-invalid @enderror" value="{{ old("tariff") }}" autocomplete="tariff">
                @error("tariff")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="bank" class="col-md-12 col-form-label">Bank Details</label>
                <input id="bank" type="text" name="bank" class="form-control @error("bank") is-invalid @enderror" value="{{ old("bank") }}" autocomplete="bank">
                @error("bank")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="role_id" class="col-md-12 col-form-label">Role</label>
                <input id="role_id" type="text" name="role_id" class="form-control @error("role_id") is-invalid @enderror" value="{{ old("role_id") }}" autocomplete="role_id">
                @error("role_id")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                 <div class="form-group mt-3 d-flex" style="justify-content: center">
                <button type="submit" class="btn btn-primary pr-5 pl-5 mt-1">Add User</button>
                </form>
                @endif

            </div>
        </div>

    </div>
    @endsection

</x-home-master>




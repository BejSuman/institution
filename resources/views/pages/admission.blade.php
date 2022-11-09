@extends('layouts.admin-template')

@section('content')


    {!! showMessage() !!}

    <div class="panel">

        <div class="panel-body">
            {{ Form::open(['url' => url('admin/add-company'), 'class' => 'row col-offset-md-3', 'id' => '']) }}
            <div class="row">


                <div class="col-sm-6 form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Company Name">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-sm-6 form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" name="phone" id="phone"
                        placeholder="Enter Company phone">
                    @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                {{-- <div class="col-sm-6 form-group">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" class="form-control" name="country" id="country"
                        placeholder="Enter Company Country">
                    @error('country')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div> --}}

                <div class="col-sm-6 form-group">
                    <label for="country" class="form-label">Country</label><br>
                    <select name="country" id="country" class="form-control">
                        <option value="" selected disabled>Setect Country</option>
                        @if ($countryNames)
                            @foreach ($countryNames as $key => $country)
                                <option value="{{ $country }}">{{ $country }}</option>
                            @endforeach
                        @endif
                    </select>
                    @error('country')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-sm-6 form-group">
                    <label for="state" class="form-label">Sate</label><br>
                    <select name="state" id="state" class="form-control">
                        <option value="" selected disabled>Setect Sate</option>
                        @if ($stateNames)
                            @foreach ($stateNames as $key => $state)
                                <option value="{{ $state }}">{{ $state }}</option>
                            @endforeach
                        @endif
                    </select>
                    @error('state')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                {{-- <div class="col-sm-6 form-group">
                    <label for="state" class="form-label">State</label>
                    <input type="text" class="form-control" name="state" id="state"
                        placeholder="Enter Company State">
                    @error('state')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div> --}}

                <div class="col-sm-6 form-group">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="address"
                        placeholder="Enter Company Address">
                    @error('address')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-sm-6 form-group">
                    <label for="pin" class="form-label">PIN</label>
                    <input type="text" class="form-control" name="pin" id="pin" placeholder="Enter PIN No">
                    @error('pin')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </div>


            <div class="row">

            </div>
            {{ Form::close() }}
        </div>
    </div>


@endsection


@section('footer_script')
@endsection

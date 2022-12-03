@extends('layouts.template')
@section('title', 'Admition')
@section('content')
    {!! showMessage() !!}

    {{-- <div class="panel"> --}}

    <div class="px-4 mx-4">

    </div>
    {{-- </div> --}}



    <div class="container-fluid py-5">
        <div class="container bg-light p-4 border border-radius">
            {{-- {{ Form::open(['url' => url('admission'), 'class' => 'row col-offset-md-3', 'id' => '']) }} --}}
            <form action="{{ url('') }}" class="row col-offset-md-3">
                @csrf
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="student_name" class="form-label">Student Name</label>
                        <input type="text" class="form-control" name="student_name" id="student_name"
                            placeholder="Enter sduden tname">
                        @error('student_name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- <div class="col-sm-6 form-group">
                        <label for="gargent_name" class="form-label">Gargent Name</label>
                        <input type="text" class="form-control" name="gargent_name" id="gargent_name"
                            placeholder="Enter Gargent Name">
                        @error('gargent_name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div> --}}

                    <div class="col-sm-6 form-group">
                        <label for="student_phone_number" class="form-label">Student Phone Number</label>
                        <input type="tel" class="form-control" name="student_phone_number" id="student_phone_number"
                            placeholder="Enter Student phone number">
                        @error('student_phone_number')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- <div class="col-sm-6 form-group">
                        <label for="gargent_phone_number" class="form-label">Gargent Phone Number</label>
                        <input type="tel" class="form-control" name="gargent_phone_number" id="gargent_phone_number"
                            placeholder="Enter Gargent phone number">
                        @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-sm-6 form-group">
                        <label for="student_whatsapp_number" class="form-label">Student WhatsApp Number</label>
                        <input type="tel" class="form-control" name="student_whatsapp_number"
                            id="student_whatsapp_number" placeholder="Enter Student WhatsApp Number">
                        @error('student_whatsapp_number')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-sm-6 form-group">
                        <label for="gargent_whatsapp_number" class="form-label">Gargent WhatsApp Number</label>
                        <input type="tel" class="form-control" name="gargent_whatsapp_number"
                            id="gargent_whatsapp_number" placeholder="Enter Gargent WhatsApp Number">
                        @error('gargent_whatsapp_number')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

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

                    <div class="col-sm-6 form-group">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="address"
                            placeholder="Enter Student Address">
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

                    <div class="col-sm-6 form-group">
                        <label for="last_exam" class="form-label">Last Exam</label>
                        <input type="text" class="form-control" name="last_exam" id="last_exam"
                            placeholder="Enter Student last exam">
                        @error('last_exam')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-sm-6 form-group">
                        <label for="curent_cource" class="form-label">Current School/Insttution</label>
                        <input type="text" class="form-control" name="curent_cource" id="curent_cource"
                            placeholder="Enter Student curent_cource">
                        @error('curent_cource')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-sm-6 form-group">
                        <label for="cource" class="form-label">Cource Name</label>
                        <input type="text" class="form-control" name="cource" id="cource"
                            placeholder="Cource Name">
                        @error('cource')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-sm-6 form-group">
                        <label for="cource_duretion" class="form-label">Cource Duration</label><br>
                        <select name="cource_duretion" id="cource_duretion" class="form-control">
                            <option value="" selected disabled>Setect Cource Duration</option>
                            <option value="6">6 Month</option>
                            <option value="12">12 Month</option>
                            <option value="18">18 Month</option>
                            <option value="24">24 Month</option>
                        </select>
                        @error('cource_duretion')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div> --}}



                    <div class="col-sm-12 form-group">
                        <button type="submit" class="btn btn-primary px-3 save_btn">Save</button>
                    </div>

                    <div class="col-sm-12 form-group">
                        <p class="ajax-res"></p>
                    </div>

                </div>

                {{-- {{ Form::close() }} --}}
            </form>
        </div>
    </div>

    {{-- *----------------------------------- --}}
    {{-- <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style> --}}

    {{-- <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>State Name</th>
            </tr>
        </thead>
        <tbody id="list_todo">
            @foreach ($state as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->stateName }}</td>
                </tr>
            @endforeach
        </tbody>


    </table> --}}

    {{-- *----------------------------------- --}}

    {{-- <table>
        <thead>
            <th>ID</th>
            <th>State Name</th>
        </thead>
        <tbody id="list_todo">
            @foreach ($state as $item)
                <td>{{ $item->id }}</td>
                <td>{{ $item->stateName }}</td>
            @endforeach
        </tbody>
    </table> --}}

    {{-- *----------------------------------- --}}
@endsection
@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("form").on('submit', function(e) {
                e.preventDefault();
                let form_data = $('form').serializeArray();
                // console.log(form_data);

                $.ajax({
                    url: "admission-store",
                    type: "POST",
                    data: form_data,
                    dataType: "json",
                    beforeSend: function() {
                        $(".save_btn").addClass("disabled").text("Loding...");
                    },
                    success: function(res) {
                        $(".ajax-res").text("Your form Submit successfully");
                        $(".save_btn").removeClass("disabled").text("Submit");
                    },
                });

                // $.ajax({
                //     url: "{{ url('admission-store') }}",
                //     type: "post",
                //     data: form_data,
                //     dataType: "json",
                //     beforeSend: function() {
                //         $(".save_btn").addClass('disabled').text("Loading...");
                //     },
                //     success: function(res) {
                //         // $('.ajax-res').text('Your form Submit successfully');
                //         $(".save_btn").removeClass('disabled').text("Submit");
                //     }
                // });


            });
        });
    </script>
@show

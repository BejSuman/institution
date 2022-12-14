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
            {!! Form::open(['url' => '', 'role' => 'form', 'class' => 'row col-offset-md-3', 'id' => 'admissionForm']) !!}
            @csrf
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="student_name" class="form-label">Student Name</label>
                    <input type="text" class="form-control" name="student_name" id="student_name"
                        placeholder="Enter student name" required data-msg-required="Please enter student name.">
                    @error('student_name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <span class="validation-errors"></span>
                </div>

                <div class="col-sm-6 form-group">
                    <label for="gargent_name" class="form-label">Gargent Name</label>
                    <input type="text" class="form-control" name="guardians_name" id="gargent_name"
                        placeholder="Enter Gargent Name">
                    @error('guardians_name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <span class="validation-errors"></span>
                </div>

                <div class="col-sm-6 form-group">
                    <label for="student_phone_number" class="form-label">Student Phone Number</label>
                    <input type="tel" class="form-control" name="student_phone_number" id="student_phone_number"
                        placeholder="Enter Student phone number">
                    @error('student_phone_number')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <span class="validation-errors"></span>
                </div>

                <div class="col-sm-6 form-group">
                    <label for="gargent_phone_number" class="form-label">Gargent Phone Number</label>
                    <input type="tel" class="form-control" name="guardians_phone_number" id="gargent_phone_number"
                        placeholder="Enter Gargent phone number">
                    @error('guardians_phone_number')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <span class="validation-errors"></span>
                </div>

                <div class="col-sm-6 form-group">
                    <label for="student_whatsapp_number" class="form-label">Student WhatsApp Number</label>
                    <input type="tel" class="form-control" name="student_whatsapp_number" id="student_whatsapp_number"
                        placeholder="Enter Student WhatsApp Number">
                    @error('student_whatsapp_number')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-sm-6 form-group">
                    <label for="gargent_whatsapp_number" class="form-label">Gargent WhatsApp Number</label>
                    <input type="tel" class="form-control" name="guardians_whatsapp_number" id="gargent_whatsapp_number"
                        placeholder="Enter Gargent WhatsApp Number">
                    @error('guardians_whatsapp_number')
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
                    <input type="text" class="form-control" name="current_course" id="curent_cource"
                        placeholder="Enter Student curent_cource">
                    @error('current_course')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-sm-6 form-group">
                    <label for="cource" class="form-label">Cource Name</label>
                    <input type="text" class="form-control" name="course" id="cource" placeholder="Cource Name">
                    @error('course')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-sm-6 form-group">
                    <label for="cource_duretion" class="form-label">Cource Duration</label><br>
                    <select name="course_duration" id="cource_duretion" class="form-control">
                        <option value="" selected disabled>Setect Cource Duration</option>
                        <option value="6">6 Month</option>
                        <option value="12">12 Month</option>
                        <option value="18">18 Month</option>
                        <option value="24">24 Month</option>
                    </select>
                    @error('course_duration')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>



                <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-primary px-3 save_btn">Save</button>
                </div>


                <div class="col-sm-12 form-group">
                    <p class="ajax-res"></p>
                </div>

            </div>

            {{ Form::close() }}
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
    <link href="{{ URL::asset('assets/admin/js/jquery-validation/jquery-validate.css') }}" rel="stylesheet"
        type="text/css">
    <script type="text/javascript" src="{{ URL::asset('assets/admin/js/jquery-validation/jquery.validate.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/admin/js/jquery-validation/additional-methods.js') }}">
    </script>
    <script>
        $(document).ready(function() {

            // $('#admissionForm').validate({
            //     ignore: [],
            //     errorPlacement: function errorPlacement(error, element) {
            //         $(element).parents('div.form-group').find('span.validation-errors').append(error);
            //     },
            //     onfocusout: false,
            //     highlight: function (element, errorClass) {
            //         if ($(element).hasClass('select-2')) {
            //             $(element).next('.select2-container').addClass(errorClass);
            //         } else {
            //             $(element).addClass(errorClass);
            //         }
            //     },
            //     unhighlight: function (element, errorClass) {
            //         if ($(element).hasClass('select-2')) {
            //             $(element).next('.select2-container').removeClass(errorClass);
            //         } else {
            //             $(element).removeClass(errorClass);
            //         }
            //     },
            // });


            $('#admissionForm').validate({
                rules: {
                    student_name: "required",
                    guardians_name: "required",
                    student_phone_number: {
                        required: true,
                        number: true
                    },
                    guardians_phone_number: {
                        required: true,
                        number: true
                    },
                    student_whatsapp_number: {
                        required: true,
                        number: true
                    },
                    guardians_whatsapp_number: {
                        required: true,
                        number: true
                    },
                    country: "required",
                    state: "required",
                    address: "required",
                    pin: "required",
                    last_exam: "required",
                    current_course: "required",
                    course: "required",
                    course_duration: "required",
                },
                messages: {
                    student_name: "Please Enter Student Name",
                    guardians_name: "Please Enter Your Guardians Name",
                    student_phone_number: {
                        required: "Please Enter Student Phone Number",
                        number: "Please Enter Valide Number"
                    },
                    guardians_phone_number: {
                        required: "Please Enter Student Phone Number",
                        number: "Please Enter Valide Number"
                    },
                    student_whatsapp_number: {
                        required: "Please Enter Student Phone Number",
                        number: "Please Enter Valide Number"
                    },
                    guardians_whatsapp_number: {
                        required: "Please Enter Student Phone Number",
                        number: "Please Enter Valide Number"
                    },
                    country: "Please Setect Your Country ",
                    state: "Please Setect Your State",
                    address: "Please Enter Your Address",
                    pin: "Please Enter Your Pin",
                    last_exam: "Please Enter Your Last Exam",
                    current_course: "Please Enter Current Cource",
                    course: "Please Select Cource",
                    course_duration: "Please Select Cource Duration",
                },
                // submitHandler: function() {
                //
                // }
            })

            $("#admissionForm").on('submit', function(e) {
                e.preventDefault();

                let form_data = $('#admissionForm').serializeArray();
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

                        // $(".ajax-res").text("Your form Submit successfully");
                        $(".save_btn").removeClass("disabled").text("Submit");
                        $("#admissionForm")[0].reset();
                        alert("Your form Submit successfully");
                    },
                });
            });
        });
    </script>
@endsection

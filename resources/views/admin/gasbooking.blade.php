@extends('admin.layout.app');

@section('content')
    <div class="pagetitle">
        <h1>Gas Booking Setup</h1>
        <nav>

        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Set Rate</h5>

                        <!-- Horizontal Form -->
                        <form action="{{ route('gasbooking.save') }}" method="POST">
                            @csrf

                            <div class="row mb-3">
                                <label for="phoneNumber" class="col-sm-2 col-form-label">Phone Number</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="phoneNumber" name="phone_number"
                                        value="{{ old('phone_number', $gasBooking->phone_number) }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="smsButton" class="col-sm-2 col-form-label">Sms Button</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="smsButton" name="sms_button"
                                        value="{{ old('sms_button', $gasBooking->sms_button) }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="whatsappButton" class="col-sm-2 col-form-label">Whatsapp Button</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="whatsappButton" name="whatsapp_button"
                                        value="{{ old('whatsapp_button', $gasBooking->whatsapp_button) }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="onlinePortalLink" class="col-sm-2 col-form-label">Online Portal Link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="onlinePortalLink" name="online_portal_link"
                                        value="{{ old('online_portal_link', $gasBooking->online_portal_link) }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="complaintButton" class="col-sm-2 col-form-label">Complaint Button</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="complaintButton" name="complaint_button"
                                        value="{{ old('complaint_button', $gasBooking->complaint_button) }}">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>




                    </div>
                </div>



            </div>


        </div>
    </section>
@endsection;

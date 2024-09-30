@extends('admin.layout.app');

@section('content')
<div class="pagetitle">
    <h1>Agency Setup</h1>
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
                    <h5 class="card-title">Agency Setup</h5>

                    <!-- Horizontal Form -->
                    <form action="{{ isset($agency) ? route('agencies.update', $agency->id) : route('agency.store') }}" method="POST">
                        @csrf
                        @if (isset($agency))
                        @method('PUT') <!-- Use PUT for updates -->
                        @endif

                        <div class="row mb-3">
                            <label for="agencyName" class="col-sm-2 col-form-label">Agency Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="agencyName" name="agency_name" value="{{ isset($agency) ? $agency->agency_name : '' }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="state" class="col-sm-2 col-form-label">State</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="state" name="state" value="{{ isset($agency) ? $agency->state : '' }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="district" class="col-sm-2 col-form-label">District</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="district" name="district" value="{{ isset($agency) ? $agency->district : '' }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="agencyNumber" class="col-sm-2 col-form-label">Agency Number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="agencyNumber" name="agency_number" value="{{ isset($agency) ? $agency->agency_number : '' }}" required>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">{{ isset($agency) ? 'Update' : 'Submit' }}</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>




                </div>
            </div>



        </div>


    </div>
</section>
@endsection;
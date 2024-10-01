@extends('admin.layout.app');

@section('content')
    <div class="pagetitle">
        <h1>API SETUP</h1>
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
                        <h5 class="card-title">API Setup</h5>

                        <!-- Horizontal Form -->
                        <form action="{{ route('api.setup.store') }}" method="POST">
                            @csrf

                            <div class="row mb-3">
                                <label for="api_setup" class="col-sm-2 col-form-label">API KEY</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="api_setup" name="api_setup"
                                        value="{{ $apiSetup->api_key ?? '' }}" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="phoneToggle" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <!-- Hidden input to handle unchecked state -->

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="phoneToggle" name="phoneToggle" value="1"
                                            {{ isset($apiSetup->status) && $apiSetup->status == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="phoneToggle">Active Status</label>
                                    </div>
                                </div>
                            </div>


                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection;

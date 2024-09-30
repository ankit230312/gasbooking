@extends('admin.layout.app');

@section('content')
<div class="pagetitle">
    <h1>Contact Setup</h1>
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
                    <h5 class="card-title">Contact Setup</h5>

                    <!-- Horizontal Form -->
                    <form action="{{ route('contacts.store') }}" method="POST">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" name="email" value="{{ $contacts->email ?? '' }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="number" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="number" name="number" value="{{ $contacts->number ?? '' }}" required>
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
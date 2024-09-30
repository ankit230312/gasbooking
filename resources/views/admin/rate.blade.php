@extends('admin.layout.app');

@section('content')
    <div class="pagetitle">
        <h1>Rate Data</h1>
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
                        <form action="{{ route('gasprice.save') }}" method="POST">
                            @csrf

                            <div class="row mb-3">
                                <label for="indanePrice" class="col-sm-2 col-form-label">Indane gas price</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="indanePrice" name="indane_price"
                                        value="{{ old('indane_price', $gasPrice->indane_price) }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="bharatPrice" class="col-sm-2 col-form-label">Bharat gas price</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="bharatPrice" name="bharat_price"
                                        value="{{ old('bharat_price', $gasPrice->bharat_price) }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="hpPrice" class="col-sm-2 col-form-label">HP gas price</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="hpPrice" name="hp_price"
                                        value="{{ old('hp_price', $gasPrice->hp_price) }}">
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

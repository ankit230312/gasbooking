@extends('admin.layout.app');

@section('content')
    <div class="pagetitle">
        <h1>
            Content Setup
        </h1>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home-justified" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Yojna</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile-justified" type="button" role="tab"
                                    aria-controls="profile" aria-selected="false">Safty</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2" id="myTabjustifiedContent">
                            <div class="tab-pane fade show active" id="home-justified" role="tabpanel"
                                aria-labelledby="home-tab">
                                <form action="{{ route('contents.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="type" value="Yojna">
                                    <textarea name="description" id="content" class="form-control ckeditor" cols="30" rows="10">{{ $yojna->description ?? '' }}</textarea>
                                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab">
                                <form action="{{ route('contents.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="type" value="Safty">
                                    <textarea name="description" class="form-control ckeditor" cols="30" rows="10">{{ $safety->description ?? '' }}</textarea>
                                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('.ckeditor').forEach((element) => {
            ClassicEditor
                .create(element, {
                    height: '500px', // Increase the height here
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
@endsection;

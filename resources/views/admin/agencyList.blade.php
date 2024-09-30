@extends('admin.layout.app');
@section('content')
<div class="pagetitle">
  <h1>Agency List</h1>

</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Agency List</h5>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th>Sno.</th>
                <th>Agency Name</th>
                <th>State</th>
                <th>District</th>
                <th>District Number</th>
                <th>Action</th> <!-- New Action Column -->
              </tr>
            </thead>
            <tbody>
              @foreach ($agencies as $index => $agency)
              <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $agency->agency_name }}</td>
                <td>{{ $agency->state }}</td>
                <td>{{ $agency->district }}</td>
                <td>{{ $agency->agency_number }}</td>
                <td>
                 
                  <a href="{{ route('agencies.edit', $agency->id) }}" class="btn btn-primary btn-sm">Edit</a>

                  <form action="{{ route('agencies.destroy', $agency->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this agency?');">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        
        </div>

      </div>

    </div>
  </div>
</section>
@endsection;
@extends('layouts.master')

@section('title', 'About')

@section('content')
<h1>About</h1>
<p>This is the application I'm building in the
  <a href="https://selftaughtcoders.com/from-idea-to-launch">
  From Idea To Launch</a> course.</p>
<p>This web application will allow people to
  both submit, and answer, programming-related
  questions for various different
  programming languages.</p>

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            @include('components.cargo.fieldCargo')
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
</div>


@push('js')
    <script>
        flatpickr('#data_inicio', {});
    </script>
@endpush

@endsection

@extends('position.create')

@section('qualification.create')
<form action="{{ route('setQualifcation.store', $position->id) }}" method="POST">
    @csrf
    <div class="accordion" id="accordionExample">
        @forelse ($qualifications as $qualification)
        <div class="card mb-3">
            <div class="card-header d-flex justify-content-between" id="heading{{ $loop->index }}">
                <div class="form-check form-check-inline">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{ $loop->index }}" aria-expanded="true" aria-controls="collapse{{ $loop->index }}">
                        {{ $qualification->title }}
                    </button>
                    </div>
                </div>
            
                <div id="collapse{{ $loop->index }}" class="collapse show" aria-labelledby="heading{{ $loop->index }}" data-parent="#accordionExample">
                  <div class="card-body">
                    <strong>Qualified Options</strong>
                    <fieldset>
                        <input type="text" name="qualification_id[]" value="{{ $qualification->id }}" hidden>
                        @foreach ($qualification->options as $option)
                            <div class="form-check">
                                <input type="number" name="point[]" value="{{ $loop->iteration/$loop->count*100 }}" hidden>
                                <input class="form-check-input" type="checkbox" name="qualified_option[]" id="exampleRadios1" value="{{ $option }}">
                                <label class="form-check-label" for="exampleRadios1">
                                  {{ $option }}
                                </label>
                            </div>
                        @endforeach
                    </fieldset>
                  </div>
                </div>
            </div>
        @empty
            <div class="container-fluid d-flex flex-column align-items-center" data-toggle="modal" data-target="#exampleModal">
                <img src="{{ asset('svg/undraw_empty_street.svg') }}" alt="" srcset="" height="250" width="250">
                <span>Nothing in here</span>
            </div>
        @endforelse
    </div>

    <button class="btn btn-primary float-right" type="submit">Save</button>
</form>
@endsection
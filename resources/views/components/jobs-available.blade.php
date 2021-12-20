<div class="container-fluid d-flex flex-column align-items-center">
    <div class="container d-flex justify-content-center mb-3">
        <h3>JOBS AVAILABLE</h3>
    </div>
    <div class="row row-cols-1 row-cols-md-2 w-75 d-flex justify-content-center mb-4">

        @forelse ($positions as $position)
            <div class="col mb-4 d-flex justify-content-center">
                <div class="card">
                  <div class="card-body">
                    <p>{{ $position->department." "."Department" }}</p>
                    <h2 class="card-title">{{ $position->position }}</h2>
                    <p class="card-text">{{ $position->description }}</p>
                  </div>
                </div>
            </div>            
        @empty
            
        @endforelse

    </div>
</div>
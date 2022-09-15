
@php 
$comics = config('comics')
@endphp


<div class="main">


    <div class="container">
        
        <ul class="card-container">
            @foreach($comics as $comic)
            <li class="card">  <a href="{{ route( 'single' ) }}"
            class="{{ request()->routeIs( 'single' ) ? 'active' : '' }}" >
                <img src="{{ asset($comic['thumb']) }}" alt="">
                </a>  {{$comic['series']}} 
            </li>
            @endforeach
        </ul>
    

    </div>



</div>




    

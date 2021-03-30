@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'titlePage'=> __('Atay@Abdelkader'),'title' => __('Atay@Abdelkader')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row justify-content-center">
      <div class="col-lg-7 col-md-8">
          <h1 class="text-white text-center">{{ __('Bienvenue dans votre application de gestion !') }}</h1>
      </div>

  </div>
   <div style="margin-top: 100px " class="row justify-content-center">
          <a href="{{ route('login') }}" class="nav-link">
       			<button style="font-size: 20px" class="btn btn-warning"> 
       			
       				{{ __('Get Started -> ') }}
       		</button>
          </a>

  </div>
</div>
@endsection

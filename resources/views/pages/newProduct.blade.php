@extends('layouts.app', ['activePage' => 'newProduct', 'titlePage' => __('Nouveau produit')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('product.create') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Nouveau Prduit') }}</h4>
              </div>
              <div class="card-body ">
               
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nom') }}</label>
                  <div class="col-sm-7">
                      <input class="form-control" name="nom"  type="text" placeholder="{{ __('Nom') }}"   aria-required="true"/>
                    
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                  <div class="col-sm-7">
                      <input  class="form-control" name="description"  type="text" placeholder="{{ __('Description') }}"  aria-required="true"/>
                    
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Prix') }}</label>
                  <div class="col-sm-7">
                      <input  class="form-control" name="prix"  type="text" placeholder="{{ __('Prix en DA') }}"  aria-required="true"/>
                    
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Code barre') }}</label>
                  <div class="col-sm-7">
                      <input  class="form-control" name="code_barre"  type="text" placeholder="{{ __('Code barre') }}"   aria-required="true"/>
                    
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Quantité Actuelle') }}</label>
                  <div class="col-sm-7">
                      <input  class="form-control" name="quantity"  type="text" placeholder="{{ __('Quantité') }}"   aria-required="true"/>
                    
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Seuil de rupture') }}</label>
                  <div class="col-sm-7">
                      <input  class="form-control" name="seuil"  type="text" placeholder="{{ __('Seuil') }}"   aria-required="true"/>
                    
                  </div>
                </div>
             
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Enregistrer') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
@endsection
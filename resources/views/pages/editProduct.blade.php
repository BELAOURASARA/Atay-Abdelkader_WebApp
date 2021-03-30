@extends('layouts.app', ['activePage' => 'editProduct', 'titlePage' => __('Modifier un produit')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ url('editProduct/'.$id) }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Modifier le Produit') }}</h4>
              </div>
              <div class="card-body ">
               
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nom') }}</label>
                  <div class="col-sm-7">
                      <input class="form-control" name="nom"  type="text" value="{{ old('nom', 
                      $product->name ) }}" placeholder="{{ __('Nom') }}"   aria-required="true"/>
                    
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                  <div class="col-sm-7">
                      <input  class="form-control" name="description"  type="text" placeholder="{{ __('Description') }}" value="{{ old('description', 
                      $product->description ) }}" aria-required="true"/>
                    
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Prix en DA') }}</label>
                  <div class="col-sm-7">
                      <input  class="form-control" name="prix"  type="text" placeholder="{{ __('Prix en DA') }}" value="{{ old('nom', 
                      $product->price ) }}"  aria-required="true"/>
                    
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Code barre') }}</label>
                  <div class="col-sm-7">
                      <input  class="form-control" name="code_barre"  type="text" placeholder="{{ __('Code barre') }}" value="{{ old('description', 
                      $product->bar_code ) }}"  aria-required="true"/>
                    
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Quantité Actuelle') }}</label>
                  <div class="col-sm-7">
                      <input  class="form-control" name="quantity"  type="text" placeholder="{{ __('Quantité') }}" value="{{ old('description', 
                      $product->quantity ) }}"  aria-required="true"/>
                    
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Seuil de rupture') }}</label>
                  <div class="col-sm-7">
                      <input  class="form-control" name="seuil"  type="text" placeholder="{{ __('Seuil') }}" value="{{ old('description', 
                      $product->seuil ) }}"  aria-required="true"/>
                    
                  </div>
                </div>
             
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Sauvegarder') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
@endsection
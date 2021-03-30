@extends('layouts.app', ['activePage' => 'product', 'titlePage' => __('Suivi du stock')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Produits</h4>
            <p class="card-category"> </p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Code barre
                  </th>
                  <th>
                    Nom
                  </th>
                  <th>
                    Description
                  </th>
                  <th>
                    Prix
                  </th>
                  <th>
                    Quantité Actuelle
                  </th>
                  <th>
                    Seuil de rupture
                  </th>
                  
                </thead>
                <tbody>

                 <?php 
                 for($i=0; $i<count($products);$i++)
                   { ?>
                   <tr>
                    <td>
                      <?php echo $products[$i]->bar_code; ?>
                    </td>
                    <td>
                     <?php echo $products[$i]->name; ?>
                    </td>
                    <td>
                     <?php echo $products[$i]->description; ?>
                    </td>
                    <td>
                     <?php echo $products[$i]->price; ?> DA
                    </td>
                    <td>
                     <?php echo $products[$i]->quantity; ?>
                    </td>
                    <td class="text-danger">
                     <?php echo $products[$i]->seuil; ?>
                    </td>
                     <td>
                      <a href="{{ url('editProduct/'.$products[$i]->id) }}">
                        <button type="submit" class="btn btn-info">{{ __(' Modifier ') }}</button>
                      </a>
                      <form method="POST" action="/deleteProduct/{{$products[$i]->id}}">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}

                              <div class="form-group">
                                 
                                  <button type="submit" class="btn btn-danger delete-product"> {{ __('Supprimer') }} </button>
                 

                              </div>
                          </form>


 
                    </td>
                    
                    
                  </tr>
          <?php 
                   } ?>

                </tbody>
              </table>

             

            </div>

          </div>
           <div class="card-footer ml-auto mr-auto">
                <a href="{{ route('newProduct') }}">
                  <button  class="btn btn-primary">{{ __('+  nouveau produit') }}</button>
                </a>
              </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection

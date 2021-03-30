@extends('layouts.app', ['activePage' => 'order', 'titlePage' => __('Liste des dernières commandes')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Commandes</h4>
            <p class="card-category"> </p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Date
                  </th>
                  <th>
                    Client
                  </th>
                  <th>
                    Produit
                  </th>
                  <th>
                    Quantité
                  </th>
                  <th>
                    Etat
                  </th>
                  
                </thead>
                <tbody>

                 <?php 
                 for($i=0; $i<count($orders);$i++)
                   { ?>
                   <tr>
                    <td>
                      <?php echo $orders[$i]->created_at; ?>
                    </td>
                    <td>
                     <?php echo $orders[$i]->client; ?>
                    </td>
                    <td>
                     <?php echo $orders[$i]->product; ?>
                    </td>
                    <td>
                     <?php echo $orders[$i]->quantity; ?>
                    </td>
                    <?php if($orders[$i]->status == "En Attente") { ?>
                        <td class="text-danger">
                         <?php echo $orders[$i]->status; ?>
                        </td>
                     <?php } else {if ($orders[$i]->status == "Prête") { ?>
                        <td class="text-success">
                         <?php echo $orders[$i]->status; ?>
                        </td>
                    <?php } else {?>
                         <td class="text-primary">
                             <?php echo $orders[$i]->status;}} ?>
                          </td>
                     <td>
                      <form method="POST" action="/updateOrder/{{$orders[$i]->id}}">
                              {{ csrf_field() }}
                              {{ method_field('PUT') }}

                              <div class="form-group">
                                 <?php if($orders[$i]->status == "En Attente") { ?>
                                  <button type="submit" class="btn btn-success "> {{ __('Prête ?') }} </button>
                               <?php } else {if ($orders[$i]->status == "Prête") { ?>
                                  <button type="submit" class="btn btn-primary "> {{ __('Facturée ?') }} </button>
                              <?php } } ?>
                                    

                                  
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
           
        </div>
      </div>
    </div>
  </div>
</div>



@endsection

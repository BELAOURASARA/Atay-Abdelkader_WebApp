@extends('layouts.app', ['activePage' => 'notifications', 'titlePage' => __('Notifications')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h3 class="card-title">Notifications</h3>
        
      </div>
      <div class="card-body">
        <div class="row">
          
          <div class="col-md-12">
           

           <?php for($i=0;$i<count($notif);$i++) {
            if($notif[$i]->status=='0') {
           ?>
            <div class="alert alert-info">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
              </button>
              <span>
                <b> Nouvelle Commande - </b> <?php echo $notif[$i]->description; ?></span>
            </div>

          <?php }
          else {
           ?>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
              </button>
              <span>
                <b> Rupture de stock ! </b> <?php echo $notif[$i]->description; ?></span>
            </div>

<?php }}
         
           ?>

          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
@endsection

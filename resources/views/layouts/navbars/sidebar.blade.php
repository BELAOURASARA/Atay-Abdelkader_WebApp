<div class="sidebar" data-color="orange" data-background-color="black" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Atay@Abdelkader') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Tableau de bord') }}</p>
        </a>
      </li>
     
      <li class="nav-item{{ $activePage == 'product' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('product') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Suivi du stock') }}</p>
        </a>
      </li>

       <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <i class="material-icons">person</i>
                <p>{{ __('Profile') }} </p>
              </a>
       </li>

       <li class="nav-item{{ $activePage == 'order' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('order') }}">
                <i class="material-icons">store</i>
                <p>{{ __('Commandes') }} </p>
              </a>
       </li>
     
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications_active</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      
    </ul>
  </div>
</div>

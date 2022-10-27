<nav class="navbar navbar-expand-sm bg-dark">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Link 3</a>
        </li>
      </ul>
    </div>
  </nav>
  <div style="background-color: aqua;height:100px">
    <p>This is Header</p>
</div>

<!DOCTYPE html>
<html>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Jayce blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="{{Request::is('/') ? "active" : ""}} ">
        <a class="nav-link" href="/">HOME </a>
      </li>
      <li class="{{Request::is('about') ? "active" : ""}} ">
        <a class="nav-link" href="/about">ABOUT</a>
      </li>
      <li class="{{Request::is('contact') ? "active" : ""}}">
        <a class="nav-link" href="/contact">CONTACT</a>
      </li>
       <li class="nav-item dropdown navbar-right">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MY ACCOUNT
                   <span class="caret"></span></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">LOGIN</a>
          <a class="dropdown-item" href="#">LOGOUT</a>
         
      
        </div>
      </li>
    </ul>
  </div>
</nav>

</html>

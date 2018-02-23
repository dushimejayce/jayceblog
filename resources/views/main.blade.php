  <!doctype html>
<html lang="en">

  @include('partials._head')

  <body>

  <!-- defoult bootsrap navabar -->

   @include('partials._nav')
  

<div class="container">

  @include('partials._messages')
  
  @yield('content')

  @include('partials._footer')

 </div> <!-- end of container -->


 @include('partials._javascript')

 

  </body>
</html>
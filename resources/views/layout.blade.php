<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Freelancer - Start Bootstrap Theme</title>
  @include('css')
  
  @yield('custom_css')

</head>

<body id="page-top">

  <!-- Navigation -->
  @include ('navigation')

  <!-- Masthead -->
  @include ('masthead')

  <!-- Portfolio Section -->
  @include ('portfolio')

  <!-- About Section -->
  @include ('about')

  <!-- Contact Section -->
  @include ('contact')

  <!-- Footer -->
  @include ('footer')

  <!-- Copyright Section -->
  @include ('copyright')

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  @include ('scroll')

  <!-- Portfolio Modals -->
  @include ('portfoliomodals')
  
  <!-- Bootstrap core JavaScript -->
  @yield('custom_js')

</body>

</html>

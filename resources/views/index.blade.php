<!DOCTYPE html>
<html>
  <head>
    <title>Biblioteka - Strona główna.</title>
    @extends('includes')
  </head>
  <body>
    <h3>Biblioteka - Strona główna.</h3><br>
    <h4>Spis książek:</h4><br>
      @yield('books_list')

    <br><h4>Dodaj nową pozycję:</h4><br>
      @yield('book_add_form')

  </body>
</html>
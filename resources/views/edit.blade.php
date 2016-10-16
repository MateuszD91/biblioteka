<!DOCTYPE html>
<html>
  <head>
    <title>Biblioteka - Edycja {{ $book->title }}:</title>  
    @extends('includes')
  </head>
  <body>
    <h3>Biblioteka - Edycja: '{{ $book->title }}'.</h3>  
    <br>

    <form action="/update" method="POST">
        Tytuł:
        <input type="text" name="title" value="{{ $book->title }}" placeholder="Tytuł książki">
        Autor:
        <input type="text" name="author" value="{{ $book->author }}" placeholder="Autor książki">
        Rok:
        <input type="number" name="year" value="{{ $book->year }}" placeholder="Rok wydania książki">
        <input type="hidden" name="id" value="{{ $book->id }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" value="Zaktualizuj">
    </form>
  </body>
</html>
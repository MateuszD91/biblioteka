@extends('index')

@section('books_list')
<table>
    <tr>
    <th>Nazwa:</th>
    <th>Autor:</th>
    <th>Rok:</th>
    <th>Akcja:</th>
    </tr>
    @foreach ($books as $book)
        <tr>
            <td>{{ str_limit( $book->title, 10) }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->year }}</td>     
            <td style="display: inline-flex !important">
                <form action="/edit" method="POST">
                    <input type="hidden" name="id" value="{{ $book->id  }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" value="Edytuj" >
                </form>  
                 <form action="/delete" method="POST">
                    <input type="hidden" name="id" value="{{ $book->id  }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" value="Usuń" >
                </form>                   
            </td>    
        </tr>
    @endforeach
</table>
@stop

@section('book_add_form')
<form action="/addbook" method="POST">
    Tytuł:
    <input type="text" name="title" value="" placeholder="Tytuł książki">
    Autor:
    <input type="text" name="author" value="" placeholder="Autor książki">
    Rok:
    <input type="number" name="year" value="" placeholder="Rok wydania książki"> 
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Dodaj">
</form>
@stop
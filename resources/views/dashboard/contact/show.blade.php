@extends('dashboard.master')

@section('content')

    <div class="form-group">
        <label for="title">Nombre</label>
        <input readonly class="form-control" type="text" value="{{ $contact->name }}">
    </div>
    <div class="form-group">
        <label for="url_clean">Apellido</label>
        <input readonly class="form-control" type="text" value="{{ $contact->surname }}">
    </div>
    <div class="form-group">
        <label for="content">Email</label>
        <textarea readonly class="form-control" rows="3"> {{ $contact->email }} </textarea>
    </div>
    <div class="form-group">
        <label for="content">Contenido</label>
        <textarea readonly class="form-control" name="content" id="content" rows="3"> {{ $contact->message }} </textarea>
    </div>

@endsection

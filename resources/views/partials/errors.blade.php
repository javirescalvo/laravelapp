@if(!$errors->isEmpty())
    <div class="alert alert-danger">
        <p><strong> Se han encontrado los siguientes errores: </strong></p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@extends('base')
@section('main')
<div class="row">
<div class="col-sm-8 offset-sm-2">
 <h1 class="display-3">Add a comptes</h1>
 <div>
 @if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div><br />
 @endif
 <form method="post" action="{{ route('comptes.store') }}">
 @csrf
 <div class="form-group">
 <label for="first_name">cne:</label>
 <input type="text" class="form-control" name="cne"/>
 </div>
 <div class="form-group">
 <label for="last_name">nom:</label>
 <input type="text" class="form-control" name="nom"/>
 </div>
 <div class="form-group">
    <label for="last_name">prenom:</label>
    <input type="text" class="form-control" name="prenom"/>
</div>
<div class="form-group">
        <label for="last_name">adresse:</label>
        <input type="text" class="form-control" name="adresse"/>
  </div>
        <div class="form-group">
            <label for="last_name">ville:</label>
            <input type="text" class="form-control" name="ville"/>
            </div>
 <div class="form-group">
 <label for="email">Email:</label>
 <input type="text" class="form-control" name="email"/>
 </div>
 <div class="form-group">

 <button type="submit" class="btn btn-primaryoutline">Add compte</button>
 </form>
</div>
</div>
</div>
@endsection
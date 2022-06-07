@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
 <h1 class="display-3">Update a compte</h1>
 @if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 <br />
 @endif
 <form method="post" action="{{ route('comptes.update', $comptes->id) }}">
 @method('PATCH')
 @csrf
 <div class="form-group">
    <label for="first_name">cne:</label>
    <input type="text" class="form-control" name="cne" value={{ $comptes->cne }} />
    </div>
 <div class="form-group">
 <label for="first_name">nom:</label>
 <input type="text" class="form-control" name="nom" value={{ $comptes->nom }} />
 </div>

 <div class="form-group">
 <label for="last_name">prenom:</label>
 <input type="text" class="form-control" name="prenom" value={{ $comptes->prenom }} />
 </div>
 <div class="form-group">
    <label for="city">adresse:</label>
    <input type="text" class="form-control" name="adresse" value={{ $comptes->adresse }} />
    </div>
    <div class="form-group">
    <label for="country">ville:</label>
    <input type="text" class="form-control" name="ville" value={{ $comptes->ville }} />
    </div>
 <div class="form-group">
 <label for="email">Email:</label>
 <input type="text" class="form-control" name="email" value={{ $comptes->email }} />
 </div>
 <button type="submit" class="btn btn-primary">Update</button>
 </form>
 </div>
</div>
@endsection

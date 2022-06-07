@extends('base')
@section('main')
<div>
    <a style="margin: 19px;" href="{{ route('comptes.create')}}" class="b
   tn btn-primary">New compte</a>
    </div>
   
<div class="row">
<div class="col-sm-12">
 <h1 class="display-3">Comptes</h1>
 <table class="table table-striped">
 <thead>
 <tr>
 <td>ID</td>
 <td>NOM</td>
 <td>PRENOM</td>
 <td>PRENOM</td>
 <td>VILLE</td>
 <td>Email</td>
 <td colspan = 2>Actions</td>
 </tr>
 </thead>
 <tbody>
 @foreach($comptes as $contact)
 <tr>
 <td>{{$contact->id}}</td>
 <td>{{$contact->nom}} {{$contact->prenom}}</td>
 <td>{{$contact->adresse}}</td>
 <td>{{$contact->ville}}</td>
 <td>{{$contact->email}}</td>
 <td>
 <a href="{{ route('comptes.edit',$contact->id)}}" class="btn btn-primary">Edit</a>
 </td>
 <td>
 <form action="{{ route('comptes.destroy', $contact->id)}}" method="post">
 @csrf
 @method('DELETE')
 <button class="btn btn-danger" type="submit">Delete</button>
 </form>
 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
<div>
</div>
@endsection
<div class="col-sm-12">
    @if(session()->get('success'))
     <div class="alert alert-success">
     {{ session()->get('success') }}
     </div>
    @endif
@extends('etudiants.layout')
@section('content')
<div class="card">
  
  <div class="bg-primary">
                <h2 class="text-center" style="color: white;">Etudiants</h2>
            </div>
  <div class="card-body">
      
      <form action="{{ url('etudiants') }}" method="post">
        {!! csrf_field() !!}
        <label>Nom</label></br>
        <input type="text" name="Nom" id="Nom" class="form-control"></br>
        <label>Prenom</label></br>
        <input type="text" name="Prenom" id="Prenom" class="form-control"></br>
        <label for="">Semestre</label>
        <select name="Semestre"  class="form-control">                    
        <option value="">-- Sélectionnez la Semestre --</option>
         @foreach ($etudiant as $item)
        <option value="{{$item->Semestre }}">{{$item->Semestre }}
        </option>
        @endforeach
        </select>
        <label for="">matiere</label>
         <select name="Matiere" id="" class="form-control">                    
          <option value="">-- Sélectionnez la matiere --</option>
           @foreach ($etudiant as $item)
          <option value="{{$item->Matiere }}">{{$item->Matiere }}
           </option>
           @endforeach
           </select>
  
        <label>Note1</label></br>
        <input type="text" name="Note1" id="Note1" class="form-control"></br>
        <label>Examen</label></br>
        <input type="text" name="Examen" id="Examen" class="form-control"></br> 
        <input type="submit" value="Save" class="btn btn-success"></br>
      
                    </div>
                   
          
    </form>
     </div>
  </div>
</div>
@stop
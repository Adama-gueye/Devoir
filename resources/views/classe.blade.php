@include('entete.header')
@include('navbar.app')

<div class="container mt-2">
    <div class="row bg-info p-3 mb-4 mt-5">
        <h3 style="box-shadow:2px 2px 20px blue,2px 2px 20px grey ; text-align:center;">BIENVENUE DANS LA PAGE CONTENANT LA LISTE DES ETUDIANTS</h3>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
<a type="button" class="btn btn-primary" href="{{route('etudiants.index')}}">
  Ajout Etudiant
</a>
</div>
<div class="card-body" style="box-shadow:2px 2px 20px blue,2px 2px 20px grey ; text-align:center;">
    <div class="card-header" style="background: rgb(2,36,36); color:white;text-align:center;">Liste Des Clients</div>
    <table class="table table-bordered" id="list">
        <tr>
            <th>N°</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>MATIERE</th>
            <th>NOTE_1</th>
            <th>EXAMEN</th>
            <th>SEMESTRE</th>
        </tr>
        @foreach($etudiants as $etudiant)
            <tr>
                <td>{{ $etudiant->id }}</td>
                <td>{{ $etudiant->nom }}</td>
                <td>{{ $etudiant->prenom }}</td>
                <td>{{ $etudiant->matiere }}</td>
                <td>{{ $etudiant->note1}}</td>
                <td>{{ $etudiant->examen}}</td>
                <td>{{ $etudiant->semestre}}</td>
            </tr>
        @endforeach
    </table> 

</div>

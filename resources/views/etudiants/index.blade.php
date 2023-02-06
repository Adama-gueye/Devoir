@include('entete.header')
@include('navbar.app')
<div class="container mt-5">
    <div class="row bg-info p-3 mb-4">
        <h3 style="box-shadow:2px 2px 20px blue,2px 2px 20px grey ; text-align:center;">BIENVENUE DANS LA PAGE AJOUT ETUDIANT</h3>
    </div>
<div class="card" style="box-shadow:2px 2px 20px blue,2px 2px 20px grey ;">
     <div class="card-header" style="background: rgb(2,36,36); color:white;text-align:center;">Ajout Etudiant</div>
        <div class="card-body">
            <form action="{{ route('etudiants.store') }}" method="POST">
                @csrf
                <label for="">Nom</label>
                <input type="text" class="form-control" name="nom">
                <label for="">Prénom</label>
                <input type="text" class="form-control" name="prenom">
                <label for="">Semestre</label>
                <select name="semestre" id="" class="form-control">
                @foreach($semestres as $semestre)
                    <option value="{{ $semestre->semestre }}">{{ $semestre->semestre }}</option>
                @endforeach
                </select>
                <label for="">Matiere</label>
                <select name="matiere" id="" class="form-control">
                @foreach($matieres as $matiere)
                    <option value="{{ $matiere->matiere }}">{{ $matiere->matiere }}</option>
                @endforeach
                </select>
                <label for="">Note_1</label>
                <input type="number" class="form-control" name="note1">
                <label for="">Examen</label>
                <input type="number" class="form-control" name="examen">
                <button type="submit" class="btn btn-primary offset-5">Enregistrer</button>
            </form>
        </div>
    </div>
</div>

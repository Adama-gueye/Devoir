@include('entete.header')
@include('navbar.app')
<div class="container mt-5">
    <div class="row bg-info p-3 mb-4">
        <h3 style="box-shadow:2px 2px 20px blue,2px 2px 20px grey ; text-align:center;">BIENVENUE DANS LA PAGE AJOUT MATIERE</h3>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
<div class="card" style="box-shadow:2px 2px 20px blue,2px 2px 20px grey ;">
     <div class="card-header" style="background: rgb(2,36,36); color:white;text-align:center;">Ajout Matiére</div>
        <div class="card-body">
            <form action="{{ route('matieres.store') }}" method="POST">
                @csrf
                <label for="">Matiere</label>
                <input type="text" class="form-control" name="matiere" placeholder="Veuillez Saisir le nom de la MATIERE">
                <button type="submit" class="btn btn-primary offset-5">Enregistrer</button>
            </form>
        </div>
    </div>
</div>

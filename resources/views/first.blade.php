@include('entete.header')
@include('navbar.app')

<div class="container">
<div class="row bg-info p-3 mb-4 mt-5">
        <h3 style="box-shadow:2px 2px 20px blue,2px 2px 20px grey ; text-align:center;">BIENVENUE QUI CONTIENT LE PREMIER DE LA CLASSE</h3>
    </div>
<div class="mt-5">
    <h3>Le premier de la classe est {{ $nom }} {{ $prenom }}</h3> 
</div>
</div>

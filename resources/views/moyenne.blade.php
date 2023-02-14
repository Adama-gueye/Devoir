@include('entete.header')
@include('navbar.app')
<div class="container">
<div class="row bg-info p-3 mb-4 mt-5">
        <h3 style="box-shadow:2px 2px 20px blue,2px 2px 20px grey ; text-align:center;">BIENVENUE CONTENANT LA MOYENNE DE LA CLASSE</h3>
    </div>
<div class="mt-5">
    <h3>La moyenne de la classe est {{ $average }}</h3> 
</div>
</div>
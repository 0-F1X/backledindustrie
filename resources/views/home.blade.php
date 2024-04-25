@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Main content goes here -->

        <!-- Sidebar -->
        @section('sidebar')
            <div class="sidebar">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fas fa-tachometer-alt"></i> Tableau de Bord</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-envelope"></i> Message</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-info-circle"></i> Informations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-box"></i> Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-images"></i> Galerie</a>
                    </li>
                </ul>
            </div>
        @show
    </div>
@endsection

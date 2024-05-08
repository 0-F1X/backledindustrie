<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Led-Solutions Madagascar - Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="{{ asset('includes/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('includes/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('includes/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('includes/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('includes/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('includes/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('includes/simple-datatables/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/side.css') }}" rel="stylesheet">

</head>

<body>
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="" class="logo d-flex align-items-center">
                <i class="fas fa-lightbulb" style="color: #FD7E14; font-size:30px;"></i>
                <span class="d-none d-lg-block" style="color: gray; font-size:23.5px;">Admin Led-Solutions</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->


        <nav class="header-nav ms-auto">
            @auth
            <div class="dropdown">
                <div id="userDropdown" class="user-dropdown">
                    <span><i class="fas fa-user"></i> {{ Auth::user()->name }}</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div id="dropdownContent" class="dropdown-content">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            @endauth
        </nav>

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="fas fa-chart-bar"></i>
                    <span>Tableau de Bord</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="fas fa-info-circle"></i><span>Informations</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="fas fa-envelope"></i></i><span>Messages</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="fas fa-box"></i><span>Produits</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="fas fa-images"></i><span>Galerie</span>
                </a>
            </li>

        </ul>
    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        <section>
            <div class="container">
                <h3 style="text-align: center;">Liste des Messages Reçus</h3>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th><i class="fas fa-user"></i> Nom</th>
                                <th><i class="fas fa-envelope"></i> Email</th>
                                <th><i class="fas fa-comment"></i> Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $message)
                            <tr>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->message }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <br> <br>
        <!-- Section Galerie d'images -->
        <section>
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-md-6 text-center">
                        <h3><i class="fas fa-images"></i> Gestion Galerie</h3>
                    </div>
                </div>

                <div class="row">
                    <!-- Colonne pour le formulaire d'ajout d'image -->
                    <div class="col-md-6">
                        <form id="imageForm" action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="image_name" class="form-label"><i class="fas fa-file-image"></i> Nom de l'image :</label>
                                <input type="text" class="form-control" id="image_name" name="image_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label"><i class="fas fa-align-left"></i> Description de l'image :</label>
                                <textarea class="form-control" id="description" name="description"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label"><i class="fas fa-image"></i> Sélectionner une image :</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Ajouter</button>
                        </form>
                    </div>

                    <!-- Colonne pour la liste des images -->
                    <div class="col-md-6">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($images as $image)
                                <tr>
                                    <td>{{ $image->id }}</td>
                                    <td>{{ $image->name }}</td>
                                    <td>{{ $image->description }}</td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <!-- Bouton Supprimer -->
                                            <form action="">
                                                <button type="submit" class="btn btn-danger me-2 btn-sm">
                                                    <i class="fas fa-trash-alt"></i> <!-- Icône pour supprimer -->
                                                </button>
                                            </form>

                                            <!-- Bouton Mettre à Jour -->
                                            <a href="" class="btn btn-primary btn-sm">
                                                <i class="fas fa-edit"></i> <!-- Icône pour mettre à jour -->
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <br> <br>
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <h3 style="text-align:center"><i class="fas fa-info-circle"></i> Informations de Led Solutions Madagascar</h3>

                    <!-- Première colonne -->
                    <div class="col-md-6">
                        <!-- Formulaire pour ajouter les informations -->
                        <form action="{{ route('information.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label"><i class="fas fa-envelope"></i> E-mail :</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label"><i class="fas fa-phone"></i> Numéro de Téléphone :</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label"><i class="fas fa-map-marker-alt"></i> Adresse :</label>
                                <textarea class="form-control" id="address" name="address" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Ajouter Informations</button>
                        </form>
                    </div>

                    <!-- Deuxième colonne -->
                    <div class="col-md-6">
                        <!-- Contenu pour la deuxième colonne -->
                        <div class="table-responsive">
                            <h4 style="text-align: center;"><i class="fas fa-info-circle"></i> Infos du Société</h4>
                            <table class="table table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">E-mail</th>
                                        <th scope="col">Téléphone</th>
                                        <th scope="col">Adresse</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($informations as $info)
                                    <tr>
                                        <td><i class="fas fa-envelope"></i> {{ $info->email }}</td>
                                        <td><i class="fas fa-phone"></i> {{ $info->phone }}</td>
                                        <td><i class="fas fa-map-marker-alt"></i> {{ $info->address }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mt-4">
                            <button class="btn btn-danger btn-sm me-2"><i class="fas fa-trash"></i> Supprimer</button>
                            <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Mettre à jour</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script>
        // Optionnel: Gestion de l'affichage du dropdown en JavaScript
        document.getElementById("userDropdown").addEventListener("click", function() {
            document.getElementById("dropdownContent").style.display = "block";
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('imageForm').addEventListener('submit', function(e) {
                e.preventDefault(); // Empêcher le rechargement de la page

                // Récupérer les données du formulaire
                let formData = new FormData(this);

                // Envoyer les données via AJAX
                fetch(this.action, {
                        method: this.method,
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Afficher une alerte SweetAlert si l'ajout est réussi
                        if (data.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Image ajoutée avec succès!',
                                showConfirmButton: false,
                                timer: 1500
                            });
                            // Réinitialiser le formulaire après un ajout réussi
                            this.reset();
                        } else {
                            // Afficher une alerte SweetAlert en cas d'échec
                            Swal.fire({
                                icon: 'error',
                                title: 'Erreur lors de l\'ajout de l\'image!',
                                text: 'Veuillez réessayer ou contacter l\'administrateur.'
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Erreur:', error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Erreur',
                            text: 'Une erreur s\'est produite lors de l\'ajout de l\'image.'
                        });
                    });
            });
        });
    </script>
    <script src="{{ asset('js/side.js') }}"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Components / Accordion - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
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
                <span class="d-none d-lg-block" style="color: gray"> Led-Solutions</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->


        <nav class="header-nav ms-auto">

        </nav><!-- End Icons Navigation -->

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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Messages Reçus</h5>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Email</th>
                                                <th>Message</th>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Galerie d'images -->
        <section>
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-md-6 text-center">
                        <h3>Gestion Galerie</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- Formulaire pour ajouter une nouvelle image -->
                        <form id="imageForm" action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="image_name" class="form-label">Nom de l'image :</label>
                                <input type="text" class="form-control" id="image_name" name="image_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description de l'image :</label>
                                <textarea class="form-control" id="description" name="description"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Sélectionner une image :</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
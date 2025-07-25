@extends('back.layout.hero-footertemplate')

@section('content')
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center">
            <h1 class="fw-bolder">Visi, Misi, dan Motto</h1>
            <p class="lead mb-0">Jurusan Teknik Komputer dan Informatika</p>
        </div>
    </div>
</header>

<div class="container mb-5">
    <!-- Visi -->
    <section class="mb-4">
        <h2 class="fw-bold">Visi</h2>
        <p class="text-muted">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac eros sit amet leo luctus sollicitudin.
            Cras vitae lacus sit amet dolor dictum efficitur.
        </p>
    </section>

    <!-- Misi -->
    <section class="mb-4">
        <h2 class="fw-bold">Misi</h2>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
            <li class="list-group-item">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
            <li class="list-group-item">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</li>
            <li class="list-group-item">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</li>
        </ul>
    </section>

    <!-- Motto -->
    <section class="mb-4">
        <h2 class="fw-bold">Motto</h2>
        <blockquote class="blockquote">
            <p class="mb-0 fst-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
            <footer class="blockquote-footer">Jurusan Tekominfo</footer>
        </blockquote>
    </section>
</div>
@endsection
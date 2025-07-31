@extends('back.layout.template')

@section('content')
    <!-- Main Content-->

    <div class="w-full relative bg-transparent px-6 md:px-8 pt-12 pb-12 md:pb-12 xl:pb-24 xl:pt-24">
    <div class="w-full mx-auto grid grid-cols-1 lg:grid-cols-2 gap-y-6 md:gap-y-10 items-center max-w-screen-xl">

        <!-- Image Section -->
        <div class="flex justify-center px-6  md:px-0">
            <picture>
            <img
                src="{{ asset('images/SMKSLOGAN.jpg') }}"
                alt=""
                title=""
                class="rounded object-cover object-center w-md h-auto"
                loading="lazy"
                decoding="async"
                draggable="false"
            />
            </picture>
        </a>
        </div>

        <!-- Text Section -->
        <div class="w-full xl:py-4 space-y-4">

        <!-- Badge -->
        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" data-aos-once="true">
            <div class="text-primary font-semibold text-xs">SMK BISA-HEBAT</div>
        </div>

        <!-- Title -->
        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" data-aos-once="true">
            <h2 class="font-semibold text-3xl md:text-3xl">
            SMK UNTUK NASI GORENGSSS LOREM IPSUM DOLORES
            </h2>
        </div>

        <!-- Description -->
        <div class="overflow-x-auto xl:overflow-x-visible" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000" data-aos-once="true">
            <div class="prose max-w-none text-justify font-normal">
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum eu nulla, quis lacinia lacus tristique euEtiam dolor orci, pellentesque et dapibus ut, consectetur et velit. Suspendisse volutpat libero ac tincidunt blandit.
                Vestibulum gravida velit sed diam lobortis, id gravida ante consequat. Mauris tincidunt eu justo tristique euismod.
                Morbi sollicitudin eu turpis et dictum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus. Duis consequat auctor nunc, quis
            </p>
            </div>
        </div>

        <!-- Spacer -->
        <div class="h-4 md:h-6"></div>

        <!-- Button -->
        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1500" data-aos-once="true">
        <a href="#" class="text-sm h-12 px-4 md:px-6 gap-2 hover:gap-4 font-semibold flex items-center justify-center transition-all duration-200 border border-slate-600 text-slate-600 hover:border-primary hover:bg-primary hover:text-white rounded-full">
            <span>Selengkapnya</span>
            <i class="ti ti-arrow-right text-xl"></i>
            </a>
        </div>

        </div>
    </div>
    </div>


    <div class="space-y-8 px-6 py-8 max-w-4xl mx-auto">
    <!-- Artikel 1 -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center max-w-screen-xl mx-auto px-6">
    <!-- Gambar -->
    <div>
        <picture>
        <img
            src="{{ asset('images/carousel/image 1.png') }}"
            alt="Gambar Artikel"
            class="w-full h-auto object-cover rounded"
            loading="lazy"
            decoding="async"
            draggable="false"
        />
        </picture>
    </div>

    <!-- Teks Artikel -->
    <div>
        <h2 class="text-xl font-bold font-sans mb-1">Judul Artikel</h2>
        <p class="text-sm font-semibold text-gray-600 mb-2">Nama Penulis</p>
        <p class="text-gray-700 text-justify">
        Lorem ipsum dolor sit amet, consectetur niga ajsdoajsd lokpaia mamai dolores putradolss kaki goreng rasa air kolisoadipiscing elit. Sed rutrum eu nulla, quis lacinia lacus tristique eu.
        </p>
    </div>
    </div>


    <!-- Artikel 2 -->
    <div class="grid grid-cols-1 md:grid-cols-5 gap-4 items-start">
        <img src="/images/carousel/image%201.png" alt="Gambar Artikel" class="w-full rounded-md md:col-span-2">
        <div class="md:col-span-3">
        <h2 class="text-xl font-bold">Judul Artikel</h2>
        <p class="text-sm font-bold text-gray-600 ">Nama penulis</p>
        <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum eu nulla, quis lacinia lacus tristique eu </p>
        </div>
    </div>

    <!-- Artikel 3 -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-start">
        <img src="/images/carousel/image%201.png" alt="Gambar Artikel" class="w-full rounded-md md:col-span-1">
        <div class="md:col-span-2">
        <h2 class="text-xl font-bold">Judul Artikel</h2>
        <p class="text-sm text-gray-600 mb-2">Nama penulis</p>
        <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum eu nulla, quis lacinia lacus tristique euEtiam dolor orci, pellentesque et dapibus ut, consectetur et velit. Suspendisse volutpat libero ac tincidunt blandit.
                Vestibulum gravida velit sed diam lobortis, id gravida ante consequat. Mauris tincidunt eu justo tristique euismod.
                Morbi sollicitudin eu turpis et dictum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus. Duis consequat auctor nunc, quis auctor metus sollicitudin eget. Nunc interdum ut ipsum sit amet
                tincidunt. Mauris cursus purus magna, non dignissim mi gravida quis. Duis sed lectus quis nibh commodo molestie vel non
                tellus. Cras fringilla vehicula massa finibus eleifend. Phasellus tristique arcu suscipit turpis blandit, in congue sem
                lacinia. Nam at felis sed orci tincidunt porttitor. Fusce magna lectus, lacinia eget mattis eget, rhoncus vitae metus.</p>
        </div>
    </div>
    </div>

    {{-- <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <h2 class="post-title

    {{-- <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <h2 class="post-title">Selamat datang di Dashboard </h2>
                <p class="post-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elementum eros tellus, eget egestas dui posuere nec.
                Etiam dolor orci, pellentesque et dapibus ut, consectetur et velit. Suspendisse volutpat libero ac tincidunt blandit.
                Vestibulum gravida velit sed diam lobortis, id gravida ante consequat. Mauris tincidunt eu justo tristique euismod.
                Morbi sollicitudin eu turpis et dictum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus. Duis consequat auctor nunc, quis auctor metus sollicitudin eget. Nunc interdum ut ipsum sit amet
                tincidunt. Mauris cursus purus magna, non dignissim mi gravida quis. Duis sed lectus quis nibh commodo molestie vel non
                tellus. Cras fringilla vehicula massa finibus eleifend. Phasellus tristique arcu suscipit turpis blandit, in congue sem
                lacinia. Nam at felis sed orci tincidunt porttitor. Fusce magna lectus, lacinia eget mattis eget, rhoncus vitae metus.

                Donec a mauris faucibus, consequat ex ac, blandit dolor. Mauris suscipit ante nec felis sagittis hendrerit vel quis sem.
                Mauris rutrum eros ut venenatis bibendum. Suspendisse nec auctor lorem, ac cursus ex. Duis aliquet vestibulum purus,
                dapibus mattis nunc congue eleifend. Duis porta nisl ante, a facilisis neque consectetur non. Suspendisse eget lacus nec
                mauris mollis gravida commodo eu eros. Maecenas iaculis metus eget tempor consectetur. Maecenas et ex vitae magna
                aliquam lobortis in ut risus. In hac habitasse platea dictumst. Maecenas eget sagittis elit, et dictum metus. Vivamus
                euismod pulvinar erat eu blandit. In at iaculis dui. Duis urna tellus, varius sed quam nec, luctus consequat magna.
                Etiam eu lacus nec velit mollis efficitur. Nunc laoreet nunc id rhoncus ultrices.

                Donec consequat nulla non tortor congue, eu rhoncus felis maximus. Phasellus metus mauris, pulvinar quis libero sed,
                eleifend finibus lacus. Aenean a condimentum ligula. Aliquam interdum nisi sed felis dapibus tincidunt. Mauris ornare
                porttitor lacus, ut imperdiet quam tempor in. Phasellus et mi lacinia, lacinia diam vitae, vestibulum lacus.
                Pellentesque porta lectus et sodales condimentum. Pellentesque at leo venenatis, iaculis magna non, pellentesque lectus.
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer aliquam venenatis
                rutrum. Nam interdum tincidunt purus ac consequat.</p>
                <!-- Divider-->
            </div>
        </div>
    </div> --}}


    <!-- Footer-->


    <!-- Bootstrap core JS-->
@endsection

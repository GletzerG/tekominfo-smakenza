
@extends('back.layout.navtemplate')
<style>
    body{
    overflow-x: hidden;
}

    .container-tp {
        display: flex;
        justify-content: center;
        position: relative;
         /* tinggi 1 layar penuh */
        
    }

    .title-profile{
        display: flex;
        margin-top: 5rem;
        justify-content: center;
        font-size: 30px
    }

    .card-p{
    position: relative; /* penting biar ::before nempel ke card */
    display: flex;
    background-color: white;
    width: 70rem;
    height: 29rem;
    margin-top: 2rem;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    border-radius: 12px;
    overflow: hidden; /* biar setengah lingkarannya rapi */
    transition: transform 0.5s ease-in-out;
    }

    .card-p::before{
    content: "";
    position: absolute;
    left: -15rem;        /* geser ke kiri biar cuma setengah yg kelihatan */
    top: 50%;
    transform: translateY(-50%);

    width: 35rem;
    height: 35rem;
    background-color: #FFD700; /* kuning */

    border-radius: 50%;
}

 .profile-pic{
    display: flex;
    content: "";
    position: absolute;
    left: 10rem;        /* geser ke kiri biar cuma setengah yg kelihatan */
    top: 50%;
    transform: translateY(-50%);
    width: 15rem;
    height: 15rem;
    background-color: #585751; /* kuning */
    border-radius: 50%;
    justify-content: center;
    align-items: center;
 }

 .profile-pic img{
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover; 
    object-position: center 10%;  /* turunin fokus gambar */
 }

 .caption-p{
    text-align: left;
    position: absolute;
    left: 28rem;        /* geser ke kiri biar cuma setengah yg kelihatan */
    top: 50%;
    transform: translateY(-50%);
    width: 30rem;

    justify-content: center;
    align-items: center;
 }

 .slide-wrapper{
    display: flex;
    overflow: hidden;
    width: 70rem;
    flex-direction: row;
    border-radius: 12px;
}
.card-p{
    min-width: 70rem;
    flex-shrink: 0;
    border-radius: 12px;
}

.slider-btn{
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0,0,0,0.5);
    color: white;
    border: none;
    font-size: 28px;
    padding: 12px 18px;
    cursor: pointer;
    border-radius: 50%;
    z-index: 10;
}

.slider-btn{
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0,0,0,0.6);
    color: white;
    border: none;
    width: 48px;
    height: 48px;
    border-radius: 50%;        /* bikin bulat */
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    font-size: 22px;
    transition: 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.3);
}

.slider-btn:hover{
    background: #FFD700;
    color: #000;
    transform: translateY(-50%) scale(1.1);
}

.slider-btn:hover{
    background: #FFD700;
    color: #000;
    transform: translateY(-50%) scale(1.1);
}

.slider-btn.prev{ left: 20px; }
.slider-btn.next{ right: 20px; }


.slider-dots{
    display: flex;
    justify-content: center;
    margin-top: 15px;
    gap: 10px;
}

.slider-dots span{
    width: 12px;
    height: 12px;
    background: #ccc;
    border-radius: 50%;
    display: block;
    cursor: pointer;
}

.slider-dots .active{
    background: #FFD700;
    overflow: hidden;
}

</style>
<div class="title-profile">teacher profile</div>
<div class="container-tp">

    <div class="slide-wrapper">
        @foreach($teachers as $teacher)
    <div class="card-p">

        <div class="caption-p">
            <h1>{{ $teacher['name'] }}</h1>
            <p>{{ $teacher['title'] }}</p>
            <br>
            <p>mengajra di biudang it dan menjadi guru selama belasan tahun dan sudah mengerjakan berbagai projek</p>
        </div>
        <div class="profile-pic">
            <img src="{{ $teacher['photo'] }}" alt="foto" srcset="">
        </div>
    </div>

    @endforeach
    </div>

    <button class="slider-btn prev" onclick="prevSlide()"><i class="fa-solid fa-angle-left"></i></button>
    <button class="slider-btn next" onclick="nextSlide()"><i class="fa-solid fa-angle-right"></i></button>

    
</div>
<div class="slider-dots" id="sliderDots"></div>


<script>

let index = 0;
    const slides = document.querySelectorAll(".card-p");
    const dotsContainer = document.getElementById("sliderDots");

    // buat dots sesuai jumlah slide
    slides.forEach((_, i) => {
        const dot = document.createElement("span");
        dot.addEventListener("click", () => goToSlide(i));
        dotsContainer.appendChild(dot);
    });

    const dots = document.querySelectorAll("#sliderDots span");

    function showSlide(i){
        slides.forEach(slide => {
            slide.style.transform = `translateX(${-i * 70}rem)`;
        });

        dots.forEach(dot => dot.classList.remove("active"));
        dots[i].classList.add("active");
    }

    function nextSlide(){
        index++;
        if(index >= slides.length) index = 0;
        showSlide(index);
    }

    function prevSlide(){
        index--;
        if(index < 0) index = slides.length - 1;
        showSlide(index);
    }

    // pertama kali load
    showSlide(index);

    // auto slide
    setInterval(nextSlide, 5000);
</script>

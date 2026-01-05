@extends('back.layout.navtemplate')

@section('content')

<style>
/* ===============================
   PAGE LAYOUT
================================ */
.points-page {
    margin-top: 50px;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.points-wrapper {
    margin-top: 40px;
    margin-bottom: 80px;
    display: flex;
    justify-content: center;
}

.points-bar {
    position: relative;
    width: 550px;
    height: 80px;
    border-radius: 999px;
    background: linear-gradient(90deg, #8b5cf6, #22d3ee);
    display: flex;
    align-items: center;
    justify-content: center;
}

.points-text {
    color: white;
    font-size: 20px;
    font-weight: 600;
}

.points-badge {
    position: absolute;
    bottom: -16px;
    padding: 4px 24px;
    border-radius: 999px;
    background: linear-gradient(90deg, #facc15, #fb923c);
    color: white;
    font-weight: bold;
}

.points-title {
    font-size: 22px;
    font-weight: 600;
    color: #4b5563;
}

.product-list {
    display: flex;
    gap: 30px;
    justify-content: center;
    margin-top: 50px;
}

.product-card {
    width: 150px;
    height: 150px;
    border-radius: 20px;
    background: linear-gradient(135deg, #8b5cf6, #22d3ee);
    color: white;
    cursor: pointer;
    position: relative;
    transition: all 0.3s ease;
    overflow: hidden;
}

.product-card.active {
    height: 220px;
    justify-content: flex-start;  /* naik ke atas */
    padding-top: 15px;
}


.product-card h3 {
    font-size: 18px;
    margin: 0;
    transition: margin 0.3s ease;
}



.product-card .price-text,
.product-card .product-action {
    opacity: 0;
    pointer-events: none;
}


.product-card.active .price-text,
.product-card.active .product-action {
    opacity: 1;
    pointer-events: auto;
}

.price-text {
    margin-top: 8px;
    font-size: 14px;
}

.product-action {

    margin-top: 100px;
}

.product-action button {
    border: none;
    padding: 6px 12px;
    border-radius: 12px;
    cursor: pointer;
    font-weight: bold;
}

.btn-buy {
    background: #1ba30e;
    color: white;
}

.btn-cancel {
    background: transparent;
    color: white;
}

.product-card::after {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0);
    pointer-events: none;
}

.product-card:hover {
    transform: scale(1.05);
}

.product-main {
    margin-top: 40px;
    position: absolute;
    inset: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;   /* 🔥 TENGAH */
    align-items: center;
    transition: all 0.3s ease;
    text-align: center;
    pointer-events: none; /* 🔥 INI KUNCI */
}

.product-card.active {

    height: 170px;
}

.product-card.active .product-main {
    justify-content: flex-start;
    padding-top: 15px;
}

.redeem-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.5);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.redeem-card {
    width: 320px;
    padding: 25px;
    border-radius: 20px;
    background: white;
    text-align: center;
    animation: slideDown .3s ease;
}

.redeem-card h3 {
    margin-bottom: 10px;
}

.redeem-card button {
    margin-top: 20px;
    padding: 8px 20px;
    border-radius: 999px;
    border: none;
    cursor: pointer;
    background: linear-gradient(90deg, #8b5cf6, #22d3ee);
    color: white;
}

@keyframes slideDown {
    from {
        transform: translateY(-40px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

body.bg-poin-user {
    min-height: 100vh;
    background-image: url('{{ asset('images/asset/bgpoin.jpg') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

</style>

<section id="UserPoin">
    <div class="points-page">

        <div class="points-wrapper">
            <div class="points-bar">
                <span class="points-text">poin anda saat ini</span>
                <div class="points-badge">{{ $siswa->poin ?? 0 }}</div>
            </div>
        </div>

        <h2 class="points-title">Tukarkan Poin Anda</h2>

        <div class="product-list">
            @foreach ($products as $product)
            <div class="product-card" data-id="{{ $product->id }}" data-price="{{ $product->price }}">
                <div class="product-main">
                    <h3>{{ $product->name }}</h3>
                    <p class="price-text">Tukar dengan {{ $product->price }} poin</p>
                </div>
            
                <div class="product-action">
                    <button class="btn-cancel">tidak</button>
                    <button class="btn-buy">tukar</button>
                </div>
            </div>
            @endforeach
        </div>

    </div>

    <div id="redeemOverlay" class="redeem-overlay">
        <div class="redeem-card">
            <h3 id="redeemTitle"></h3>
            <p id="redeemMessage"></p>
            <button onclick="closeRedeem()">OK</button>
        </div>
    </div>
</section>

<script>
document.querySelectorAll('.product-card').forEach(card => {

card.addEventListener('click', () => {
    document.querySelectorAll('.product-card')
        .forEach(c => c.classList.remove('active'));
    card.classList.add('active');
});

card.querySelector('.btn-cancel').addEventListener('click', e => {
    e.stopPropagation();
    card.classList.remove('active');
});

card.querySelector('.btn-buy').addEventListener('click', e => {
    e.stopPropagation();

    fetch("{{ route('points.redeem') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({
            product_id: card.dataset.id
        })
    })
    .then(async res => {
        const data = await res.json();

        showRedeem(
            res.ok ? 'Berhasil' : 'Gagal',
            data.message
        );

        if (res.ok) {
            document.querySelector('.points-badge').innerText = data.poin;
        }
    })
    .catch(() => {
        showRedeem('Error', 'Terjadi kesalahan server');
    });
});
});
function showRedeem(title, message) {
    document.getElementById('redeemTitle').innerText = title;
    document.getElementById('redeemMessage').innerText = message;
    document.getElementById('redeemOverlay').style.display = 'flex';
}

function closeRedeem() {
    document.getElementById('redeemOverlay').style.display = 'none';
}
</script>

@endsection

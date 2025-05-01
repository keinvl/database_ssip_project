@extends('layout')

@section('title', 'Shop')

@section('content')
<style>
.filter-btn {
    padding: 6px 20px;
    min-width: 150px;
    border: 2px solid brown;
    background: transparent;
    color: brown;
    border-radius: 25px;
    cursor: pointer;
    font-weight: bold;
    letter-spacing: 1px;
    transition: background 0.3s, color 0.3s;
    margin: 10px;
}

.filter-btn:hover {
    background: rgba(165, 42, 42, 0.1);
}

.filter-btn.active {
    background: brown;
    color: white;
}

.category__filter {
    margin-top: 30px;
    margin-bottom: 20px;
    display: flex;
    justify-content: center;
    gap: 10px;
    flex-wrap: wrap;
    text-align: center;
}

.totalSection {
    margin-top: 10px;
    margin-bottom: 12px;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    font-size: 1.6rem;
    column-gap: 30px;
    font-weight: bold;
}

.totalLabel {
    text-align: left;
}

.totalPrice {
    text-align: right;
}
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
@if (session('success'))
    Swal.fire({
        title: 'Success!',
        text: '{{ session('success') }}',
        icon: 'success',
        confirmButtonText: 'OK',
        timer: 3000
    });
@endif
</script>

 
<section class="rate">
    <div class="rate__body">
        <h2 class="service__title heading">Our Products</h2>   
        <div class="service__container">
            <input type="text" id="item" placeholder="Search...."/>
            <button type="button" class="shop_btn btn" id="search">Search</button> 
            
            <div class="icon__cart">    
                <svg class="cart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h1.5a1 1 0 0 1 .979.796L7.939 6H19a1 1 0 0 1 .979 1.204l-1.25 6a1 1 0 0 1-.979.796H9.605l.208 1H17a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L5.686 5H5a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                </svg> 
                <span class="number">0</span>  
            </div>
        </div>

        <div class="category__filter">
            <a href="{{ route('pages.shop') }}" class="filter-btn {{ request('category') == null ? 'active' : '' }}">All</a>
            <a href="{{ route('pages.shop', ['category' => 'food']) }}" class="filter-btn {{ request('category') == 'food' ? 'active' : '' }}">Food</a>
            <a href="{{ route('pages.shop', ['category' => 'cloth']) }}" class="filter-btn {{ request('category') == 'cloth' ? 'active' : '' }}">Cloth</a>
            <a href="{{ route('pages.shop', ['category' => 'equipment']) }}" class="filter-btn {{ request('category') == 'equipment' ? 'active' : '' }}">Equipment</a>
        </div>

        <h3 class="service__title subtitle" id="not_find_any_thing"></h3>
        <div class="rate__row">
            @foreach ($products as $product)
                <div class="rate__card">
                    <p class="rate__type">{{ $product->category }}</p>
                    <h3 class="rate__name">{{ $product->name }}</h3>
                    <figure class="rate__img">
                        <img src="{{ asset('img/' . $product->image) }}" alt="" class="rate__img-inner"/>
                    </figure>
                    <p class="rate__desc">{{ $product->description }}</p>
                    <div class="rate__price">Rp{{ number_format($product->price, 0, ',', '.') }}</div>
                    <button class="rate__btn btn addCart" data-id="{{ $product->id }}">Add To Cart</button>
                </div>
            @endforeach
        </div>

        <!-- Pop Up Cart -->
        <div class="cartPreview">
            <div class="cartTab active">
                <h3 class="cartTitle">Shopping Cart</h3>
                <form action="{{ route('checkout') }}" method="POST" class="cartForm">
                @csrf
                    <div class="listCart"><!-- isi cart --></div>
                    <input type="hidden" name="cart_data" id="cart_data" value="">
                    <div class="totalSection">
                        <p class="totalLabel">Total:</p>
                        <p class="totalPrice">Rp0</p>
                    </div>

                    <div class="cartBtn">
                        <button type="button" class="closeIt">CLOSE</button>
                        <button type="submit" class="checkOut">CHECK OUT</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

<script>
//search
$(function () {
    function filterProducts() {
        let searchItem = $("#item").val().toUpperCase();
        let check = 0;

        $(".rate__card").each(function() {
            let title = $(this).find(".rate__name").text().toUpperCase();
            if (title.indexOf(searchItem) > -1) {
                $(this).show();
                check++;
            } else {
                $(this).hide();
            }
        });

        if (check > 0) {
            $("#not_find_any_thing").text("").hide();
        } else {
            $("#not_find_any_thing").text("No Result Found").show();
        }
    }

    $("#search").click(function() {
        filterProducts();
    });

    $("#item").on("keyup", function() {
        if ($(this).val() === "") {
            $(".rate__card").show();
            $("#not_find_any_thing").text("").hide();
        }
    });
});

//cart
let cart = [];

document.addEventListener('DOMContentLoaded', () => {
    const addCartButtons = document.querySelectorAll('.addCart');
    const cartIcon = document.querySelector('.icon__cart');
    const cartPreview = document.querySelector('.cartPreview');
    const listCart = document.querySelector('.listCart');
    const numberCart = document.querySelector('.number');
    const totalPrice = document.querySelector('.totalPrice');
    const closeIt = document.querySelector('.closeIt');
    const cartDataInput = document.querySelector('#cart_data');

    addCartButtons.forEach(button => {
        button.addEventListener('click', () => {
            const card = button.closest('.rate__card');
            const id = button.dataset.id;
            const name = card.querySelector('.rate__name').textContent;
            const price = parseInt(card.querySelector('.rate__price').textContent.replace(/[^\d]/g, ''));
            const image = card.querySelector('.rate__img-inner').getAttribute('src');

            const found = cart.find(item => item.id === id);
            if (found) {
                found.quantity++;
            } else {
                cart.push({ id, name, price, quantity: 1, image });
            }

            updateCart();
        });
    });

    function updateCart() {
        listCart.innerHTML = '';
        let totalQty = 0;
        let total = 0;

        cart.forEach(item => {
            totalQty += item.quantity;
            total += item.price * item.quantity;

            listCart.innerHTML += `
                <div class="listItem">
                    <img src="${item.image}" alt="${item.name}">
                    <div class="itemName">${item.name}</div>
                    <div class="itemPrice">Rp${item.price.toLocaleString('id-ID')}</div>
                    <div class="quantity">
                        <span class="minus" data-id="${item.id}">-</span>
                        <span class="numberQty">${item.quantity}</span>
                        <span class="plus" data-id="${item.id}">+</span>
                    </div>
                </div>
            `;
        });

        numberCart.textContent = totalQty;
        totalPrice.textContent = 'Rp' + total.toLocaleString('id-ID');

        // Update hidden input dengan JSON cart
        if (cartDataInput) {
            cartDataInput.value = JSON.stringify(cart);
        }

        setupQtyButtons();
    }

    function setupQtyButtons() {
        document.querySelectorAll('.minus').forEach(btn => {
            btn.onclick = () => {
                const id = btn.dataset.id;
                const item = cart.find(i => i.id === id);
                if (item.quantity > 1) {
                    item.quantity--;
                } else {
                    cart = cart.filter(i => i.id !== id);
                }
                updateCart();
            };
        });

        document.querySelectorAll('.plus').forEach(btn => {
            btn.onclick = () => {
                const id = btn.dataset.id;
                const item = cart.find(i => i.id === id);
                item.quantity++;
                updateCart();
            };
        });
    }

    cartIcon.onclick = () => cartPreview.classList.toggle('active');
    closeIt.onclick = () => cartPreview.classList.remove('active');
});
</script>

@endsection
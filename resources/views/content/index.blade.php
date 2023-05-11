@extends ('master.content.mastercontent')

@section ('title', 'Shop')
@section ('content')

<nav class="navbar">
    <div class="content">
        <div class="company-name">
            <h1>Cafe Wikrama</h1>
        </div>
        <div class="icon-trigger">
            <a href="/product/cart">
                <i class='bx bx-cart-alt'></i> {{ count((array) session('cart')) }}
            </a>
            <a href="/">
                <i class='bx bx-arrow-back'></i>
            </a>
        </div>
    </div>
</nav>

<div class="shop" id="shop">
    <div class="button-add">
        <a class="add-button" href="/product/add">Add Product</a><br>
    </div>
    <!-- <div class="header-drink">
        <h3>Drinks</h3>
    </div> -->
    <div class="bd-grid">
        @foreach( $product as $product )
        <div class="card">
            <div class="card-img">
                <img src="{{ asset('images/' .$product->image )}}" alt="">
            </div>
            <div class="card-name">
                <p>{{ $product -> name }}</p>
            </div>
            <div class="card-precis">
                <!-- <a href="/product/{{ $product->id }}" method="POST" class="card-icon">
                    
                </a> -->
                <form action="/product/{{ $product -> id }}" method="POST">
                    @csrf
                    @method ('delete')
                    <input class="delete-product" type="submit" value="delete">
                </form>
                <div>
                    <span class="card-preci card-preci--before">{{ $product->description }}</span>
                    <span class="card-preci card-preci--now">Rp. {{ $product->price }}</span>
                </div>
                <a href="{{ route('add_to_cart', $product -> id) }}" class="card-icon">
                    <i class='bx bx-cart-alt'></i>
                </a>
            </div>
        </div>
        @endforeach
        <!-- <div class="card">
            <div class="card-img">
                <img src="images/cocktailred.png" alt="">
            </div>
            <div class="card-name">
                <p>Red Cocktail</p>
            </div>
            <div class="card-precis">
                <a href="" class="card-icon">
                    <i class='bx bx-heart'></i>
                </a>
                <div>
                    <span class="card-preci card-preci--before">Rp. 18.000</span>
                    <span class="card-preci card-preci--now">Rp. 15.000</span>
                </div>
                <a href="" class="card-icon">
                    <i class='bx bx-cart-alt'></i>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-img">
                <img src="images/leechy.png" alt="">
            </div>
            <div class="card-name">
                <p>Leechy</p>
            </div>
            <div class="card-precis">
                <a href="" class="card-icon">
                    <i class='bx bx-heart'></i>
                </a>
                <div>
                    <span class="card-preci card-preci--before">Rp. 20.000</span>
                    <span class="card-preci card-preci--now">Rp. 18.000</span>
                </div>
                <a href="" class="card-icon">
                    <i class='bx bx-cart-alt'></i>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-img">
                <img src="images/redberry.png" alt="">
            </div>
            <div class="card-name">
                <p>Red Berry</p>
            </div>
            <div class="card-precis">
                <a href="" class="card-icon">
                    <i class='bx bx-heart'></i>
                </a>
                <div>
                    <span class="card-preci card-preci--before">Rp. 20.000</span>
                    <span class="card-preci card-preci--now">Rp. 18.000</span>
                </div>
                <a href="" class="card-icon">
                    <i class='bx bx-cart-alt'></i>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-img">
                <img src="images/cocktailred.png" alt="">
            </div>
            <div class="card-name">
                <p>Red Cocktail</p>
            </div>
            <div class="card-precis">
                <a href="" class="card-icon">
                    <i class='bx bx-heart'></i>
                </a>
                <div>
                    <span class="card-preci card-preci--before">Rp. 18.000</span>
                    <span class="card-preci card-preci--now">Rp. 15.000</span>
                </div>
                <a href="" class="card-icon">
                    <i class='bx bx-cart-alt'></i>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-img">
                <img src="images/icetea.png" alt="">
            </div>
            <div class="card-name">
                <p>Ice Tea</p>
            </div>
            <div class="card-precis">
                <a href="" class="card-icon">
                    <i class='bx bx-heart'></i>
                </a>
                <div>
                    <span class="card-preci card-preci--before">Rp. 10.000</span>
                    <span class="card-preci card-preci--now">Rp. 8.000</span>
                </div>
                <a href="" class="card-icon">
                    <i class='bx bx-cart-alt'></i>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-img">
                <img src="images/redberry.png" alt="">
            </div>
            <div class="card-name">
                <p>Red Berry</p>
            </div>
            <div class="card-precis">
                <a href="" class="card-icon">
                    <i class='bx bx-heart'></i>
                </a>
                <div>
                    <span class="card-preci card-preci--before">Rp. 20.000</span>
                    <span class="card-preci card-preci--now">Rp. 18.000</span>
                </div>
                <a href="" class="card-icon">
                    <i class='bx bx-cart-alt'></i>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-img">
                <img src="images/leechy.png" alt="">
            </div>
            <div class="card-name">
                <p>Leechy</p>
            </div>
            <div class="card-precis">
                <a href="" class="card-icon">
                    <i class='bx bx-heart'></i>
                </a>
                <div>
                    <span class="card-preci card-preci--before">Rp. 20.000</span>
                    <span class="card-preci card-preci--now">Rp. 18.000</span>
                </div>
                <a href="" class="card-icon">
                    <i class='bx bx-cart-alt'></i>
                </a>
            </div>
        </div> -->
    </div>
</div>

@endsection
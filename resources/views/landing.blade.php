@extends ('master.landing.masterlanding')

@section ('title', 'Landing')
@section ('content')

<div class="home" id="home">
    <div class="text">
        <h1>Cafe Wikrama</h1>
        <h2>Fresh And Delicious Drink Every Day!</h2>
        <div class="button-order-now">
            <a class="order-button" href="/product"><i class='bx bx-cart-alt'></i> Order Now</a><br>
        </div>
    </div>
    <div class="image">
        <img src="images/landingfood.png" alt="">
    </div>
</div>

<div class="shop" id="shop">
    <div class="header-drink">
        <h3>Drinks</h3>
    </div>
    <div class="bd-grid">
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
    </div>
</div>

<div class="contact" id="contact">
    <div class="header-contact">
        <h3>Contact Us</h3>
    </div>
    <div class="wrapper">
        <div class="button">
            <div class="icon">
                <i class='bx bxl-facebook'></i>
                <span>Facebook</span>
            </div>
        </div>
        <div class="button">
            <div class="icon">
                <i class='bx bxl-twitter' ></i>
                <span>Twitter</span>
            </div>
        </div>
        <div class="button">
            <div class="icon">
                <i class='bx bxl-instagram-alt' ></i>
                <span>Instagram</span>
            </div>
        </div>
        <div class="button">
            <div class="icon">
                <i class='bx bxl-github' ></i>
                <span>GitHub</span>
            </div>
        </div>
        <div class="button">
            <div class="icon">
                <i class='bx bxl-youtube' ></i>
                <span>YouTube</span>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
<script>

    $(window).scroll(function(){
        if($(window).scrollTop()){
            $("nav, a").addClass("query");
        } else {
            $("nav, a").removeClass("query");
        }
    })

</script>

@endsection
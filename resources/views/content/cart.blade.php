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
            <a href="/product">
                <i class='bx bx-arrow-back'></i>
            </a>
        </div>
    </div>
</nav>

<div class="table-cart">
    <table class="table">

        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp

                <tr class="table-in" data-id="{{ $id }}">
                    <th class="product-th"> Product </th>
                    <th> Price </th>
                    <th> Quantity </th>
                    <th> Subtotal </th>
                    <th> Action </th>
                </tr>
                <tr class="table-in">
                    <td><img src="{{ $details['image'] }}" class="image-table-cart"></td>
                    <td>{{ $details['price'] }}</td>
                    <td>
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1" />
                    </td>
                    <td>Lorem</td>
                    <td class="delete">
                        <form action="remove_from_cart" method="POST">
                            @csrf
                            @method ('delete')
                            <input class="delete-button" type="submit" value="Delete">
                        </form>
                    </td>
                </tr>

            @endforeach
        @endif

    </table>
    <br><hr class="hr">
    <div>
        <h1 class="total-price">Total Rp. {{ $total }}</h1>
    </div>
    <hr class="hr">
    <div class="cart-action">
        <form action="/product">
            <input class="back-action" type="submit" value="Continue Shopping">
        </form>
        <form action="/checkout" method="POST">
            @csrf
            <input class="checkout-action" type="submit" value="Checkout">
        </form>
    </div>
</div>

<script type="text/javascript">
  
    $(".cart_update").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".cart_remove").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Do you really want to remove?")) {
            $.ajax({
                url: '{{ route('remove_from_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>

@endsection
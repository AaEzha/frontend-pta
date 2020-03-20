@extends('layout.master')

@section('content_head')
    
@endsection

@section('content')
<header class="header">
    <div class="container">
        <h1 class="display-4">Cart Overview</h1>
    </div>

    <div class="container">

        <form class="row">
        <div class="col-lg-8">

            <table class="table table-cart">
            <tbody valign="middle">
                
                <?php for($i=1; $i<=3; $i++){ ?>
                <tr>
                <td>
                    <a class="item-remove" href="#"><i class="ti-close"></i></a>
                </td>

                <td>
                    <a href="item.html">
                    <img class="rounded" src="{{ asset('images/product.jpg') }}" alt="...">
                    </a>
                </td>

                <td>
                    <h5>Apple EarPods</h5>
                    <p>White and wireless</p>
                </td>

                <td>
                    <label>Quantity</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Quantity" value="1">
                </td>

                <td>
                    <h4 class="price">$160</h4>
                </td>
                </tr>
                <?php } ?>

            </tbody>
            </table>

        </div>


        <div class="col-lg-4">
            <div class="cart-price">
            <div class="flexbox">
                <div>
                <p><strong>Subtotal:</strong></p>
                <p><strong>Shipping:</strong></p>
                <p><strong>Tax (%10):</strong></p>
                </div>

                <div>
                <p>$683</p>
                <p>$39</p>
                <p>$68</p>
                </div>
            </div>

            <hr>

            <div class="flexbox">
                <div>
                <p><strong>Total:</strong></p>
                </div>

                <div>
                <p class="fw-600">$790</p>
                </div>
            </div>
            </div>

            <div class="row">
            <div class="col-6">
                <a class="btn btn-block btn-secondary" href="/products">Shop more</a>
            </div>

            <div class="col-6">
                <a class="btn btn-block btn-primary" href="/checkout">Proceed <i class="ti-angle-right fs-9"></i></a>
            </div>
            </div>

        </div>
        </form>
    </div>    
</header>
@endsection
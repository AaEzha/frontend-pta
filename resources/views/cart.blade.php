<section class="section bg-primary">
    <div class="container">

        <h1 class="display-4">Mini Cart</h1>

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
                        <a href="/detail">
                        <img class="rounded" src="{{ asset('images/product.jpg') }}" alt="...">
                        </a>
                    </td>

                    <td>
                        <h5>Apple EarPods</h5>
                        <p>White and wireless</p>
                    </td>

                    <td>
                        <label>Quantity</label>
                        <p>2</p>
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

        </div>
        </form>



    </div>
</section>
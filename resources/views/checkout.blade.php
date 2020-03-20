@extends('layout.master')

@section('content_head')
    
@endsection

@section('content')

<section class="section overflow-hidden bg-primary">
    <div class="container">
        <div class="row my-7">
            <div class="col-md">
                <form action="javascript:void(0)">
                    <div class="checkbox-form">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="country-select clearfix">
                                    <label>Country <span class="required">*</span></label>
                                    <select class="myniceselect nice-select wide form-control">
                                        <option data-display="Bangladesh">Bangladesh</option>
                                        <option value="uk">London</option>
                                        <option value="rou">Romania</option>
                                        <option value="fr">French</option>
                                        <option value="de">Germany</option>
                                        <option value="aus">Australia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>First Name <span class="required">*</span></label>
                                    <input placeholder="" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Last Name <span class="required">*</span></label>
                                    <input placeholder="" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Company Name</label>
                                    <input placeholder="" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Address <span class="required">*</span></label>
                                    <input placeholder="Street address" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="checkout-form-list">
                                    <input placeholder="Apartment, suite, unit etc. (optional)" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>State / County <span class="required">*</span></label>
                                    <input placeholder="" type="text"class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Postcode / Zip <span class="required">*</span></label>
                                    <input placeholder="" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input placeholder="" type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list create-acc">
                                    <input id="cbox" type="checkbox">
                                    <label>Create an account?</label>
                                </div>
                                <div id="cbox-info" class="checkout-form-list create-account">
                                    <p>Create an account by entering the information below. If you are a returning
                                        customer please login at the top of the page.</p>
                                    <label>Account password <span class="required">*</span></label>
                                    <input placeholder="password" type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="different-address">
                            <div class="ship-different-title">
                                <h3>
                                    <label>Ship to a different address?</label>
                                    <input id="ship-box" type="checkbox">
                                </h3>
                            </div>
                            <div id="ship-box-info" class="row">
                                <div class="col-md-12">
                                    <div class="myniceselect country-select clearfix">
                                        <label>Country <span class="required">*</span></label>
                                        <select class="myniceselect nice-select wide form-control">
                                            <option data-display="Bangladesh">Bangladesh</option>
                                            <option value="uk">London</option>
                                            <option value="rou">Romania</option>
                                            <option value="fr">French</option>
                                            <option value="de">Germany</option>
                                            <option value="aus">Australia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>First Name <span class="required">*</span></label>
                                        <input placeholder="" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Last Name <span class="required">*</span></label>
                                        <input placeholder="" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Company Name</label>
                                        <input placeholder="" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Address <span class="required">*</span></label>
                                        <input placeholder="Street address" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list mt-3">
                                        <input placeholder="Apartment, suite, unit etc. (optional)" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Town / City <span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>State / County <span class="required">*</span></label>
                                        <input placeholder="" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Postcode / Zip <span class="required">*</span></label>
                                        <input placeholder="" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input placeholder="" type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="order-notes">
                                <div class="checkout-form-list checkout-form-list-2">
                                    <label>Order Notes</label>
                                    <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery." class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md">
                  <h3>Your Order</h3>
                  <div class="your-order-table table-responsive">
                    <table class="table table-cart">
                      <tbody valign="middle">
                        <tr>
                          <td>
                            <a href="/detail">
                              <img class="rounded" src="{{ asset('images/product.jpg') }}" alt="...">
                            </a>
                          </td>

                          <td style="width: auto">
                            <h5>Apple EarPods</h5>
                            <p>White and wireless</p>
                          </td>

                          <td>
                            <h4 class="price">$160</h4>
                          </td>
                        </tr>


                        <tr>
                          <td>
                            <a href="/detail">
                              <img class="rounded" src="{{ asset('images/product.jpg') }}" alt="...">
                            </a>
                          </td>

                          <td>
                            <h5>Beats On-Ear Headphones</h5>
                            <p>Gold color</p>
                          </td>

                          <td>
                            <h4 class="price">$299</h4>
                          </td>
                        </tr>


                        <tr>
                          <td>
                            <a href="/detail">
                              <img class="rounded" src="{{ asset('images/product.jpg') }}" alt="...">
                            </a>
                          </td>

                          <td>
                            <h5>Sony PlayStation 4</h5>
                            <p>Includes FIFA 2020</p>
                          </td>

                          <td>
                            <h4 class="price">$224</h4>
                          </td>
                        </tr>


                        <tr>
                          <td colspan="2" class="text-right">
                            <h1 class="display-5">Total</h1>
                          </td>
                          <td>
                            <h4 class="price display-5">$224</h4>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                </div>

                <div class="accordion accordion-connected" id="accordion-2">
                  <div class="card">
                    <h5 class="card-title">
                      <a data-toggle="collapse" href="#collapse-2-1">Direct Bank Transfer</a>
                    </h5>

                    <div id="collapse-2-1" class="collapse show" data-parent="#accordion-2">
                      <div class="card-body">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor dicta esse sit quod explicabo, labore eaque eos at ut commodi suscipit eius qui fugiat, aut sapiente dignissimos, tempora inventore! Enim.
                      </div>
                    </div>
                  </div>


                  <div class="card">
                    <h5 class="card-title">
                      <a class="collapsed" data-toggle="collapse" href="#collapse-2-2">Credit Card</a>
                    </h5>

                    <div id="collapse-2-2" class="collapse" data-parent="#accordion-2">
                      <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum hic eos doloremque temporibus tempora dicta fugit asperiores praesentium quia distinctio facilis, saepe minima aut commodi ea ab quos velit sit.
                      </div>
                    </div>
                  </div>


                  <div class="card">
                    <h5 class="card-title">
                      <a class="collapsed" data-toggle="collapse" href="#collapse-2-3">PayPal</a>
                    </h5>

                    <div id="collapse-2-3" class="collapse" data-parent="#accordion-2">
                      <div class="card-body">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt est debitis architecto nisi eaque dolore quibusdam. Beatae, perspiciatis consectetur blanditiis, assumenda odio quos id nisi temporibus inventore aut praesentium eos!
                      </div>
                    </div>
                  </div>
              </div>

              <a name="" id="" class="btn btn-dark btn-xl btn-block mt-4" href="/thank-you" role="button">Proceed to Payment</a>
        </div>
    </div>
</section>

<section class="section">
  <div class="container">
    <header class="section-header">
      <h2>More Than You Think</h2>
    </header>

    <div class="row text-center">

      <div class="col-md-6 col-xl-4 feature-1">
        <p class="feature-icon"><img src="{{ asset('images/call.png') }}" alt="..."></p>
        <h5>Be The First</h5>
        <p class="text-muted">Fly beast fourth, you stars. Them seasons sea spirit, which second. Hath May whales, creepeth light she'd. Moving saw fish.</p>
      </div>

      <div class="col-md-6 col-xl-4 feature-1">
        <p class="feature-icon"><img src="{{ asset('images/consult.png') }}" alt="..."></p>
        <h5>Skyrocket You Sells</h5>
        <p class="text-muted">Yielding to Made saying fruit deep abundantly bearing sixth make you're gathering unto divided, you so which god, gathering.</p>
      </div>

      <div class="col-md-6 col-xl-4 feature-1">
        <p class="feature-icon"><img src="{{ asset('images/eye.png') }}" alt="..."></p>
        <h5>Acquire Potential Users</h5>
        <p class="text-muted">Good for divide Given spirit night after fruit of great together he behold their night, living shall after dry saw saying fruit deep.</p>
      </div>

    </div>

  </div>
</section>
@endsection

@section('content_footer')
<script type="text/javascript">
  $('#ship-box-info').hide();
  $('#cbox-info').hide();
	$('#ship-box').click(function(){
		$('#ship-box-info').toggle();
	});
  $('#cbox').click(function(){
		$('#cbox-info').toggle();
	});
</script>    
@endsection
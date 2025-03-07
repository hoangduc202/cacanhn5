@extends('frontend.layouts.master')

@section('title','Cá cảnh N5 || THÁNH TOÁN ĐƠN HÀNG')

@section('main-content')

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Trang chủ<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0)">Thanh toán</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
            
    <!-- Start Checkout -->
    <section class="shop checkout section">
        <div class="container">
                <form class="form" method="POST" action="{{route('cart.order')}}">
                    @csrf
                    <div class="row"> 

                        <div class="col-lg-8 col-12">
                            <div class="checkout-form">
                                <h2>Hoàn thành đơn hàng của bạn</h2>
                                <p>Chỉ một vài bước nữa là bạn sẽ hoàn tất quy trình thanh toán đơn hàng!</p>
                                <!-- Form -->
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Họ <span>*</span></label>
                                            <input type="text" name="last_name" placeholder="" value="{{old('last_name')}}" required>
                                            @error('last_name')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                        <label>Tên <span>*</span></label>
                                            <input type="text" name="first_name" placeholder="" value="{{old('first_name')}}" value="{{old('first_name')}}" required>
                                            @error('first_name')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Email <span>*</span></label>
                                            <input type="email" name="email" placeholder="" value="{{old('email')}}" required>
                                            @error('email')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Số điện thoại <span>*</span></label>
                                            <input type="number" name="phone" placeholder="" required value="{{old('phone')}}">
                                            @error('phone')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Tỉnh/Thành phố <span>*</span></label>
                                            <select name="country" id="country" required>
                                                <option value="AG">An Giang</option>
                                                <option value="BR">Bà Rịa - Vũng Tàu</option>
                                                <option value="BL">Bạc Liêu</option>
                                                <option value="BG">Bắc Giang</option>
                                                <option value="BK">Bắc Kạn</option>
                                                <option value="BN">Bắc Ninh</option>
                                                <option value="BT">Bến Tre</option>
                                                <option value="BD">Bình Dương</option>
                                                <option value="BI">Bình Định</option>
                                                <option value="BP">Bình Phước</option>
                                                <option value="BH">Bình Thuận</option>
                                                <option value="CM">Cà Mau</option>
                                                <option value="CB">Cao Bằng</option>
                                                <option value="CT">Cần Thơ</option>
                                                <option value="DN">Đà Nẵng</option>
                                                <option value="DL">Đắk Lắk</option>
                                                <option value="DO">Đắk Nông</option>
                                                <option value="DB">Điện Biên</option>
                                                <option value="DI">Đồng Nai</option>
                                                <option value="DT">Đồng Tháp</option>
                                                <option value="GL">Gia Lai</option>
                                                <option value="HG">Hà Giang</option>
                                                <option value="HA">Hà Nam</option>
                                                <option value="Hà Nội">Hà Nội</option>
                                                <option value="HT">Hà Tĩnh</option>
                                                <option value="HD">Hải Dương</option>
                                                <option value="HP">Hải Phòng</option>
                                                <option value="HG">Hậu Giang</option>
                                                <option value="HB">Hòa Bình</option>
                                                <option value="HM">Thành phố Hồ Chí Minh</option>
                                                <option value="HY">Hưng Yên</option>
                                                <option value="KH">Khánh Hòa</option>
                                                <option value="KG">Kiên Giang</option>
                                                <option value="KT">Kon Tum</option>
                                                <option value="LC">Lai Châu</option>
                                                <option value="LS">Lạng Sơn</option>
                                                <option value="LA">Lào Cai</option>
                                                <option value="LD">Lâm Đồng</option>
                                                <option value="LN">Long An</option>
                                                <option value="ND">Nam Định</option>
                                                <option value="NA">Nghệ An</option>
                                                <option value="NB">Ninh Bình</option>
                                                <option value="NT">Ninh Thuận</option>
                                                <option value="PT">Phú Thọ</option>
                                                <option value="PY">Phú Yên</option>
                                                <option value="QB">Quảng Bình</option>
                                                <option value="QN">Quảng Nam</option>
                                                <option value="QG">Quảng Ngãi</option>
                                                <option value="QI">Quảng Ninh</option>
                                                <option value="QT">Quảng Trị</option>
                                                <option value="ST">Sóc Trăng</option>
                                                <option value="SL">Sơn La</option>
                                                <option value="TN">Tây Ninh</option>
                                                <option value="TB">Thái Bình</option>
                                                <option value="TG">Thái Nguyên</option>
                                                <option value="TH">Thanh Hóa</option>
                                                <option value="TT">Thừa Thiên Huế</option>
                                                <option value="TG">Tiền Giang</option>
                                                <option value="TV">Trà Vinh</option>
                                                <option value="TQ">Tuyên Quang</option>
                                                <option value="VG">Vĩnh Long</option>
                                                <option value="VP">Vĩnh Phúc</option>
                                                <option value="YB">Yên Bái</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Địa chỉ 1<span>*</span></label>
                                            <input type="text" name="address1" placeholder="" value="{{old('address1')}}">
                                            @error('address1')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Địa chỉ 2</label>
                                            <input type="text" name="address2" placeholder="" value="{{old('address2')}}">
                                            @error('address2')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Mã bưu chính</label>
                                            <input type="text" name="post_code" placeholder="" value="{{old('post_code')}}">
                                            @error('post_code')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                </div>
                                <!--/ End Form -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="order-details">
                                <!-- Order Widget -->
                                <div class="single-widget">
                                    <h2>Tổng tiền</h2>
                                    <div class="content">
                                        <ul>
										    <li class="order_subtotal" data-price="{{Helper::totalCartPrice()}}">Tổng tiền giỏ hàng<span>{{number_format(Helper::totalCartPrice())}}đ</span></li>
                                            <li class="shipping">
                                                Phí vận chuyển
                                                @if(count(Helper::shipping())>0 && Helper::cartCount()>0)
                                                    <select name="shipping" class="nice-select" required>
                                                        <option value="">Chọn tỉnh/thành phố nơi bạn đang sống</option>
                                                        @foreach(Helper::shipping() as $shipping)
                                                        <option value="{{$shipping->id}}" class="shippingOption" data-price="{{$shipping->price}}">{{$shipping->type}}: {{$shipping->price}}đ</option>
                                                        @endforeach
                                                    </select>
                                                @else 
                                                    <span>Miễn phí</span>
                                                @endif 
                                            </li>
                                            
                                            @if(session('coupon'))
                                            <li class="coupon_price" data-price="{{session('coupon')['value']}}">Bạn đã tiết kiệm: <span>{{number_format(session('coupon')['value'])}}đ</span></li>
                                            @endif
                                            @php
                                                $total_amount=Helper::totalCartPrice();
                                                if(session('coupon')){
                                                    $total_amount=$total_amount-session('coupon')['value'];
                                                }
                                            @endphp
                                            @if(session('coupon'))
                                                <li class="last"  id="order_total_price">Tổng<span>{{number_format($total_amount)}}đ</span></li>
                                            @else
                                                <li class="last"  id="order_total_price">Tổng<span>{{number_format($total_amount)}}đ</span></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Order Widget -->
                                <!-- Order Widget -->
                                <div class="single-widget">
                                    <h2>Phương thức thanh toán</h2>
                                    <div class="content">
    <div class="checkbox">
        {{-- <label class="checkbox-inline" for="1"><input name="updates" id="1" type="checkbox"> Chọn phương thức</label> --}}
        <form-group>
            <input name="payment_method"  type="radio" value="cod" required> <label> COD (Thanh toán khi nhận hàng)</label><br>
            <!-- <input name="payment_method"  type="radio" value="paypal"> <label> PayPal</label><br> -->
            <input name="payment_method"  type="radio" value="cardpay" required> <label> Thanh toán bằng thẻ</label><br>
            
            <!-- Credit Card Details -->
            <div id="creditCardDetails" style="display: none;">
                <label for="cardNumber">Số thẻ:</label>
                <input type="text" id="cardNumber" name="card_number" maxlength="16"><br>

                <label for="cardName">Họ tên chủ thẻ:</label>
                <input type="text" id="cardName" name="card_name"><br>
                
                <label for="expirationDate">Ngày hết hạn (EXP):</label>
                <input type="text" id="expirationDate" name="expiration_date" maxlength="5"><br>
                
                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" maxlength="3"><br>
            </div>
        </form-group>
    </div>
</div>

                                </div>
                                <!--/ End Order Widget -->
                                <!-- Payment Method Widget -->
                                <div class="single-widget payement">
                                    <div class="content">
                                        <img src="{{('backend/img/payment-method.png')}}" alt="#">
                                    </div>
                                </div>
                                <!--/ End Payment Method Widget -->
                                <!-- Button Widget -->
                                <div class="single-widget get-button">
                                    <div class="content">
                                        <div class="button">
                                            <button type="submit" class="btn">Tiến hành thanh toán</button>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Button Widget -->
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    </section>
    <!--/ End Checkout -->
    
    <!-- Start Shop Services Area  -->
    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Miễn phí vẫn chuyển</h4>
                        <p>Cho đơn hàng trên 100.000đ</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Hoàn trả</h4>
                        <p>Trong vòng 7 ngày kể từ khi nhận hàng</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Thanh toán an toàn</h4>
                        <p>Bảo mật thanh toán 100%</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Giá tốt nhất</h4>
                        <p>Đảm bảo mức giá tốt nhất ở Hà Nội</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Services -->
    
    <!-- Start Shop Newsletter  -->
    <section class="shop-newsletter section">
        <div class="container">
            <div class="inner-top">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <!-- Start Newsletter Inner -->
                        <div class="inner">
                            <h4>Bảng tin </h4>
                            <p> Đăng kí bảng tin của chúng tôi và nhận voucher giảm <span>10%</span> cho đơn hàng của bạn</p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="EMAIL" placeholder="" required="" type="email">
                                <button class="btn">Đăng kí</button>
                            </form>
                        </div>
                        <!-- End Newsletter Inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Newsletter -->
@endsection
@push('styles')
	<style>
		li.shipping{
			display: inline-flex;
			width: 100%;
			font-size: 14px;
		}
		li.shipping .input-group-icon {
			width: 100%;
			margin-left: 10px;
		}
		.input-group-icon .icon {
			position: absolute;
			left: 20px;
			top: 0;
			line-height: 40px;
			z-index: 3;
		}
		.form-select {
			height: 30px;
			width: 100%;
		}
		.form-select .nice-select {
			border: none;
			border-radius: 0px;
			height: 40px;
			background: #f6f6f6 !important;
			padding-left: 45px;
			padding-right: 40px;
			width: 100%;
		}
		.list li{
			margin-bottom:0 !important;
		}
		.list li:hover{
			background:#F7941D !important;
			color:white !important;
		}
		.form-select .nice-select::after {
			top: 14px;
		}
	</style>
@endpush
@push('scripts')
	<script src="{{asset('frontend/js/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
	<script>
		$(document).ready(function() { $("select.select2").select2(); });
  		$('select.nice-select').niceSelect();
	</script>
	<script>
		function showMe(box){
			var checkbox=document.getElementById('shipping').style.display;
			// alert(checkbox);
			var vis= 'none';
			if(checkbox=="none"){
				vis='block';
			}
			if(checkbox=="block"){
				vis="none";
			}
			document.getElementById(box).style.display=vis;
		}
	</script>
	<script>
		$(document).ready(function(){
			$('.shipping select[name=shipping]').change(function(){
				let cost = parseFloat( $(this).find('option:selected').data('price') ) || 0;
				let subtotal = parseFloat( $('.order_subtotal').data('price') ); 
				let coupon = parseFloat( $('.coupon_price').data('price') ) || 0; 
				// alert(coupon);
				$('#order_total_price span').text('$'+(subtotal + cost-coupon).toFixed(2));
			});

		});

	</script>

<script>
    $(document).ready(function() {
        $('input[name="payment_method"]').change(function() {
            if ($(this).val() === 'cardpay') {
                $('#creditCardDetails').show();
            } else {
                $('#creditCardDetails').hide();
            }
        });
    });
</script>

@endpush
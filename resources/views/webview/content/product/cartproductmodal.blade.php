<div class="text-cart" style="padding-top: 20px">
    <i class="fa fa-check" id="checkIconCart"></i>
    <h3 style="margin-top:0;color: #120d3f; margin-bottom: 0;"><span id="itemCount">{{ count($cartProducts) }}</span> Item
        added to your cart!</h3>
</div>
<button type="button" id="closebtn" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
        aria-hidden="true">×</span></button>
<h4 style="margin-top:0;text-align: center; font-weight: bold; margin-bottom: 0;">Cart Items</h4>
<hr style="margin-top: 10px;margin-bottom: 10px">
<div id="itemlest">
    @forelse ($cartProducts as $item)
        <div class="d-flex align-items-center" style="margin-bottom:10px">
            <div class="dc-image">
                <a href="{{asset($item->image)}}">
                    <img src="{{ asset($item->image) }}" class="img-fluid" alt=""
                        style="height: 70px;">
                </a>
            </div>
            <div class="dc-content">
                <span class="mb-1 d-block dc-product-name text-capitalize strong-600">
                    <a href="#" style="color: black">
                        {{ $item->name }}
                    </a>
                </span>
                <span class="pt-0 pr-3 d-block" id="proPrice">  <small
                    style="color: #000000;font-size: 16px;font-weight: bold;">
                    @if (isset($item->options['size']))
                        Size : {{ $item->options['size'] }},&nbsp;
                    @endif
                    @if (isset($item->options['size']))
                        Color : {{ $item->options['color'] }},&nbsp;
                    @endif
                    @if (isset($item->options['sigment']))
                        Sigment : {{ $item->options['sigment'] }}
                    @endif
                </small></span>
                <span class="dc-quantity">x{{ $item->qty }}</span>
                <span class="dc-price">৳{{ $item->qty * $item->price }}</span>
            </div>
            <div class="dc-actions">
                <button type="button" onClick="removeFromCartItem('{{ $item->rowId }}')" id="cartIconCloss">
                    ×
                </button>
            </div>
        </div>
    @empty
    @endforelse
</div>
<div class="py-3 dc-item">
    <span class="subtotal-text">Subtotal</span>
    <span class="subtotal-amount">৳ <span id="totalAmountCart">{{ Cart::subtotal() }}</span></span>
</div>

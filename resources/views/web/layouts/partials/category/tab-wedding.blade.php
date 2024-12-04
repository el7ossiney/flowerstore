<div id="menu-tab-wedding" class="tab-pane fade">

    @forelse($weddingproducts as $product)
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
            <div class="product-image-category">
                <figure class="sale"><a href="#"><img src="{{ asset("storage/$product->image") }}"
                            class="img-responsive" alt="holiwood"></a></figure>
                <div class="product-icon-category">
                    <a href="{{route('web.show',$product->slug)}}"><i class="far fa-eye"></i></a>
                    <a href="#"><i class="fas fa-shopping-basket"></i></a>
                    <a href="#"><i class="far fa-heart"></i></a>
                </div>
            </div>
            <div class="product-title-category">
                <h5><a href="#">{{ $product->title }}</a></h5>
                <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <div class="prince">${{ $product->price }}</div>
            </div>
        </div>
    @empty
    @endforelse
</div>

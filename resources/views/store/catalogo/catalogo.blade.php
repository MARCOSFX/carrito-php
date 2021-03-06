@extends('store.template.principal')
@section('content')
            <div  style="padding-top: 5rem;padding-bottom: 10rem" class="total-ads main-grid-border">
                <div class="container">
                    <div style="text-align: center;padding-bottom: 2rem" class="logo col-lg-12">
                        <a href="#"><span>Catalogo de</span> {{$category[0]->name}}</a>
                    </div>

                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <h3 style="text-align: center;padding-top: 1rem">{{$product->name}}</h3>
                                    <img style="width: 150px;height: 100px" src="{{url('/')}}/{{$product->image}}" alt="...">
                                    <div  style="text-align: center" class="caption">
                                        <h3 style="text-align: center;padding-top: 1rem;padding-bottom: 2rem"><span style="color:#00a65a">Precio:</span> <span style="color: #f3c500 "> ${{$product->price}}</span></h3>
                                        <h3 style="text-align: center;padding-top: 1rem;padding-bottom: 2rem"><span style="color:#00a65a">Stock:</span> <span style="color: #f3c500 ">{{$product->stock}}</span></h3>
                                        <p>
                                            @if($product->stock > 0)
                                            <a href="{{route('carrito-add',$product->slug)}}" class="btn btn-success" role="button">Comprar</a>
                                            <a href="{{route('producto-detalle',$product->slug)}}" class="btn btn-info" role="button">Ver mas</a>
                                                @else
                                                <a href="{{route('producto-detalle',$product->slug)}}" class="btn btn-info" role="button">Ver mas</a>
                                                @endif
                                        </p>
                                    </div>
                                </div>

                            </div>
                        @endforeach

                    </div>


                </div>

                <div style="text-align: center" class="col-lg-12">
                    {!! $products->render() !!}
                </div>
            </div>
    @endsection
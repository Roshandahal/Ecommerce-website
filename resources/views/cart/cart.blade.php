@extends('header.userheader')
@section('userheader')
<title>Add cart</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/foundation/5.0.2/css/foundation.css'>
<script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
<style>
    nav {
        margin-bottom: 1em !important;
    }

    .cart {
        box-shadow: 0 0 5px #DDD;
        padding: 20px;
    }

    @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
    @import url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    * {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Roboto', sans-serif;
        font-style: normal;
        font-weight: 300;
        -font-smoothing: antialiased;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-size: 15px;
        background: #eee;
    }

    .action {
        text-align: center;
        display: block;
        margin-top: 20px;
    }

    a.btn {
        text-decoration: none;
        color: #666;
        border: 2px solid #666;
        padding: 10px 15px;
        display: inline-block;
        margin-left: 5px;
    }

    a.btn:hover {
        background: #666;
        color: #fff;
        transition: .3s;
        -webkit-transition: .3s;
    }

    .btn:before {
        font-family: FontAwesome;
        font-weight: normal;
        margin-right: 10px;
    }

    .github:before {
        content: "\f09b"
    }

    .down:before {
        content: "\f019"
    }

    .back:before {
        content: "\f112"
    }

    .credit {
        background: #fff;
        padding: 12px;
        font-size: 9pt;
        text-align: center;
        color: #333;
        margin-top: 40px;

    }

    .credit span:before {
        font-family: FontAwesome;
        color: #e41b17;
        content: "\f004";


    }

    .credit a {
        color: #333;
        text-decoration: none;
    }

    .credit a:hover {
        color: #1DBF73;
    }

    .credit a:hover:after {
        font-family: FontAwesome;
        content: "\f08e";
        font-size: 9pt;
        position: absolute;
        margin: 3px;
    }

    main {
        background: #fff;
        padding: 20px;

    }

    article li {
        color: #444;
        font-size: 15px;
        margin-left: 33px;
        line-height: 1.5;
        padding: 5px;
    }

    article h1,
    article h2,
    article h3,
    article h4,
    article p {
        padding: 14px;
        color: #333;
    }

    article p {
        font-size: 15px;
        line-height: 1.5;
    }

    @media only screen and (min-width: 1166px) {
        main {
            max-width: 960px;
            margin-left: auto;
            margin-right: auto;
            padding: 24px;
        }


    }

    .set-overlayer,
    .set-glass,
    .set-sticky {
        cursor: pointer;
        height: 45px;
        line-height: 45px;
        padding: 0 15px;
        color: #333;
        font-size: 16px;
    }

    .set-overlayer:after,
    .set-glass:after,
    .to-active:after,
    .set-sticky:after {
        font-family: FontAwesome;
        font-size: 18pt;
        position: relative;
        float: right;
    }

    .set-overlayer:after,
    .set-glass:after,
    .set-sticky:after {
        content: "\f204";
        transition: .6s;
    }

    .to-active:after {
        content: "\f205";
        color: #008080;
        transition: .6s;
    }

    .set-overlayer,
    .set-glass,
    .set-sticky,
    .source,
    .theme-tray {
        margin: 10px;
        background: #f2f2f2;
        border-radius: 5px;
        border: 2px solid #f1f1f1;
        box-sizing: border-box;
    }

    /* Syntax Highlighter*/

    pre.prettyprint {
        padding: 15px !important;
        margin: 10px;
        border: 0 !important;
        background: #f2f2f2;
        overflow: auto;
    }

    .source {
        white-space: pre;
        overflow: auto;
        max-height: 400px;
    }

    code {
        border: 1px solid #ddd;
        padding: 2px;
        border-radius: 2px;
    }
</style>


<body>
    <!-- for search function  -->
    <!-- for making search function  -->






    <!-- Start DEMO HTML (Use the following code into your project)-->
    <div class="row" style=" width:100%;">
        <nav class="top-bar" data-topbar style="box-shadow: 2px 2px 2px 2px black;">
            <ul class="title-area" style="height: auto;">

                <h3 style="font-weight: bold; color:white;"><a href="#" style="color: white;">Visit and search product of Purbeli-product from here.</a></h3>

            </ul>

        </nav>

        <div class="medium-8 columns" style="width: 100%;">

            <h4 style="font-weight: bold;">Pubeli-Products Store</h4>
            <!-- for add to cart  -->


            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Add to cart
                </button>
                <ul class="dropdown-menu" style="background: dark; text-align: center;">
                    <table>
                        <button id="payment-button" class="btn btn-primary" r;">Pay with Khalti</button>
                        <thead>
                            <tr>

                                <th scope="col">Name</th>
                                <th scope="col">Product</th>
                                <th scope="col">quantity</th>
                                <th scope="col">Price</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cartdetailes as $item)
                            <tr>

                                <td>{{$item->name}}</td>
                                <td>{{$item->product_title}}</td>
                                <td>{{$item->quantity}}</td>
                                <td>{{$item->price}}</td>


                            </tr>


                            @endforeach
                        </tbody>

                    </table>
                </ul>

            </div>
            @if(session('status'))
            <h6 style="color:red;font-style:italic; background:none; font-weight: bold; width:100%;">{{session('status')}}</h6>
            @endif

            <form action="">
                <input type="search" name="search" value="{{$search}}" style="width: 100%;" placeholder="Search by product name">
                <a><button style="margin: 0; padding:0; background:#eee;"><i class="fa fa-search-plus" style="font-size:24px; color:#e41b17;"></button></i></a>
                <a href="{{url('/addcart')}}"><i class="fa fa-reply-all" style="font-size:24px;"></i></a>

            </form>

            <div class="products">
                @foreach($cart as $item)
                <div class="product medium-4 columns" data-name="Orange" data-price="150" data-id="0">
                    <img src="{{asset('uploads/productone/' .$item->image1)}}" width="auto">
                    <h3>{{$item->name1}}</h3>
                    <p>Price:{{$item->price1}}<br>
                        Discount:{{$item->discount1}}</p>

                    <form action="{{url('cart1',$item->id)}}" method="post">
                        @csrf
                        <input type="number" class="count" value="1" min="1" name="quantity" />
                        <button type="submit" class="tiny">Add cart</button>
                    </form>
                </div>
                <div class="product medium-4 columns" data-name="Apple" data-price="200" data-id="1">
                    <img src="{{asset('uploads/producttwo/' .$item->image2)}}" width="auto">
                    <h3>{{$item->name2}}</h3>
                    <p>Price:{{$item->price2}}<br>
                        Discount:{{$item->discount2}}</p>
                    <form action="{{url('cart2',$item->id)}}" method="post">
                        @csrf
                        <input type="number" class="count" value="1" min="1" name="quantity2" />
                        <button class="tiny" type="submit">Add cart</button>
                    </form>
                </div>
                <div class="product medium-4 columns" data-name="Peach" data-price="300" data-id="2">
                    <img src="{{asset('uploads/productthree/' .$item->image3)}}" width="auto">
                    <h3>{{$item->name3}}</h3>
                    <p>Price:{{$item->price3}}<br>
                        Discount:{{$item->discount3}}</p>
                    <form action="{{url('cart3',$item->id)}}" method="post">
                        @csrf
                        <input type="number" class="count" value="1" name="quantity3" min="1" />
                        <button class="tiny" type="submit">Add cart</button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <br><br><br>

    <script type="text/template" id="cartT">
        <% _.each(items, function (item) { %> <div class = "panel"> <h3> <%= item.name %> </h3>  <span class="label">
<%= item.count %> piece<% if(item.count > 1)
{%>s
<%}%> for <%= item.total %>$</span > </div>
<% }); %>

</script>


    <!-- END EDMO HTML (Happy Coding!)-->



    <script>
        /*

  Author: Mihovil Ilakovac (infomiho)
  Used: javascript + underscore.js (for templating), Foundation 5 (design)
  
  It's based on a simple idea, to minimize requests to the server and only send the final cart to the server for evaluation and payment.

*/
        var cartId = "cart";

        var localAdapter = {

            saveCart: function(object) {

                var stringified = JSON.stringify(object);
                localStorage.setItem(cartId, stringified);
                return true;

            },
            getCart: function() {

                return JSON.parse(localStorage.getItem(cartId));

            },
            clearCart: function() {

                localStorage.removeItem(cartId);

            }

        };

        var ajaxAdapter = {

            saveCart: function(object) {

                var stringified = JSON.stringify(object);
                // do an ajax request here

            },
            getCart: function() {

                // do an ajax request -- recognize user by cookie / ip / session
                return JSON.parse(data);

            },
            clearCart: function() {

                //do an ajax request here

            }

        };

        var storage = localAdapter;

        var helpers = {

            getHtml: function(id) {

                return document.getElementById(id).innerHTML;

            },
            setHtml: function(id, html) {

                document.getElementById(id).innerHTML = html;
                return true;

            },
            itemData: function(object) {

                var count = object.querySelector(".count"),
                    patt = new RegExp("^[1-9]([0-9]+)?$");
                count.value = (patt.test(count.value) === true) ? parseInt(count.value) : 1;

                var item = {

                    name: object.getAttribute('data-name'),
                    price: object.getAttribute('data-price'),
                    id: object.getAttribute('data-id'),
                    count: count.value,
                    total: parseInt(object.getAttribute('data-price')) * parseInt(count.value)

                };
                return item;

            },
            updateView: function() {

                var items = cart.getItems(),
                    template = this.getHtml('cartT'),
                    compiled = _.template(template, {
                        items: items
                    });
                this.setHtml('cartItems', compiled);
                this.updateTotal();

            },
            emptyView: function() {

                this.setHtml('cartItems', '<p>Nothing to see here</p>');
                this.updateTotal();

            },
            updateTotal: function() {

                this.setHtml('totalPrice', cart.total + 'Rs');

            }

        };

        var cart = {

            count: 0,
            total: 0,
            items: [],
            getItems: function() {

                return this.items;

            },
            setItems: function(items) {

                this.items = items;
                for (var i = 0; i < this.items.length; i++) {
                    var _item = this.items[i];
                    this.total += _item.total;
                }

            },
            clearItems: function() {

                this.items = [];
                this.total = 0;
                storage.clearCart();
                helpers.emptyView();

            },
            addItem: function(item) {

                if (this.containsItem(item.id) === false) {

                    this.items.push({
                        id: item.id,
                        name: item.name,
                        price: item.price,
                        count: item.count,
                        total: item.price * item.count
                    });

                    storage.saveCart(this.items);


                } else {

                    this.updateItem(item);

                }
                this.total += item.price * item.count;
                this.count += item.count;
                helpers.updateView();

            },
            containsItem: function(id) {

                if (this.items === undefined) {
                    return false;
                }

                for (var i = 0; i < this.items.length; i++) {

                    var _item = this.items[i];

                    if (id == _item.id) {
                        return true;
                    }

                }
                return false;

            },
            updateItem: function(object) {

                for (var i = 0; i < this.items.length; i++) {

                    var _item = this.items[i];

                    if (object.id === _item.id) {

                        _item.count = parseInt(object.count) + parseInt(_item.count);
                        _item.total = parseInt(object.total) + parseInt(_item.total);
                        this.items[i] = _item;
                        storage.saveCart(this.items);

                    }

                }

            }

        };

        document.addEventListener('DOMContentLoaded', function() {

            if (storage.getCart()) {

                cart.setItems(storage.getCart());
                helpers.updateView();

            } else {

                helpers.emptyView();

            }
            var products = document.querySelectorAll('.product button');
            [].forEach.call(products, function(product) {

                product.addEventListener('click', function(e) {

                    var item = helpers.itemData(this.parentNode);
                    cart.addItem(item);


                });

            });

            document.querySelector('#clear').addEventListener('click', function(e) {

                cart.clearItems();

            });


        });
    </script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js'></script>
    <script src="./js/script.js"></script>


    <!-- this is for khalti api  -->

    <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_dc74e0fd57cb46cd93832aee0a390234",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
            ],
            "eventHandler": {
                onSuccess(payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                },
                onError(error) {
                    console.log(error);
                },
                onClose() {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function() {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({
                amount: 1000
            });
        }
    </script>

</body>

@stop
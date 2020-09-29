var id, weight, harvest,price, category, describe, type, flag, view, display, play, name, quantity, prodQuan, prodname,
    prodid, prodprice, prodcat, prodweight, prodharvest, proddescribe, prodtype, prodview, proddisplay, prodplay;

if(document.location.pathname=="/tea/account/login.php")
{
    document.addEventListener("click",function(e)
    {
        if(e.target.value=="Login")
        {
            var f=0;
            if(e.target.parentElement.firstElementChild.nextElementSibling.nextElementSibling.nextElementSibling.value!="")
            {
                if(e.target.previousElementSibling.value!="")
                f=1;
            }
            if(f==1)
            {localStorage.userStatus="Logged In";}
        }
    })
}

    if(document.location.pathname=="/tea/")
    {
        window.addEventListener("DOMContentLoaded",function(){
        var f=1,v=0;
        const config = {
            attributes: true
        };
        var node=document.querySelectorAll("#homepage_slider > ul.slides > li:nth-child(2)")[0];
        var obv = new MutationObserver((e) => {
            if (v % 47 == 0) {
                if(f==1)
                {console.log(e[0].target.innerText.split("\n")[0]);f++;;
                dataLayer.push({
                    'event' : 'promoView',
                    'ecommerce' : { 
                        'promoView' : {
                        'promotions' : {
                            'name': e[0].target.innerText.split("\n")[0]
                        }
                    } 
                } 
            })
            localStorage.promo=e[0].target.innerText.split("\n")[0]; 
            _satellite.track("Promo");
            }
                else if(f==2)
                {console.log(e[0].target.previousElementSibling.innerText.trim().split("\n")[0]);f++;
                dataLayer.push({
                    'event' : 'promoView',
                    'ecommerce' : { 
                        'promoView' : {
                        'promotions' : {
                            'name': e[0].target.previousElementSibling.innerText.trim().split("\n")[0]
                        }
                    } 
                } 
            });
            localStorage.promo=e[0].target.previousElementSibling.innerText.trim().split("\n")[0];
            _satellite.track("Promo"); 
            }
                else
                {
                    localStorage.promo="";
                }
            }
            v++;
        })
        obv.observe(node, config);
        
})
}


    window.addEventListener("DOMContentLoaded", function () {

    var other = document.querySelectorAll("a")
    for (var i = 0; i < other.length; i++)
        other[i].setAttribute("data-category", "Other")

    var head = document.querySelectorAll(".header a")
    for (var i = 0; i < head.length; i++)
        head[i].setAttribute("data-category", "Header")

    var foot = document.querySelectorAll(".footer a")
    for (var i = 0; i < foot.length; i++)
        foot[i].setAttribute("data-category", "Footer")
});

window.addEventListener("DOMContentLoaded", function () {
    var loc = document.location.href;
    var flag1 = '';
    if (loc.search("contact-us") != -1)
        flag1 = "Contact Us";
    else if (loc.search("login") != -1)
        flag1 = "Login";
    else if (loc.search("register") != -1)
        flag1 = "Register";
    else if (loc.search("blogs") != -1)
        flag1 = "Blogs"
    else
        flag1 = '';
    console.log(loc.search("blogs"))
    if (flag1 != "")
        dataLayer.push({
            'form': flag1
        })
})
var id;
var name = '',
    type = '',
    weight = '',
    harvest = '',
    category = '',
    price = 0,
    select = '',
    v = '',
    prod = '',
    describe = '';
if (document.location.href.split("/")[4].split(".")[0] == "search") {
    var searchterm = document.location.href.split("?")[1].split("&")[1].split("=")[1];
    var searchfilter = document.location.href.split("?")[1].split("&")[2].split("=")[1];
    if (localStorage.search == undefined) {
        localStorage.search = "";
        localStorage.searchfilter = ""
    }
    localStorage.search = searchterm;
    localStorage.searchfilter = searchfilter;
}
var path=document.location.pathname.split("/")[document.location.pathname.split("/").length-2];
var path1=document.location.pathname.split("/")[document.location.pathname.split("/").length-1];
window.addEventListener("DOMContentLoaded", (event) => {
    if (path == "collections" || path == "products" || path1 == "index.php"|| path1==""||path1=="search.php") {
        var selector = document.querySelectorAll(".columns .thumbnail");
        var product_array = [];
        var cat = document.location.href.split("/")[document.location.href.split("/").length - 1].split(
            '.')[0];
        if (localStorage.search == undefined) {
            localStorage.search = "";
            localStorage.searchfilter = ""
        }
        if (localStorage.prodview == undefined)
            localStorage.prodview = "";

        var list = document.location.pathname.split(".")[0].split("/")[document.location.pathname.split(".")[0].split("/").length - 1];
            if (list == 'search')
                list = "Search Results"
            else if (list == 'tea')
                list = "PLP: " + list;
            else if (list == 'teaware')
                list = "PLP: " + list;
            else if (list == 'sidebar')
                list = "PLP: " + list;
            else if (list == 'index' || list == '')
                list = "Home Page"
            else if (list == 'sale')
                list = "Sale"
            else if (document.location.pathname.split(".")[0].split("/")[document.location.pathname.split(".")[0].split("/")
                    .length - 2] == 'products')
                list = "PDP: " + document.location.pathname.split(".")[0].split("/")[document.location.pathname.split(".")[0]
                    .split("/").length - 3]
            else
                list = "Other Pages"

        var len = selector.length;
        for (var i = 0; i < len; i++) {
            var product = {};
            var v = selector[i].innerText;
            var temp = v.split("\n");
            product["name"] = temp[0];
            product["price"] = temp[1].split("$")[temp[1].split("$").length - 1];
            product["id"] = selector[i].lastElementChild.id.split("-")[1];
            product["dimension12"] = localStorage.search;
            product["list"] = list;
            product_array.push(product);
            //if (temp[1].split("$")[0].trim() == "Sold Out -")
        }
        
        dataLayer.push({
            'event': 'productImpressions',
            'ecommerce': {
                'currencyCode': 'USD',
                'impressions': {
                    'products': product_array
                }
            }
        })

        document.addEventListener("click", function (e) {
            console.log(e.target.parentElement.children[1])
            if (e.target.innerText.trim() == "+ Quick View") {
                //if(document.location.pathname.split("/")[document.location.pathname.split("/").length-2] == "products")
                //id=e.target.href.split("-")[2];
                id = e.target.href.split("-")[e.target.href.split("-").length-1];
                localStorage.views = "Quick View";
                localStorage.id = id;
                select = "#product-" + id;
                console.log(select)
                v = document.querySelectorAll(select)[0].parentElement.innerText;
                prod = v.split("\n");
                describe = "";
                name = prod[0];
                price = prod[2].split("$")[prod[2].split("$").length - 1];
                console.log(prod);
                category = ["", ""];
                type = ["", ""];
                /*if (prod.length == 12) {
                    weight = prod[prod.length - 2];
                    harvest = '';
                } else if (prod.length == 14) {
                    weight = prod[prod.length - 4];
                    harvest = prod[prod.length - 2];
                } else {
                    weight = "";
                    harvest = "";
                }console.log("weight: "+weight);*/
            } else if ((path=="collections"||path=="tea"||path1=="search.php") && (e.target.parentElement.parentElement.parentElement.className=="sixteen columns"||e.target.parentElement.parentElement.className=="sixteen columns"||e.target.parentElement=="info")) {
                if(e.target.parentElement.nextElementSibling.href!=undefined){
                    id = e.target.parentElement.nextElementSibling.href.split("-")[1];
                    localStorage.views = "Product View";
                    localStorage.id = id;
    
                    //id = document.getElementsByClassName("sixteen columns")[2].id;
    
                    select = "#product-" + id;
                    v = document.querySelectorAll(select)[0].parentElement.innerText;
                    //id = id.split("-")[1];
                    prod = v.split("\n");
                    name = prod[0];
                    price = prod[1].split("$")[prod[1].split("$").length - 1];}
            } else if(path=="products")
            {
                console.log(e.target.nextElementSibling.href)
                if(e.target.nextElementSibling.href!=undefined){
                id = e.target.nextElementSibling.href.split("-")[e.target.nextElementSibling.href.split("-").length-1];
                localStorage.views = "Product View";
                localStorage.id = id;

                //id = document.getElementsByClassName("sixteen columns")[2].id;
                v = e.target.parentElement.innerText;console.log("v")
                //id = id.split("-")[1];
                prod = v.split("\n");
                name = prod[0];
                price = prod[1].split("$")[prod[1].split("$").length - 1];}
            }
            else{
                id='';
            }
            if (id != '') {
                var list = document.location.href.split(".")[0].split("/")[document.location.href
                    .split(".")[0].split("/").length - 1];
                if (list == 'search')
                    list = "Search Results"
                else if (list == 'tea')
                    list = "PLP: " + list;
                else if (list == 'teaware')
                    list = "PLP: " + list;
                else if (list == 'sidebar')
                    list = "PLP: " + list;
                else if (list == 'index' || list == '')
                    list = "Home Page"
                else if (list == 'sale')
                    list = "Sale"
                else if (document.location.href.split(".")[0].split("/")[document.location.href
                        .split(".")[0].split("/").length - 2] == 'products')
                    list = "PDP: " + document.location.href.split(".")[0].split("/")[document
                        .location.href.split(".")[0].split("/").length - 3]
                else
                    list = "Other Pages"
                dataLayer.push({
                    'event': 'productClick',
                    'ecommerce': {
                        'click': {
                            'actionField': {
                                'list': list
                            },
                            'products': {
                                'name': name,
                                'id': id,
                                'price': price,
                                'dimension12': localStorage.search
                            }
                        }
                    }
                });
            }
        });
    }
})

id = localStorage.id;
if (document.location.pathname.split("/")[2] == "collections" || document.location.pathname.split("/")[2] == "" ||
    document.location.pathname.split("/")[2] == "index.php" || document.location.pathname.split("/")[4] ==
    "products" || document.location.pathname.split("/")[2] == 'products') {
    var v;
    var play;
    
    window.addEventListener("DOMContentLoaded", function () {
        if (localStorage.search == undefined) {
            localStorage.search = "";
            localStorage.searchfilter = ""
        }
        if (localStorage.view != "Quick View") {
            describe = "Description";
            document.querySelectorAll("body > div.container.main.content")[0].children[1].children[0]
                .children[1].children[3].children[0].children[0].addEventListener("click", function () {
                    describe = document.querySelectorAll("body > div.container.main.content")[0]
                        .children[1].children[0].children[1].children[3].children[0].children[0]
                        .innerText
                });
            document.querySelectorAll("body > div.container.main.content")[0].children[1].children[0]
                .children[1].children[3].children[0].children[1].addEventListener("click", function () {
                    describe = document.querySelectorAll("body > div.container.main.content")[0]
                        .children[1].children[0].children[1].children[3].children[0].children[1]
                        .innerText
                });
            id = document.getElementsByClassName("sixteen columns")[2].id;
            select = "#" + id;
            v = document.querySelectorAll(select)[0].innerText;
            id = id.split("-")[1];
            prod = v.split("\n");
            name = prod[1];
            price = prod[3].split("$")[prod[3].split("$").length - 1];
            category = prod[prod.length - 1].split(": ");
            type = prod[prod.length - 3].split(": ");
            
        }
        var list = document.referrer.split(".")[0].split("/")[document.referrer.split(".")[0].split("/")
            .length - 1];
        if (list == 'search')
            list = "Search Results"
        else if (list == 'tea')
            list = "PLP: " + list;
        else if (list == 'teaware')
            list = "PLP: " + list;
        else if (list == 'sidebar')
            list = "PLP: " + list;
        else if (list == 'index' || list == '')
            list = "Home Page"
        else if (list == 'sale')
            list = "Sale"
        else if (document.referrer.split(".")[0].split("/")[document.referrer.split(".")[0].split("/")
                .length - 2] == 'products')
            list = "PDP: " + document.referrer.split(".")[0].split("/")[document.referrer.split(".")[0]
                .split("/").length - 3]
        else
            list = "Other Pages"

        var outofStock = 0;
            if(document.querySelectorAll("#product-108746982 > div > div.eight.columns.omega > p > span.sold_out").length > 0)
                outofStock = 1;

        dataLayer.push({
            'event': 'productView',
            'ecommerce': {
                'detail': {
                    'actionField': {
                        'list': list
                    },
                    'products': [{
                        'name': name,
                        'id': id,
                        'price': price,
                        'category': category[1],
                        'dimension6': type[1],
                        'dimension12': localStorage.search,
                        'metric5' : outofStock
                    }]
                }
            }
        });


        v = 2;
        play = 0;
        var cllbk = () => {
            if (v % 2 != 0) {
                console.log("Callback Call " + (v / 2));
            }
            v++;
        }
        //var play=()=>{play=1;console.log("success");}
        const config = {
            attributes: true,
            childList: true,
            subtree: true
        };

        var node = document.querySelector("#product_slider > div > ul > li:nth-child(5)")
        //var node2 = document.querySelector("#player > div.vp-controls-wrapper > div.vp-controls > button")
        var obv = new MutationObserver(cllbk)
        obv.observe(node, config);
    })
    if (localStorage.search == undefined) {
        localStorage.search = "";
        localStorage.searchfilter = ""
    }
    //document.getElementById("add-to-cart").onmouseover=function(){

    document.addEventListener("click", function (e) {
        if (e.target.innerText.trim() == "Add to Cart") {
            console.log("Success");
            if (localStorage.view == undefined)
                localStorage.view = "";
            var temp;
            if (localStorage.view == "Quick View")
                temp = 0
            else
                temp = Math.floor(v / 2) - 1;
                weight = "";
            harvest = "";
            
            if (category[1] == "Tea"||category[1]=="") {
                var select="#product-select-"+localStorage.id;
                var text=document.querySelectorAll(select)[0].options[document.querySelectorAll(select)[0].selectedIndex].text;
                if(category[1]==""){ temp=0}
                if(text.split(" / ").length==2)
                {
                    weight=text.split(" / ")[0];
                    harvest=text.split(" / ")[1];
                }
                else
                {
                    weight=document.querySelectorAll(select)[0].options[document.querySelectorAll(select)[0].selectedIndex].text;
                    harvest="";
                }
            }
              
            localStorage.view = localStorage.view + "|" + localStorage.views;
            dataLayer.push({
                'event': 'addToCart',
                'ecommerce': {
                    'currencyCode': 'USD',
                    'add': {
                        'products': [{
                            'name': name,
                            'id': localStorage.id,
                            'price': price,
                            'category': category[1],
                            'dimension6': type[1],
                            'dimension4': weight,
                            'dimension5': harvest,
                            'dimension8': describe,
                            'dimension12': localStorage.search,
                            'metric10': temp,
                            'metric4': play,
                            'dimension14': localStorage.views
                        }]
                    }
                }
            });
            console.log(dataLayer[dataLayer.length - 1])

            if (localStorage.ids == undefined) {
                localStorage.ids = "";
                localStorage.videoplay = "";
                localStorage.videodisplay = "";
                localStorage.name = "";
                localStorage.quantity = "";
                localStorage.category = "";
                localStorage.price = "";
                localStorage.type = "";
                localStorage.weight = "";
                localStorage.harvest = "";
                localStorage.describe = "";
            }
            localStorage.ids = localStorage.ids + "|" + localStorage.id;
            localStorage.name = localStorage.name + "|" + name;
            localStorage.quantity = localStorage.quantity + "|" + 1;
            localStorage.category = localStorage.category + "|" + category[1];
            localStorage.type = localStorage.type + "|" + type[1];
            localStorage.weight = localStorage.weight + "|" + weight;
            localStorage.harvest = localStorage.harvest + "|" + harvest;
            localStorage.describe = localStorage.describe + "|" + describe;
            localStorage.price = localStorage.price + "|" + price;
            localStorage.videodisplay = localStorage.videodisplay + "|" + temp;
            localStorage.videoplay = localStorage.videoplay + "|" + play;
        }
    })

}


if (document.location.pathname == "/tea/cart.php") {
    window.addEventListener("DOMContentLoaded", function () {
        for (j = 0; j < Object.keys(cartItemMap).length; j++) {
            document.querySelectorAll(
                    "#cart_form > ul > li > div.three.columns.mobile_right.omega > ul > li > a")[j]
                .addEventListener("click", function () {
                    localStorage.n = cartItemMap[localStorage.delKey].productName;
        localStorage.q = cartItemMap[localStorage.delKey].productQuantity;
        localStorage.p = cartItemMap[localStorage.delKey].productPrice;
        //localStorage.w=localStorage.weight.split("|")[j+1];
        localStorage.c=j;
                })
        }
    })

window.addEventListener("DOMContentLoaded", function () {
    document.getElementById("checkout").addEventListener("click", function () {
        var cart = Object.values(cartItemMap);
        var cartlength = cart.length;
        var id = localStorage.ids.split("|");
        var prodcat = localStorage.category.split("|");
        var prodweight = localStorage.weight.split("|");
        var prodharvest = localStorage.harvest.split("|");
        var proddescribe = localStorage.describe.split("|");
        var prodtype = localStorage.type.split("|");
        var prodview = localStorage.view.split("|");
        var proddisplay = localStorage.videodisplay.split("|");
        var prodplay = localStorage.videoplay.split("|");
        var quantity = localStorage.quantity.split("|");
        localStorage.name = "";
        localStorage.type = "";
        localStorage.ids = "";
        localStorage.quantity = "";
        localStorage.price = "";
        localStorage.category = "";
        localStorage.weight = "";
        localStorage.harvest = "";
        localStorage.describe = "";
        localStorage.view = "";
        localStorage.videoplay = "";
        localStorage.videodisplay = "";
        var product_array = [];
        for (i = 0; i < cartlength; i++) {
            if (cart[i].productName == "")
                continue;
            var product = {};
            var q = cart[i].productQuantity;
            for (j = i + 1; j < cartlength; j++) {
                if (cart[i].productName == cart[j].productName) {
                    cart[j].productName = "";
                    q = q + cart[j].productQuantity;
                }
            }
            localStorage.ids = localStorage.ids + "|" + id[i + 1];
            localStorage.name = localStorage.name + "|" + cart[i].productName;
            localStorage.quantity = localStorage.quantity + "|" + q;
            localStorage.price = localStorage.price + "|" + cart[i].productPrice;
            localStorage.category = localStorage.category + "|" + prodcat[i + 1];
            localStorage.weight = localStorage.weight + "|" + prodweight[i + 1];
            localStorage.harvest = localStorage.harvest + "|" + prodharvest[i + 1];
            localStorage.describe = localStorage.describe + "|" + proddescribe[i + 1];
            localStorage.type = localStorage.type + "|" + prodtype[i + 1];
            localStorage.view = localStorage.view + "|" + prodview[i + 1];
            localStorage.videodisplay = localStorage.videodisplay + "|" + proddisplay[i + 1];
            localStorage.videoplay = localStorage.videoplay + "|" + prodplay[i + 1];
            product["name"] = cart[i].productName;
            product["id"] = id[i + 1];
            product["quantity"] = q;
            product["price"] = cart[i].productPrice;
            product["category"] = prodcat[i + 1];
            product["dimension4"] = prodweight[i + 1];
            product["dimension5"] = prodharvest[i + 1];
            product["dimension8"] = proddescribe[i + 1];
            product["dimension6"] = prodtype[i + 1];
            product["dimension14"] = prodview[i + 1];
            product["metric10"] = proddisplay[i + 1];
            product["metric4"] = prodplay[i + 1];
            product_array.push(product);
        }
        dataLayer.push({
            'event': 'checkout',
            'ecommerce': {
                'currencyCode': 'USD',
                'checkout': {
                    'actionField': {
                        'step': 1,
                        'option': 'Checkout Page'
                    },
                    'products': product_array
                }
            }
        });
    });
})
}

window.addEventListener("load", function () {
    if (document.location.pathname == "/tea/checkout.php") {
        document.getElementById("create_customer").addEventListener("submit", function () {

            var cardType = document.querySelector("#create_customer > div:nth-child(5) > select")
                .value;
            var payment_Methods = ['Wallet', 'CoD', 'Card'];
            var x = Math.floor(Math.random() * 10);
            if (x > 2) {
                x = 2;
            }
            var paymentMethod = payment_Methods[x];
            if (paymentMethod != 'Card') {
                cardType = "";
            }

            var cart = Object.values(cartItemMap);
            var cartlength = cart.length;
            var id = localStorage.ids.split("|");
            var prodcat = localStorage.category.split("|");
            var prodweight = localStorage.weight.split("|");
            var prodharvest = localStorage.harvest.split("|");
            var proddescribe = localStorage.describe.split("|");
            var prodtype = localStorage.type.split("|");
            var prodview = localStorage.view.split("|");
            var proddisplay = localStorage.videodisplay.split("|");
            var prodplay = localStorage.videoplay.split("|");
            var quantity = localStorage.quantity.split("|");
            localStorage.name = "";
            localStorage.type = "";
            localStorage.ids = "";
            localStorage.quantity = "";
            localStorage.price = "";
            localStorage.category = "";
            localStorage.weight = "";
            localStorage.harvest = "";
            localStorage.describe = "";
            localStorage.view = "";
            localStorage.videoplay = "";
            localStorage.videodisplay = "";
            var product_array = [];
            for (i = 0; i < cartlength; i++) {
                if (cart[i].productName == "")
                    continue;
                var product = {};
                var q = cart[i].productQuantity;
                localStorage.ids = localStorage.ids + "|" + id[i + 1];
                localStorage.name = localStorage.name + "|" + cart[i].productName;
                localStorage.quantity = localStorage.quantity + "|" + q;
                localStorage.price = localStorage.price + "|" + cart[i].productPrice;
                localStorage.category = localStorage.category + "|" + prodcat[i + 1];
                localStorage.weight = localStorage.weight + "|" + prodweight[i + 1];
                localStorage.harvest = localStorage.harvest + "|" + prodharvest[i + 1];
                localStorage.describe = localStorage.describe + "|" + proddescribe[i + 1];
                localStorage.type = localStorage.type + "|" + prodtype[i + 1];
                localStorage.view = localStorage.view + "|" + prodview[i + 1];
                localStorage.videodisplay = localStorage.videodisplay + "|" + proddisplay[i + 1];
                localStorage.videoplay = localStorage.videoplay + "|" + prodplay[i + 1];
                product["name"] = cart[i].productName;
                product["id"] = id[i+1];
                product["quantity"] = q;
                product["price"] = cart[i].productPrice;
                product["category"] = prodcat[i + 1];
                product["dimension4"] = prodweight[i + 1];
                product["dimension5"] = prodharvest[i + 1];
                product["dimension8"] = proddescribe[i + 1];
                product["dimension6"] = prodtype[i + 1];
                product["dimension14"] = prodview[i + 1];
                product["metric10"] = proddisplay[i + 1];
                product["metric4"] = prodplay[i + 1];
                product_array.push(product);
            }

            dataLayer.push({
                'event': 'paymentCheckout',
                'ecommerce': {
                    'checkout': {
                        'actionField': {
                            'step': 2,
                            'option': paymentMethod,
                            'dimension7': cardType,
                            'metric2': 1
                        },
                        'products': product_array,
                    }
                }
            });

            localStorage.revenue = 0;
            localStorage.tax = 0;
            localStorage.shipping = 0;
            localStorage.orderDisc = 0;
            localStorage.couponCode = "";

            var trans_id = "T" + Math.floor(Math.random() * 100000);
            localStorage.transactionId = trans_id;
            var total_revenue = 0;
            for (i = 1; i < localStorage.price.split("|").length; i++)
                total_revenue += parseFloat(localStorage.price.split("|")[i]*localStorage.quantity.split("|")[i]);
            localStorage.revenue = total_revenue;

            localStorage.tax = total_revenue * 0.1;

            if (localStorage.userType == "Premium")
                localStorage.orderDisc = total_revenue * 0.1;

            if (localStorage.userType != "Premium" && total_revenue >= 500.00)
                localStorage.userType = "Premium";

            var coupons = ['Winter', 'Summer', 'Autumn'];
            var x = Math.floor(Math.random() * 10);
            console.log(x)
            if (x!=0||x!=1||x!=2) {
                localStorage.couponCode = "";
            }
            else
            localStorage.couponCode = coupons[x];
        });
    }
});

    if (document.location.pathname == "/tea/thanks.php") {
        window.addEventListener("DOMContentLoaded", function () {
        var cart = Object.values(cartItemMap);
        var cartlength = cart.length;
        var id = localStorage.ids.split("|");
        var prodcat = localStorage.category.split("|");
        var prodweight = localStorage.weight.split("|");
        var prodharvest = localStorage.harvest.split("|");
        var proddescribe = localStorage.describe.split("|");
        var prodtype = localStorage.type.split("|");
        var prodview = localStorage.view.split("|");
        var proddisplay = localStorage.videodisplay.split("|");
        var prodplay = localStorage.videoplay.split("|");
        localStorage.name = "";
        localStorage.type = "";
        localStorage.ids = "";
        localStorage.quantity = "";
        localStorage.price = "";
        localStorage.category = "";
        localStorage.weight = "";
        localStorage.harvest = "";
        localStorage.describe = "";
        localStorage.view = "";
        localStorage.videoplay = "";
        localStorage.videodisplay = "";
        console.log(id);
        var product_array = [];
        for (i = 0; i < cartlength; i++) {
            if (cart[i].productName == "")
                continue;
            var product = {};
            localStorage.ids = localStorage.ids + "|" + id[i + 1];
            localStorage.name = localStorage.name + "|" + cart[i].productName;
            localStorage.quantity = localStorage.quantity + "|" + cart[i].productQuantity;
            localStorage.price = localStorage.price + "|" + cart[i].productPrice;
            localStorage.category = localStorage.category + "|" + prodcat[i + 1];
            localStorage.weight = localStorage.weight + "|" + prodweight[i + 1];
            localStorage.harvest = localStorage.harvest + "|" + prodharvest[i + 1];
            localStorage.describe = localStorage.describe + "|" + proddescribe[i + 1];
            localStorage.type = localStorage.type + "|" + prodtype[i + 1];
            localStorage.view = localStorage.view + "|" + prodview[i + 1];
            localStorage.videodisplay = localStorage.videodisplay + "|" + proddisplay[i + 1];
            localStorage.videoplay = localStorage.videoplay + "|" + prodplay[i + 1];
            product["name"] = cart[i].productName;
            product["id"] = id[i + 1];
            product["quantity"] = cart[i].productQuantity;
            product["price"] = cart[i].productPrice;
            product["category"] = prodcat[i + 1];
            product["dimension4"] = prodweight[i + 1];
            product["dimension5"] = prodharvest[i + 1];
            product["dimension8"] = proddescribe[i + 1];
            product["dimension6"] = prodtype[i + 1];
            product["dimension14"] = prodview[i + 1];
            product["metric10"] = proddisplay[i + 1];
            product["metric4"] = prodplay[i + 1];
            product["metric3"] = 0;
            product_array.push(product);
        }

        dataLayer.push({
            'event': 'purchase',
            'ecommerce': {
                'purchase': {
                    'actionField': {
                        'id': localStorage.transactionId,
                        'revenue': localStorage.revenue,
                        'tax': localStorage.tax,
                        'shipping': localStorage.shipping,
                        'coupon': localStorage.couponCode,
                        'metric12': localStorage.orderDisc,
                        'metric11': 1
                    },
                    'products': product_array
                }
            }
        });

        });
    window.addEventListener("load", function () {
    localStorage.name = "";
    localStorage.quantity = "";
    localStorage.price = 0;
    localStorage.category = "";
    localStorage.weight = "";
    localStorage.harvest = "";
    localStorage.describe = "";
    localStorage.type = "";
    localStorage.view = "";
    localStorage.videodisplay = "";
    localStorage.videoplay = "";
    localStorage.transactionId = "";
    localStorage.revenue = 0;
    localStorage.tax = 0;
    localStorage.shipping = 0;
    localStorage.couponCode = "";
    localStorage.orderDisc = 0;
    var c=document.cookie.split(";");
    for(i=0;i<c.length;i++){var name=c[i].trim();document.cookie = name+"=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/";}
})
    
}


window.addEventListener("DOMContentLoaded",()=>{
    if (document.location.pathname == "/tea/cart.php") { 
    if (localStorage.delKey != undefined || localStorage.delKey != "") {
        id = "";
        weight = "";
        harvest = '';
        category = '';
        describe = '';
        type = '';
        flag = 0;
        view = '';
        display = '';
        play = '';
        name=localStorage.n;
        prodQuan = localStorage.quantity.split("|");
        prodname = localStorage.name.split("|");
        prodid = localStorage.ids.split("|");
        prodprice = localStorage.price.split("|");
        prodcat = localStorage.category.split("|");
        prodweight = localStorage.weight.split("|");
        prodharvest = localStorage.harvest.split("|");
        proddescribe = localStorage.describe.split("|");
        prodtype = localStorage.type.split("|");
        prodview = localStorage.view.split("|");
        proddisplay = localStorage.videodisplay.split("|");
        prodplay = localStorage.videoplay.split("|");
        
        var q = 0;
        localStorage.name = "";
        localStorage.type = "";
        localStorage.ids = "";
        localStorage.quantity = "";
        localStorage.price = "";
        localStorage.category = "";
        localStorage.weight = "";
        localStorage.harvest = "";
        localStorage.describe = "";
        localStorage.view = "";
        localStorage.videoplay = "";
        localStorage.videodisplay = "";
        for (i = 1; i < prodname.length; i++) {
            if (name == prodname[i] && flag == 0) {
                console.log(localStorage.n);
                id = prodid[i];
                flag = 1;
                weight = prodweight[i];
                harvest = prodharvest[i];
                category = prodcat[i];
                describe = proddescribe[i];
                type = prodtype[i];
                view = prodview[i];
                play = prodview[i];
                display = proddisplay[i];
                play = prodplay[i];localStorage.flag=1;
                dataLayer.push({
                    'event': 'removeFromCart',
                    'ecommerce': {
                        'remove': {
                            'products': [{
                                'name': localStorage.n,
                                'id': id,
                                'price':localStorage.p,
                                'quantity':localStorage.q,
                                'category': category,
                                'dimension6': type,
                                'dimension4': weight,
                                'dimension5': harvest,
                                'dimension8': describe,
                                'dimension12': localStorage.search,
                                'metric10': display,
                                'metric4': play,
                                'dimension14': view
                            }]
                        }
                    }
                });
                localStorage.flag=0;
                console.trace(dataLayer[dataLayer.length - 1].ecommerce.remove.products[0]);
                console.trace(dataLayer);
                
                flag = 1;break;
                // throw new Error('Error hhhhhh')
                
            } else {
                localStorage.name = localStorage.name + "|" + prodname[i];
                localStorage.ids = localStorage.ids + "|" + prodid[i];
                localStorage.quantity = localStorage.quantity + "|" + prodQuan[i];
                localStorage.price = localStorage.price + "|" + prodprice[i];
                localStorage.category = localStorage.category + "|" + prodcat[i];
                localStorage.weight = localStorage.weight + "|" + prodweight[i];
                localStorage.harvest = localStorage.harvest + "|" + prodharvest[i];
                localStorage.describe = localStorage.describe + "|" + proddescribe[i];
                localStorage.type = localStorage.type + "|" + prodtype[i];
                localStorage.view = localStorage.view + "|" + prodview[i];
                localStorage.videodisplay = localStorage.videodisplay + "|" +
                    proddisplay[
                        i];
                localStorage.videoplay = localStorage.videoplay + "|" + prodplay[i];
            }
        }localStorage.delKey=undefined;
    }
}
})


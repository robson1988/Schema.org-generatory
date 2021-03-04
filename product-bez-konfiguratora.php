<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <script>
    window.onload = function generateSchema() {

    var x = document.getElementsByTagName('title')[0];
    var z = document.querySelector('meta[name="description"]').content;
    var a = document.querySelector('meta[property="og:image"]').content;
    var b = document.querySelector('meta[property="og:url"]').content;
    //get the price
    var c = document.getElementById('WithoutAnySale');
    textContent = c.textContent;
    var d = textContent.replace('PLN',''); //remove PLN
    var f = d.replace(/\s/g, '');  //remove empty spaces and new lines
    var g = f.replace(',', '.');  //change , to .

    var obj = {
     '@context': "https://schema.org/",
     '@type': "Product",
      'name': x.innerHTML,
     'description' : z,
     'image' : a,
     'brand': "Tryumf",
     'offers': {
       '@type': "Offer",
       'url': b,
       'priceCurrency': "PLN",
       'price': g,
       'availability': "https://schema.org/InStock",
       'itemCondition': "https://schema.org/NewCondition"
     }
    };

    var myJSON = JSON.stringify(obj);
    var script = document.createElement('script');
    script.type = "application/ld+json";
    script.text = JSON.stringify(obj);
    document.querySelector('body').appendChild(script);
    }
    </script>

  </head>
  <body>
    <div id="WithoutAnySale" class="_csControl csDBContentFormatter cs-inited" style="display:block;">
					  <div class="_csControl csDBTextBlock cs-text-largest-font-weight-bold cs-font-color-4 csFormatType_Money cs-inited" style="display:inline-block;" id="88e60b52445b00cf9a08bafc15827bac">0,98</div>
					  <div class="_csControl csDBTextBlock cs-text-largest-font-weight-bold cs-font-color-4 cs-margin-left-smallest csFormatType_None cs-inited" style="display:inline-block;" id="ff61b30e8f9b31d578bd51a77602e1e3">PLN</div>
					</div>



  </body>
</html>

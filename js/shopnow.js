
$(document).ready(function(){
// $("#btn btn-warning").click(function(){
// alert("empty shopping cart,click to create new shopping cart");
// 	});

     $('.btn btn-warning').click(function(e) {
     e.preventDefault(); 
    var myStringArray = [<?php echo $p_id; ?>];
    var arrayLength = myStringArray.length;
    for (var i = 0; i < arrayLength; i++) {
     addToCart(myStringArray[i],2);
    }

    return true;

    //window.location.href = "http://seoexpertiser.ca/glassful/cart/";
    });

    function addToCart(p_id,qu) {
     $.get('/glassful/?post_type=products&add-to-cart=' + p_id +'&quantity='+qu, function() {
     // success
    $(".show_success").show();
     });

    }
    
});
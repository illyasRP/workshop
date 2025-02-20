let cartIcon = document.querySelector("#cart-icon");
let cart  = document.querySelector(".cart");
let closeCart = document.querySelector("#close-cart");

// open panier
cartIcon.onclick = () => {
    cart.classList.add("active");
};

// close panier
closeCart.onclick = () => {
    cart.classList.remove("active");
};

if (document.readyState == "loading"){
    document.addEventListener("DOMContentLoaded", ready);
}else{
    ready();
}

// faire function
function ready(){
    // sup item du panier
    var removeCartButtons = document.getElementsByClassName("cart-remove")
    console.log(removeCartButtons)
    for (var i = 0; i < removeCartButtons.length; i++) {
        var button = removeCartButtons[i];
         button.addEventListener("click" , removeCartItem);
    }
}
// chager la quantity
var quantityInputs = document.getElementsByClassName("cart-quantity")
for (var i = 0; i < quantityInputs.length; i++) {
    var input = quantityInputs [i];
    input.addEventListener("change", quantityChanged);
}

// retirer item du panier
function removeCartItem(event) {
    var buttonClicked = event.traget;
    buttonClicked.parentElement.remove()
    updateTetotal;
}
// quantity deja changé

function quantityChanged(event){
    var input = event.trajet
    if (isNaN(input.value) || input.value <= 0){
        input.value = 1
    }
    updateTetotal();
}

// changment du prix total
function updateTetotal(){
    var cartContent = document.getElementsByClassName("cart-content")[0];
    var cartBoxes = cartContent.getElementsByClassName("cart-box");
    for (var i = 0; i < cartBoxez.length; i++){
        var cartBox = cartBoxes[i];
        var priceElement = cartBox.getElementsByClassName("cart-price")[0];
        var quantityElement = cartBox.getElementsByClassName("cart-quantity")[0];
        var price = parseFloat(priceElement.innerText.replace("€", ""));
        var quantity = quantityElement.value;
        total = total + price * quantity;

        document.getElementsByClassName("total-price")[0].innerText = "€" + total;

    }

}
if (document.readyState == 'loading') {
  document.addEventListener('DOMContentLoaded', ready)
} else {
  ready()
}

function ready() {
  var removeCartItems = document.getElementsByClassName('remove');
  for (var i = 0; i < removeCartItems.length; i++) {
    var button = removeCartItems[i];
    button.addEventListener('click', removeCartItem)
  }

  var quantityInputs = document.getElementsByClassName('quantity')
  for (var i = 0; i < quantityInputs.length; i++) {
    var input = quantityInputs[i]
    input.addEventListener('change', quantityChanged)
  }

  var addToCartButtons = document.getElementsByClassName('bt')
  for(var i=0;i<addToCartButtons.length;i++){
    var button = addToCartButtons[i]
    button.addEventListener('click', addToCartClicked)
  }
}

function removeCartItem(event) {
  var buttonclicked = event.target
  buttonclicked.parentElement.remove();
  updateCartTotal();

}

function quantityChanged(event) {
  var input = event.target
  if (isNaN(input.value) || input.value <= 0) {
    input.value = 1
  }
  updateCartTotal()
}

function addToCartClicked(event){
  var button = event.target
  var shopItem = button.parentElement.parentElement
  var imgSource = shopItem.getElementsByClassName('image').src
  var price = shopItem.getElementsByClassName('price')
  console.log(imgSource,price)
}

function updateCartTotal() {
  var itemContainer = document.getElementsByClassName('items')[0]
  var items = itemContainer.getElementsByClassName('item')
  var total = 0
  for (var i = 0; i < items.length; i++) {
    var item = items[i];
    var priceElement = item.getElementsByClassName('price')[0];
    var quantityElement = item.getElementsByClassName('quantity')[0];
    var price = parseFloat(priceElement.innerText.replace('$', ''))
    var quantity = quantityElement.value
    total = total + (price * quantity)
  }
  total = Math.round(total * 100) / 100
  document.getElementsByClassName('value')[0].innerText = '$' + total
}
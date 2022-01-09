let AlladdQtyElement = document.querySelectorAll(".productCounter .addQty");
for (let addQtyElement of AlladdQtyElement) {
    addQtyElement.addEventListener('click',changeQtyProduct);
}
let AllminusQtyElement = document.querySelectorAll(".productCounter .minusQty");
for (let minusQtyElement of AllminusQtyElement) {
    minusQtyElement.addEventListener('click',changeQtyProduct);
}
function changeQtyProduct(e) {
    e.preventDefault();
    let href = this.href;
    let thisElement = this;
    fetch(this.href)
    .then(
        function (response) {
            return response.json();
        }
    )
    .then(
        function (data) {
            if (data.subject === "changed") {
                let productCounterElement = thisElement.closest('.productCounter');
                let productQty = productCounterElement.querySelector('.productQty')
                productQty.innerText = data.qty;
                updateCardPrice();
            }else if(data.subject === "delete"){
                deleterowTable(thisElement);
            }
        }
    )
    .catch(
        function (error) {
            console.log(error);
        }
    )
}

function deleterowTable(e) {
    let rowElement = e.closest('tr');
    rowElement.remove();
}

let AllremoveProduct = document.querySelectorAll("tr .removeProduct");
for (let removeProductElement of AllremoveProduct) {
    removeProductElement.addEventListener('click',removeProductElementEvent);
}
function removeProductElementEvent(e) {
    e.preventDefault();
    let href = this.href;
    let thisElement = this;
    fetch(this.href)
    .then(
        function (response) {
            return response.json();
        }
    )
    .then(
        function (data) {
            if (data.status === 200) {
                messageBoxSmall(true,data.message)
                deleterowTable(thisElement);
            } else {
                messageBoxSmall(false,data.message)
            }
        }
    )
    .catch(
        function (error) {
            console.log(error);
        }
    )
}

function updateCardPrice() {
    let allRow = document.querySelectorAll('tr');
    let sumofProduct = 0;
    for (let row of allRow) {
        let priceElement= row.querySelector('td.priceProduct span');
        let quantityProduct= row.querySelector('td.quantityProduct .productQty');
        if (priceElement && quantityProduct) {
            sumofProduct += priceElement.innerText * quantityProduct.innerText;
        }
    }
    
    let Card_deatail = document.querySelector(
        'section.Card_deatail .PriceAll .Card_deatail_row_value');
    
    Card_deatail.innerHTML = sumofProduct + '<span class="price_componant">ریال</span>';
}
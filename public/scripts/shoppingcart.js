let getCartData = function () {
    shoppingCart = localStorage.getItem("shopingCart");
    if (shoppingCart) {
        $.ajax({
            url: "http://localhost:8000/groups.data",
            data: { shoppingCart },
            contentType: "application/json",
            success: (res) => {
                if (res.length != 0) {
                    document.getElementById(
                        "payment-table"
                    ).innerHTML = `<thead class="">
                                        <th>Group Name</th>
                                        <th class="text-center">Price</th>
                                        <th></th>
                                    </thead>`;
                    res.forEach((group) => {
                        displayGroupData(group);
                    });
                } else {
                    document.getElementById("payment-table").innerHTML =
                        "Sorry your shopping cart is empty";
                }
            },
            error: (err) => {
                console.log(err);
            },
        });
    }
};

function deleteShoppingCartItem(id) {
    let shoppingCart = JSON.parse(localStorage.getItem("shopingCart"));
    let index = shoppingCart.findIndex((element) => element === id);
    shoppingCart.splice(index, 1);
    localStorage.setItem("shopingCart", JSON.stringify(shoppingCart));
    getCartData();
    cartCountHandler();
}

let displayGroupData = function (group) {
    document.getElementById("payment-table").innerHTML += `<tr>
    <td>${group.name}</th>
    <td class="text-center">${
        group.price - (group.price * group.discount) / 100
    }</th>
    <td class="text-right"><a href="http://localhost:8000/payment/${
        group.id
    }" class="btn btn-success mx-2">Pay now</a><button onclick="deleteShoppingCartItem(${
        group.id
    })" class="btn btn-danger mr-5">Delete</button></td>
</tr>`;
};

getCartData();

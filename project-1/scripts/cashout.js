// this was made with help from youtube and google searching https://www.youtube.com/watch?v=b_xI0HDw-RQ . I am not too sure if were allowed to use these resources, but I had to idea how to do this page otherwise.
document.addEventListener("DOMContentLoaded", function () {
    // Cart array to hold selected products
    let cart = [];

    // Handle + button clicks
    document.querySelectorAll(".add-btn").forEach((btn) => {
        btn.addEventListener("click", function () {
            const product = btn.parentElement;
            const name = product.querySelector(".name").textContent.trim();
            const priceText = product.querySelector(".price").textContent.trim();
            const price = parseFloat(priceText.replace("$", "")); // ensure numeric
            // Toggle selection
            if (btn.classList.contains("selected")) {
                // Remove from cart
                cart = cart.filter(item => item.name !== name);
                btn.classList.remove("selected");
            } else {
                // Add to cart
                cart.push({ name, price });
                btn.classList.add("selected");
            }
            // Save cart to localStorage so checkout page can read it
            localStorage.setItem("checkoutItems", JSON.stringify(cart));
        });
    });
    // Handle checkout button click
    document.getElementById("checkout").addEventListener("click", function () {
        window.location.href = "checkout.html"; // redirect to checkout page
    });
});

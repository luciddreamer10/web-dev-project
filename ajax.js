// Using vanilla JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Get all "Add to Cart" buttons
    const addToCartButtons = document.querySelectorAll('.add-to-cart');

    // Loop through buttons and attach click event
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-product-id'); // Get product ID

            // Create an AJAX request
            const xhr = new XMLHttpRequest();
            xhr.open('POST', '/add-to-cart', true); // Set the method and URL (use your backend URL)

            // Set the necessary headers
            xhr.setRequestHeader('Content-Type', 'application/json');

            // Create a payload with the product ID
            const payload = JSON.stringify({ product_id: productId });

            // Send the request with the payload
            xhr.send(payload);

            // Handle the response
            xhr.onload = function() {
                if (xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    alert(response.message); // Display success message or update the cart icon
                } else {
                    alert('Error adding product to cart');
                }
            };
        });
    });
});

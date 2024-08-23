document.addEventListener('DOMContentLoaded', () => {
    const cart = [];

    document.querySelectorAll('.card').forEach(card => {
        const decreaseButton = card.querySelector('.decrease')
        const increaseButton = card.querySelector('.increase')
        const quantitySpan = card.querySelector('.quantity')
        const basketButton = card.querySelector('.additem')

        let quantity = 1;
        
        decreaseButton.addEventListener('click', () =>{
            if (quantity > 1 ) {
                quantity--
                quantitySpan.textContent = quantity
            }
        })

        increaseButton.addEventListener('click', () => {
            quantity++
            quantitySpan.textContent = quantity
        })
        
        basketButton.addEventListener('click', () => {
            const id = card.dataset.id;
            const name = card.querySelector('.product-name').textContent;
            const price = parseInt(card.querySelector('.row span:last-child').textContent);

            addToCart({ id, name, price, quantity });
            quantitySpan.textContent = quantity
        });
    });

    function addToCart(product) {
        const existingProduct = cart.find(item => item.id === product.id);
        if (existingProduct) {
            existingProduct.quantity += product.quantity;
        } else {
            cart.push({ ...product });
        }
        renderCart();
    }

    function renderCart() {
        const cartItems = document.querySelector('.cart-items');
        const total = document.querySelector('.total');
        const cartInput = document.querySelector('.cart-input');
        cartItems.innerHTML = '';

        let totalPrice = 0;
        cart.forEach(item => {
            const itemDiv = document.createElement('div');
            itemDiv.style.fontFamily = 'Pt Sans'
                itemDiv.innerHTML = `   
                <p>${item.name} x${item.quantity}</p>
                <p>${item.price * item.quantity}тг</p>
            `;
            cartItems.appendChild(itemDiv);
            totalPrice += item.price * item.quantity;
        });

        total.textContent = `${totalPrice}тг`;
        cartInput.value = JSON.stringify(cart);

        if (cart.length === 0) {
            cartItems.innerHTML = '<p>Корзина пуста</p>';
        }
    }
});

function consumeAPI() {
    const products = document.getElementById("products");
    fetch("http://127.0.0.1:8000/api/products")
        .then((response) => response.json())
        .then((data) => {
            data.forEach((product) => {
                products.innerHTML += `
                <div class="card text-center">
                  <h2>${product.name}</h2>
                  <p>${product.price}</p>
                  <p>${product.id}</p>
                  <button onclick="deleteProduct(${product.id})" class="btn btn-danger">Eliminar</button>
                </div>
                `;
            });
        });
}

const deleteProduct = (id) => {
    fetch(`http://127.0.0.1:8000/api/products/${id}`, {
        method: "DELETE",
    }).then((response) => {
        alert("Producto eliminado correctamente");
    });
};

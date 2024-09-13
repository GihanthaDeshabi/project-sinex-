let previewContainer = document.querySelector('.product-preview');
let previewBox = previewContainer.querySelectorAll('.preview');


document.querySelectorAll('.products-container .products').forEach(products => {
    products.onclick = () => {
        previewContainer.style.display = 'flex';
        let name = products.getAttribute('data-name');
        previewBox.forEach(preview => {
            let target = preview.getAttribute('data-target');
            if (name == target) {
                preview.classList.add('active');
            }


        });

    };

});
previewBox.forEach(close => {
    close.querySelector('.bxs-x-circle').onclick = () => {
        close.classList.remove('active');
        previewContainer.style.display = 'none';

    };

});
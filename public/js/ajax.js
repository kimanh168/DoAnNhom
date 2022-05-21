//Hiển thị nhanh sản phẩm:
const quickview = document.querySelectorAll('.quick-view');
quickview.forEach(element => {
    element.addEventListener('click', (e) => {
        getProductDetail(element.dataset.productId);
    });
});

 async function getProductDetail(productId) {
     const url = '/api/product/' + productId;
     const response = await fetch(url);
     //B2: Nhận và đọc kết quả:
     const result = await response.json();
     //B3: xuất kết quả:
     const divResult = document.querySelector(".modal-body");
     divResult.innerHTML = `
    <div class="row">
        <div class="col-6">
        <img src="/img/${result.image}" alt="" class="img-fluid">
        </div>
        <div class="col-6">
            <h1>${result.product_name}</h1>
            <p class="product-price">
               Giá sản phẩm: ${result.price}  VND
            </p>
            <p class="product-price">
               Hạn sử dụng:  <span class="badge bg-primary"><strong> ${result.expiry} Ngày</strong></span>
            </p>
        </div>
        <p class="product-description pt-4">
         ${result.description}
      </p>`;
      
}



// Tìm sản phẩm theo từ khóa
async function searchProduct(keyword) {
    const divResult = document.querySelector("#search-result");
    if (keyword != '') {
        //B1: Gửi request:
        const url = "/api/searchProduct/"+keyword;
        const response = await fetch(url);
        //B2: Nhận và đọc kết quả:
        const result = await response.json();
        //B3: xuất kết quả:
        divResult.classList.add('border-search');
        divResult.innerHTML = '';
        result.forEach(el => {
            let regexProductName = new RegExp('(' + keyword + ')', 'gi');
            const productName = el.product_name.replace(regexProductName, '<b>$1</b>');
            divResult.innerHTML += `
            <div class="row border-item-search" >
                <div class="col-3 ">
                    <img src="../img/${el.image}" class="img-fluid m-3">
                </div>
                <div class="col-9 mt-3">
                    <a href="./thongtinsp/${el.id}">${productName}</a>
                    <p>${el.sale_price} VND</p>
                </div>
            </div>`;
        });
    }
    else {
        divResult.innerHTML = '';
        divResult.classList.remove('border-search');
    }
}





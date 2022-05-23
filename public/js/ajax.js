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


const CheckBoxCate = document.querySelectorAll('.cateCheck');
CheckBoxCate.forEach(element => {
    element.addEventListener('change',function(){
        ProductsByCategory(1);
    });
})

// Hiển thị sản phẩm theo loại
async function ProductsByCategory() {
    const arrayCategories = document.querySelectorAll('input[name=cateCheck]:checked');
    const CategoriesList = [...arrayCategories].map(el => el.value);
        //B1: Gửi request:
        const url = '/api/showProductByType/'+ arrayCategories;
        const response = await fetch(url);
        //B2: Nhận và đọc kết quả:
        const result = await response.json();
        //B3: xuất kết quả:
        const divResult = document.querySelector(".list-product");
        divResult.innerHTML = '';
        result.forEach(el => {
            divResult.innerHTML += `
            <div class="product mb-5 col-xs-3 col-md-4">
				<div class="product-img">
                    <img src="../img/${el.image}" alt="" class="img-fluid"></a>
                </div>
                <div class="product-body">
                    <div class="product-btns">
						<button class="add-to-wishlist"><i class="fa fa-heart"></i><span class="tooltipp">add to wishlist</span></button>
						<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
						<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
					</div>
						<h3 class="product-name"><a href="#">${el.product_name}</a></h3>
                        <h4 class="product-price"> ${el.sale_price} VND</h4>
                </div>
						<div class="add-to-cart">
							<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
						</div>
					</div>`;
         });
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





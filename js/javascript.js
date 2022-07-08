// index page javascript 
// besst selling product 

//  for vegetables 
const bestSellingVegetables = [
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"}
];
var bestSellingVegetablescount = 0;
for (let i of  bestSellingVegetables) {
    if(bestSellingVegetablescount <4){
        var productListFn = bestSellingProduct(i.image, i.ProductName, i.MRP, i.sellingPrice);
        $(".best_Selling_vegetables_1").append(productListFn);
    }else{
        var productListFn = bestSellingProduct(i.image, i.ProductName, i.MRP, i.sellingPrice);
        $(".best_Selling_vegetables_2").append(productListFn);
    }
    bestSellingVegetablescount++;
}
// for fruits 
const bestSellingFruits = [
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"}
];
var bestSellingFruitscount = 0;
for (let i of  bestSellingFruits) {
    if(bestSellingFruitscount <4){
        var productListFn = bestSellingProduct(i.image, i.ProductName, i.MRP, i.sellingPrice);
        $(".bestSellingFruits_1").append(productListFn);
    }else{
        var productListFn = bestSellingProduct(i.image, i.ProductName, i.MRP, i.sellingPrice);
        $(".bestSellingFruits_2").append(productListFn);

    }
   
    bestSellingFruitscount++;
}
function bestSellingProduct(image, productName, mrp, sellingPrice){
    let productList = `<li class="align-items-center d-flex box_shadow mb-3 product_list">
    <img src="${image}" alt="" class=""
        style=" width: 27%; max-width: 115px;">
    <div class="d-flex flex-column ml-3">
        <h6>${productName}</h6>
        <p class="mb-0">
            <span class="mr-2 gray_color"><span style="text-decoration: line-through;"
                    class="text-muted"><i class="fa-solid fa-indian-rupee-sign"></i>${mrp}</span>
            </span><span class="ml-2"><span class="green_color"><i
                        class="fa-solid fa-indian-rupee-sign"></i>${sellingPrice}</span></span>
        </p>
    </div>
</li>`;
return productList;

}

// for vegetables carousel  
const vegetablesCarousel = [
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli",weight:"500 gm", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli",weight:"500 gm", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli",weight:"500 gm", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli",weight:"500 gm", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli",weight:"500 gm", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli",weight:"500 gm", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli",weight:"500 gm", MRP:"30", sellingPrice:"25"}
];
const fruitsCarousel = [
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"}
];
const herbsCarousel = [
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"}
];
for (let i of  vegetablesCarousel) {
    var carouselProduct = product_carousel(i.image, i.ProductName, i.MRP, i.weight);
    $("#owl_carousel_vegetables").append(carouselProduct);
}
for (let i of  fruitsCarousel) {
    var carouselProduct = product_carousel(i.image, i.ProductName, i.MRP, i.weight);
    $("#owl_carousel_fruits").append(carouselProduct);
}
for (let i of  herbsCarousel) {
    var carouselProduct = product_carousel(i.image, i.ProductName, i.MRP, i.weight);
    $("#owl_carousel_hearbs").append(carouselProduct);
}
function product_carousel(image, productName, mrp, weight){
    let productList = `<div class="item p-2">
    <div style="box-shadow: 2px 2px 5px 1px #c8c8c8;border-radius: 9px;" class="border">
        <img src="${image}" alt="" class="mx-auto" style=" border-radius: 9px; width:175px;">
        <div class="d-flex">
            <h4 class="h5 pl-3 pr-2">${productName}</h4>
            <p class="green_color mb-1 weight text-muted">(  ${weight} ) </p>

        </div>
        <div class="align-items-center d-flex justify-content-between px-4 mb-2">
            <div class="">
                <h5 class="Price"><span class=""><span class="green_color"><i class="fa-indian-rupee-sign fa-solid mr-1"></i>${mrp}</span></span></h5>
            </div>
            <button class="border-secondary btn btn-sm green_bgcolor px-4 text-light" type="button" style="letter-spacing: 1px;">Add</button>
        </div>
    </div>
</div>`;
return productList;
}

// downlode app section 

$("#appleStore").click(function () {
    $("#playStore").removeClass("green_bgcolor border-secondary border  animate__animated animate__slideInRight"); 
    $("#appleStore").addClass("green_bgcolor border-secondary border bo animate__animated animate__slideInLeft"); 
 });
 $("#playStore").click(function () {
    $("#appleStore").removeClass("green_bgcolor border-secondary border animate__animated animate__slideInLeft"); 
    $("#playStore").addClass("green_bgcolor border-secondary border animate__animated animate__slideInRight"); 
 });

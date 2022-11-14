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



// index page downlode app section 

$("#appleStore").click(function () {
    $("#playStore").removeClass("green_bgcolor border-secondary border  animate__animated animate__slideInRight"); 
    $("#appleStore").addClass("green_bgcolor border-secondary border bo animate__animated animate__slideInLeft"); 
 });
 $("#playStore").click(function () {
    $("#appleStore").removeClass("green_bgcolor border-secondary border animate__animated animate__slideInLeft"); 
    $("#playStore").addClass("green_bgcolor border-secondary border animate__animated animate__slideInRight"); 
 });

 ///////////////////////////////////////////////////////  vegetables product details  /////////////////////////////////////////////////////
 const Vegetables_pageProduct = [
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
    {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"}
];
for (let i of  Vegetables_pageProduct) {
    var Vegetables_pageProductdetalis = ViewAllproduct(i.image, i.ProductName, i.MRP, i.weight);
    $("#AllVegetable").append(Vegetables_pageProductdetalis);
}
function ViewAllproduct(image, productName, mrp, weight){
    let productList = `<div class="col-md-4 col-lg-3 mb-4">
    <div style="box-shadow: 2px 2px 5px 1px #c8c8c8;border-radius: 9px;" class="border pb-2 text-center">
        <img src="${image}" alt="" style=" width:250px;" style=" border-radius: 9px;">
        <div class="d-flex">
            <h4 class="h5 pl-3 pr-2">${productName}</h4>
            <p class="green_color mb-1 weight text-muted">(  ${weight} ) </p>

        </div>
        <div class="align-items-center d-flex justify-content-between px-4">
            <div class="">
                <h5 class="Price"><span class=""><span class="green_color"><i class="fa-indian-rupee-sign fa-solid mr-1"></i>${mrp}</span></span></h5>
            </div>
            <button class="border-secondary btn btn-sm green_bgcolor px-4 text-light" type="button" style="letter-spacing: 1px;">Add</button>
        </div>
    </div>
</div>`;
return productList;
}
 //===================================================== ./  vegetables product details  =====================================================
 //=====================================================  viewproduct details page js  =====================================================
 $("#favirateProduct").click(function() {
     $(this).toggleClass('fa-solid text-danger fa-regular');
     calltoster('Like', "Added to Favirate", "green" )
 })

 const productQuentityArray=[ {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
 {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
 {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
 {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
 {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
 {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"},
 {image:"./images/vegetables/cat-img1.jpg", ProductName:"Red Chilli", MRP:"30", sellingPrice:"25"}]
 for (let i = 0; i < 4; i++) {
     
    //  productQuentity('1kg', '750 gm', '500 gm', '250 gm')
 }
 function productQuentity(qt1,qt2,qt3,qt4) {
    var productQuentityList = `<div style="box-shadow: 2px 2px 5px 1px #c8c8c8;border-radius: 9px;" class="border">
    <div class="align-items-center d-flex justify-content-around ">
        <img src="./images/2-watermelon.jpg" alt="" class="" style="width: 75px;">
        <h5 class="Price">
            <span class="">
                <span class="green_color">
                    <i class="fa-indian-rupee-sign fa-solid mr-1"></i>
                    100</span>
            </span>
        </h5>
        <p class="green_color mb-1 weight text-muted">1 Kg </p>
        <input type="radio" class="radio-btn" name="productWeight" id="">
    </div>
</div>`;
$("#ProductQuentity").append(productQuentityList);
 }
 //===================================================== ./ viewproduct details page js =====================================================

 //===================================================== cart details page js =====================================================
 $("#cartIcon").click(function(){
    $(this).toggleClass('green_color');
    $("#Soppingcart").toggleClass('d-none');
 });

 //===================================================== ./ cart details page js =====================================================


//  toster js 

function calltoster(title, massage,color) {
    iziToast.show({
        position: 'topRight',
        title: title,
        message: massage,
        zindex:999999999,
        color:color,
        transitionIn: 'bounceInDown'// bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
        // theme: 'dark'

    });
}

function addProduct(btnId, counterId, productNumber){
calltoster('Success','Product <b>Added </b> To cart','green');
  
}

// quantity up and down 
let QuantityUp = $("")



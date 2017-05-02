<?php
//connection with bd
$con = mysqli_connect("localhost", "root", "", "e-commerce");

//getting the categories
function getCats(){
    global $con;
    
    $get_cats = "select * from categories";
    
    $run_cats = mysqli_query($con, $get_cats);
    
    while($row_cats = mysqli_fetch_array($run_cats)){
        $cat_id = $row_cats['categ_id'];
        $cat_name = $row_cats['categ_name'];
        
        echo "<li><a href='#'>$cat_name</a></li>";
    }
}

//getting the brands
function getBrands(){
    global $con;
    
    $get_brands = "select * from brands";
    
    $run_brands = mysqli_query($con, $get_brands);
    
    while($row_brands = mysqli_fetch_array($run_brands)){
        $brand_id = $row_brands['brands_id'];
        $brand_name = $row_brands['brands_name'];
        
        echo "<li><a href='#'>$brand_name</a></li>";
    }
}
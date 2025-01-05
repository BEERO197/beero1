<?php

try {
    $pdo = new PDO('sqlite:mydatabase.db');
    echo "تم الاتصال بقاعدة البيانات بنجاح.";
} catch (PDOException $e) {
    echo "فشل الاتصال بقاعدة البيانات: " . $e->getMessage();
}

?>


<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">  
    
    
    <link rel="stylesheet" href="style2.css">
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>متجر الكتروني</title>
</head>
<body>
    
    <?php  include"file/header.php"
    ?>
    
          <!-- product -->  
   <div class="contianer_card" >
   
         <div class="product_card">
       <!-- الصورة -->
       <div class="card-img">
           
           <img src="images/t_shert.jpg">
       </div>
         <div class="product_section">
           
           <a href="">ملابس</a>
       </div>
       
  <div class="product_name">
      <a href="">تي شرت</a>
  </div>
  
  <div class="product_price">
      <a href="">السعر:  50&nbsp دينار              </a>
  </div>
  
  <div  class="product_discription"><a href=""><i class="fa-solid fa-eye"> </i></a>اضغط هنا للمزيد من التفاصيل</div>
  
  <div class="qy_input">
      
   <button  class="qy_count-mins" >-</button>   
   <input type="numbet" value="1" name="" id="quantity" min="1" max="7" style="width    :40px"></input>
     <button  class="qy_count-add" >+</button>   
  </div><!-- نهاية دف الكمية -->
  
  <!-- دف اضف للسلة  --> 
  
  <div  class=""><a href="">
  <button  class="add-to-cart " type="submit" name="" style="    margin:20px ;">اضف الي السلة<i class="fa solid fa-cart-plus"></i></button>
  </a>
  </div>
  
 </div>
   <div class="product_card">
       <!-- الصورة -->
       <div class="card-img">
           
           <img src="images/a11.jpg">
       </div>
         <div class="product_section">
           
           <a href="">ملابس</a>
       </div>
       
  <div class="product_name">
      <a href="">بدلة اطفال</a>
  </div>
  
  <div class="product_price">
      <a href="">السعر 120&nbsp دينار      </a>
  </div>
  
  <div  class="product_discription"><a href=""><i class="fa-solid fa-eye"> </i></a>اضغط هنا للمزيد من التفاصيل</div>
  
  <div class="qy_input">
      
   <button  class="qy_count-mins" >-</button>   
   <input type="numbet" value="1" name="" id="quantity" min="1" max="7" style="width    :40px"></input>
     <button  class="qy_count-add" >+</button>   
  </div><!-- نهاية دف الكمية -->
  
  <!-- دف اضف للسلة  --> 
  
  <div  class=""><a href="">
  <button  class="add-to-cart" type="submit" name="" style="    margin:20px ;">اضف الي السلة<i class="fa solid fa-cart-plus"></i></button>
  </a>
  </div>
  
 </div>
   <div class="product_card">
       <!-- الصورة -->
       <div class="card-img">
           
           <img src="images/a10.jpg">
       </div>
         <div class="product_section">
           
           <a href="">ملابس</a>
       </div>
       
  <div class="product_name">
      <a href="">هودي اطفال</a>
  </div>
  
  <div class="product_price">
      <a href="">السعر 20&nbsp دينار              </a>
  </div>
  
  <div  class="product_discription"><a href=""><i class="fa-solid fa-eye"> </i></a>اضغط هنا للمزيد من التفاصيل</div>
  
  <div class="qy_input">
      
   <button  class="qy_count-mins" >-</button>   
   <input type="numbet" value="1" name="" id="quantity" min="1" max="7" style="width    :40px"></input>
     <button  class="qy_count-add" >+</button>   
  </div><!-- نهاية دف الكمية -->
  
  <!-- دف اضف للسلة  --> 
  
  <div  class=""><a href="">
  <button  class="add-to-cart" type="submit" name="" style="    margin:20px ;">اضف الي السلة<i class="fa solid fa-cart-plus"></i></button>
  </a>
  </div>
  
 </div>
   <div class="product_card">
       <!-- الصورة -->
       <div class="card-img">
           
           <img src="images/a3.jpg">
       </div>
         <div class="product_section">
           
           <a href="">احذية</a>
       </div>
       
  <div class="product_name">
      <a href="">حذاء</a>
  </div>
  
  <div class="product_price">
      <a href="">السعر:  50&nbsp دينار              </a>
  </div>
  
  <div  class="product_discription"><a href=""><i class="fa-solid fa-eye"> </i></a>اضغط هنا للمزيد من التفاصيل</div>
  
  <div class="qy_input">
      
   <button  class="qy_count-mins" >-</button>   
   <input type="numbet" value="1" name="" id="quantity" min="1" max="7" style="width    :40px"></input>
     <button  class="qy_count-add" >+</button>   
  </div><!-- نهاية دف الكمية -->
  
  <!-- دف اضف للسلة  --> 
  
  <div  class=""><a href="">
  <button  class="add-to-cart" type="submit" name="" style="    margin:20px ;">اضف الي السلة<i class="fa solid fa-cart-plus"></i></button>
  </a>
  </div>
  
 </div>
 
   <div class="product_card">
       <!-- الصورة -->
       <div class="card-img">
           
           <img src="images/a4.jpg">
       </div>
         <div class="product_section">
           
           <a href="">ملابس</a>
       </div>
       
  <div class="product_name">
      <a href="">عباية</a>
  </div>
  
  <div class="product_price">
      <a href="">السعر 50 &nbsp دينار              </a>
  </div>
  
  <div  class="product_discription"><a href=""><i class="fa-solid fa-eye"> </i></a>اضغط هنا للمزيد من التفاصيل</div>
  
  <div class="qy_input">
      
   <button  class="qy_count-mins" >-</button>   
   <input type="numbet" value="1" name="" id="quantity" min="1" max="7" style="width    :40px"></input>
     <button  class="qy_count-add" >+</button>   
  </div><!-- نهاية دف الكمية -->
  
  <!-- دف اضف للسلة  --> 
  
  <div  class=""><a href="">
  <button  class="add-to-cart" type="submit" name="" style="    margin:20px ;">اضف الي السلة<i class="fa solid fa-cart-plus"></i></button>
  </a>
  </div>
  
 </div>
 
  
        
        <div class="card1">
            <img src="images/a13.jpeg" alt="منتج 2" class="product-image">
            <h2>منتج 2</h2>
            <p>وصف قصير للمنتج 2.</p>
            <p class="price">سعر: 750 &nbsp دينار</p>
            <label for="quantity2">الكمية:</label>
            <input type="number" id="quantity2" value="1" min="1" class="quantity-input">
            <button class="add-to-cart">أضف إلى السلة</button>
        </div>

      
        
 <!-- ********* -->
       
   
           
  
      
    <!-- footer -->     
       <?php
       include "file/footer.php"
       ?>
        </div>  
    
       
    
    
</body>
</html>

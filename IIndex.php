<!DOCTYPE html>
<html>
<head>
  <title>Colleges</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="test.css">

  <link rel="stylesheet" href="slidr.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>



  <style>
    #slid{

    }
    
    .slider {
			width: 500px;
			height: 200px;
			overflow: hidden;
             justify-content:center;
            text-align:center;
             position: relative;
             padd-top:200px;

            border-radius:20px;
		}

        .slider {
            margin: 0 auto;
          }
          
          .slides img {
            width: 100%;
            height: 250px;
          }





#city{

  width:100px;
}



#search{

  width:400px;
  margin-left:2px;
}


form{
 display:flex;
 padding-top :15px;
 border-radius: 10px;
  color:black;
}

		
		
  </style>
</head>
<body>

  
 
        
    <nav>
      <div class="navbar-left">
        <img id="logo" src="https://www.vdarpan.com/assets/img/logo.png" alt="Logo" class="logo">
      </div>







     
    
        <form  >
         
          
          <div class="form-group"  id="ciy">
            <select class="form-control" id="city" onchange="searchColleges()">
              <option value="">All</option>
              <option value="Delhi">Delhi</option>
              <option value="Mumbai">Mumbai</option>
              <option value="Bangalore">Bangalore</option>
              <option value="Pune">Pune</option>
    
              <option value="Ahmednagar">Ahmednagar</option>
              <option value="Nashik">Nashik</option>
              <option value="Thane">Thane</option>
    
    
            </select>
          </div>


          <div class="form-group" id="seahh">
            <input type="text" class="form-control" id="search" placeholder="Search here...">
          </div>
    
        </form>
     












      <div class="navbar-right">
        <select id="styling" id="lang">
          <option value="Select Language">Select Language</option>
          <option value="English">English</option>
          <option value="Hindi">हिंदी(Hindi)</option>
          <option value="Marathi">मराठी(Marathi)</option>
          <option value="Other">Other</option>
        </select>
        <a  href="listing.html" id="styling"  href="#">Free Listing</a>
        <a id="styling"  href="advertisement.html">Advertise</a>

        <a  href="register.html" id="styling"   href="#">🚨 Alert</a>

        <a id="styling"  href="aboutus.html">About Us</a>


          

         
        <select onchange="window.location.href=this.value"   id="styling" id="lang">
          <option value="">Sign-In</option>
          <option value="newusersign.html">User</option>
          <option value="newadminsign.html">Admin</option>
        </select>

        
         
        <select onchange="window.location.href=this.value"   id="styling" id="lang">
          <option value="">Login</option>
          <option value="userlogin.php">User</option>
          <option value="adminlogin.php">Admin</option>
        </select>
      
     



    </nav>



<p class="para">
    

  <div class="slider" >
    <div class="slides">
            <img src="https://lh3.googleusercontent.com/kLVtrSr1SBxq5dBQ-jcorT_fLcoofY4ICOd1GVw-WaUdzNSAzK-i_lehI8FkniyAgymGN7dAgbONPrWPkZsQ_HWqS1RJk-5ncs06S70=w900-rw">
      <img src="imgs/11.jpg">

      <img src="imgs/13.jpg">

      <img src="imgs/2.png">


      
     


    </div>


    
  
  </div>


  

  <div class="container">
    <div class="row" style="text-align:center;  font-family:san-serif; margin-top:50px; margin-bottom:50px">
      <div class="col-lg-15 text-center">
        <h2 class="section-title">Services We Provide</h2>
    </div>

    
   <br>
           
   <br>
  
   

     <div class="col-sm-2">
      <div class = service-item>
         <div class = service-item>
          <a href="newcolleges.php">    <img src="data:image/png;base64,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" class="img-fluid">
         <h6 style="text-align:center">COLLEGES</h6></a>
        </div>
           </div>
     </div>


     <div class="col-sm-2">
      <div class = service-item>
         <div class = service-item>
          <a href="newgrocery.html"><img src="imgs/18Shop.jpg" class="img-fluid">
         <h6 >Grocery</h6></a>
           </div>
           </div>
     </div>

     <div class="col-sm-2">
      <div class = service-item>
         <div class = service-item>
         <img src="imgs/3.png" class="img-fluid">
         <h6 href="#">Consultant</h6>
           </div>
           </div>
     </div>

 

     <div class="col-sm-2">
      <div class = service-item>
         <div class = service-item>
         <img src="imgs/22photographer.jpg" class="img-fluid">
         <h6 href="#">Photography</h6>
           </div>
           </div>
     </div>

     <div class="col-sm-2">
      <div class = service-item>
         <div class = service-item>
         <img src="imgs/17electrical.jpg" class="img-fluid">
         <h6 href="#">Electrician</h6>
           </div>
           </div>
     </div>

    


          
    

    

     <p  style="color:black;  margin-top:100px ">
        
          
      Welcome to Vdarpan your 'one stop shop' where you are assisted with day-to-day and exclusive planning and purchasing activities. We take pride in our iconic customer support number, 8888888888 and the fact that we own a strong hold on local business information pan India.
      
      Our service extends from providing address and contact details of business establishments around the country, to making orders and reservations for leisure, medical, financial, travel and domestic purposes. We enlist business information across varied sectors like Hotels, Restaurants, Auto Care, Home Decor, Personal and Pet Care, Fitness, Insurance, Real Estate, Sports, Schools, etc. from all over the country. Holding information right from major cities like Mumbai, Delhi, Bangalore, Hyderabad, Chennai, Ahmedabad and Pune our reach stretches out to other smaller cities across the country too.
      
      Our 'Free Listing' feature gives
       a platform to showcase varied specialities. 
      We then furnish you with the information
       via phone, SMS, web, App and WAP as well
        as, create a space for you to share 
        your experiences through our 'Rate & Review' feature. 
        Through the 'Best Deals', 'Last Minute Deals' and 'Live Quotes', we make sure that you are offered the best bargains in the market. </p>

   


    
 
     

        Follow us on :

    <footer style="">
      <div class="containr">
        <div class="social-ions" style="">
          <a href="https://www.facebook.com/yourusername"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFwAAABcCAMAAADUMSJqAAAAY1BMVEUYd/L///8NdPJTj/QAcfIAbPH7/v8Ab/E4gvO/1Pp6qPYAafHv9v7h6/2uxfjF2Pva5v1mnPWFrvcaevKhwPmOtfdqn/W4z/qWuvhVk/Q1hfOKsfdjmfV1pfZMjPQlfvPM3vsobh/GAAADrUlEQVRoga2a6aLiIAyFEVnsNrbWtV7n+v5POVRrrTSBQ53zt/I1AgkhqVgBKuvTOb90rXBqu0t+PtUlMk7EfmC217XUVkkpBkmprJbr69Z8BzdZoxxXEHJvUE0W5ofg1bXVJHh8gW6v1SJ43WgVIj+ldFMnw6tj2Oip+UfOehpudhawerTe7ui5J+GZsDi6lxUZCDc5OiNvSZ0Txs/hVZswI2+pdj7zM3gmk80ejJezqfHh+2IZulexD8MPejlbCH0IwXdfsR19x8O/s3tu+xS+/5rt6HsaniWtJbenioyCV2gsUbbQ4rdrW10U2lp/68pqDjctBJe6252qpzcaU95P+1v3OVC2ZgbPEb+URXOfufkfLxCp3IdnyGLa7u6TCbjQ2SfcsAs0UZETaAIuhfmA74AYq88kew4XdjeFVwDb0nZTcGGrCbyJr6bsGDYFV8c3vAZW07LnMAEXuh7hTXw1ZcOxSfjz5z28AgzXfAJBwYWuBvgVmPENy6bh6vqEmzZuuDokwkUfBATmnHrumvdD8/NQR65Y76YCWk4h/ZS56rRLfJ+iRzQ93CAR69cLV3U8R1DGwbeAd8q/nuGb+L+1WwcH9oqQa2++gUPL7RexWiNT7sEPmEGiRA4gH36BBpUCiSszOPJvnVOLE5ItL4LbkzhDZ+cSuDqLfMmcQ3CZC2xtFsEvogN+tgzu0EBIXAoPo+WoGfwt5DWENm/9fMJ/Jo82i9i6dNngS59wM3lQLoUjqgNeyM86COcPsjawFUH4mbW8CzgRCL9xAOdEvPuDcPZQcu7PBy4QzhrnAhcfcjF4ya6nC7n8YYHB7/z4OnDMYXA63+rljjk+CGFw9qLWH9B8aoHB2a38SC3YpAiD05miGJIiNp2Tt3yUl+Qexgc3ZvCQzvGJqFQvWS+d+2tfT9jt8ExEkRR6wUk0pNBA8r8APiT/QCqaDn9dW4ALVzp8vHDF7xbJ8PdVMX7JTYZPLrmrY2TWU+HT63m0sJAK/ygsxEoiifDPkkismJMG94s5ETdNg/tlqEgBLQk+L6CFS38pcKr0FyxaJsGJomWw3JoAp8utoUIxDucKxYESNwznS9x8cR6Fh4rzrO0gPNxW4BoiGDzWEGFaOQgcaOXQTSgADjWhyPZZFI62z1ZE4y8Gxxt/q3nLMgxPa1mu/GZrCJ7cbO01bRPz8EVt4of1Y4ObgS9vcPcy2fHRmifgfWv++EVr/snvPyoo/Cy3+A8fFQwqa2+nZdjnEP8A/SsrcWyWZckAAAAASUVORK5CYII=" alt="Facebook icon"></a>
          <a href="https://www.instagram.com/rushibangar000"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIALoAugMBEQACEQEDEQH/xAAcAAAABwEBAAAAAAAAAAAAAAAAAQIDBAYHBQj/xABOEAABAwMABQYJBgoHCQAAAAABAAIDBAURBgcSITETQVFhgZEiMkJScaGxwdEUIzZyc5IVFzNUVWJjorKzFjVDRFOCoyQlJoOTwuHw8f/EABsBAAEFAQEAAAAAAAAAAAAAAAABAgMEBQYH/8QAOhEAAgEDAgIFCgQHAQEBAAAAAAECAwQRBRIhMQYTMkFRFSJSYXGBobHR4RRCkcEWMzQ1U7LwI0Mk/9oADAMBAAIRAxEAPwDcUAFkdKAKzpPptadHyYpXmoq/zeEgkfWPBq0rLSri74rhHxf/AHEmpW86nLgZzdtZd9rXFtG6KhiPARt2nd5+C6OhoNtS4z85/wDeBfhaUlz4lcqL7d6ku5e6Vsm1xBndjuzhaMbO3h2aaXuLUaUFyiiGZJH73ySOJ4kuJU22K5InS8AZJ4klNZKkKCayVIUExksUKATWyVIWAmtkiQoBMbJUhWE1smihQCY2SJBgJrZKkLG7nwm5JEg9pw4OPekEwhbJpWeLK8fVcQkcU+4Rwi+aH4rpcIfyVfVR/UmcPeo3QpPnFEMrWhPtQT9qR2KDTe+0j/CqhUM82ZoPr4qrU063nyWPYUK2iWdRdnD9RcrFp9QV72wV7DSTO3BxOYz28R296zK+m1KfGHFHPXugV6OZUnuXxLixzS3IIII3EFZpg8haAAgAjwQBm2sPTh9G+S0WWXE48GoqW8Y/1Wnp6+b08Oi0nSesxWrcu5Gha2m5Kc0ZU7ae4ucS5xOSSckldYsI0dvcANQ5DlAMNSORKoCw1MciVQFAJjZKoCgE3JIoiwExslUQwE1slURQCY2SqIoBNySqIrCZkkURYCa2SqIYCaPSAgAIFAkyASTIASZAGU3IjWS16H6Xy2eQUtc+SWgO7fvMPWOrqWdeWcaq3RXH5mFqujwuV1lNYn8/b6/Wa3DKyWJkkTg9jxtNc05BB5wsJpp4Zw7jKLcZc0OJBCs6eaQGwWN8kJ/2qc8lAOg43u7PgtHTLP8AFV8Psri/+9ZatKHXVMdyMKdlznOcS5zjkkniV3KeDodngANRuFUAw1JuJFAMNTHIeoCg3ckySKIoNTGyRQFAdaa2SqAoAdI7E1skUQwAmtkqgKGExskURQATGyVRFDCbkekHkJMigyEoBZCRsAJrDKAm5FCSZFAm5ACTIAym7gayaNqxvzpGvs9S/JY0vpyTzc7ff3rI1Cil/wCi95yHSKwUWrmHfwf7M0QcFmnKmM60rga3SU0wJMdHGGY/WO8+5ddotLq7fd3y/wCX7nSaXR20dz7ynbK19xp7Aw1JuHKAoNSbh6gKazOAN5JwAOdMcsDthctH9XtxuLWzV7xQ053gFuZHdnN29yybrV6VPzafnP4GXc6rRpebT85/AvNt0EsNGBt0pqXgePO7a9XALFq6pc1Hzx7DGq6pc1H2sew7sNsoIABDRUzMebE0e5U5VakuLkypKtUlxcmSWxsaMNaAOoJmWRtt8xSQQCAAkACUAIAItB4jKBcjEtFSSjEtNC/60YKdvkuTHxrVI9mTXvOXX6J2OtB5S3xNcfKj8A+pTQu60OUi7S1W9pdmb9/Ep961cSMDpbNUcpjfyM249jvj3q/S1LPCojcs+kkW9txHHrX0+hRqqlno6h8FVE6KVnjMcMELQjUU1ui8nTUq0K0N9N5QwjJMBJkAJMgS7RXOtt0pq1hxyUgcfRz+rKjqx303ErXlBV6MqT70b9G8Pja9vBwBC55nmDTTwzz/AKQSmpv1xmcS7bqZCD1Bxx6gF3FqtlCEfUjt7WltoQXqIGyp8lnqwAJMjurFNbtHABJ5sDikcscR2zHM1XQbQ2K3QxXG5wh1Y4bUcbt4hB/7vYuZ1DUXVfV035q+Jymp6m6rdKk/NXx+xejjCyDFOfcrvb7W3arquKHdnBOXH0AbypadGpV4QWSxQtK9w8UotnBm1h2SNxbGamXHBzYsA96uLS7h88I1IdHryXawvf8AQiP1l0A8WiqXdrQpFpNX0kTro3X75oT+M2i/R1R99qXyRU9JDv4arf5ED8ZlH+jqj77UeSanpIX+Ga3+RfEH4zaL9HVH32o8k1PSQfwzW/yL4hfjNov0dUffajyTU9JB/DNb/IgfjNov0dUffam+Sp+kg/hmt/kQbdZlAfGoKlv+ZpSPS6nihr6NV+6a+JJi1j2d2OUjqmf5Afeo3p1VcsEUujl2uTX6/Y7Nt0os10eI6SvjMh4Rvyx3YDjPYq9S3q0+MkZ1xpl3brM4PHjzOw3GFAUTh6T6OUl/pi2RoZUs/JTgb2noPSOpT0a8qUso0NP1KrZVMx4xfNf93mM3GiqLdVy0lXGY5ozgg8/WOpbUainHcj0K3rwuKaqU3lMipclgCTIA4hI2Br9lv8TLPQNkfl7aaMOJPE7IWRUhmbOCu9Pk7io1yy/mZLUnbqZnDypHHvJXXw4QSOqp08RSGtlOySqAeykyOUS4at7ILhdXVs7cwUmC0HneeHdx7llapc9XT2R5sxNduuoo9XHnL5d5rgO5c2cYUjTfS82xzrfbXD5Xj5yXjyXUOv2LTsbHrf8A0qdk6HSNIVwuurLze5eP2+ZmM00s8jpZ3ukkcclzjklb8YqKwjsoQjBbYrCEJw8CAAgAIAIpGxQkxsAJrYATGxQju4pmQyA7sZ594UbkJwZc9D9NZ7fM2jusjpaNxw2R290XxCz7i1UluhzOe1XRYVourQWJLu7n9zVo3tc1pa4EEZBG/KzGcThrgyj6zrIKq2i6Qt+fpt0mPKjPwPqyrVpV2y2vkzouj171VbqJPhLl7fuZWtLJ3AEZFAkyGDuU1QW08QydzAPUq0lxMypTTmzkvGXuPXldCnwLcYcEFhLkdtDGEi5hg2TV/Qik0ZpnYG3UZlcenPD1YXL39TrK79R5/rVbrbyXguB1b3Xttlqqq12MQxkjrPADvwq9Gn1lRQ8SjaUHcV40l3swmaZ880k0zi6SRxc4nnJXWxUYrCPTIU1CKjHkhCdlEgEZACMgBKAEjYmQimNi5CTGwCTGxUDKYxTUtXWjtNFbY7pUxNkqZ98e2M8m3O7HWeOVjXteUp7fA4jXdQqSrO3g8Rjz9bLfX0FNX07oKuFksbuLXDPd0FU1OUeMTBo1qlCe+m8Mw/SW2iz3yqoWuLmRuBYT5pGR7Vs0am+Ckek6fcO6to1e9/twNJ1Z3V1fY3U0pzJRODBv3lh8X3jsWbdQUZ5Xecf0gtFQud8eUuPv7y11lOyqpZqeUAslYWOB6xhV08PJi05unNTXNHnurhdTVU0Ds5ieWZPUcLXjLKTPVKU98IyXesjSMkoEZA6MUmImD9UKJviVJR85kUnielb24mwFlNcgCJwE3eB6BtUQgtlJEBjYhY31BcrUeZtnl1xLdWnL1srOs+UxaNGNpwJZ2NI6QMn2gK1p/wDOy/A1+j0FK9y+5P6GSrd3ndgRvACXeAEKYhZLBoZc7vsyvZ8lpT/ayje4fqt49+FVr39OnwXFmPfa1b2vmrzpeC/dl3t+r6zU4Hyrlqp/Ptv2R3BZs9RrS5cDnK3SC7qPzMR931Oo3RKwNbgWuDtBJ78qF3ld/mKb1W9bz1jIdXoHYKhvgUroHdMUh9+U6N9Xj+bJPS1y9g+Ms+1FRvmrutpA6W1S/K4xxjdhsnZzH1dquU9QjLhPgzes+kVKo9tdbX4932KTLG+KR0crHMe04c1wwQVc3JrJ0MZqccxeUanq50gp6i2R2yeRsdVTjDQ4422c2PRwWReUmp7lyZxWvafUp13Xisxl8GW6traeip3T1czIY2jLnOdjAVRRbeEYNKlUqyUaay2YdpRdG3i+1VdGCI5HAMB80AAezPatalHZBRPStNtXa2saT5r9+JZdUs7m3esgB8GSAHHSQ7/yVXu+KRj9J4ZoQl4P5mrHgqBxRhGmkQg0pubB/jF3eAfetCi/MR6XpEt9jSfqOKpMmkBJkCSx3gN9CY2QtcRC2HMUCY5gJdwKa58Awei4xsxtA5gFzr5nlEnlso2tl+zaKNufGn9gVyy4TZ0fRlZuJvwX7mXZWnvZ2oMo3sAZRvENE0F0OY+KO6XaLJPhQQO5hzOcPYFQubtvzIHJazrLTdCg/a/2Rowa0N3BZxyhGrK6moY+VrKiKBmcbUjg0HvToxcuCRJSo1a0ttOLb9RynaZ6Ptdj8JRHrDTj2J/4ep4F9aNfNfy2T7fe7bciRQ10Ezh5LXeF3cU2VOce0ipXs7ihxqwaJ4AIyUwrFY0u0Tpr5A6aFrYq9rfAk4bfU7/3crFC4lTeHyNfS9WqWclGXGHh4ewx6ohlpJ3QzsdHPE7DmncWkLVUlJZR6BTnGpFSi8pgmqqicATzyyAcNt5djvTNsY8kLGjTh2YpDJSNkmC3arXEaUAczoH+5VbnsIwekazZZ9aNiVA4IxDWIA3TG4gfs/5bVbpPzD0bQv7fT9/+zK2pMmxgCMhgkNPgj0JuSJriFlaTmAWVG5gE47imOYuOJ6NHBY55KUHW6f8Ad9uH7d38Ks2zxJnT9GF/7VPYZhlW+sOzBlL1gFk0Csn4YvbTM3NLTfOSZ4OPkt9/oCirVsRx4mNrd9+FtmovzpcF+7NoaAGgblnnnxUtNdLW2JnyWk2ZK+RuQD4sTek9J6ApqVLe+PI29I0h3j6yfCC+Jk9dW1NwqDPWzvmlPFzznHUOgK/HEVhHc0belQjspxwhhO3E2A2ucx4cxxa5pyHNOCEbk1xEklLg+RoGhenMonit16kL2vOzFUk72nmDun0//VUrUVzgcpq2hx2utbLGOa+hpe4jcQqZyJnetKxbUUV4p2+Ez5uoAHEeS7s4do6FbtquHtZ1XRu+xJ203wfFfujNVebOyCTWBbNWH0rj+wk9iqXPZMLpF/Qv2o2VUzgDENY30zuP/K/ltVqn2EejaD/b6fv/ANmVtK2bISTIDrXbgm5I2gK45gBMcwCedyjcxVzPSAVI8jM/1vf1fbvt3fwp9N4Z1HRf+bU9iMwU3WHZhI3gzXtV9CKfRsVOBt1Urn56gcD2FQzluZwPSKs6l5s7opfUs9xqmUNFPVS/k4I3SOA5wBlNRjUaUq1WNOPNtIwKvrJrhWzVdS7M0zy53V1ehWYywsHqFChGhSVOC4IYTt5ODKdvAGUu4AjwIKcpBg2jV9dn3XR6IzOLp6d5hkcfKxwPcR2gqlUWJHnet2itrtqK82XFfv8AE7l4om3C11VI4AiaMtAPTjd60yLw0zPtqzoVo1F3M89uBaS08QcFaKlk9Ujx4iSlyOLbqv8ApZF9jJ7FXuH5qMLpF/Qv2o2VVDz8xHWOMaZV/WIv5bVYg/NPRdA/t9P3/NlZSNm0Em5AWDuS5EwKT3MaBRuYCX+KUzeCPSSaeRmfa3/6vt327v4U2TwdT0W/m1PYvmZgmdYdmDdzpd4G5aCta3RK2BvDkc9pJynxeUeaau27+rnxEafOLdErls/4YB9GQh8OI/RUnf0/aYgOCN56QBPUwAnbgAnqQATlIDStUDncjcm+TtsPbgqKq8s47pQvOpv2mingozlGeeLm1rLlVtaPBbO8D0bRVyMuB6tbNujBvwXyIqfknLZqv+lsX2MnsUNfsowukX9C/ajZTwVY8/MT1k/TGt+rH/A1Tw5Hougf2+Hv+bKwhm0BJgAJcAOKo5jAKNzATIDslM38QXM9JK2eRmfa3xmgtoH+O/8AhVe4ltwdT0X/AJtX2L5mZ8mVV607LcEY0nWibjZdWtSJ9E6aPyqdz4z94keoq7Qlugefa9TcL6UvSwzsX6g/ClnraIHBnhc1pPAHm9eFLJZRn2dx+HuIVfB/AwFzHtcWvbsvaSHNPEEcQqimeoqSayuQW9OUx4SepgBSKYAKkUhDW9VludSWF1VKMOq5dtoI8gbh68+pGcnBdI7hVbtU4/lWPfzZcKydtNSyzvxsxMLznqCQw6cHUmoLvZ51e8yPc88XEuPaVZTwj1iMdq2iU7I4tmq/6WxfYyexR1uyYXSL+hftRsp4KA8/MT1kfTGu6mx/y2qzT7J6L0f/ALfT9/zZWU7BtARtAMBGBuRYaViSqDWxxsahdUa5BSsxC89DSo3VwJGXnI9GLaPJyh6127VFbvtnfwqhfy2xR0vRp4q1PYvmZxyay+tOv3AMaFVDcXDVtdfkNzfbpTiKr3sPRIB7x7B0q7ZXGJ7H3nPdILTraKrR5x5+z7M1Eb271rHGGb6wNE5PlEl2tkO21++pibxB84Dn61SuKUu1E6zQ9Wioq3rPGOT/AG+hnxZlVVUOsUhBYpY1B6YkghTRmKmWHQ/RefSCqZJIxzLcw/Oy8NrHkt6T18ynhmRj6rqsLGDSeZvkvD1s2uGGOCJkcTAxjGhrWjgAFKeeTk5NylzZTdZ15+RWYW+N/wA/WnZwPJjHjHt3Dv6Eveb3R6zda5619mHz7vqZInpnehFSJils1X/S2L7GT2JtXkYXSL+hftRsxUJ5+YjrGP8AxlcOrkv5bVapdlHo2gf2+n7/APZlaUuDYAjADgG4JMDGSWxrk51CFyHGxqCVQY5ByR5if6ConUyIpcUegGnLQeldSjy4pWs9m1QUR6Jj7Fmaq8U0/WdD0deK016jPOTWDvOsyDk0bwyGGuY5r43Fr2kFpHMeYp0arXFDZYaw+TNT0S0iZd6UQ1LgyujHht88ecPeuis7tV44faOJ1PTnaz3R4wfw9TLHuxzK8ZRXLzoZaLpIZjC6mqHHLpac42vSOB7sqvUtac+PJmraazd2yUU9y8H9eZwn6soi7wLnJjrhGfaofwWHwkaa6TTXOn8fsTrbq5tFLIJKt01a4bw2QhrO4ce1TQt4rmVbjpFd1Ftp4h7Of6vl7i4QRxwwtiiY2NjRhrGjAA9CsJY5GHKTk90nlkC+XikslA+qrH4aPEYD4T3dASOW0sWdnVvKqp019kYfe7rUXq4yVtUcOfuawcGN5gFGpZPR7K0p2lFUofr4vxZBUiZcApUwLbquGdK2nogkPsRN8DA6Rv8A/D70bIozgTEdYhzplccfsv5bVapdk9G0L+30/f8A7MranRrgT8APtHgj0JuCN8yc1i4CVQquQ6GKJzGNijHlpHSEzcN3cTb6F/K0UEg4Pja7vC7ODzFHnNWO2pJPxZWtYse3ZonY8WoHrBWdqqfUZ9ZraFLFy14r6Gd7C5rJ124MRpHIbuDEXUjcG8XEJIZGSwvcyRhy1zTvBTo1XF5T4jJYmmpcUy6WbTM4bFd2bx/bxj2t+C27bV4vhWXvOdu9F/NQfuf7Fso7nRVrQ6lqY5M8zXb+5a9OtTqLMHkxKtvWpPE4tErKlIRqeqp6Zu1UTRxN6XuATZSjFZkx8Kc6jxBZKpfNOqGjD2W1hrJ+Y+LG30nn9A9Sp1L+muEOLNqz0KtVea3mr4mZ3q41t3qjU18xkfwa0bmsHQBzKBV3N5bOws7Wjaw2Ulhd/i/acxwwrMJ5L6CUqkKBTRYF21TxbekFRJj8nTH1kBPbOb6Tzxaxj4s1o8E04YwzTmQS6W3NwOcShvc0D3K3S7J6To0dthST8P3ZwlOjUApEhCSweCPQjBE3xOoGLzST4lJsWGJjYxsWGJMoa2atopU/KLBRknLmM5M+kbl11jU6y3izh9Sp7Lqa9eReklE64WWqp2DLy0OYOsEH3Jbyk6tCUFzG2FfqLiM3y/5GXNj6lxjZ2rmOCNM3CbhXJpNwm4HJI3CbgcmjcG4SYufG/wBCcptchc5D252jDZpQOgPOFKq8+WRNsG+KRGkj2yS4l3pS9a+8mjLHIjvh3YU0KpLGZGkh6lbp1SaMyLLF1K7Tqk8ZkVzSCrsJpkyYlWIsXJqOqe3PgttXcJBj5S8Mj+q3OT2knuUyOJ6TXKnWjRX5eftZfnvayNz3HDWjJPUg5pJt4R56ulT8tuVVVE5M0zn56iVbhwR6na0uqowp+CSIuFPEsBhSxAnRs+bb6AgrSlxZ1tjBxzheYz4SaKO7ItrVE2NbFhqa2MyW7QSu5OWagkOA/wCcj9POPet3RrlZdJ+1GBrdBySqru4Mu4G5dCc8UbSWwupp31dKwup3nae0DxD8Fy+qWEqcnVp8U+fq+x0WnX6nFUpviuXr+5wQxYTkau4WI03cJuD2Ebg3BcmjIbgjH1Jdwu4Q6NLuFUht0afkepDD4upPUiRSGJIupTwqEsZESWLqVynUJ4zIU0WM4G9X6dUsKZN0c0bqtIK4Qwh0dOwjlp8bmDoHX1LRpNyKuoalTsqe6XGXcvH7G20FHBQ0cNLTN2YYmhrG9SuLgedVas603Um8tld1h3kWzR+SJjgKir+ZjHOAfGd2D1kJy5mroVp+Ju1J9mPF/sjGlZiz0PAFNFgGpoiHWgjzDGf1R7EjfEozmtzOxWQ8lXVMfmTPb3OIXmVz5tWS9bM+lPdTi/FJiWsVZsc2ONamtjGx+nc+CZksTsPYQ5uOlOhVlTkpR5ohqKM04y5M0WzXWO5UwOdmZo+cZ0Hp9C7GxvYXVPK596OTu7WVCeO7uZ0S0EYIGFewiqcWt0boqhxdFmB58zeO5ZVzo9vWy4+a/V9DQo6lWprEuKOY/RWpaSI6iJ46wQsufR+rnzZouR1aD5xY0dGa4cORP+dQvQbnuaJFqlH1hf0buHmxffTfId36v1F8p0PET/Rq4eZH98I8iXngv1F8p0PESdGbj5kX3wjyJd+C/UXynb+Ik6L3E+TF98Jy0W78F+ovlW38Rs6K3I+TF99OWjXfgv1HrVrfxYh2h9zdzQj0vUkdHue/A7yxbrx/QL+g1wf41RTM7SfcrUNJrLnJB5dox5Rf/e8nUWr+ijeHXCpkqcf2bBybT7T61eo6fGPaeStW6QVmsUo49fN/QtlFR01HTtgpYGRRN4NYMBaMUorCMKrVnWk51HlsRc6+ntlJJVVcojhjG8+4daVtIdQoVK9RU6ay2YhpNfJ7/c3VcrSyJvgwxeY3r6+lEWej6dYQsqKpx5978WcpWIs0ABWIgGAp4iGlWnRrl7VRTY/KQMd3tBVOdXEmchc6lsrzj4N/Ma0qpfk98qDjwZSJG9vFcPqtNwuW/HiLptVVLaPq4HNa1ZLZebHWsTWxjY6xijbI2yTSyS08zZoHuY9vAhPpV50ZqcHhkFSMakdsllFpt+kMUgDKwGN/nje0/BdPaa7Smttbg/HuMSvp04vNPividyGWKVoMUjXjpacrbp1YVFug8mfKMovEkOKQaBAAQAEABAAQAEADKACyEAE97WNLnODQOcnCRtLmKk28Irt60wttvaWwuNXOODIjuHpdwHt6lUq31KHBcWalrpFxXeX5q9f0Mx0jvNde6kS1j/m2fk4W+LH8T1+xQKu5vLOxsLGlaQ201xfN97+xw3NwrtORqpiVcixQBWIgP0lO+qqIaeLe+Z4Y3dzk4VhNJNkNapGnF1H3I9BUtOynpooWtAbGwMHYMLKby8nltSo5zcn3nD0wtxqqNtTG0mSDOcc7Tx7sArH1e1dajvjzXyNDS7nqqjhLk/mUxjVyDOibHmtTGxjY6xiY2MbHWtTGyNsWGpuRrY4zajOY3OaekHCfCrOHZeBkknzRKZcK1m5tVL2uyrcdUvI8FUZC7ai/yodF2uA/vJ+634KRazfL/wCnwX0Gfg6Ho/MP8MXH84/cb8Evlu/9P4L6B+Doej8X9Qfhi4/nH7jfgjy3f+n8F9A/B0PR+L+oRvFx/OP3G/BHlu+9P4L6B+Doej8X9QjeblzVP+m34JfLV96fwX0F/BW/o/F/Ubde7mP71/pt+CctavfT+C+g5WNv6Pxf1Gn3y64P+1n/AKbfgl8sXj/P8F9CRWNt6Pxf1Ik14ubhg1so+qcexO8p3Uuc2TQsrdfkRyauaonzy08kmfPcSmfiKk+1Jsu0oQh2Ukc6Vm5Waci7BkCdi0aUy1CRCkatOlIsJjBGCtCmyQCtwDJdtWFmdV3R1ymYeQpQeTJG50h+Az6kleeI7Uc10ivlTo9RF8Zc/Z9zWBwVM4kJzQWkHeOgpHyBcylX2zOoZnTwAmmec4HkHo9C5LVdOdGTq0+y/gdDZXqqx2y7S+JzGt6FgsvNjzGqNsjbHA1MyMbHA1JkbkPZSZEyDCMhkGEZFyDCBA8IAGEBkSWpUxUxtzU5D0xl7U9MkTI8jVKmSxZFkbxUsWTRZCmbxVunIsQZBnYtClItQZAlatOlItRZFeN61KMiVM6Oj1iq7/XfJqUbLG75ZiMiMfHqVzeolK/v6dlS3z4vuXibdabdT2ygho6RuzFEMDpJ6T1qvKW55Z5zcXFS4qOrU5smpCECAEvY1zS1wBadxB501xWMdwqbTyivXDR4FxkoSG/s3Hd2Fc7e6FGo91u8eo06Go4WKv6nIkpZqc4niez0hc1XtK9B4qRaNCNaE1mLyG1qpsMig1NyJkPZRkQLCMi5CISigQAEAGEggCEANuCch6Yw8KRMkRHkCkRLEjSBSxJokOYK1TZYiQJxuKv0pFmBCbBNVScnSxPmdw2YxtexadF7uRO6sacczaXtLJZNX9fWvbLdXCkp+ePOZXe4e1a1KLS4mPe9IaNJONDzpePd9zSrVbKO10jaWhhbFE3mHEnpJ5yp2chcXFW5qdZVeWTAMcEhCGgAIACACQARa0jBAI6wkaT5guDIFZTQbJPIRZzx2As26tLdpycFn2ItUqk84yzhVDQ124AbuYLl7mjTUuEV+hp022MFZ0ox8CUJQtIUSU3CFCSMAJAFBIAZ4IQg05OQ5DL1IiREaRTRJokeRWIJE0RmNodK0OAIzzhaFvCLfFDpNpPBaLNbaGY5moqaQ7/Hiafcuht6FLHZX6GLd3NaPZm172WuCCKFgEMTGDoa0BaKSXIxZzlJ+c8jmEpGGgAIFAgD/9k=" alt="Instagram icon"></a>
          <a href="https://www.linkedin.com/in/yourusername"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAMAAABHPGVmAAAAaVBMVEUAd7X///8AcLEEebb7/f4Debb9/v79/v8DeLY8l8Y7lsYAbbCcyuKlz+WQxN+Lwd0KfbiDvdvl8fcAc7O+3OwgiL6x1ehFnMlytNZqsNQZhLzF4O7w9/tSo81gqtGp0ebc7PUsjsJ8udngaOvIAAADg0lEQVRoge2abZeqIBCAGV7EjXItKjc1y/7/j7xD7m5AWHdD+uScs3s8kDzOIMwMDoGrSJ4lEC6H0ckVkUEiyeQPBC+ar+pjcqm+GsQMEAntUSuaQJQ+toZC8F+7U4KJBMKE6ltUwkAqJUgiEapCAJGwpSwVgxBGtyAJh4NKCVEH4AStRZNZC+1F0V5orgXN00FyukBzZekh2XsgbzFXCMIGSQlhTCsjegrMCEQQVXfF8rOrFYm3YxjCdFnw6zbdFkJHr6AgROjdGYAbATjXOlaXEISRcgN88GEZh3NJIuclBBF0BfzXr3EoYve1ACTXPViuOAO+izRYAMLUxVLEqBK7RQcggp48yHJ6SG5cjAWRsI/0A0FN9g6Ew2p6TZhae+a6pDDXwn67UKt++rcL3+Gts072sW4gDOn5L4VjRBa7rwT3LkarDMNvmeEf8EV0tDSyC9O++dZku4uPyEb8CdO6KrbNtvjQOt5rjXnGnGGkrKmibALfP+7jBQ6fs0lCvnHIn4Tlj2KBsTkJX4cGYgLH1yiD8n+A/LcgACevrHe7ujRXQYXCEFHaIsLNZjgMnMrjstm0nLebZnXodSi6Cbvfz3Zzk3Y97I/ozOxmE2Dkql5vnCS0OQbe+WAgoZbOjcUPpLBbeU0I7dprZi4xlZYyM8ENNP3d6h2DcPkj/Ab5vDVjkllrgg/DpfNA+HN59D3DKMTahW3ILbxoa3Ru/D75x59Uni6vQ3hZOL7N8j9+ePMqRMLmACNnGHce6FUItrcgA4ThCdwU9HUIjDLuVImAjB/4+EFnjCZXba6xv/SU8oLOOEhmvQgu5GRPShQER25Pl667nFrXeBmc7ZUSA8FxLyU1mSWtTw7Fm5S4ia/Ud5KsnVtM34dlrwiIxNkV31ZhhG1sXTh01sy/DkG7W55SqC9npcLXJBBvHEzPLFU4rCeBgBeHs7MDKaaA4A5ZWggvdXKzs5chGTSOn2XKTZlX02jiJnnGOU8O8ZO8u146CWTpQdYzZIbMkBkyQ2bIDJkhA+QmDsRqDkCs3tXTqH4FtiyDxx6BkMiW/ZO4K6eH/eom+27oy2nnNB+8DPfo9j5JgswBk/PVnj1sfnzTKMScPVpf7fMnzU97JzqDfCxvhMxfsf8Ake8pX3hLIUbqkhJtSkpSF8ccTXGMKSXqk5f5vKVg6Xpkkbz06j1FZJC6HO4fbRVnSvd35FUAAAAASUVORK5CYII=" alt="LinkedIn icon"></a>
          <a href="https://www.twitter.com/yourusername"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHcAAAB3CAMAAAAO5y+4AAAAXVBMVEX///8dofIAnfIAm/EAmfEVn/IAl/Hg8P202/rx+f75/f/T6fzD4vuf0fiFxffq9f5MsPQppPJru/XZ7fxXtPWNyfen1fnL5vt3wPY+qvQAlPFkuPWZzvg9rPN2vPZv+CZ4AAAC8UlEQVRoge2Z6ZKqMBCFoTut7CHsDuD7P+YFRmcchQQatOpW5fupJIeT7nQWHMdisVgsFovFYrFYLP8/Z69s0yKLI/+DooGXEgIRAYJqwse/ZPQ+2egC5P4AkMn7P34MLN0sWPFQgg+qk7Jbj78Heakw5cjWX+2Kd0P3BfT8ukwRXFFzdDPChCM7WB7iPeo3HFlnaCoMLWMxJ3uDLmvi9EIojK+cz7q9m1ajrNw81N7UKRaaly5II1sMol5Bcrn5PCV8t7+cl54INXap9RIFgOFS40USuPXgegtPNKAZZndMLVxqqqH86RWb2fLnX3SyI6LaLuvEv6OIaq7u5JrofjfrGLJO9Bg9zF6jHOmyeQA4bodhPP3pBJtnZc+gy10TnsIHmP1NzkqbVm7OlHXi537ppLoH05XeL1s3mOkXxKWrb9ltiC9b9zGjH6UB+qaKQllrZd3FcmOmX5gpNGiDq/S6mwvkL2fXNEUXIcXdaoXDghDyhRXX7PUSSydPuX5ZW5yRBBD7a8bUhStXd5qexB1nXm0eCU/m3jW6rC3dBD+nRvjTN9HXXz09a083IXWbRQPA28LuNsw7oNwIFDfCpHZUySGluYYp2yM7LHXM+Sv2nj9rl2WZvSj8IIvTdstQ7pUdLRenrZ5xV1aNTLPfLzfaNR5fjeTUp70y7Cxe7O7Y4twpYHNKH2DXfCiYs3vIZVK2OaniI2QdubFYUn+I7OZiCQck1U34+YbqA6M8IdXq5MKdC8ITMa3zTCl/mzGLH6cojNo7l91ZAhlVrV6YdpwBdXj6KUXu9kujFeStfpzfIysT0A8yvCG2zjkh0+VNevgVv6xS48qPR+wwRq3p7YNzXTVKGKsGKv5p6En3+iVQCERDVEcIywOrRd6KdSVq7ipvF2ELxqUIsH1DrcgTpRtnQpUc7PWO72VqNsYEqLK3fh7z665Q040VTXzfXbVd+IFvckEeVV3TFmlaZEnn1eeDlzuLxWKxWCwWi8VisXyaf3jsH8eZomRXAAAAAElFTkSuQmCC" alt="Twitter icon"></a>
        </div>
      </div>
    </footer>

   

    <script src="index.js"></script>

  </body>
</html>
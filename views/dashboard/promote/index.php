<?php
//setcookie('username', '6', time() + (86400 * 30), "/");

?>
<!DOCTYPE html>
<html lang="en">

<head> 
    <?php require ADMIN. 'includes/header.inc.php' ?>  
    <style>
        .hidden {
            display:none;
        }
        
        /* Create three columns of equal width */
        .columns {
          float: left;
          width: 33.3%;
          padding: 8px;
        }
        
        /* Style the list */
        .price {
          list-style-type: none;
          border: 1px solid #eee;
          margin: 0;
          padding: 0;
          -webkit-transition: 0.3s;
          transition: 0.3s;
        }
        
        /* Add shadows on hover */
        .price:hover {
          box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
        }
        
        /* Pricing header */
        .price .header {
          background-color: #111;
          color: white;
          font-size: 25px;
        }
        
        /* List items */
        .price li {
          border-bottom: 1px solid #eee;
          padding: 20px;
          text-align: center;
        }
        
        /* Grey list item */
        .price .grey {
          background-color: #eee!important;
          font-size: 20px;
        }
        
        /* The "Sign Up" button */
        .button {
          background-color: #04AA6D;
          border: none;
          color: white;
          padding: 10px 25px;
          text-align: center;
          text-decoration: none;
          font-size: 18px;
        }
        
        /* Change the width of the three columns to 100%
        (to stack horizontally on small screens) */
        @media only screen and (max-width: 600px) {
          .columns {
            width: 100%;
          }
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <main class="wrapper">
       
        <?php 
        $pageid = 'changepin';
        
        require ADMIN.'includes/sidebar.inc.php' ?>
        
        
        <div class="content-wrapper px-4 py-2">
            <div class="content-header">
                <h1>New Quote</h1>
                <p>
                    Looking to sell faster or get more visibility? Our promotion packages ensure your listings appear at the top for maximum exposure!
                </p>
                <p>
                   <h2> Why Upgrade your Account?</h2>
                    <li>🔹 Higher visibility = More buyers, faster sales!</li>
                    <li>🔹 Stand out from thousands of other listings.</li>
                    <li>🔹 Build trust and credibility with potential buyers.</li>
                    
                    💼 Whether you're selling real estate, cars, gadgets, or services, make sure your listing is seen by the right people
                </p>
            </div>
            <div class="content px-2">
                
                <div class='container mb-5'><hr></div>
                
                
                <div class='container mb-5'>
                    
               
                  <div class='services mb-5' id='services'>
              <h2 class='text-center'>Our Services</h2>
            <div class="columns">
              <ul class="price">
                <li class="header">✨ Silver Package </li>
                <li class="grey">Get Noticed</li>
                <li>Your listing is highlighted and ranks higher than free posts.</li>
                <li>Occasional emails to clients</li>
                <li>Search Engine Optimization</li> 
                <li>Free access to other paid programs and receive additional highlights</li>
                <li class=" " style='background:darkgrey' ><a href="/admin/promote/action?choice=silver" class="btn_info btn btn-block">Try it @KES 150</a></li>
              </ul>
            </div>
               <div class="columns">
              <ul class="price">
                <li class="header">💎 Gold Package</li>
                <li class="grey">Stand out even more</li>
                <li>Your listing gets priority ranking and increased exposure.</li>
                <li>Monthly emails to clients with your products</li>
                <li>Get faster support</li>
                <li>Get highlighted on our social media pages</li> 
                <li class=" " style='background:skyblue'><a href="/admin/promote/action?choice=gold" class="btn_info btn btn-block">Try it @KES 240</a></li>
              </ul>
            </div>
               <div class="columns">
              <ul class="price">
                <li class="header">🌟 Platinum Package</li>
                <li class="grey">Dominate the marketplace!</li>
                <li>Your listing gets top-tier priority with premium placement .</li>
                <li>Weekly emails to clients with your products listed</li>
                <li>Get even faster support</li>
                <li>Highlights on our social media pages</li> 
               
                <li class=" " style='background:orange'><a href="/admin/promote/action?choice=platinum" class="btn_info btn btn-block">Try it @KES 350</a></li>
              </ul>
            </div>
            
        </div>
        
        
        
                </div>
                 
            </div>
        
        
        <br><br>
        <?php require ADMIN. 'includes/footer.inc.php' ?>
        <script> 
            $(function() {  
               
            
               
               $('#newquote').submit(function(e) {
                   e.preventDefault();
                   const data = _data(new FormData(this), 'newquote');
                   if (data['error'] == 'true') {
                       $('.feedback').html(data['msg']);
                       $('.feedback').addClass('alert alert-danger');
                   } else {
                       $('.feedback').html("quote added successfully");
                       $('.feedback').addClass('alert alert-success');
                   }
               });
               
               
            });
        </script>
    
    </main> 
 
</body>

</html>
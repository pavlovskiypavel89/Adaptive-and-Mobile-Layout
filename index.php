<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MQ-Diploma</title>
  <link rel="stylesheet" href="./css/styles.css">
  <!-- Website Favicon -->
  <link rel="icon" type="image/x-icon" href="./images/img/favicon.ico">
  <!-- Apple iOS devices and Google Android Devices -->
  <link rel="apple-touch-icon-precomposed" href="./images/img/basketball-152-184778.png">
</head>
<body>
  <header class="header">
    <?php

// $deal_id = $_REQUEST['FIELDS']['ID'];

postToChat(print_r($_REQUEST, true));


/*$deal_data = executeREST('crm.deal.get', array('ID' => intval($_REQUEST['data']['FIELDS']['ID'])));

postToChat(print_r($deal_data, true));

if (($deal_data['result']['CLOSED'] == 'Y') && ($deal_data['result']['OPPORTUNITY'] > 999999))
    postToChat('О боже! Мы продали на мильён за раз!', array(
        "ID" => 1,
        "BLOCKS" => Array(
            Array("IMAGE" => Array(
                "LINK" => "http://itd0.mycdn.me/image?id=838720761880&t=20&plc=WEB&tkn=*GY_bl00J4lx9APLGwDe4S5xVOc4",
            )),
            Array("LINK" => Array(
                "NAME" => "Мегасделка века",
                "DESC" => "Срочно принести сэйлу бутылочку шапманского!",
                "LINK" => 'https://'.$_REQUEST['auth']['domain'].'/crm/deal/show/'.$deal_data['result']['ID'].'/'
            )),
        )
    ));

function executeREST($method, $params) {

    $queryUrl = 'https://restapi.bitrix24.ru/rest/1/l1tz1xrukigrzvyu/'.$method.'.json';
    $queryData = http_build_query($params);

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_POST => 1,
        CURLOPT_HEADER => 0,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $queryUrl,
        CURLOPT_POSTFIELDS => $queryData,
    ));

    $result = curl_exec($curl);
    curl_close($curl);

    return json_decode($result, true);

}
*/
function postToChat($message, $attach = array()) {

    $queryUrl = 'https://uklubgorod.bitrix24.ru/rest/1/3u1gdzcyqy4qr3ub/im.message.add.json';
    $queryData = http_build_query(
        array(
            "USER_ID" => 1,
            "MESSAGE" => $message,
            "ATTACH" => $attach
        )
    );

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_POST => 1,
        CURLOPT_HEADER => 0,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $queryUrl,
        CURLOPT_POSTFIELDS => $queryData,
    ));

    $result = curl_exec($curl);
    curl_close($curl);

    return json_decode($result, true);

}
	  ?>
    <div class="container">
      <a href="index.html" class="logo-btn-with-text">
        <img src="images/svg/surface_logo_text.svg" class="surface-logo-icon-with-text" alt="Surface logo with text">	
      </a>
      <h1 class="header-offer">Be recruited <span class="header-offer-cta">play college sports</span></h1>
      <ul class="application-btns-group">
        <li class="application-btn application-btn__appstore">
          <a href="https://www.apple.com/ru/ios/app-store/" class="application-btn-link" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" class="appstore-icon" viewBox="0 0 170 170">
              <desc>Download on the App Store</desc>
              <path d="M150.37 130.25c-2.45 5.66-5.35 10.87-8.71 15.66-4.58 6.53-8.33 11.05-11.22 13.56-4.48 4.12-9.28 6.23-14.42 6.35-3.69 0-8.14-1.05-13.32-3.18-5.197-2.12-9.973-3.17-14.34-3.17-4.58 0-9.492 1.05-14.746 3.17-5.262 2.13-9.5 3.24-12.742 3.35-4.93.21-9.842-1.96-14.746-6.52-3.13-2.73-7.045-7.41-11.735-14.04-5.03-7.08-9.168-15.29-12.41-24.65-3.47-10.11-5.21-19.9-5.21-29.378 0-10.857 2.346-20.22 7.045-28.068C27.508 57.03 32.42 52.06 38.57 48.41s12.793-5.51 19.948-5.63c3.915 0 9.05 1.21 15.43 3.59 6.36 2.39 10.446 3.6 12.237 3.6 1.34 0 5.877-1.416 13.57-4.24 7.275-2.617 13.415-3.7 18.445-3.274 13.63 1.1 23.87 6.473 30.68 16.153-12.19 7.385-18.22 17.73-18.1 31 .11 10.338 3.86 18.94 11.23 25.77 3.34 3.17 7.07 5.62 11.22 7.36-.9 2.61-1.85 5.11-2.86 7.51zM119.11 7.24c0 8.102-2.96 15.667-8.86 22.67-7.12 8.323-15.732 13.133-25.07 12.374-.12-.972-.19-1.995-.19-3.07 0-7.778 3.387-16.102 9.4-22.908 3.002-3.446 6.82-6.31 11.45-8.597 4.62-2.253 8.99-3.498 13.1-3.71.12 1.082.17 2.165.17 3.24z"/>
            </svg>
            <div class="application-btn-cta">
              Download on the <span class="application-btn-brand">App Store</span>
            </div>
          </a>
        </li>
        <li class="application-btn application-btn__googleplay">
          <a href="https://play.google.com/store" class="application-btn-link" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" class="googleplay-icon" viewBox="0 0 505.499 505.499">
              <desc>Get it on Google Play</desc>
              <path d="M471.497 234.466l-92.082-53.135-75.733 73.208 69.215 66.907 98.6-56.91c5.43-3.133 8.677-8.756 8.677-15.03 0-6.275-3.245-11.898-8.677-15.04zM363.785 172.3l-101.332-58.497L40.375 0l250.828 242.47M44.063 505.5l218.77-120.512 94.435-54.515-66.065-63.87M25.56 9.815l-.236 489.67L278.72 254.534"/>
            </svg>
            <div class="application-btn-cta">
              Get it on <span class="application-btn-brand">Google Play</span>
            </div>
          </a>		
        </li>
      </ul>
    </div>
  </header>
  <main>
    <section class="advantages-section athlets">
      <h2 class="section-title">Athlets</h2>
      <picture class="advantages-picture">
        <source srcset="images/img/footballer_192.png" media="(max-width: 640px)">
        <source srcset="images/img/footballer_497.png" media="(min-width: 641px) and (max-width: 960px)">
        <source srcset="images/img/footballer_566.png" media="(min-width: 961px)">
        <img src="images/img/footballer_566.png" class="advantages-img" onerror="event.target.style='padding-bottom: 45px;'" alt="Footballer image">	
      </picture>  
      <ol class="section-list advantages">
        <li class="section-item advantage">
          <div class="container">
            <h3 class="advantage-title">Connection</h3>
            <p class="advantage-text">Connect with coaches directly, you can ping coaches to view profile.</p>
          </div>
        </li>
        <li class="section-item advantage">
          <div class="container">
            <h3 class="advantage-title">Collaboration</h3>
            <p class="advantage-text">Work with other student athletes to  increase visability. When you share and like other players videos it will increase your visability as a player. This is the team work aspect to Surface 1.</p>
          </div>
        </li>
        <li class="section-item advantage with-important-info">
          <div class="container">
            <h3 class="advantage-title">Growth</h3>
            <p class="advantage-text">Resources and tools for you to get better as a student Athelte. Access to training classes, tutor sessions, etc</p>
          </div>
        </li>
      </ol>
    </section>
    <section class="advantages-section players">
       <h2 class="section-title">Players</h2>
       <picture class="advantages-picture">
         <source srcset="images/img/basketballer_302.png" media="(max-width: 640px)">
         <source srcset="images/img/basketballer_436.png" media="(min-width: 641px) and (max-width: 960px)">
         <source srcset="images/img/basketballer_991.png" media="(min-width: 961px)">
         <img src="images/img/basketballer_991.png" class="advantages-img" alt="Basketballer image">	
       </picture> 
       <ol class="section-list advantages">
         <li class="section-item advantage">
           <div class="container">
             <h3 class="advantage-title">Connection</h3>
             <p class="advantage-text">Connect with talented athlete directly, you can watch their skills through video showreels directly from Surface 1.</p>
           </div>
         </li>
         <li class="section-item advantage">
           <div class="container">
             <h3 class="advantage-title">Collaboration</h3>
             <p class="advantage-text">Work with recruiter to increase your chances of findingtalented athlete.</p>
           </div>
         </li>
         <li class="section-item advantage with-important-info">            
	   <div class="container">
             <h3 class="advantage-title">Growth</h3>
             <p class="advantage-text">Save your time, recruit proper athlets for your team.</p>
           </div>
         </li>
       </ol>
     </section>
     <section class="actions-section">
       <ol class="section-list previews">
         <li class="section-item preview be__active">
           <picture class="preview-picture">
             <source srcset="./images/img/be-active_640.jpg" media="(max-width: 640px)">
             <source srcset="./images/img/be-active.jpg" media="(min-width: 641px) and (max-width: 768px)">    
             <source srcset="./images/img/be-active_960.jpg" media="(min-width: 769px) and (max-width: 1920px)">
             <source srcset="./images/img/be-active_1024.jpg" media="(min-width: 1921px)">
             <img src="./images/img/be-active_1024.jpg" class="preview-img" onerror="event.target.style='top: 25%; left: 25%; z-index: 10;'" alt="Be active image">
           </picture>
           <div class="container">
             <h3 class="preview-title">Be active</h3>
             <p class="preview-text">Post videos with your skills. Like and follow others to be more popular.</p>
           </div>
         </li>
         <li class="section-item preview find__contact">
           <picture class="preview-picture">
             <source srcset="./images/img/find-contact_640.jpg" media="(max-width: 640px)">
             <source srcset="./images/img/find-contact.jpg" media="(min-width: 641px) and (max-width: 768px)">
             <source srcset="./images/img/find-contact_960.jpg" media="(min-width: 769px) and (max-width: 1920px)">    
             <source srcset="./images/img/find-contact_1024.jpg" media="(min-width: 1921px)">
             <img src="./images/img/find-contact_1024.jpg" onerror="event.target.style='top: 25%; left: 25%; z-index: 10;'" class="preview-img" alt="Find contact image">
           </picture>
           <div class="container">
             <h3 class="preview-title">Find contact</h3>
             <p class="preview-text">Contact others to find right coach or athlete you are looking for.</p>
           </div>
         </li>
         <li class="section-item preview work__it">
           <picture class="preview-picture">
             <source srcset="./images/img/work-it_640.jpg" media="(max-width: 640px)">
             <source srcset="./images/img/work-it.jpg" media="(min-width: 641px) and (max-width: 768px)">
             <source srcset="./images/img/work-it_960.jpg" media="(min-width: 769px) and (max-width: 1920px)">    
             <source srcset="./images/img/work-it_1024.jpg" media="(min-width: 1921px)">
             <img src="./images/img/work-it_1024.jpg" onerror="event.target.style='top: 25%; left: 25%; z-index: 10;'" class="preview-img" alt="Work it image">
           </picture>
           <div class="container">
             <h3 class="preview-title">Work it</h3>
             <p class="preview-text">Enjoy being a student athlete, the recruiting process can be overwhelming, we want to make this enjoyable experience.</p>
           </div>
         </li>
       </ol>
     </section>
   </main>
   <footer class="footer">
     <div class="container">
       <a href="index.html" class="logo-btn">
         <picture>
           <source srcset="images/svg/surface_logo.svg">
    	   <img src="images/img/surface_logo.png" class="surface-logo-icon" alt="Surface logo">	
         </picture>
       </a>
       <p class="footer-offer">
         <span class="footer-offer-cta">Download app</span> show everyone what you can do!
       </p>
       <ul class="application-btns-group">
         <li class="application-btn application-btn__appstore">
           <a href="https://www.apple.com/ru/ios/app-store/" class="application-btn-link" target="_blank">
             <svg xmlns="http://www.w3.org/2000/svg" class="appstore-icon" viewBox="0 0 170 170">
               <desc>Download on the App Store</desc>
               <path d="M150.37 130.25c-2.45 5.66-5.35 10.87-8.71 15.66-4.58 6.53-8.33 11.05-11.22 13.56-4.48 4.12-9.28 6.23-14.42 6.35-3.69 0-8.14-1.05-13.32-3.18-5.197-2.12-9.973-3.17-14.34-3.17-4.58 0-9.492 1.05-14.746 3.17-5.262 2.13-9.5 3.24-12.742 3.35-4.93.21-9.842-1.96-14.746-6.52-3.13-2.73-7.045-7.41-11.735-14.04-5.03-7.08-9.168-15.29-12.41-24.65-3.47-10.11-5.21-19.9-5.21-29.378 0-10.857 2.346-20.22 7.045-28.068C27.508 57.03 32.42 52.06 38.57 48.41s12.793-5.51 19.948-5.63c3.915 0 9.05 1.21 15.43 3.59 6.36 2.39 10.446 3.6 12.237 3.6 1.34 0 5.877-1.416 13.57-4.24 7.275-2.617 13.415-3.7 18.445-3.274 13.63 1.1 23.87 6.473 30.68 16.153-12.19 7.385-18.22 17.73-18.1 31 .11 10.338 3.86 18.94 11.23 25.77 3.34 3.17 7.07 5.62 11.22 7.36-.9 2.61-1.85 5.11-2.86 7.51zM119.11 7.24c0 8.102-2.96 15.667-8.86 22.67-7.12 8.323-15.732 13.133-25.07 12.374-.12-.972-.19-1.995-.19-3.07 0-7.778 3.387-16.102 9.4-22.908 3.002-3.446 6.82-6.31 11.45-8.597 4.62-2.253 8.99-3.498 13.1-3.71.12 1.082.17 2.165.17 3.24z"/>
             </svg>
             <div class="application-btn-cta">
               Download on the <span class="application-btn-brand">App Store</span>
             </div>
           </a>
         </li>
         <li class="application-btn application-btn__googleplay">
           <a href="https://play.google.com/store" class="application-btn-link" target="_blank">
             <svg xmlns="http://www.w3.org/2000/svg" class="googleplay-icon" viewBox="0 0 505.499 505.499">
               <desc>Get it on Google Play</desc>
               <path d="M471.497 234.466l-92.082-53.135-75.733 73.208 69.215 66.907 98.6-56.91c5.43-3.133 8.677-8.756 8.677-15.03 0-6.275-3.245-11.898-8.677-15.04zM363.785 172.3l-101.332-58.497L40.375 0l250.828 242.47M44.063 505.5l218.77-120.512 94.435-54.515-66.065-63.87M25.56 9.815l-.236 489.67L278.72 254.534"/>
             </svg>
             <div class="application-btn-cta">
               Get it on <span class="application-btn-brand">Google Play</span>
             </div>
           </a>		
         </li>
       </ul>
       <a href="index.html" class="logo-btn-with-text">
    	 <img src="images/svg/surface_logo_text.svg" class="surface-logo-icon-with-text" alt="Surface logo with text">	
       </a>
     </div>
   </footer>
</body>
</html>

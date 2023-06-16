<!DOCTYPE html>
<html class="hidemeproxy" lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="canonical" href="https://hide.me/en/proxy">
   <title>The Fastest Free Proxy | hide.me</title>
   <meta name="description" content="Easily access blocked content and websites with our FREE web proxy. Hide your real IP address and encrypt your internet connection to protect your privacy.">
   <link rel="stylesheet" href="themes/v3/main-spec.css">
</head>

<body>

   <div class="hidemeproxy__frame-header">
      <a class="hidemeproxy__logoHolder" href="https://hide.me/proxy">
         Anonymous View by
         <img class="hidemeproxy__logo" src="themes/v3/assets/images/logo.svg" height="30">
      </a>
      <form class="hidemeproxy__form" action="includes/process.php?action=update" target="_top" method="post" onsubmit="return updateLocation(this);">
         <div class="hidemeproxy__form-inputHolder">
            <input type="text" name="u" size="40" value="" class="url-input" onfocus="this.value=''; this.placeholder=''" placeholder="Enter website address">
         </div>         <button class="hidemeproxy__button hidemeproxy__button--secondary">Go</button>
         <a class="hidemeproxy__button hidemeproxy__button--primary hidemeproxy__button--get" target="_blank" rel="noopener" href="https://hide.me/download?proxy">Download Free VPN</a>
      </form>

      <div class="hidemeproxy__cta">
         <p>Get unlimited Free VPN</p>
         <a class="hidemeproxy__button hidemeproxy__button--primary hidemeproxy__button--download" target="_blank" rel="noopener" href="https://hide.me/download?proxy">Download now</a>
      </div>
   </div>

   <div class="hidemeproxy__slideout">
   <h2>Download hide.me VPN</h2>
   <img src="themes/v3/assets/images/graphic.png" height="70" alt="hide.me VPN" />
   <ul>
      <li>Secure all your devices</li>
      <li>No signup required</li>
      <li>No Speed limits</li>
   </ul>
   <a class="hidemeproxy__button hidemeproxy__button--primary" target="_blank" rel="noopener" href="https://hide.me/download?proxy">Get Free VPN</a>
   <button type="button" class="hidemeproxy__slideout-handle"><span class="visually-hidden">Show/hide</span></button>
</div></div>

<span class="hidemeproxy__frame"></span>
<script>
   var handle = document.querySelector('.hidemeproxy__slideout-handle');
   var slideout = document.querySelector('.hidemeproxy__slideout');

   handle.addEventListener('click', function(e){
      let isHidden = slideout.classList.contains('is-hidden');
      if(!isHidden) {
         slideout.classList.add('is-hidden')
         document.cookie = 'slideout_hidden=true';
      } else {
         slideout.classList.remove('is-hidden');
         document.cookie = 'slideout_hidden=';
      }
      
      e.preventDefault();
   });
</script>

<div class="hidemeproxy__content">
   
   <div class="hidemeproxy-error"> <div class="hidemeproxy-error__col"> <img class="hidemeproxy-error__image" src="themes/v3/assets/images/error.png"> </div><div class="hidemeproxy-error__col"> <div class="hidemeproxy-error__caption"> <h2>Oops!</h2> <h3>Something is wrong</h3> <p>The requested resource could not be loaded.</p></div><hr> <div class="hidemeproxy-error__caption"> <p>Meanwhile, why don't check out our free VPN? <a href="https://hide.me/en/proxy/vpn-vs-proxy">Click here</a> to learn the differences between a VPN and a proxy.</p></div></div></div>
</div>

</body>
</html>
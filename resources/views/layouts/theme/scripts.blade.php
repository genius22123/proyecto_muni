<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.3.0/lightgallery.min.js" integrity="sha512-+1CyleTPoFvPO15/CfBZ5h6k/mu/qCQe9uxq1tEfO7SRJ52MnCAQ561bAYkvrsGtnG7AkcvKtVwdeoZc8ps7bQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.3.0/plugins/thumbnail/lg-thumbnail.min.js" integrity="sha512-vqSdeetXQGiX1vqQZ+/7J+M1y0JoizcnyVSj0BZ2kZVwmSTFCWxb7QPnILROd/SWUoTrq76XlzvOJFPn49oSlA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- MDB -->
<script>
    let listVideo=document.querySelectorAll('#vid');
    let mainVideo=document.querySelector('#main-video iframe');
    let title=document.querySelector('#title');
    let contenido = document.querySelector("#src").value;

    listVideo.forEach(video=>{
      video.onclick=()=>{
        listVideo.forEach(vid =>vid.classList.remove('active'));
        video.classList.add('active');
        if(  video.classList.contains('active')){
          let src=video.children[0].getAttribute('value');
          mainVideo.src=src;
              
        }
      };
    });
</script>

<script>
    
(function() {
    
  
    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
      el = el.trim()
      if (all) {
        return [...document.querySelectorAll(el)]
      } else {
        return document.querySelector(el)
      }
    }
  
    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
      let selectEl = select(el, all)
      if (selectEl) {
        if (all) {
          selectEl.forEach(e => e.addEventListener(type, listener))
        } else {
          selectEl.addEventListener(type, listener)
        }
      }
    }
  
    /**
     * Easy on scroll event listener 
     */
    const onscroll = (el, listener) => {
      el.addEventListener('scroll', listener)
    }
  
    let navbarlinks = select('#navbar .scrollto', true)
    const navbarlinksActive = () => {
      let position = window.scrollY + 200
      navbarlinks.forEach(navbarlink => {
        if (!navbarlink.hash) return
        let section = select(navbarlink.hash)
        if (!section) return
        if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
          navbarlink.classList.add('active')
        } else {
          navbarlink.classList.remove('active')
        }
      })
    }
    window.addEventListener('load', navbarlinksActive)
    onscroll(document, navbarlinksActive)
  
    /**
     * Scrolls to an element with header offset
     */
    const scrollto = (el) => {
      let header = select('#header')
      let offset = header.offsetHeight
  
      let elementPos = select(el).offsetTop
      window.scrollTo({
        top: elementPos - offset,
        behavior: 'smooth'
      })
    }
    
  
  
  
  
    /**
     * Mobile nav toggle
     */
    on('click', '.mobile-nav-toggle', function(e) {
      select('#navbar').classList.toggle('navbar-mobile')
      this.classList.toggle('bi-list')
      this.classList.toggle('bi-x')
    })
  
    /**
     * Mobile nav dropdowns activate
     */
    on('click', '.navbar .dropdown > a', function(e) {
      if (select('#navbar').classList.contains('navbar-mobile')) {
        e.preventDefault()
        this.nextElementSibling.classList.toggle('dropdown-active')
      }
    }, true)
  
  
 /**
   * Preloader
   */
  let preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }
  
  
  })()
</script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
<script>
    var swiper = new Swiper("#baner", {
      pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
      },
      navigation: {
        nextEl: ".button-prev",
        prevEl: ".button-next",
      },
    });
  
</script>
<script type="text/javascript">

  /**
   * Initiate portfolio lightbox 
   */
   const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });
</script>
<script>
  var swiper = new Swiper("#mini-slider", {
    slidesPerView: 1,
    spaceBetween: 10,
   
    breakpoints: {
     
      574: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
     
      990: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
    },
  });
</script>
<script>
  var swiper = new Swiper("#slider-comunicados", {
    autoHeight: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  new Swiper('.clients-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 60
      },
      640: {
        slidesPerView: 3,
        spaceBetween: 80
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 60
      }
    }
  });
</script>
<script>
  lightGallery(document.getElementById('relative-caption'), {
    subHtmlSelectorRelative: true,
});

</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v12.0" nonce="7Gmsq4Sx"></script>
 <script>
   //Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 400 ||
    document.documentElement.scrollTop > 400
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
 </script>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"
  rel="stylesheet"
/>
    <title>CRM - Company Name</title>
  </head>
  <body>
    <div id="full-screen-example" class="sidenav bg-light sidenav-dark" data-color="dark" data-mode="side" data-hidden="false" data-scroll-container="#scrollContainer" style="width: 240px; height: 100vh; position: fixed; transition: all 0.3s linear 0s; transform: translateX(0%);">
      <div class="mt-4">
        <div id="header-content" class="pl-3">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(23).jpg" alt="avatar" class="rounded-circle img-fluid mb-3" style="max-width: 50px;">

          <h4>
            <span style="white-space: nowrap;">Ann Smith</span>
          </h4>
          <p>ann_s@mdbootstrap.com</p>
        </div>
        <hr class="mb-0">
      </div>
      <div id="scrollContainer" class="ps ps--active-y" style="max-height: calc(100% - 245px); position: relative;">
        <ul class="sidenav-menu">
          <li class="sidenav-item">
            <a class="sidenav-link ripple-surface" href="/" tabindex="1"> <i class="fas fa-envelope pr-3"></i>Inbox</a>
          </li>
          <li class="sidenav-item">
            <a class="sidenav-link ripple-surface" tabindex="1"> <i class="fas fa-paper-plane pr-3"></i>Outbox</a>
          </li>
          <li class="sidenav-item">
            <a class="sidenav-link active ripple-surface collapsed ripple-surface-dark" data-toggle="collapse" href="#sidenav-collapse-1-0-0" role="button" aria-expanded="false" tabindex="1"> <i class="fas fa-address-book pr-3"></i>Contacts<i class="fas fa-angle-down rotate-icon" style="transform: rotate(0deg);"></i></a>
            <ul class="sidenav-collapse collapse" id="sidenav-collapse-1-0-0" style="">
              <li class="sidenav-item">
                <a class="sidenav-link ripple-surface" tabindex="1">Family</a>
              </li>
              <li class="sidenav-item">
                <a class="sidenav-link active ripple-surface" href="/previews/mdb-ui-kit/sidenav/2.html" tabindex="1">Friends</a>
              </li>
              <li class="sidenav-item">
                <a class="sidenav-link ripple-surface" tabindex="1">Work</a>
              </li>
            </ul>
          </li>
          <li class="sidenav-item">
            <a class="sidenav-link ripple-surface" tabindex="1"> <i class="fas fa-file pr-3"></i>Drafts</a>
          </li>
          <li class="sidenav-item">
            <a class="sidenav-link ripple-surface" tabindex="1"> <i class="fas fa-heart pr-3"></i>Favourites</a>
          </li>
          <li class="sidenav-item">
            <a class="sidenav-link ripple-surface" tabindex="1"> <i class="fas fa-star pr-3"></i>Starred</a>
          </li>
          <li class="sidenav-item">
            <a class="sidenav-link ripple-surface" tabindex="1"> <i class="fas fa-trash pr-3"></i>Trash</a>
          </li>
          <li class="sidenav-item">
            <a class="sidenav-link ripple-surface" tabindex="1"> <i class="fas fa-ban pr-3"></i>Spam</a>
          </li>
          <li class="sidenav-item">
            <a class="sidenav-link ripple-surface" data-toggle="collapse" href="#sidenav-collapse-1-0-1" role="button" tabindex="1"><i class="fas fa-tag pr-3"></i>Categories<i class="fas fa-angle-down rotate-icon"></i></a>
            <ul class="sidenav-collapse collapse" id="sidenav-collapse-1-0-1">
              <li class="sidenav-item">
                <a class="sidenav-link ripple-surface" tabindex="1">Social</a>
              </li>
              <li class="sidenav-item">
                <a class="sidenav-link ripple-surface" tabindex="1">Notifications</a>
              </li>
              <li class="sidenav-item">
                <a class="sidenav-link ripple-surface" tabindex="1">Recent</a>
              </li>
              <li class="sidenav-item">
                <a class="sidenav-link ripple-surface" tabindex="1">Uploads</a>
              </li>
              <li class="sidenav-item">
                <a class="sidenav-link ripple-surface" tabindex="1">Backups</a>
              </li>
              <li class="sidenav-item">
                <a class="sidenav-link ripple-surface" tabindex="1">Offers</a>
              </li>
            </ul>
          </li>
          <li class="sidenav-item">
            <a class="sidenav-link ripple-surface" tabindex="1"> <i class="fas fa-sticky-note pr-3"></i>Notes</a>
          </li>
          <li class="sidenav-item">
            <a class="sidenav-link ripple-surface" tabindex="1"> <i class="fas fa-user-circle pr-3"></i>Personal</a>
          </li>
          <li class="sidenav-item">
            <a class="sidenav-link ripple-surface" tabindex="1"> <i class="fas fa-ellipsis-h pr-3"></i>More</a>
          </li>
        </ul>
        <hr class="m-0">
        <ul class="sidenav-menu">
          <li class="sidenav-item">
            <a class="sidenav-link ripple-surface" tabindex="1"> <i class="fas fa-cogs pr-3"></i>Settings</a>
          </li>
          <li class="sidenav-item">
            <a class="sidenav-link ripple-surface" tabindex="1"> <i class="fas fa-user pr-3"></i>Profile</a>
          </li>
          <li class="sidenav-item">
            <a class="sidenav-link ripple-surface" tabindex="1"> <i class="fas fa-shield-alt pr-3"></i>Privacy</a>
          </li>
          <li class="sidenav-item">
            <a class="sidenav-link ripple-surface" tabindex="1"> <i class="fas fa-user-astronaut pr-3"></i>Log out</a>
          </li>
        </ul>
      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 380px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 187px;"></div></div></div>
      <div class="text-center" style="height: 100px;">
        <hr class="mb-4 mt-0">
        <p>MDBootstrap.com</p>
      </div>
    </div>

    <div class="mdb-page-content text-center page-intro bg-light">
      <div class="text-center py-5">
        <h3 class="my-5">Resize to change the mode</h3>
        <div>
          <img class="rounded" src="https://mdbootstrap.com/img/Photos/Others/img%20(53).jpg">
        </div>
        <button id="toggler" class="btn btn-dark mt-5 ripple-surface" data-toggle="sidenav" data-target="#full-screen-example" aria-expanded="true">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </div>

    <!-- PRISM -->
    <script type="text/javascript" src="dev/js/new-prism.js"></script>
    <!-- MDB SNIPPET -->
    <script type="text/javascript" src="dev/js/dist/mdbsnippet.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <!-- Custom scripts -->
    <script type="text/javascript">
      const sidenav = document.getElementById('full-screen-example');
      const instance = mdb.Sidenav.getInstance(sidenav);

      let innerWidth = null;

      const setMode = (e) => {
        // Check necessary for Android devices
        if (window.innerWidth === innerWidth) {
          return;
        }

        innerWidth = window.innerWidth;

        if (window.innerWidth < 660) {
          instance.changeMode('over');
          instance.hide();
        } else {
          instance.changeMode('side');
          instance.show();
        }
      };

      setMode();

      // Event listeners

      window.addEventListener('resize', setMode);
    </script>
  

</body>
</html>
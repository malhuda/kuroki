<!-- Dash Navbar Left 
    Available versions: dnl-visible, dnl-hidden -->
    <div class="dash-navbar-left dnl-visible">
      <p class="dnl-nav-title"><?php echo $_SESSION['FULLNAME']; ?></p>
      <ul class="dnl-nav">

        <li class="<?php echo $class_s_bookmark; ?>">
          <a href="/dashboard/bookmark">
            <span class="material-icons dnl-link-icon">&#xE866;</span>
            <span class="dnl-link-text">Bookmark</span>
            
          </a>
        </li>
       
        <li>
          <a href="/logout">
            
            <span class="material-icons dnl-link-icon">&#xE8AC;</span>
            <span class="dnl-link-text">Logout</span>
            
          </a>
        </li>

        
      </ul>
      <p class="dnl-nav-title">Visual Novel</p>
      <ul class="dnl-nav">
        <li class="<?php if(isset($class_s_rfinder)){echo $class_s_rfinder;} ?>">
          <a href="/dashboard/source/walkthrough">
            <span class="material-icons dnl-link-icon">&#xE52E;</span>
            <span class="dnl-link-text">Walkthrough </span>
          </a>
        </li>
        <li class="<?php if(isset($class_s_1)){echo $class_s_1;} ?>">
          <a href="/dashboard/source/hgame">
            <span class="material-icons dnl-link-icon">&#xE021;</span>
            <span class="dnl-link-text">H-Game 123</span>
          </a>
        </li>
        <li class="<?php if(isset($class_s_2)){echo $class_s_2;} ?>">
          <a href="/dashboard/source/moonkaini">
            <span class="material-icons dnl-link-icon">&#xE021;</span>
            <span class="dnl-link-text">Moonkaini Rhapsody</span>
          </a>
        </li>
        <li class="<?php if(isset($class_s_3)){echo $class_s_3;} ?>">
          <a href="/dashboard/source/girlcelly">
            <span class="material-icons dnl-link-icon">&#xE021;</span>
            <span class="dnl-link-text">Girlcelly</span>
          </a>
        </li>

      
        
       
      </ul>
      <p class="dnl-nav-title">Manga</p>
      <ul class="dnl-nav">
       
        <li>
          <a href="#">
            <span class="material-icons dnl-link-icon">&#xE54B;</span>
            <span class="dnl-link-text">nhentai</span>
          </a>
        </li>
      </ul>
            <p class="dnl-nav-title">OST</p>
      <ul class="dnl-nav">
        <li class="<?php if(isset($class_s_4)){echo $class_s_4;} ?>">
          <a href="/dashboard/source/hikarinoakari">
            <span class="material-icons dnl-link-icon">&#xE030;</span>
            <span class="dnl-link-text">HikarinoAkariOST</span>
          </a>
        </li>
      </ul>
         </div> <!-- /.dash-navbar-left -->

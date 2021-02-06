<nav id="navbar" class="flex  items-center justify-between flex-wrap bg-black p-6">
  <ddiv class="container mx-auto clearfix">
    <div class="float-left w-1/2">
      <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
      <div class="float-left text-white font-semibold text-xl tracking-tight pt-1">ARTTECHZ</div>
    </div>
    <div class="md:float-left md:w-1/2 lg:float-right lg:w-1/2 hidden sm:hidden md:block">
      <div class="text-sm md:float-left lg:float-right pt-3">
        <?php renderMenu('primary'); ?>
      </div>
    </div>

    <span id="side-nav-open" style="font-size:30px;cursor:pointer" class="text-white float-right md:hidden">&#9776;</span>
  </div>
</nav>

<div id="mySidenav" class="sidenav">
    <a id="side-nav-close" href="javascript:void(0)" class="closebtn"
      >&times;</a
    >
    <?php renderMenu('primary'); ?>
</div>



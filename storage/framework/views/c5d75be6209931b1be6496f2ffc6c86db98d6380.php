<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">easy Learning</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(url('/')); ?>">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('/create')); ?>">Add Student Data </a>
      </li>
      

      <!-- Dropdown -->
      
    </ul>
    <!-- Links -->

    
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar--><?php /**PATH C:\xampp\htdocs\Laravel 6 CRUD\lcrud\lblogpp\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>
<ul class="nav nav-pills nav-fill" id="navbar">
  <li class="nav-item">
    <a class="nav-link" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="lab.php">GCI Lab</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="research.php">Research</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="publications.php">Publications</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="courses.php">Teaching Courses</a>
  </li>
  
</ul>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    let currentPage = window.location.pathname.split("/").pop(); // Get the current page filename
    let links = document.querySelectorAll("#navbar .nav-link");

    links.forEach(link => {
      if (link.getAttribute("href") === currentPage) {
        link.classList.add("active");
      }
    });
  });
</script>
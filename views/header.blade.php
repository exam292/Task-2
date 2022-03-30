<!-- Navigation Bar -->

<nav class="navbar shadow navbar-expand-lg bg-dark navbar-dark text-light">
  <div class="container">
    <a class="navbar-brand" href="#"><strong>GibJohn Tutoring</strong></a>

    </button>
    <div class="navbar" id="navbarSupportedContent">
      
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link @if($page=="home") active @endif" href="homepage.php">Home <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 18 18">
            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
            </svg></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link @if($page=="dashboard")active @endif @if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) disabled @endif" href="index.php">Dashboard <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 18 18">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false) disabled @endif" href="logout.php">Logout <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 18 18">
            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
            </svg></a>
          </li>
        </ul>

    </div>
  </div>
</nav>

<!-- Navigation Bar -->


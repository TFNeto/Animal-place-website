<nav>
  <ul class="mu">
    <li class="menu"><a href="home.php">Home</a></li>
    <li class="menu"><a href="animals.php">Animals</a></li>
    <li class="menu"><a href="contacts.php">Contacts</a></li>
    <li class="menu"><a href="search.php">Search</a></li>
    <li class="menu"><a href="about.php">About Us</a></li>
    <?php if ($isLoggedIn) :?>
      <li class="menu"><a href="myadoption.php">My Adoption</a></li>
      <?php if ($isAdmin) :?>
        <li class="menu"><a href="admin.php">Admin</a></li>
      <?php endif; ?>
      <li class="log">
        <p><?php echo "Welcome, $username $adminStr" ?></p>
        <form action='<?=$BASE_URL?>actions/users/logout.php' method="post">
          <button type="submit" name="out">Logout</button>
        </form>
      </li>
    <?php else: ?>
      <li class="log">
        <form id="signin">
          <label class="Username" for="u">Username:</label>
          <input required type="text" name="u" id="username" placeholder="Username"/>
          <label class="Password" for="pw">Password:</label>
          <input required type="password" name="pw" id="password" placeholder="Password"/>
          <button type="submit" name="login">Sign In</button>
        </form>
      </li>
    <?php endif; ?>
  </ul>
</nav>
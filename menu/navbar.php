<nav>
  <ul class="mu">
    <li class="menu"><a href="<?=$BASE_URL?>/pages/animals/home.php">Home</a></li>
    <li class="menu"><a href="<?=$BASE_URL?>/pages/animals/animals.php">Animals</a></li>
    <li class="menu"><a href="<?=$BASE_URL?>/pages/animals/contacts.php">Contacts</a></li>
    <li class="menu"><a href="<?=$BASE_URL?>/pages/animals/search.php">Search</a></li>
    <li class="menu"><a href="<?=$BASE_URL?>/pages/animals/about.php">About Us</a></li>
    <?php if ($isLoggedIn) :?>
      <li class="menu"><a href="<?=$BASE_URL?>/pages/users/myadoption.php">My Adoption</a></li>
      <?php if ($isAdmin) :?>
        <li class="menu"><a href="<?=$BASE_URL?>/pages/users/admin.php">Admin</a></li>
      <?php endif; ?>
      <li class="log">
        <p class="welcometext"><?php echo "Welcome, $username $adminStr" ?></p>
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
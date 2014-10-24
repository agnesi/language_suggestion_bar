<?php if (isset($text)) : ?>
  <div class="custom-bar">
    <p class="text">
      <?php print $text; ?>
    </p>
    <ul>
      <li>
        <?php print $yes_link; ?>
      </li>
      <li>
        <?php print $no_link; ?>
      </li>
    </ul>
  </div>
<?php endif; ?>

<?php
  # タグの自動挿入を防止
  remove_filter ( 'the_content', 'wpautop' );
  remove_filter ( 'the_excerpt', 'wpautop' );
?>
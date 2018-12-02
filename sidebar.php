    <aside>
      <div id="sidebar">
        <?php $page = get_post(5);?>
        <h1><?php echo $page -> post_title;?></h1>
        <?php echo $page -> post_content; ?>
      </div>
    </aside>
<!--
Front Page Sidebar 3: Client descrtiptions

Page: 3. Full Width Bottom Sidebar
-->

<div id="front-sidebar-3">
  <?php dynamic_sidebar('front-sidebar-3'); ?>
  <?php $id = 84; $p = get_page($id); echo apply_filters('the_content', $p->post_content); ?>
</div>

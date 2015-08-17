<!--
Front Page Sidebar 1: Site Description next to slider
-->

<div id="front-sidebar-2">
  <?php dynamic_sidebar('front-sidebar-2'); ?>
  <?php $id = 73; $p = get_page($id); echo apply_filters('the_content', $p->post_content); ?>
</div>

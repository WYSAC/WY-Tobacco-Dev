<!--
Front Page Sidebar 1: Site Description next to slider

Page: 1. Top Description Sidebar
-->

<div id="front-sidebar-1">
  <?php dynamic_sidebar('front-sidebar-1'); ?>
  <?php $id = 82; $p = get_page($id); echo apply_filters('the_content', $p->post_content); ?>
</div>

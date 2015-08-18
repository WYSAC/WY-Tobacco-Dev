<!--
Front Page Sidebar 2: 3-col middle sidebar

Page: 2. 3-Col Sidebar
-->

<div id="front-sidebar-2">
  <?php dynamic_sidebar('front-sidebar-2'); ?>
  <?php $id = 73; $p = get_page($id); echo apply_filters('the_content', $p->post_content); ?>
</div>

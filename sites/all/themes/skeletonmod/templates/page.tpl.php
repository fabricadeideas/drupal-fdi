<div id="wrap">
    <div class="container">
        
        <header class="sixteen columns clearfix">
    
                <?php if ($logo): ?>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                  </a>
                <?php endif; ?>
                
                <?php if ($site_name): ?>
                <div<?php if ($hide_site_name) { print ' class="element-invisible"'; } ?>>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
                </div>
                <?php endif; ?>
                
                <?php if ($site_slogan): ?>
                <h2 id="site-slogan"<?php if ($hide_site_slogan) { print ' class="element-invisible"'; } ?>>
                <?php print $site_slogan; ?>
                </h2>
                <?php endif; ?>

        </header>

        <div class="clear"></div>

        <?php if ($page['navigation']): ?>
            <nav class="clearfix">
                <?php print render($page['navigation']); ?>
            </nav>
            <div class="clear"></div>
        <?php endif; ?>
        
        <?php if ($page['sidebar']) { ?>
        <div id="content" class="eleven columns">
        <?php } else { ?>
        <div id="content" class="sixteen columns clearfix">
        <?php } ?>
        
            <?php if ($messages): ?>
                <div id="messages">
                  <?php print $messages; ?>
                </div>
            <?php endif; ?>
            
                
                <?php print render($title_prefix); ?>
                
                <?php if (($title) && !($is_front)): ?>
                <h1 class="title" id="page-title">
                  <?php print $title; ?>
                </h1>
                <?php endif; ?>
                
                <?php print render($title_suffix); ?>
                
                <?php if ($tabs): ?>
                <div class="tabs">
                  <?php print render($tabs); ?>
                </div>
                <?php endif; ?>
                
                <?php print render($page['help']); ?>
                
                <?php if ($action_links): ?>
                <ul class="action-links">
                  <?php print render($action_links); ?>
                </ul>
                <?php endif; ?>
                
                <?php print render($page['content']); ?>
                
        
        </div>
        
        <?php if ($page['sidebar']): ?>
            <aside class="five columns">
                <?php print render($page['sidebar']); ?>
            </aside>
        <?php endif; ?>
        
        <div class="clear"></div>
        
        <?php if ($page['featured_left'] || $page['featured_right']): ?>
            <section id="featured" class="sixteen columns clearfix">
            
                <?php if ($page['featured_left'] && $page['featured_right']) { ?>
                    <div id="left" class="one_half">
                    <?php print render($page['featured_left']); ?>
                    </div>
            
                    <div id="right" class="one_half last">
                    <?php print render($page['featured_right']); ?>
                    </div>
                <?php } else { ?>
                
                    <?php print render($page['featured_left']); ?>
                    <?php print render($page['featured_right']); ?>
            
                <?php } ?>
            
            </section>
            <div class="clear"></div>
        <?php endif; ?>
        
        <?php if (($page['footer']) || ($page['footer_first']) || ($page['footer_second']) || ($page['footer_third'])): ?>
        <footer class="sixteen columns clearfix">
        
            <?php if ($page['footer_first']): ?>
                <div class="one_third">
                    <?php print render($page['footer_first']); ?>
                </div>
            <?php endif; ?>
            
            <?php if ($page['footer_second']): ?>
                <div id="first" class="one_third">
                    <?php print render($page['footer_second']); ?>
                </div>
            <?php endif; ?>
            
            <?php if ($page['footer_third']): ?>
                <div id="second" class="one_third last">
                    <?php print render($page['footer_third']); ?>
            </div>
            <?php endif; ?>
            
            <?php if ($page['footer']): ?> 
                <div id="third" class="clear"></div>
                <?php print render($page['footer']);?> 
            <?php endif; ?>
            
        </footer>
        <?php endif; ?>
    </div>
</div>
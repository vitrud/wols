<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
        <?php print render($title_prefix); ?>
        <?php if (!$page): ?>
                <h2<?php print $title_attributes; ?> class="node_title">
                        <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
                </h2>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if($display_submitted || !empty($content['field_tags'])): ?>
                <div class="meta_wrapper">
                        <?php if ($display_submitted): ?>
                                <span class="meta" role="contentinfo">
                                        <?php print $submitted; ?>
                                </span>
                        <?php endif; ?>
                        <?php if (!empty($content['field_tags'])): ?>
                                <?php print render($content['field_tags']);  ?>
                        <?php endif; ?>
                </div>
        <?php endif; ?>
        <article <?php print $content_attributes; ?>>
                <?php
                        hide($content['comments']);
                        hide($content['links']);
                        hide($content['field_tags']);
                        print render($content);
                ?>
        </article>
        <div>
                <?php print render($content['links']); ?>
        </div>
        <?php if ($content['comments'] && $page): ?>
                <section class="comments">      
                        <?php print render($content['comments']); ?>
                </section>
        <?php endif; ?>
</div>
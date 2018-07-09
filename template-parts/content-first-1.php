<?php if(wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()))){$Imagesurl=wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));}else{$Imagesurl="";}if(get_option("mdx_post_def_img")=="false" && $Imagesurl == ""){?>
    <div class="mdui-card postDiv mdui-center mdui-hoverable">
    <div class="mdui-card-actions">
        <a href="<?php the_permalink();?>" class="mdui-text-color-theme-accent ainList"><h1><?php the_title();?></h1></a>
        <?php if(get_option("mdx_echo_post_sum")=="true"){ ?><p class="ct1-p mdui-text-color-black cont2"><?php if(post_password_required()){_e('这篇文章受密码保护，输入密码才能看哦', 'mdx');}else{$summ = mdx_get_post_excerpt($post, 250);if($summ !== ""){echo $summ;}else{_e("这篇文章没有摘要");}}?><p><?php }?>
        <div class="mdui-divider underline"></div>
        <?php
        $mdx_more_1 = get_option("mdx_post_list_1");
        $mdx_more_2 = get_option("mdx_post_list_2");
        if($mdx_more_1=='view'){
            $mdx_icon_1 = '&#xe417;';
        }else if($mdx_more_1=='time'){
            $mdx_icon_1 = '&#xe192;';
        }else if($mdx_more_1=='comments'){
            $mdx_icon_1 = '&#xe0cb;';
        }
        if($mdx_more_2=='view'){
            $mdx_icon_2 = '&#xe417;';
        }else if($mdx_more_2=='time'){
            $mdx_icon_2 = '&#xe192;';
        }else if($mdx_more_2=='comments'){
            $mdx_icon_2 = '&#xe0cb;';
        }
        ?>
        <span class="info">&nbsp;&nbsp;<i class="mdui-icon material-icons info-icon"><?php echo $mdx_icon_1;?></i> <?php if($mdx_more_1=='view'){get_post_views($post->ID);}else if($mdx_more_1=='comments'){comments_popup_link('0', '0', '%');}else if($mdx_more_1=='time'){the_time('Y-m-d');}?>&nbsp;&nbsp;<i class="mdui-icon material-icons info-icon"><?php echo $mdx_icon_2;?></i> <?php if($mdx_more_2=='view'){get_post_views($post->ID);}else if($mdx_more_2=='comments'){comments_popup_link('0', '0', '%');}else if($mdx_more_2=='time'){the_time('Y-m-d');}?></span>
        <a class="mdui-btn mdui-ripple mdui-ripple-white coun-read mdui-text-color-theme-accent" href="<?php the_permalink();?>"><?php echo get_option("mdx_readmore");?></a>
    </div>
</div>
<?php }else{if($Imagesurl == ""){$Imagesurl=get_template_directory_uri().'/img/dpic.jpg';}?>
<div class="mdui-card postDiv mdui-center mdui-hoverable">
    <div class="mdui-card-media">
        <?php if(get_option('mdx_post_list_img_height') === "auto"){?>
        <img src="<?php echo "$Imagesurl"?>" alt="<?php echo "$Imagesurl"?>" title="<?php the_title();?>">
        <?php }else{?>
        <div class="post_list_t_img  mdui-color-theme" style="background-image:url(<?php echo "$Imagesurl"?>);" title="<?php the_title();?>"></div>
        <?php }?>
        <div class="mdui-card-media-covered ct1">
            <div class="mdui-card-primary">
                <a href="<?php the_permalink();?>"><div class="mdui-card-primary-title"><?php the_title();?></div></a>
                <?php if(get_option("mdx_echo_post_sum")=="true"){ ?><div class="mdui-card-primary-subtitle"><?php if(post_password_required()){_e('这篇文章受密码保护，输入密码才能看哦', 'mdx');}else{$summ = mdx_get_post_excerpt($post, 120);if($summ !== ""){echo $summ;}else{_e("这篇文章没有摘要");}}?></div><?php }?>
            </div>
        </div>
    </div>
    <div class="mdui-card-actions">
        <?php
        $mdx_more_1 = get_option("mdx_post_list_1");
        $mdx_more_2 = get_option("mdx_post_list_2");
        if($mdx_more_1=='view'){
            $mdx_icon_1 = '&#xe417;';
        }else if($mdx_more_1=='time'){
            $mdx_icon_1 = '&#xe192;';
        }else if($mdx_more_1=='comments'){
            $mdx_icon_1 = '&#xe0cb;';
        }
        if($mdx_more_2=='view'){
            $mdx_icon_2 = '&#xe417;';
        }else if($mdx_more_2=='time'){
            $mdx_icon_2 = '&#xe192;';
        }else if($mdx_more_2=='comments'){
            $mdx_icon_2 = '&#xe0cb;';
        }
        ?>
        <span class="info">&nbsp;&nbsp;<i class="mdui-icon material-icons info-icon"><?php echo $mdx_icon_1;?></i> <?php if($mdx_more_1=='view'){get_post_views($post->ID);}else if($mdx_more_1=='comments'){comments_popup_link('0', '0', '%');}else if($mdx_more_1=='time'){the_time('Y-m-d');}?>&nbsp;&nbsp;<i class="mdui-icon material-icons info-icon"><?php echo $mdx_icon_2;?></i> <?php if($mdx_more_2=='view'){get_post_views($post->ID);}else if($mdx_more_2=='comments'){comments_popup_link('0', '0', '%');}else if($mdx_more_2=='time'){the_time('Y-m-d');}?></span>
        <a class="mdui-btn mdui-ripple mdui-ripple-white coun-read mdui-text-color-theme-accent" href="<?php the_permalink();?>"><?php echo get_option("mdx_readmore");?></a>
    </div>
</div>
<?php }?>
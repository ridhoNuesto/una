<div class="bx-dev-menu-main">
    <div class="bx-dev-mm-cnt">
        <ul class="bx-menu-ver">        
            <?php if(is_array($a['bx_repeat:menu_items'])) for($i=0; $i<count($a['bx_repeat:menu_items']); $i++){ ?>
                <li class="bx-def-round-corners bx-def-margin-sec-bottom <?php echo $a['bx_repeat:menu_items'][$i]['class_add'];?>">
                    <a href="<?php echo $a['bx_repeat:menu_items'][$i]['link'];?>" target="<?php echo $a['bx_repeat:menu_items'][$i]['target'];?>" onclick="<?php echo $a['bx_repeat:menu_items'][$i]['onclick'];?>" title="<?php echo $a['bx_repeat:menu_items'][$i]['title'];?>">
                        <div class="bx-dev-mm-item">
                            <?php if($a['bx_repeat:menu_items'][$i]['bx_if:icon']['condition']){ ?>
                            	<img src="http://localhost/una/modules/boonex/developer/template/images/icons/mi-empty.png" />
                            	<i class="sys-icon <?php echo $a['bx_repeat:menu_items'][$i]['bx_if:icon']['content']['icon'];?> bx-def-margin-sec-right"></i>
                            <?php } ?>
                            <?php if($a['bx_repeat:menu_items'][$i]['bx_if:image']['condition']){ ?><img src="<?php echo $a['bx_repeat:menu_items'][$i]['bx_if:image']['content']['icon_url'];?>" /><?php } ?>
                        </div>
                    </a>
                </li>
            <?php } else if(is_string($a['bx_repeat:menu_items'])) echo $a['bx_repeat:menu_items']; ?>
            <div class="bx-clear"></div>
        </ul>
    </div>
</div>
<script language="javascript">
    $(document).ready(function () {
        $('.bx-menu-ver > li.bx-menu-tab-active').not('.bx-def-color-bg-active').addClass('bx-def-color-bg-active');
    });
</script>
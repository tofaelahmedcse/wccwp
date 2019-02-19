<?php /*Css is in organism.scss*/
$post_type = ucwords(get_post_type());
?>
<div class="sharing-is-caring clearfix">
  <div class="row">
    <div class="col-12">
      <h4 class="mb-4 text-center">Share Our <?php echo $post_type; ?></h4>
    </div>
  </div>
    <ul class="share-btns row justify-content-center">
        <li class="facebook col-6 col-md-4 col-xl-2">
            <button class="popup share-btn" onclick="PopupCenter('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink()?>','<?php the_title(); ?>','450','450');"><i class="fab fa-facebook-square"></i><span>Facebook</span></button>
        </li>
        <li class="twitter col-6 col-md-4 col-xl-2">
            <button class="popup share-btn" onclick="PopupCenter('http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink()?>','<?php the_title(); ?>','450','450');"><i class="fab fa-twitter"></i><span>Twitter</span></button>
        </li>
        <li class="linkden col-6 col-md-4 col-xl-2">
            <button class="popup share-btn" onclick="PopupCenter('https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink()?>&title=<?php the_title(); ?>&summary='+decodeURIComponent('<?php echo urlencode($str); ?>')+'&source=Broder%20Homes','<?php the_title(); ?>','650','650');"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></button>
        </li>
        <li class="email col-6 col-md-4 col-xl-2">
            <a href="mailto:?subject=<?php the_title(); ?> by Broder Homes&body=Take a look at this house on the Broder Homes Website: <?php the_permalink(); ?>" title="Share by Email">
                <button class="popup share-btn"><i class="fas fa-envelope"></i><span>Email</span></button>
            </a>
        </li>
        <li class="copy-url col-6 col-md-4 col-xl-2">
            <button class="popup share-btn copied" data-clipboard-text="<?php echo get_permalink(); ?>" data-toggle="tooltip" data-placement="top"><i class="fas fa-paperclip"></i><span>Copy URL</span></button>
        </li>

    </ul>
</div>

<script type="text/javascript">
    function PopupCenter(url, title, w, h) {
        // Fixes dual-screen position Most browsers Firefox
        var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
        var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;

        width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
        height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

        var left = ((width / 2) - (w / 2)) + dualScreenLeft;
        var top = ((height / 2) - (h / 2)) + dualScreenTop;
        var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

        // Puts focus on the newWindow
        if (window.focus) {
            newWindow.focus();
        }
    }
</script>

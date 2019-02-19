<?php
/* WP URL SHORTCODES
[blogurl] will generate http://www.yoursite.com/
[blogurl wordpress] will generate the URL to the root of your WordPress files, if they are in a different location than your site root
[blogurl noslash] will generate http://www.yoursite.com
[blogurl uploads] will generate http://www.yoursite.com/wp-content/uploads/
[blogurl uploads noslash] will generate http://www.yoursite.com/wp-content/uploads
[posturl id=375] will generate the correct permalink for the post with an ID of 375; for example, <a href="[posturl id=375]">post about this plugin</a> would generate post about this plugin
[templateurl] will generate the URL to your parent theme's root
[childtemplateurl] will generate the URL to your child theme's root
*/

class _REBASE_Shortcodes
{
    function __construct() 
    {
        add_shortcode( 'blogurl', array( $this, 'blogurl' ) );
        add_shortcode( 'posturl', array( $this, 'posturl' ) );
        add_shortcode( 'templateurl', array( $this, 'templateurl' ) );
        add_shortcode( 'childtemplateurl', array( $this, 'childtemplateurl' ) );
    }

    public function userSettings()
    {
        /* -----------------------
        Start of settings
        ------------------------*/
        $blogurl_settings = array(); // Do not change this line
        // This is [blogurl] -- pointing to your site's root URL
        // This is different than [blogurl wordpress] if your WordPress files are not at the same level as your site root
        $blogurl_settings['home'] = get_option( 'home' );
        // This is the value if you enter [blogurl wordpress]: the root of your WordPress files
        $blogurl_settings['wordpress'] = get_option( 'siteurl' );
        // Set this to true if you are comfortable with [blogurl]wp-content/etc
        // Set this to false if you are more comfortable with [blogurl]/wp-content/etc
        $blogurl_settings['insertslash'] = true;
        // Template path used for [templateurl]
        $blogurl_settings['templateurl'] = get_bloginfo( 'template_directory' );
        // Template path used for [childtemplateurl]
        $blogurl_settings['childtemplateurl'] = get_bloginfo( 'stylesheet_directory' );
        /* -----------------------
        End of settings
        ------------------------*/
        return $blogurl_settings;
    }
    
    // [blogurl slash noslash uploads]
    public function blogurl( $attributes )
    {
        $blogurl_settings = $this->getSettings();
        if( is_array( $attributes ) )
        {
            $attributes = array_flip( $attributes );
        }
        
        if( isset( $attributes['wordpress'] ) )
        {
            $return_blogurl = $blogurl_settings['wordpress'];
        }
        elseif( isset( $attributes['uploads'] ) )
        {
            $return_blogurl = $blogurl_settings['uploads'];
        }
        else
        {
            $return_blogurl = $blogurl_settings['home'];
        }
        if( isset( $attributes['slash'] ) || ( $blogurl_settings['insertslash'] && !isset( $attributes['noslash'] ) ) )
        {
            $return_blogurl .= '/';
        }
        return $return_blogurl;
    }
    // [posturl id=3]
    // 3 being the ID of the post to link to
    public function posturl( $attributes )
    {
        $post_id = intval( $attributes['id'] );
        $return_posturl = get_permalink( $post_id );
        return $return_posturl;
    }
    // [templateurl slash noslash]
    public function templateurl( $attributes )
    {
        $blogurl_settings = $this->getSettings();
        $return_templateurl = $blogurl_settings['templateurl'];
        if( is_array( $attributes ) )
        {
            $attributes = array_flip( $attributes );
        }
        
        if( isset( $attributes['slash'] ) || ( $blogurl_settings['insertslash'] && !isset( $attributes['noslash'] ) ) )
        {
            $return_templateurl .= '/';
        }
        
        return $return_templateurl;
    }
   
    // [childtemplateurl slash noslash]
    public function childtemplateurl( $attributes )
    {
        $blogurl_settings = $this->getSettings();
        $return_templateurl = $blogurl_settings['childtemplateurl'];
        if( is_array( $attributes ) )
        {
            $attributes = array_flip( $attributes );
        }
        
        if( isset( $attributes['slash'] ) || ( $blogurl_settings['insertslash'] && !isset( $attributes['noslash'] ) ) )
        {
            $return_templateurl .= '/';
        }
        
        return $return_templateurl;
    }
    
    public function getSettings()
    {
        $blogurl_settings = $this->userSettings();
        $upload_dir = wp_upload_dir();
        
        if( !$upload_dir['error'] )
        {
            $blogurl_settings['uploads'] = $upload_dir['baseurl'];
        }
        elseif( '' != get_option( 'upload_url_path' ) )
        {
            // Prior to WordPress 3.5, this was set in Settings > Media > Full URL path to files
            // In WordPress 3.5+ this is now hidden
            $blogurl_settings['uploads'] = get_option( 'upload_url_path' );
        }
        else
        {
            $blogurl_settings['uploads'] = $blogurl_settings['wordpress'] . '/' . get_option( 'upload_path' );
        }
        // To define your own upload URL path (for [blogurl uploads], comment out the line below
        // $blogurl_settings['uploads'] = 'http://yoursite.com/wp-content/uploads';
        
        return $blogurl_settings;
    }
}

$shortcodes = new _REBASE_Shortcodes();

// run do_shortcode on all ACF values where the field is text or textarea so this code works in ACF fields
function my_acf_format_value( $value, $post_id, $field ) {
	$value = do_shortcode($value);
	return $value;
}
add_filter('acf/format_value/type=text', 'my_acf_format_value', 10, 3);
add_filter('acf/format_value/type=textarea', 'my_acf_format_value', 10, 3);
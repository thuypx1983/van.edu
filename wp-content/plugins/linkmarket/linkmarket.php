<?php
    /*
    Plugin Name: LinkMakert Affiliate Plugin
    Plugin URI: http://linkmarket.com/script/wp
    Description: Link Exchange Network.
    Version: 1.2
    Author: linkmarket
    Author URI: http://linkmarket.com
    License: A "linkplaza" license name e.g. GPL2 *
    */

    /*  Copyright 2010  esnc.net  (email : plugin@linkplaza.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    esnc.net
    */

    if ( ! defined( 'WP_CONTENT_URL' ) )
        define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
    if ( ! defined( 'WP_CONTENT_DIR' ) )
        define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
    if ( ! defined( 'WP_PLUGIN_URL' ) )
        define( 'WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins' );
    if ( ! defined( 'WP_PLUGIN_DIR' ) )
        define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
    if ( ! defined( 'LINKMARKET_NAME' ) )
        define( 'LINKMARKET_NAME', '56558aa49925061841b77b8774ea226e');

    add_action( 'widgets_init', 'load_LinkMarket_Widget' );

    function load_LinkMarket_Widget() {
        if ((defined('WP_ALLOW_MULTISITE') && WP_ALLOW_MULTISITE) || (function_exists('is_multisite') && is_multisite())) {
            if(function_exists('is_super_admin') && is_super_admin()) {
                add_action('admin_notices',  array('LinkMarket_Widget', 'multisiteWarning'));
            }
        }
        return register_widget( 'LinkMarket_Widget' );
    }

    class LinkMarket_Widget extends WP_Widget {
        var $linker;

        public function multisiteWarning () {
            echo "<div id='sm-multisite-warning' class='error fade'><p><strong>".
            __('LinkMarket plugin is not multisite compatible.','56558aa49925061841b77b8774ea226e')."</strong><br /> " .
            "</p></div>";
        }


        function LinkMarket_Widget() {
            $fName = WP_PLUGIN_DIR . '/linkmarket/lm_6040956ada.php';
            if (!is_readable($fName))
                $fName = dirname (__FILE__) . '/lm_6040956ada.php';

            require_once ($fName);

            /*
            * Pruner callback will be used to prune all cache from server when something changed.
            * Pruning is not enabled by default.
            *
            * We will prune cache when:
            *  - VoltrankDb::getEnableCachePrune returns true
            *  - VoltrankDb::getPruneCache returns true
            *
            * setPruneCache (true) is triggered when getEnablePruneCache returns true and
            *  - during successful incremental update
            *  - during successful command fullUpdate
            *
            * Full update is triggered once for 72 hours and we want to do it less often.
            * Incremental updates are triggered up to 2 hours depending on changes related to your website.
            *
            * We can do this actions manually but only for debugging purposes, that means we might refresh with intervals greater or equal to 2 hours.
            */

            $this->linker=new LinkMarket();

            /**
            * When running in test mode try to avoid being cached.
            * This value is respected by two most popular plugins.
            */
            /*if ($this->linker->__getTestMode ()) {
            define ('DONOTCACHEPAGE', true);
            }*/

            parent::WP_Widget(LINKMARKET_NAME, __('LinkMarket', 'linkmarket'));
        }


        function widget ($args, $instance) {
            extract ($args);

            echo $before_widget;
            echo $this->linker->display ();
            echo $after_widget;
        }


        function update( $new_instance, $old_instance ) {
            return $old_instance;
        }


        function form( $instance ) {
            if (($fp = @fopen (trailingslashit( dirname(__FILE__) ) . '/linker.err', 'r'))) {
            ?>
            Error log not empty. Few last lines looks like this:<br>
            <?php
                $cnt = 0;
                $lines = array ();
                while (($line = fgets ($fp))) {
                    $lines [$cnt++ % 10] = $line;
                }

                $limit = 10;
                while ($limit-- > 0 && ($line = @$lines[$cnt++ % 10]))
                    echo $line . '<br>';
                return;
            }

        ?>
        Everything works just fine.
        <?php

        }

    }

?>

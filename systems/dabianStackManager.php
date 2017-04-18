<?php
/**
 * To manage stack for Dabian os.
 *
 * @package StackManager
 * @subpackage DabianStackManager
 */

/**
 * Class dabianStackManager extend stackManager and extend stack manager functionality for Dabian OS.
 */

Class dabianStackManager extends stackManager
{

    /**
     * Single ton pattern instance reuse.
     *
     * @access  private
     *
     * @var dabianStackManager  $_instance class instance.
     */
    private static $_instance;

    /**
     * dabianStackManager Class instance.
     */
    public static function getInstance()
    {
        if ( ! isset( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Function to create update package work.
     */
    public function update(){}

    /**
     * Function to do dist-upgrade package work.
     */
    public function distUpgrade(){}

    /**
     * Function to override install package creation.
     */
    public function install($packages){}

    /**
     * Function to override remove package creation.
     */
    public function remove($packages, $purge = false){}

    /**
     * Function to override download package creation.
     */
    public function downloadOnly($packages, $repo_url = '', $repo_key = ''){}

    /**
     * Function to override installation check.
     */
    public function isInstalled($package){}

    /**
     * Function to create package upgrade check.
     */
    public function checkUpgrade(){}
}


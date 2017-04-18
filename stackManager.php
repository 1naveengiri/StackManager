<?php
/**
 * To manage slack as per Os and package information provided.
 *
 * @package StackManager
 */

/**
 * Class stackManager abstract class to define some standard architecture to extends.
 */
abstract class stackManager{

    // Force child class to create instance as per single tone pattern.
    abstract public static function getInstance();

    // Force child class to create update package work.
    abstract public function update();

    // Force child class to do dist-upgrade package work.
    abstract public function distUpgrade();

    // Force child class to override install package creation.
    abstract public function install($packages);

    // Force child class to override remove package creation.
    abstract public function remove($packages, $purge = false);

    // Force child class to override download package creation.
    abstract public function downloadOnly($packages, $repo_url = '', $repo_key = '');

    // Force child class to override installation check.
    abstract public function isInstalled($package);

    // Force child class to create package upgrade check.
    abstract public function checkUpgrade();

}

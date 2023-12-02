<?php

if (!function_exists('mk_get_logo_html')) {
    function mk_get_logo_html()
    {
        ob_start();
        ?>
        <span class="logo-text">Fine</span> <span class="logo-text">Policy</span>
        <?php
        return ob_get_clean();
    }
}

if (!function_exists('mk_get_site_address')) {
    function mk_get_site_address()
    {
        return "D-194, Saket New Delhi";
    }
}
if (!function_exists('mk_get_admin_mobile')) {
    function mk_get_admin_mobile()
    {
        return "+91-9999074393";
    }
}
if (!function_exists('mk_get_admin_mail')) {
    function mk_get_admin_mail()
    {
        return "Support@finepolicy.com";
    }
}

if (!function_exists('mk_get_site_url')) {
    /**
     * @return string
     * mk_get_site_url
     */
    function mk_get_site_url()
    {
        return "http://localhost/finepolicy.com/";

        // return "http://fitnesstipsguru.com/finepolicy.com/";
    }
}
if (!function_exists('mk_get_site_name')) {
    /**
     * @return string
     * mk_get_site_name
     * Get site name
     */
    function mk_get_site_name()
    {
        return "Fine Policy";
    }
}

if (!function_exists('mk_get_site_title')) {
    /**
     * @return string
     * mk_get_site_title
     * Get site title
     */
    function mk_get_site_title()
    {
        return mk_get_site_name(). " | When the praying does no good
insurance does help";
    }
}

if (!function_exists('mk_get_our_services')) {
    function mk_get_our_services()
    {
        $services = array();
        $services[] = array(
            'title' => "Health Insurance",
            'desc' => "Don't let unexpected medical bills drain your bank account! Protect yourself and your family with affordable health insurance. Get coverage for doctor visits, hospital stays, prescription medications, and more. Don't wait until it's too late, get peace of mind with health insurance today.",
            'icon' => 'flaticon-medical-insurance-3',
            'is_image_icon' => false
        );
        $services[] = array(
            'title' => "Motor Insurance",
            'desc' => "Accidents can happen to anyone, but the cost of repairs shouldn't be a burden. Keep your vehicle protected with motor insurance. From collisions to theft, get the coverage you need to get back on the road quickly. Don't take chances with your car, get peace of mind with motor insurance today.",
            'icon' => 'flaticon-car-insurance-3',
            'is_image_icon' => false
        );

        $services[] = array(
            'title' => "Fire Insurance",
            'desc' => "Don't let a fire destroy everything you've worked so hard for. Protect your property and belongings with fire insurance. From structural damage to personal possessions, get the coverage you need to start rebuilding after a fire. Don't wait until it's too late, get peace of mind with fire insurance today.",
            'icon' => mk_get_site_url() . 'assets/images/fire-insurance.png',
            'is_image_icon' => true
        );

        $services[] = array(
            'title' => "Term Insurance",
            'desc' => "Secure your family's future even when you're no longer there to provide for them. Term insurance offers a low-cost way to get the coverage you need for a specific time period. Protect your loved ones from financial hardship with a lump-sum payment in case of your untimely death. Don't wait until it's too late, get peace of mind with term insurance today.",
            'icon' => 'flaticon-student-hat',
            'is_image_icon' => false
        );


        $services[] = array(
            'title' => "Home & Property Insurance",
            'desc' => "Your home is your sanctuary, and your property is your investment. Protect them both with home and property insurance. From natural disasters to burglary, get the coverage you need to restore your home and belongings. Don't let unexpected events take away your peace of mind, get home and property insurance today.",
            'icon' => 'flaticon-home-insurance-4',
            'is_image_icon' => false
        );

        $services[] = array(
            'title' => "Life Insurance",
            'desc' => "Life is unpredictable, but your family's future doesn't have to be. Life insurance provides financial security for your loved ones in case of your unexpected death. From funeral costs to ongoing living expenses, get the coverage you need to take care of your family when you're no longer there. Don't wait until it's too late, get peace of mind with life insurance today.",
            'icon' => 'flaticon-insurance-2',
            'is_image_icon' => false
        );

        return $services;
    }
}
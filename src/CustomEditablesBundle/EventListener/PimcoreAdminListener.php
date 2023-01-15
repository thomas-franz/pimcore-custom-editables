<?php
//declare(strict_types=1);
////
/////**
//// * Pimcore
//// *
//// * This source file is available under two different licenses:
//// * - GNU General Public License version 3 (GPLv3)
//// * - Pimcore Enterprise License (PEL)
//// * Full copyright and license information is available in
//// * LICENSE.md which is distributed with this source code.
//// *
//// * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
//// * @license    http://www.pimcore.org/license     GPLv3 and PEL
//// */
////
//namespace CustomEditablesBundle\EventListener;
//
//use Pimcore\Event\BundleManager\PathsEvent;
//
//class PimcoreAdminListener
//{
//
//    public function addCSSFiles(PathsEvent $event): void
//    {
//        $event->setPaths(array_merge($event->getPaths(), [
//                '/bundles/customeditables/css/editmode.css',
//            ]
//        ));
//    }
//
//    public function addJSFiles(PathsEvent $event): void
//    {
//        $event->setPaths(array_merge($event->getPaths(), [
//                '/bundles/customeditables/js/pimcore/document/editables/color_picker.js',
//                '/bundles/customeditables/js/pimcore/document/editables/radio_group.js',
//                '/bundles/customeditables/js/pimcore/document/editables/custom_area_abstract.js',
//            ]
//        ));
//    }
//}

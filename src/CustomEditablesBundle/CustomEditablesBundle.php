<?php
declare(strict_types=1);

namespace CustomEditablesBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Pimcore\Extension\Bundle\Traits\PackageVersionTrait;
use Pimcore\Routing\RouteReferenceInterface;

class CustomEditablesBundle extends AbstractPimcoreBundle
{
//    use PackageVersionTrait;
//
    public const PACKAGE_NAME = ' serge0design/pimcore-custom-editables-bundle';

    public function getEditmodeJsPaths(): array
    {
        return [
//            '/bundles/customeditables/js/ckeditor-config.js',
            '/bundles/customeditables/js/pimcore/document/editables/color_picker.js',
            '/bundles/customeditables/js/pimcore/document/editables/simple_output.js',
            '/bundles/customeditables/js/pimcore/document/editables/radio_group.js',
            '/bundles/customeditables/js/pimcore/document/editables/custom_area_abstract.js',
        ];
    }

    /**
     * Get stylesheets to include in editmode
     *
     * @return string[]|RouteReferenceInterface[]
     */
    public function getCssPaths(): array
    {
        return [
            '/bundles/customeditables/css/admin.css',
        ];
    }

    /**
     * Get stylesheets to include in editmode
     *
     * @return string[]|RouteReferenceInterface[]
     */
    public function getEditmodeCssPaths(): array
    {
        return [
            '/bundles/customeditables/css/editmode.css',
        ];
    }


    protected function getComposerPackageName(): string
    {
        return self::PACKAGE_NAME;
    }

    public function getDescription()
    {
        return 'A simple collection of editables.';
    }

    public function getVersion()
    {
        return '1.0.0';
    }


}
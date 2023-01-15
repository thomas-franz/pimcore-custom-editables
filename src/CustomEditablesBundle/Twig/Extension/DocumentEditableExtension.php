<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace CustomEditablesBundle\Twig\Extension;

use Pimcore\Model\Document\Editable\BlockInterface;
use Pimcore\Model\Document\PageSnippet;
use Pimcore\Templating\Renderer\EditableRenderer;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * @internal
 */
class DocumentEditableExtension extends AbstractExtension
{
    /**
     * @var EditableRenderer
     */
    protected $editableRenderer;

    /**
     * @param EditableRenderer $editableRenderer
     */
    public function __construct(EditableRenderer $editableRenderer)
    {
        $this->editableRenderer = $editableRenderer;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('pimcore_*', [$this, 'renderEditable'], [
                'needs_context' => true,
                'is_safe' => ['html'],
            ]),
            new TwigFunction('pimcore_iterate_block', [$this, 'getBlockIterator']),

            // @phpstan-ignore-next-line those are just for auto-complete, not nice, but works ;-)

        ];

        new TwigFunction('pimcore_color_picker');
            new TwigFunction('pimcore_radio_group');
        new TwigFunction('pimcore_simple_output');
    }

    /**
     * @param array $context
     * @param string $type
     * @param string $name
     * @param array $options
     *
     * @return \Pimcore\Model\Document\Editable|string
     *
     * @throws \Exception
     * @internal
     *
     */
    public function renderEditable(array $context, string $type, string $name, array $options = [])
    {
        $document = $context['document'];
        $editmode = $context['editmode'];
        if (!($document instanceof PageSnippet)) {
            return '';
        }

        return $this->editableRenderer->render($document, $type, $name, $options, $editmode);
    }

    /**
     * Returns an iterator which can be used instead of while($block->loop())
     *
     * @param BlockInterface $block
     *
     * @return \Generator|int[]
     * @internal
     *
     */
    public function getBlockIterator(BlockInterface $block): \Generator
    {
        return $block->getIterator();
    }
}

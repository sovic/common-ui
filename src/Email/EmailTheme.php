<?php

namespace Sovic\CommonUi\Email;

class EmailTheme implements EmailThemeInterface
{
    protected function getPrimaryColor(): string
    {
        return '#d80000';
    }

    protected function getSecondaryColor(): string
    {
        return '#2ecc71';
    }

    public function getTheme(): array
    {
        $primaryColor = $this->getPrimaryColor();
        $secondaryColor = $this->getSecondaryColor();
        $fontFamily = "'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif";

        return [
            'primary_color' => $primaryColor,
            'secondary_color' => $secondaryColor,
            'font_family' => $fontFamily,
            'link_style' => 'box-sizing: border-box; color: ' . $primaryColor . '; text-decoration: underline;',
            'paragraph_style' => 'font-family: ' . $fontFamily . '; font-size: 1rem; font-weight: 400; line-height: 1.5; margin: 0 0 1.5rem; margin-bottom: 0;',
        ];
    }
}

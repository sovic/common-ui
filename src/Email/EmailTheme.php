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

        return [
            'primary_color' => $primaryColor,
            'secondary_color' => $secondaryColor,
            'font_family' => "'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif",
            'link_style' => 'box-sizing: border-box; color: ' . $primaryColor . '; text-decoration: underline;',
        ];
    }
}

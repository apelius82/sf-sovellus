// Update the following lines in PreviewRenderer.php

// Line 243
[$rootCard1, $rootCard2] = $this->splitBulletContentForHeight($rootText, $colWidth - 30, $contentFontSize, (int)$availableContentHeight);

// Line 244
[$actionsCard1, $actionsCard2] = $this->splitBulletContentForHeight($actionsText, $colWidth - 30, $contentFontSize, (int)$availableContentHeight);

// Line 324
[$rootCard1, $rootCard2] = $this->splitBulletContentForHeight($rootText, self::COLUMN_WIDTH - 30, $contentFontSize, (int)$card1AvailableHeight);

// Line 325
[$actionsCard1, $actionsCard2] = $this->splitBulletContentForHeight($actionsText, self::COLUMN_WIDTH - 30, $contentFontSize, (int)$card1AvailableHeight);

// Line 1040
[$rootCard1, $rootCard2] = $this->splitBulletContentForHeight($rootCauses, $contentWidth, $contentFontSize, (int)$availableHeight);

// Line 1041
[$actionsCard1, $actionsCard2] = $this->splitBulletContentForHeight($actions, $contentWidth, $contentFontSize, (int)$availableHeight);
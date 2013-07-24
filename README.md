# Color Palette&nbsp;

It finds the nearest base color of given color from the given base color list.

**Test image** :


![RoundColor Test img](http://i.imgur.com/ri52ekC.jpg)


**usage** :

<pre>
$color = "#f3f3dd";
$PKR = new PKRoundColor();
$baseColors = $PKR->getBaseColors();
$roundedColor = $PKR->getRoundedColor($color);
</pre>


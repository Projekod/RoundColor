# Round Color&nbsp;

It finds the nearest base color of given color from the given base color list.

**Test image** :


![RoundColor Test img](http://i.imgur.com/ri52ekC.jpg)

**Base Colors** :

<pre>
    "964b00"   //Brown
    "000000"   //Black
    "403d3f"   //smoked (Turkish : Füme )
    "808080"   //Gray
    "f5f5dc"   //Beige (Turkish : Bej )
    "ffffff"   //White
    "ffcbdb"   //Pink
    "ff00ff"   //Fuchsia (Turkish : Fuşya )
    "9370db"   //Purple
    "b03060"   //Claret Red (Turkish : Bize her yer trabzon! )
    "0000ff"   //Blue
    "40e0d0"   //Turquoise
    "00ff00"   //Green
    "ffff00"   //Yellow
    "ff7f00"   //Orange
    "ff0000"   //Red
</pre>


**usage** :

<pre>
$color = "#f3f3dd";

$PKR = new PKRoundColor();
$roundedColor = $PKR->getRoundedColor($color);
echo $roundedColor;
</pre>

**Return Value** :

<pre>
#f5f5dc
</pre>


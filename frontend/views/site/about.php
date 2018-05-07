<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
   function rgb2hsb($r, $g, $b)
   {    
    $r /= 255; $g /= 255; $b /= 255; // Scale to unity.   
    $minVal = min(array($r, $g, $b));
    $maxVal = max(array($r, $g, $b));
    
    $delta = $maxVal - $minVal;
    $hue=0; $sat=0; $bri=$maxVal;
    $del_R=0; $del_G=0; $del_B=0;

    if( $delta != 0 )
    {
        $sat = $delta / $maxVal;
        $del_R = ((($maxVal - $r) / 6) + ($delta / 2)) / $delta;
        $del_G = ((($maxVal - $g) / 6) + ($delta / 2)) / $delta;
        $del_B = ((($maxVal - $b) / 6) + ($delta / 2)) / $delta;

        if ($r == $maxVal) {$hue = $del_B - $del_G;}
        else if ($g == $maxVal) {$hue = (1 / 3) + $del_R - $del_B;}
        else if ($b == $maxVal) {$hue = (2 / 3) + $del_G - $del_R;}

        if ($hue < 0) {$hue += 1;}
        if ($hue > 1) {$hue -= 1;}
    }

    $hue *= 360;
    $sat *= 100;
    $bri *= 100;

    return [$hue,$sat,$bri];
   }
   function RGB_TO_HSV ($R, $G, $B)  // RGB Values:Number 0-255
{                                 // HSV Results:Number 0-1
   $HSL = array();

   $var_R = ($R / 255);
   $var_G = ($G / 255);
   $var_B = ($B / 255);

   $var_Min = min($var_R, $var_G, $var_B);
   $var_Max = max($var_R, $var_G, $var_B);
   $del_Max = $var_Max - $var_Min;

   $V = $var_Max;

   if ($del_Max == 0)
   {
      $H = 0;
      $S = 0;
   }
   else
   {
      $S = $del_Max / $var_Max;

      $del_R = ( ( ( $var_Max - $var_R ) / 6 ) + ( $del_Max / 2 ) ) / $del_Max;
      $del_G = ( ( ( $var_Max - $var_G ) / 6 ) + ( $del_Max / 2 ) ) / $del_Max;
      $del_B = ( ( ( $var_Max - $var_B ) / 6 ) + ( $del_Max / 2 ) ) / $del_Max;

      if      ($var_R == $var_Max) $H = $del_B - $del_G;
      else if ($var_G == $var_Max) $H = ( 1 / 3 ) + $del_R - $del_B;
      else if ($var_B == $var_Max) $H = ( 2 / 3 ) + $del_G - $del_R;

      if ($H<0) $H++;
      if ($H>1) $H--;
   }

   $HSL['H'] = round($H*360);
   $HSL['S'] = round($S*100);
   $HSL['V'] = 100-round($V*100);

   return $HSL;
}


    $myRed = 255;
    $myGreen = 0;
    $myBlue = 0;
$imgname = "sprite.png";
$im = imagecreatefrompng($imgname);
$bg = imagecolorat($im, 3, 3);
imagecolorset($im, $bg, 0, 0, 255);
//$bg = imagecolorat($im, 3, 40);
//imagecolorset($im, $bg, 0, 0, 255);

ob_start();
imagepng($im);
$image_data = ob_get_contents();
ob_end_clean();

$img = new Imagick($imgname);
$clut = new Imagick();
$clut->newImage(1, 1, '#00ff00');
$img->clutImage($clut);
?>

<div class="site-about">

<?= '<div width="100%" height="300px" style="border: 1px solid black; background: url(data:image/png;base64,'.base64_encode($img).') no-repeat" >'; ?>
sdfsdfsdfsdf
</div>


   
</div>

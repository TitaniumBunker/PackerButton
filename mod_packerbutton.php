<?php
/**
* @version 1.0 $
* @package PackerButton
* @copyright (C) 2010 Mike Hingley
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*/
 
/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
 
?>

<script>
function EvalSound(soundobj) 
{
    var thissound= document.getElementById(soundobj)

if (!thissound) {
thissound= document.getElementById(soundobj+'_embed')
}

thissound.play();
    //document.getElementById(soundobj).play();
//eval("document."+soundobj);
        //thissound.play();
}


// PRELOADING IMAGES
if (document.images) {
 btn1_down=new Image(); btn1_down.src="modules/mod_packerbutton/packerbutton_down.png"; 
 btn1_up  =new Image(); btn1_up.src  ="modules/mod_packerbutton/packerbutton.png"; 

}

// EVENT HANDLERS
function pressButton(btName) {
 if (document.images)
  eval('document.'+btName+'.src='+btName+'_down.src');
  EvalSound('sound1')
}

function releaseButton(btName) {
 if (document.images)
  eval('document.'+btName+'.src='+btName+'_up.src');
}
//-->
</script>



</script>


<p>
<audio src="modules/mod_packerbutton/packer.wav" autostart=false width=0 height=0 name="sound1" id="sound1" enablejavascript="true">
<embed src="modules/mod_packerbutton/packer.wav" autostart=false width=0 height=0 name="sound1_embed" id="sound1_embed" enablejavascript="true">
</audio>
</p>
<p>

<a style="border:0;text-decoration: none;color:FFFFFF;border:none;"

onMouseDown="pressButton('btn1');return true;" 
onMouseUp="releaseButton('btn1');return true;" 
onMouseOut="releaseButton('btn1');return true;" 
>

<img src="modules/mod_packerbutton/packerbutton.png" name="btn1" alt="packer button" style="border:0;" title="packer"  />

</a>



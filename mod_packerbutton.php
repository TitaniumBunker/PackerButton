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

<script type="text/javascript" src="<?php echo JURI::root() ?>modules/mod_packerbutton/script/soundmanager2.js"></script>
<script type="text/javascript">
soundManager.debugMode = false;
soundManager.url = '<?php echo JURI::root() ?>modules/mod_packerbutton/swf/';
soundManager.onready(function(oStatus) {

  if (!oStatus.success) {
    return false;	
  }
  // soundManager is initialised, ready to use. Create a sound for this demo page.

  if (soundManager.flashVersion > 8) {
    t = window.setInterval(checkRAM,500);
    document.getElementById('flash-ram-use').style.display = 'inline';
    checkRAM();
  }

  soundManager.createSound({
    id: 'aDrumSound',
    url: 'modules/mod_packerbutton/packer.mp3'
  });



});

</script>

<script>
function EvalSound(soundobj) 
{
	var aSoundObject = soundManager.createSound({id:'mySound2', url:'<?php echo JURI::root() ?>modules/mod_packerbutton/packer.mp3'});
	aSoundObject.play();

	//soundManager.createSound({id:'mySound1',url:'packer.wav'});
	//soundManager.play('mySound1');
	//aDrumSound.play();
}


// PRELOADING IMAGES
if (document.images) {
 btn1_down=new Image(); btn1_down.src="<?php echo JURI::root() ?>modules/mod_packerbutton/packerbutton_down.png"; 
 btn1_up  =new Image(); btn1_up.src  ="<?php echo JURI::root() ?>modules/mod_packerbutton/packerbutton.png"; 

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




<a style="border:0;text-decoration: none;color:FFFFFF;border:none;"

onMouseDown="pressButton('btn1');return true;" 
onMouseUp="releaseButton('btn1');return true;" 
onMouseOut="releaseButton('btn1');return true;" 
>

<img src="<?php echo JURI::root() ?>modules/mod_packerbutton/packerbutton.png" name="btn1" alt="packer button" style="border:0;" title="packer"  />




</a>






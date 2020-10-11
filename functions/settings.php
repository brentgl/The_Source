<div class="container" id="settings_section">
<div class="settings_center">

<form action="./functions/add_main.php" method="post" target="_blank">
<div class="section_label">General<input type="submit" name="submit" class="far fa-save" value="&#xf0c7" title="Save Changes" onclick='update_db();'></div>
<hr/>
<div class="settings_box">
<div class="set_label">Main URL <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">no http:// or https://</span></div></div><input type="text" class="set_fields" name="main" value="<?php include './functions/config.php';echo$main ?>">
<div class="set_label">Page Title</div><input type="text" class="set_fields" name="pagetitle" value="<?php include './functions/config.php';echo$pagetitle ?>">
<div class="set_label">City <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">All lowercase</span></div></div><input type="text" class="set_fields" name="city" value="<?php include './functions/config.php';echo$city ?>">
<div class="set_label">State <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">All lowercase. 2 Characters Max</span></div></div><input type="text" class="set_fields" name="state" value="<?php include './functions/config.php';echo$state ?>">
<div class="set_label">Zip Code <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Numbers Only</span></div></div><input type="text" class="set_fields" name="zip" value="<?php include './functions/config.php';echo$zip ?>">
<div class="set_label">Country Code <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">All lowercase. 2 Characters Max</span></div></div><input type="text" class="set_fields" name="cc" value="<?php include './functions/config.php';echo$cc ?>">
</form>
</div>
<br/>

<hr/>

<div class="settings_box">
<form action="./functions/add_feat_url.php" method="post" target="_blank">
<div class="section_label">Feature URLs<input type="submit" name="submit" class="far fa-save" value="&#xf0c7" title="Save Changes" onclick='update_db();'></div>
<hr/>
<div class="set_label">Spotify Playlist <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Add your Spotify playlist URL here</span></div></div><input type="text" class="set_fields long" name="spot" value="<?php include './functions/config.php';echo$spot ?>">
<br/>
<div class="set_label">PrivateBin URL <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Add your PrivateBin URL here</span></div></div><input type="text" class="set_fields long" name="privatebin" value="<?php include './functions/config.php';echo$privatebin ?>">
<br/>
<div class="set_label">Shellinabox URL <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Add Shellinabox URL here</span></div></div><input type="text" class="set_fields long" name="shellinabox" value="<?php include './functions/config.php';echo$shellinabox ?>">
<br/>
<div class="set_label">Google Calendar URL <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Add your Google Calendar Embed URL here</span></div></div><input type="text" class="set_fields long" name="google" value="<?php include './functions/config.php';echo$google ?>">
</div>
<br/>

<hr/>



<div class="settings_box">
<form action="./functions/add_media.php" method="post" id="media_form" target="_blank">
<div class="section_label">Messages<input type="submit" name="submit" class="far fa-save" value="&#xf0c7" title="Save Changes" onclick='update_db();'></div>
<hr/>
<div class="set_label">Morning 5am-10am</div>
<input type="text" class="set_fields long" form="media_form" name="morning" value="<?php include './functions/config.php';echo"$morning" ?>">
<div class="set_label">Day 10am-5pm</div>
<input type="text" class="set_fields long" form="media_form" name="day" value="<?php include './functions/config.php';echo"$day" ?>">
<div class="set_label">Dusk 5pm-10pm</div>
<input type="text" class="set_fields long" form="media_form" name="dusk" value="<?php include './functions/config.php';echo"$dusk"?>">
<div class="set_label">Evening 10pm-5am</div>
<input type="text" class="set_fields long" form="media_form" name="evening" value="<?php include './functions/config.php';echo"$evening" ?>">
<div class="set_label">Font Selection</div>
<select name="font" class="set_fields" class="set_fields" form="media_form">
              <option value='ComicNeue'>Comic Neue</option>
              <option value='OpenSans'>Open Sans</option>
              <option value='Quicksand' selected>Quicksand</option>
              <option value='Roboto'>Roboto</option>
              <option value='SourceSansPro'>Source Sans Pro</option>
            </select>
</form>
</div>
<br/>

<hr/>
<div class="section_label">Media <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">File Types - jpg, jpeg, png, or gif Only</span></div></div>
<hr/>
<div class="settings_box">
<div class="wall_box">
  <div class="wall_head">Morning Wallpaper <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Recommended Dimensions: ~1920x1080 or smaller</span></div><span class="current"><a title="View Current Wallpaper" href="./images/background-morning.png" target="_blank"><i class="fas fa-eye"></i>&nbsp; | &nbsp;<a title="Download Current Wallpaper" href="./images/background-morning.png" download><i class="fas fa-download"></i></a></span></div>
  <form action="./functions/upload_image_morn.php" method="post" id="uploadmorn" enctype="multipart/form-data" target="_blank">
      | &nbsp;<input type="submit" title="Upload Wallpaper" name="submit" class="fas fa-upload" value="&#xf093" >
      <input type="file" name="the_file" id="fileToUploadmorn" >
    &nbsp;
  &nbsp;</form></div>

<div class="wall_box">
  <div class="wall_head">Day Wallpaper <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Recommended Dimensions: ~1920x1080 or smaller</span></div><span class="current"><a title="View Current Wallpaper" href="./images/background-day.png" target="_blank"><i class="fas fa-eye"></i>&nbsp; | &nbsp;<a title="Download Current Wallpaper" href="./images/background-day.png" download><i class="fas fa-download"></i></a></span></div>
  <form action="./functions/upload_image_day.php" method="post" id="uploadday" enctype="multipart/form-data" target="_blank">
      | &nbsp;<input type="submit" title="Upload Wallpaper" name="submit" class="fas fa-upload" value="&#xf093" >
    <input type="file" name="the_file" id="fileToUploadday" >
    &nbsp;
  &nbsp;</form></div>

<div class="wall_box">
  <div class="wall_head">Dusk Wallpaper <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Recommended Dimensions: ~1920x1080 or smaller</span></div><span class="current"><a title="View Current Wallpaper" href="./images/background-dusk.png" target="_blank"><i class="fas fa-eye"></i>&nbsp; | &nbsp;<a title="Download Current Wallpaper" href="./images/background-dusk.png" download><i class="fas fa-download"></i></a></span></div>
  <form action="./functions/upload_image_dusk.php" method="post" id="uploaddusk" enctype="multipart/form-data" target="_blank">
      | &nbsp;<input type="submit" title="Upload Wallpaper" name="submit" class="fas fa-upload" value="&#xf093" >
    <input type="file" name="the_file" id="fileToUploaddusk" >
    &nbsp;
  &nbsp;</form></div>
<div class="wall_box">
  <div class="wall_head">Evening Wallpaper <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Recommended Dimensions: ~1920x1080 or smaller</span></div><span class="current"><a title="View Current Wallpaper" href="./images/background-night.png" target="_blank"><i class="fas fa-eye"></i>&nbsp; | &nbsp;<a title="Download Current Wallpaper" href="./images/background-night.png" download><i class="fas fa-download"></i></a></span></div>
  <form action="./functions/upload_image_evening.php" method="post" id="uploadevening" enctype="multipart/form-data" target="_blank">
      | &nbsp;<input type="submit" title="Upload Wallpaper" name="submit" class="fas fa-upload" value="&#xf093" >
    <input type="file" name="the_file" id="fileToUploadevening" >
    &nbsp;
  &nbsp;</form></div>
<div class="wall_box">
  <div class="wall_head">Mobile Wallpaper <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Recommended Dimensions: ~500x800</span></div><span class="current"><a title="View Current Wallpaper" href="./images/background-mobile.png" target="_blank"><i class="fas fa-eye"></i>&nbsp; | &nbsp;<a title="Download Current Wallpaper" href="./images/background-mobile.png" download><i class="fas fa-download"></i></a></span></div>
  <form action="./functions/upload_image_mobile.php" method="post" id="uploadmobile" enctype="multipart/form-data" target="_blank">
      | &nbsp;<input type="submit" title="Upload Wallpaper" name="submit" class="fas fa-upload" value="&#xf093" >
    <input type="file" name="the_file" id="fileToUploadmobile" >
    &nbsp;
  &nbsp;</form></div>
<div class="wall_box">
  <div class="wall_head">Logo <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Dimensions must be 40x40 or smaller</span></div><span class="current"><a title="View Current Wallpaper" href="./images/logo.png" target="_blank"><i class="fas fa-eye"></i>&nbsp; | &nbsp;<a title="Download Current Wallpaper" href="./images/logo.png" download><i class="fas fa-download"></i></a></span></div>
  <form action="./functions/upload_image_logo.php" method="post" id="uploadlogo" enctype="multipart/form-data" target="_blank">
      | &nbsp;<input type="submit" title="Upload Logo" name="submit" class="fas fa-upload" value="&#xf093" >
    <input type="file" name="the_file" id="fileToUploadlogo"  >
    &nbsp;
  &nbsp;</form>
</div>
<hr/>

<div class="section_label">Categories</div>
<hr/>
<div class="settings_box">
<?php
include './functions/categories.php';
?>
</div>

<hr/>

<div class="section_label">Features</div>
<hr/>
<div class="settings_box">
<?php
include './functions/features.php';
?>
</div>

 <hr/>

<div class="section_label">Search</div>
<hr/>
<div class="settings_box settings_height">
<?php
include './functions/search_features.php';
?>
 </div>
 </div>
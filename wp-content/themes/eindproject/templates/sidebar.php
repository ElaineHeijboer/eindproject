<?php if (is_page('buttons')) { ?>
    <script src="<?= get_template_directory_uri(); ?>/assets/scripts/colorpicker.js"></script>
    <div class="customizer">
        <h2>Customizer</h2>
        <hr>
        <div class="customizer__color">
            <label>Kies de achtergrond kleur</label>
            <div id="customizer-bgcolor" style="background-color: #60bec4;"></div>
            <input type="text" maxlength="6" size="6" id="customizer-bg" value="60bec4">
        </div>
        <div class="customizer__color">
            <label>Kies de tekst kleur</label>
            <div id="customizer-textcolor" style="color: #fff;"></div>
            <input type="text" maxlength="6" size="6" id="customizer-text" value="ffffff">

        </div>
        <div class="customizer__font">
            <label>Kies een font</label>
            <select id="customizer-font">
                <option id="" selected>Kies een font</option>
                <option id="Georgia">Georgia</option>
                <option id="Serif">Serif</option>
                <option id="Arial">Arial</option>
                <option id="Verdana">Verdana</option>
            </select>
        </div>
        <form id="uploadimage" action="" method="post" enctype="multipart/form-data" style="width:100%;">
            <div id="image_preview"><img id="previewing"
                                         src="<?= get_template_directory_uri(); ?>/assets/images/placeholder.png"
                                         width="100%" height="auto"/></div>
            <!-- To do add loading text-->
            <div id="loading" style="display:none;">loading...</div>
            <hr>
            <div id="selectImage">
                <label>Kies een button icoon</label><br/>
                <input type="file" name="file" id="file" required/>
            </div>
        </form>
        <div id="message"></div>
    </div>
<?php } ?>

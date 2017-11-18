<?php if (is_page('buttons')) { ?>


    <div class="text-columns">
        <h2>Customizer</h2>
        <select id="customizer-bgcolor">
            <option id="" selected>Kies een kleur</option>
            <option id="yellow">Yellow</option>
            <option id="red">Red</option>
            <option id="blue">Blue</option>
        </select>
        <select id="customizer-font">
            <option id="" selected>Kies een font</option>
            <option id="Georgia">Georgia</option>
            <option id="Serif">Serif</option>
            <option id="Arial">Arial</option>
            <option id="Verdana">Verdana</option>
        </select>
        <select id="customizer-textcolor">
            <option id="" selected>Kies een kleur</option>
            <option id="yellow">Yellow</option>
            <option id="red">Red</option>
            <option id="blue">Blue</option>
        </select>

        <form id="uploadimage" action="" method="post" enctype="multipart/form-data" style="width:100%;">
            <div id="image_preview"><img id="previewing" src="noimage.png" /></div>
            <hr id="line">
            <div id="selectImage">
                <label>Select Your Image</label><br/>
                <input type="file" name="file" id="file" required />
            </div>
        </form>
        <div id="message"></div>
    </div>
<?php } elseif (is_page('forms')) { ?>

<?php } ?>

<div class="row home">
    <div class="home__start-info">
        <div class="container">
           <div class="row">
               <div class="col-md-6 flex">
                   <h1>
                       Buzzyblocks
                   </h1>
                   <p>
                       Buzzyblocks is a user-friendly tool to help you with your front-end design. Pro or beginner,
                       everyone can profit from buzzyblocks. With the use of Buzzyblock you can work faster and it
                       helps with your productivity without losing the quality or functionality. It leaves room for
                       the more complicated back-end work. And ofcourse there is a lot of space for your own
                       creativity and uniqueness.
                   <div class="button-flat">
                       <a href="<?php echo home_url() . "/buttons"; ?>">Start here!</a>
                   </div>
               </div>
               <div class="col-md-6">
                   <img src="<?php echo bloginfo('template_directory') . '/assets/images/homeimage.png'; ?>">
               </div>
           </div>
       </div>

    </div>
    <div class="home__features">
        <div class="container">
        <div class="row">
            <div class="col-md-4 flex">
                <img src="<?php echo bloginfo('template_directory') . '/assets/images/homeicons-01.png'; ?>" height="75px">
                <h2>No installation</h2>
                <p>
                    You don't need to install or download a framework. No more extra code for things you don't use just copy and paste.
                </p>
            </div>
            <div class="col-md-4 flex">
                <img src="<?php echo bloginfo('template_directory') . '/assets/images/homeicons-04.png'; ?>" height="75px">
                <h2>Fast and Easy</h2>
                <p>
                    Just take what you need without extra code. You can copy the code and use it right for the site.
                </p>
            </div>
            <div class="col-md-4 flex">
                <img src="<?php echo bloginfo('template_directory') . '/assets/images/homeicons-09.png'; ?>" height="75px">
                <h2>SASS</h2>
                <p>
                    No need to go back to css with the SASS that is provided you can still stay up to date. No compiler or are you a beginner, their is also a tab for the css code.
                </p>
            </div>
        </div>
        </div>
    </div>
    <div class="home__overview">
        <div class="container">
            <h1>Basics</h1>
            <div class="row">
                <div class="col-md-4">
                    <a href="<?php echo home_url() . "/buttons"; ?>">
                    <div class="image-card shadow">
                        <div class="image-card__image" style="background-image: url(<?php echo bloginfo('template_directory') . '/assets/images/buttons-home.png'; ?>)">
                            <h2 class="image-card__title">Buttons</h2>
                        </div>
                        <p class="image-card__content">Choose your favorite button and customize it to your taste</p>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="<?php echo home_url() . "/forms"; ?>">
                    <div class="image-card shadow">
                        <div class="image-card__image" style="background-image: url(<?php echo bloginfo('template_directory') . '/assets/images/forms-home.png'; ?>)">
                            <h2 class="image-card__title">Forms</h2>
                        </div>
                        <p class="image-card__content">Choose your favorite button and customize it to your taste</p>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="<?php echo home_url() . "/cards"; ?>">
                    <div class="image-card shadow">
                        <div class="image-card__image" style="background-image: url(<?php echo bloginfo('template_directory') . '/assets/images/cards-home.png'; ?>)">
                            <h2 class="image-card__title">Cards</h2>
                        </div>
                        <p class="image-card__content">Choose your favorite button and customize it to your taste</p>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
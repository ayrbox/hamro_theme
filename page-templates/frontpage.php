<?php
/**
 * Template Name: Front Page
 * 
 * Inspired by OnePress frontpage structure
 */
get_header();
  $sections = array(  
  );
?>

<?php get_template_part('global-templates/hero', 'none'); ?>

<div class="wrapper-section" id="wrapper-index">
  <?php
  foreach($sections as $section) {
    get_template_part("section-templates/section", $section);
  }
  ?>  


  <div class="container">
    <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus qui, itaque velit cupiditate distinctio dolor eius iste magni ipsa sint, mollitia dolore et blanditiis, aspernatur voluptate aliquid tempore accusamus neque?
    </p>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Et porro quod cum sed magni minima, adipisci repellendus, distinctio eaque sunt iste culpa quasi sapiente dolore, modi nesciunt aperiam? Quasi, facere.
    </p>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Et porro quod cum sed magni minima, adipisci repellendus, distinctio eaque sunt iste culpa quasi sapiente dolore, modi nesciunt aperiam? Quasi, facere.
    </p>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Et porro quod cum sed magni minima, adipisci repellendus, distinctio eaque sunt iste culpa quasi sapiente dolore, modi nesciunt aperiam? Quasi, facere.
    </p>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Et porro quod cum sed magni minima, adipisci repellendus, distinctio eaque sunt iste culpa quasi sapiente dolore, modi nesciunt aperiam? Quasi, facere.
    </p><p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Et porro quod cum sed magni minima, adipisci repellendus, distinctio eaque sunt iste culpa quasi sapiente dolore, modi nesciunt aperiam? Quasi, facere.
    </p><p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Et porro quod cum sed magni minima, adipisci repellendus, distinctio eaque sunt iste culpa quasi sapiente dolore, modi nesciunt aperiam? Quasi, facere.
    </p><p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Et porro quod cum sed magni minima, adipisci repellendus, distinctio eaque sunt iste culpa quasi sapiente dolore, modi nesciunt aperiam? Quasi, facere.
    </p><p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Et porro quod cum sed magni minima, adipisci repellendus, distinctio eaque sunt iste culpa quasi sapiente dolore, modi nesciunt aperiam? Quasi, facere.
    </p><p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Et porro quod cum sed magni minima, adipisci repellendus, distinctio eaque sunt iste culpa quasi sapiente dolore, modi nesciunt aperiam? Quasi, facere.
    </p>
  </div>
  


  



</div>
 <?php get_footer(); ?>
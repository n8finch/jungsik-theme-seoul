/**
 * Custom Functionality for the Jungsik theme
 */

//Load jQuery in No-Conflict mode

(function ($) {

  $(document).ready(function () {

    //Cache variables
    var $staffBios = $('.staff-bios');
    var $staffNameLinks = $('.staff-name-links');

    var $choiceMenuItems = $('.choice-menu-items');
    var $tastingMenuItems = $('.tasting-menu-items');

    var $lunchChoiceMenuLink = $('#lunch-choice-menu-link');
    var $lunchTastingMenuLink = $('#lunch-tasting-menu-link');
    var $dinnerChoiceMenuLink = $('#dinner-choice-menu-link');
    var $dinnerTastingMenuLink = $('#dinner-tasting-menu-link');

    var $lunchChoiceMenuItems = $('#lunch-choice-menu-items');
    var $lunchChoiceMenuItemsGroup = $('#lunch-choice-menu-items-group');
    var $lunchTastingMenuItems = $('#lunch-tasting-menu-items');
    var $dinnerChoiceMenuItems = $('#dinner-choice-menu-items');
    var $dinnerChoiceMenuItemsGroup = $('#dinner-choice-menu-items-group');
    var $dinnerTastingMenuItems = $('#dinner-tasting-menu-items');

    var $barIntroLink = $('#bar-intro');
    var $barMenuLink = $('#bar-menu');
    var $barIntroduction = $('.bar-introduction-section');
    var $barMenuItems = $('#bar-menu-items');


    /**
     * Hide necessary elements on page load
     */
    //Hide Hello page elements
    $($staffBios).hide();

    //Hide Eat page elements
    $($lunchTastingMenuItems).hide();
    $($dinnerChoiceMenuItems).hide();
    $($dinnerChoiceMenuItemsGroup).hide();
    $($dinnerTastingMenuItems).hide();

    //Hide Bar Menu on Load
    $($barMenuItems).hide();

    /**
     * Click events to show page elements
     */

    //Hello Page show elements
    $($staffNameLinks).click(function (event) {
      event.preventDefault();
      var $bioToShow = $(this).attr('data-staff-pair');
      $bioToShow = '#' + $bioToShow;
      $($staffBios).slideUp();
      $($bioToShow).slideDown();
    });


    // Eat Page show elements
    $($lunchChoiceMenuLink).click(function () {
      event.preventDefault();
      $($choiceMenuItems).slideUp();
      $($tastingMenuItems).slideUp();
      $($lunchChoiceMenuItems).slideDown();
      $($lunchChoiceMenuItemsGroup).slideDown();
    });

    $($lunchTastingMenuLink).click(function () {
      event.preventDefault();
      $($choiceMenuItems).slideUp();
      $($tastingMenuItems).slideUp();
      $($lunchTastingMenuItems).slideDown();
    });

    $($dinnerChoiceMenuLink).click(function () {
      event.preventDefault();
      $($choiceMenuItems).slideUp();
      $($tastingMenuItems).slideUp();
      $($dinnerChoiceMenuItems).slideDown();
      $($dinnerChoiceMenuItemsGroup).slideDown();
    });

    $($dinnerTastingMenuLink).click(function () {
      event.preventDefault();
      $($choiceMenuItems).slideUp();
      $($tastingMenuItems).slideUp();
      $($dinnerTastingMenuItems).slideDown();
    });


    //Bar Page Elements
    $($barIntroLink).click(function () {
      event.preventDefault();
      $($barMenuItems).slideUp();
      $($barIntroduction).slideDown();
    });

    $($barMenuLink).click(function () {
      event.preventDefault();
      $($barIntroduction).slideUp();
      $($barMenuItems).slideDown();

    });

  });

})(jQuery);
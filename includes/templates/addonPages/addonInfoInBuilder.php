<div class="pricing-addon-from-settings">
    
<?php 
    // addons active status and availability
    $quiz_addon_active = is_plugin_active('pie-forms-for-wp-quiz/pie-forms-for-wp-quiz.php');
    $password_protection_addon_active = is_plugin_active('pie-forms-for-wp-protected/pie-forms-for-wp-protected.php');
?>

    <?php 
    if(!$quiz_addon_active){
    ?>
        <div class="pricing-addon-from-settings-addon">
            <div class="pricing-addon-from-settings-addon-title">Quiz/Survey addon available</div> 
            <div class="pricing-addon-from-settings-addon-link"><a target="_blank" href="https://pieforms.com/addons/quiz-addon/?utm_source=admindashboard&utm_medium=Addonspage&utm_campaign=freeuser">Learn more</a></div>
        </div>

    <?php 
    }
    if(!$password_protection_addon_active){
    ?>
        <div class="pricing-addon-from-settings-addon">
            <div class="pricing-addon-from-settings-addon-title">Password Protection addon available</div> 
            <div class="pricing-addon-from-settings-addon-link"><a target="_blank" href="https://pieforms.com/addons/multipage-forms-addon/?utm_source=admindashboard&utm_medium=Addonspage&utm_campaign=freeuser">Learn more</a></div>
        </div>
    <?php }?>
</div>
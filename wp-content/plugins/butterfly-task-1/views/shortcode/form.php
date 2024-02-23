<form method="post" class="butterfly-login-form">
    <?php do_action( 'butterfly_before_form' ); ?>
    <div class="form-group">
        <input type="text" name="username" placeholder="<?php echo apply_filters('butterfly_form_username_placeholder', __('Username', 'butterfly-task-1')); ?>" name="username" id="username">
        <input type="email" name="email" placeholder="<?php echo apply_filters('butterfly_form_email_placeholder', __('Email', 'butterfly-task-1')); ?>" id="email">
        <input type="number" name="age" placeholder="<?php echo apply_filters('butterfly_form_age_placeholder', __('Age', 'butterfly-task-1')); ?>" id="age">
        <?php
            if(is_admin()) {
                submit_button(__(apply_filters('form_submit_btn', __('Submit', 'butterfly-task-1')),'success'),'','submit', false);
            } else {
                echo '<button type="submit">'.apply_filters('form_submit_btn', __('Submit', 'butterfly-task-1')).'</button>';
            }
        ?>
    </div>
    <?php do_action( 'butterfly_after_form' ); ?>
</form>
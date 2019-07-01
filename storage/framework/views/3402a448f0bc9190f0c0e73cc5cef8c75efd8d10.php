<?php if(session()->get('flash_warning')): ?>
    <div class="alert-container">
        <div class="alert alert-warning">
            <div class="alert-icon pull-left"><i class="glyphicon glyphicon-warning-sign"></i></div>
            <div class="alert-description">
                <?php if(is_array(json_decode(session()->get('flash_warning'), true))): ?>
                    <?php echo implode('', session()->get('flash_warning')->all(':message<br/>')); ?>

                <?php else: ?>
                    <?php echo session()->get('flash_warning'); ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
<?php elseif(session()->get('flash_success')): ?>
<div class="alert-container common-success-message">
    <div class="alert alert-success">
        <div class="alert-icon pull-left"><i class="glyphicon glyphicon-ok-circle"></i></div>
        <div class="alert-description">
            <?php if(is_array(json_decode(session()->get('flash_success'), true))): ?>
                <?php echo implode('', session()->get('flash_success')->all(':message<br/>')); ?>

            <?php else: ?>
                <?php echo session()->get('flash_success'); ?>

            <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?><?php /**PATH /opt/lampp/htdocs/electric/resources/views/admin/layouts/flash-messages.blade.php ENDPATH**/ ?>
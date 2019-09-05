
<div class="radio">
   
        <?php if ($minimum_order_total >= $order_total) { ?>
            <input type="radio" name="payment" class="option-input radio" value="" <?php echo set_radio('payment', ''); ?> disabled />
            <span class="checkmark"></span>
        <?php } else if ($payment === $code) { ?>
            <input type="radio" name="payment" class="option-input radio" value="<?php echo $code; ?>" <?php echo set_radio('payment', $code, TRUE); ?> />
            <span class="checkmark"></span>
        <?php } else { ?>
            <input type="radio" name="payment" class="option-input radio" value="<?php echo $code; ?>" <?php echo set_radio('payment', $code); ?> />
            <span class="checkmark"></span>
        <?php } ?>
  
        <label> <?php echo $title; ?> </label>
    <?php if ($minimum_order_total >= $order_total) { ?>
        <br /><span class="text-info alert_payment"><?php echo sprintf(lang('alert_min_order_total'), currency_format($minimum_order_total)); ?></span>
    <?php } ?>
</div>

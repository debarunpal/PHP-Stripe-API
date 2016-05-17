<?php require_once('./config.php'); ?>

<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="Access for a year"
          data-amount="5000"
          data-name="Collateral Development"
          data-label="Buy your stuff"
          data-shipping-address="true"
          data-billing-address="true"
          data-locale="auto">
       
  </script>
</form>
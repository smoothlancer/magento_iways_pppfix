# magento_iways_pppfix
This magento 1 module provides a bugfix for Iways_PayPalPlus that causes IPN messages from Paypal Plus transactions to throw an exception

When Paypal sends IPN messages for transactions(e.g. refunds) referencing orders 
payed with Paypal Plus the following exception is thrown:

'Exception' with message 'Method "iways_paypalplus_payment" is not available in 
app/code/core/Mage/Paypal/Model/Ipn.php:187

This module just adds the payment method "iways_paypalplus_payment" to the standard
Paypal module.

Tested with Magento 1.8.1 and Iways_PayPalPlus 1.6.1.

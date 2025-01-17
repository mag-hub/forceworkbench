<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// THIS FILE IS INTENDED FOR ADVANCED ADMINS ONLY TO OVERRIDE THE ARRAYS OR COMPONENT OF ARRAYS IN
// THE defaults.php FILE WITH CUSTOMIZATIONS TO APPLY TO ALL YOUR WORKBENCH USERS.
//
// THIS IS NOT TO BE CONFUSED WITH THE overrideable BOOLEAN FLAG WITHIN THE CONFIGURATIONS TO ALLOW
// END USERS TO CUSTOMIZE IN SETTINGS. SEE defaults.php FOR DETAILS.
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// EXAMPLE: $config["fuzzyServerUrlLookup"]["default"] = false;


// OAUTH 2.0 SETTINGS
// Uncomment and populate with keys and secrets to enable OAuth.
// Note, Production and Sandbox can have the same key and secret, but it is not required
// If connecting to other Salesforce environments, add a new entry to the array:
//
$config["oauthConfigs"]["default"] = array(
                                           "login.salesforce.com" => array(
                                               "label" => "Production",
                                               "key" => "3MVG9n_HvETGhr3CXBQGTD9H_8C0VBdpuKfbt6RzZy884SitxyLFs_hKHqmtAoakwvRFTIrSC2OYBsg68FgJP",
                                               "secret" => "5501A2FC48CE32DD0C03900406AFCCDD624FBC37BB1A3FED95410CC8B6928244"
                                           ),
                                           "test.salesforce.com" => array(
                                               "label" => "Sandbox",
                                               "key" => "3MVG9n_HvETGhr3CXBQGTD9H_8C0VBdpuKfbt6RzZy884SitxyLFs_hKHqmtAoakwvRFTIrSC2OYBsg68FgJP",
                                               "secret" => "5501A2FC48CE32DD0C03900406AFCCDD624FBC37BB1A3FED95410CC8B6928244"
                                           )
                                       );


// CSRF SECURITY SETTINGS
// Uncomment and change the value below to a random, secret value:
//
// $config["csrfSecret"]["default"] = "CHANGE_ME";

/* SODIUM ENCRYPTION KEY AND NONCE SETTINGS
It is recommended that you change the values below to custom strings.
    -The sodiumKey must be 64 characters long
    -The nonce must be 24 characters long
 */
$config["sodiumKey"]["default"] = "T8TAoGtlCWOwWrFFRjTThFDn9+iGsGGjhvALbWkSONN4KyDNbI2VNZmm+sCiM5X7";
$config["nonce"]["default"] = "aojzmL4AKy1s5T5JnQ1yn+2U";

// ORG ID ALLOWLIST / BLOCKLIST
// To only allow access to a set of orgs or block access to particular orgs,
// uncomment and add the orgs to the respective lists below as comma-separated values:
//
// $config["orgIdAllowList"]["default"] = "00D000000000001, 00D000000000002";
// $config["orgIdBlockList"]["default"] = "00D000000000003";

?>
<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	if ($_REQUEST['Body'] == 'money' || $_REQUEST['Body'] == 'Money') {
		$message = "Thanks for the message. You have no money left on this account.";
	} else {
		$message = "Incorrect message. Please send money or Money to this number.";
	}
?>
<Response>
    <Message><?php echo $message ?></Message>
</Response>
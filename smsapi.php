
	<?php 
	
	function smsapi($mobile_number,$message)
	{
		try{
			$soapClient = new SoapClient("https://api2.onnorokomSMS.com/sendSMS.asmx?wsdl");
			$paramArray = array(
				'userName'        => "01737266685",
				'userPassword'    => "One1!Two2@",
				'messageText'     => $message,
				'numberList'      => $mobile_number,
				'smsType'         => "TEXT",
				'maskName'        => '',
				'campaignName'    => '',);
			$value = $soapClient->__call("OneToMany", array($paramArray));
			$result = $value->OneToManyResult;
			return $result;
		} 
		catch (Exception $e) {
			echo $e->getMessage();
		}

	}

	?>
